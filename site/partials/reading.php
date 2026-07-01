<?php
/* 長文(試讀 / 拆書)共用外框。頁面要先設好:
   $reading = ['kicker'=>..., 'content'=>絕對路徑, 'prev'=>['url','label']|null, 'next'=>...|null]
   選填(不設就維持原本「免費試讀」行為,既有試讀頁不受影響):
   $reading['back']   = ['url'=>..,'label'=>..]            // 工具列返回連結
   $reading['root']   = ['name'=>..,'path'=>..]            // 麵包屑中間那層
   $reading['funnel'] = ['title','body','primary'=>['url','label'],'ghost'=>['url','label']] // 文末導流框 */
$prev = $reading['prev'] ?? null;
$next = $reading['next'] ?? null;
$crumbParts = array_map('trim', explode('·', $reading['kicker'] ?? ''));
$crumbLeaf  = end($crumbParts);
$back   = $reading['back'] ?? ['url' => '/read', 'label' => '← 全部試讀'];
$root   = $reading['root'] ?? ['name' => '免費試讀', 'path' => '/read'];
$funnel = $reading['funnel'] ?? [
  'title'   => '這是免費試讀的一段',
  'body'    => '完整《痛點》——全書三部、共二十八章，從第一個賠錢的夜晚，一路走到第一筆錢；還附判斷卡、濾鏡卡、動手卡三張隨身卡與點子體檢表。',
  'primary' => ['url' => '/book', 'label' => '看《痛點》電子書'],
  'ghost'   => ['url' => '/tool', 'label' => '先免費體檢一個點子'],
];

/* 相關拆書(只在 /lens 文章顯示):同主分類優先、不足再補最新,最多 4 篇。
   資料全來自 _articles.php,所以新增任何一篇,既有文章的「相關拆書」會自動長出連到它的內鏈
   —— 補上文章↔文章這條過去缺的內部連結腿(topical 關聯訊號),零逐篇手工。 */
$isLens = !empty($page['path']) && strpos($page['path'], '/lens/') === 0;
$related = [];
if ($isLens) {
  $curSlug = basename($page['path']);
  $allLens = require __DIR__ . '/../lens/_articles.php';
  $curCat  = null;
  foreach ($allLens as $a) {
    if ($a['slug'] === $curSlug) { $curCat = pain_primary_cat($a['category']); break; }
  }
  if ($curCat !== null) {
    foreach ($allLens as $a) {                       // 第一輪:同主分類
      if ($a['slug'] === $curSlug) continue;
      if (pain_primary_cat($a['category']) === $curCat) $related[] = $a;
    }
    if (count($related) < 3) {                        // 不足 3 篇:用最新的其他文章補滿
      foreach ($allLens as $a) {
        if ($a['slug'] === $curSlug || pain_primary_cat($a['category']) === $curCat) continue;
        $related[] = $a;
        if (count($related) >= 4) break;
      }
    }
    $related = array_slice($related, 0, 4);
  }
}
/* YMYL:主分類=理財 的拆書,文末補一句誠實邊界(讀書觀點非投資建議)——Google 對 YMYL(財務)套更高 Trust。
   由分類自動驅動,零逐篇手工:理財類新增任何一篇都自動帶這句、非理財篇一律不帶。 */
$isYmyl = $isLens && (($curCat ?? null) === '理財');
/* 這篇所屬主分類若已有獨立主題頁(/lens/c/{slug}),在署名下方放一條上行內鏈
   —— 文章→分類頁這條腿撐 topical authority;由分類是否「可發佈」自動決定,零逐篇手工。 */
$catHub = null;
if ($isLens && !empty($curCat)) {
  $cc = pain_lens_cat_config($curCat, $allLens);
  if ($cc) $catHub = ['slug' => $cc['slug'], 'name' => $curCat];
}

/* ---- /lens 文末「停留優先」頁尾引擎 ----
   設計目標(山姆 2026-06-27):頁尾以「多讀一篇拆書」為主角、不把每頁變賣書/推工具頁。
   ① 復活線性 prev/next:133 篇 .php 都把 prev/next 設成 null,這裡用 _articles.php 全站順序自動接回。
   ② 中段模組依 slug 雜湊(crc32)輪換 → 每頁長得不一樣、但同一篇永遠一致(對 SEO/CDN/爬蟲友善),零逐篇手工。
   ③ email 捕捉改成「內容對齊的訂閱拆書電子報」(每頁,輕量、不煩);工具只在『手上有點子要驗』那幾類書偶爾出。 */
$footVar = 'news'; $navPrev = $navNext = null; $shelfPicks = []; $catCount = 0; $seed = 0;
if ($isLens) {
  $seed = crc32($curSlug) & 0x7fffffff;
  $idx = null;
  foreach ($allLens as $i => $a) { if ($a['slug'] === $curSlug) { $idx = $i; break; } }
  $navPrev = ($idx !== null && $idx > 0) ? $allLens[$idx - 1] : null;                       // 新一篇
  $navNext = ($idx !== null && $idx < count($allLens) - 1) ? $allLens[$idx + 1] : null;      // 舊一篇
  // 中段輪換槽:創業/行銷/創新/策略類、每 PAIN_FOOTER_TOOL_EVERY 篇命中一次 → 'act'(工具鈕);
  // 其餘篇 → 'deeper'(偶爾導同主題頁)或 'shelf'(跨主題書架),其餘一律 'news'(訂閱電子報)。
  $ACT_CATS = ['創業', '行銷', '創新', '策略'];
  if (in_array($curCat, $ACT_CATS, true) && PAIN_FOOTER_TOOL_EVERY > 0 && ($seed % PAIN_FOOTER_TOOL_EVERY === 0)) {
    $footVar = 'act';
  }
  // 探索內鏈(deeper/shelf)是「中段那一行」,與 news/act 的 box 並存:有主題頁就偶爾導頁、否則跨主題書架。
  if ($catHub && (($seed >> 2) % 2 === 0)) {
    $exploreVar = 'deeper';
    $catCount = pain_lens_cat_counts($allLens)[$curCat] ?? 0;
  } else {
    $exploreVar = 'shelf';
    $cross = [];
    foreach ($allLens as $a) {
      if ($a['slug'] === $curSlug) continue;
      if (pain_primary_cat($a['category']) !== $curCat) $cross[] = $a;
    }
    if ($cross) {
      $o = ($seed >> 3) % count($cross);
      $shelfPicks[] = $cross[$o];
      if (count($cross) > 1) $shelfPicks[] = $cross[($o + 1) % count($cross)];
    } else { $exploreVar = null; }
  }
}
?>
<div class="read-progress" id="readProgress"></div>
<div class="reading-page">

  <div class="reading-toolbar">
    <div class="wrap-read rt-inner">
      <a class="rt-back" href="<?= e($back['url']) ?>"><?= e($back['label']) ?></a>
      <div class="rt-controls">
        <button class="rt-btn" id="fsDown" aria-label="縮小字體">A－</button>
        <span class="rt-size" id="fsLabel">標準</span>
        <button class="rt-btn" id="fsUp" aria-label="放大字體">A＋</button>
        <button class="rt-btn" id="themeToggle" aria-label="深色模式">☾</button>
      </div>
    </div>
  </div>

  <article class="reading wrap-read">
    <nav class="reading-crumb" aria-label="麵包屑">
      <a href="/">首頁</a><span aria-hidden="true">›</span><a href="<?= e($root['path']) ?>"><?= e($root['name']) ?></a><span aria-hidden="true">›</span><span class="rc-here"><?= e($crumbLeaf) ?></span>
    </nav>
    <p class="reading-kicker"><?= e($reading['kicker']) ?></p>
    <p class="reading-byline">
      <img src="/assets/img/author.jpg?v=1" alt="作者 <?= e($cfg['author']) ?>" width="30" height="30" loading="lazy" decoding="async" style="display:inline-block;width:30px;height:30px;border-radius:50%;object-fit:cover;border:1.5px solid var(--gold);vertical-align:middle;margin-right:9px">
      作者 <a href="/about"><?= e($cfg['author']) ?>・<?= e($cfg['author_role']) ?></a>
      <?php if (!empty($reading['updated'])): ?><span class="rb-updated"><span class="rb-sep" aria-hidden="true">·</span>最後更新 <time datetime="<?= e($reading['updated']) ?>"><?= e($reading['updated']) ?></time></span><?php endif; ?>
    </p>
    <?php if ($isLens && $catHub): ?>
    <p class="reading-cat">分類：<a href="/lens/c/<?= e($catHub['slug']) ?>"><?= e($catHub['name']) ?></a></p>
    <?php endif; ?>
    <?php if ($isLens): /* 這篇怎麼拆:署名/方法透明框(撐 Person schema 的作者權威;不寫 AI 揭露) */ ?>
    <p class="reading-method">讀過近千本商業書，這篇不複述內容——只用《痛點》的 P.A.I.N. 之尺，挑這本書最該被戳的那一格，講一句你帶得走的判斷。</p>
    <?php endif; ?>
    <?php readfile($reading['content']); ?>
    <?php if ($isYmyl): ?>
    <p class="reading-ymyl">這是一篇讀書拆解與個人觀點，不是投資建議。作者是書評人、不是理財顧問；文中提到的數字以原書為準，投資有風險、過去績效不代表未來，請自行查證、量力而為。</p>
    <?php endif; ?>

    <div class="reading-end">
    <?php if ($isLens): /* 「停留優先」頁尾:接著讀 grid → 探索一行 → 訂閱/偶爾工具 → 書況註腳 → 上下篇 */ ?>

      <?php if ($related): ?>
      <section class="reading-related" aria-label="接著讀">
        <h2 class="rr-title">接著讀 · 同一格痛,這幾本書是怎麼栽的</h2>
        <div class="read-list">
          <?php foreach ($related as $a): $rcat = pain_primary_cat($a['category']); ?>
          <a class="read-item" href="/lens/<?= e($a['slug']) ?>">
            <div class="ri-top">
              <span class="ri-kicker"><?= e($a['kicker']) ?></span>
              <span class="lens-cat-badge"><?= e($rcat) ?></span>
            </div>
            <h3><?= e($a['title']) ?></h3>
            <p><?= e($a['blurb']) ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
      <?php endif; ?>

      <?php if (($exploreVar ?? null) === 'deeper' && $catHub): ?>
      <p class="lens-explore"><a href="/lens/c/<?= e($catHub['slug']) ?>">「<?= e($curCat) ?>」這一格,還有 <?= max(1, $catCount - 1) ?> 本排隊被戳 →</a></p>
      <?php elseif (($exploreVar ?? null) === 'shelf' && $shelfPicks): ?>
      <div class="lens-explore lens-shelf">
        <p class="le-lead">換個主題?同一個山姆,還拆過——</p>
        <?php foreach ($shelfPicks as $a): ?><a class="le-item" href="/lens/<?= e($a['slug']) ?>">《<?= e($a['title']) ?>》</a><?php endforeach; ?>
      </div>
      <?php endif; ?>

      <?php if ($footVar === 'act'): /* 偶爾:工具(沿用該頁 funnel 文案首句,不再提電子書) */
        $actBody = rtrim(explode('。', (string)($funnel['body'] ?? ''))[0], '；;，, '); ?>
      <section class="lens-act" aria-label="點子體檢工具">
        <h2 class="la-h"><?= e($funnel['title'] ?? '手上正好有個點子?') ?></h2>
        <?php if ($actBody !== ''): ?><p class="la-sub"><?= e($actBody) ?>。</p><?php endif; ?>
        <a class="btn btn-primary" href="/tool">免費體檢我的點子</a>
      </section>
      <?php else: /* 多數頁:訂閱拆書電子報(內容對齊、輕量的 email 捕捉) */ ?>
      <section class="lens-news" aria-label="訂閱拆書電子報">
        <h2 class="ln-h">喜歡這篇拆書嗎?</h2>
        <p class="ln-sub">每週幫你拆二本好書,把判斷力、好書金句、好問題,直送你的信箱。</p>
        <form id="lensNews" class="ln-form" novalidate>
          <label class="sr-only" for="lensNewsEmail">你的 email</label>
          <input type="text" name="website" class="ln-hp" tabindex="-1" autocomplete="off" aria-hidden="true">
          <input type="email" id="lensNewsEmail" required placeholder="輸入你的 Email …" autocomplete="email" inputmode="email">
          <button type="submit" class="btn btn-primary">免費訂閱</button>
        </form>
        <p class="ln-fine" id="lensNewsMsg">不適合你可隨時退訂 · 每週兩封,陪你把書讀進生活。</p>
      </section>
      <?php endif; ?>

      <p class="reading-source">這套尺出自《痛點》電子書 · <a href="/book">看電子書 →</a></p>

      <nav class="read-nav">
        <?php if ($navPrev): ?><a class="prev" href="/lens/<?= e($navPrev['slug']) ?>"><span class="rn-dir">← 上一篇</span><?= e($navPrev['title']) ?></a><?php else: ?><span class="spacer"></span><?php endif; ?>
        <?php if ($navNext): ?><a class="next" href="/lens/<?= e($navNext['slug']) ?>"><span class="rn-dir">下一篇 →</span><?= e($navNext['title']) ?></a><?php else: ?><span class="spacer"></span><?php endif; ?>
      </nav>

    <?php else: /* 非 /lens(試讀頁):維持原本 funnel 大框 + 原 prev/next,一行都不動 */ ?>
      <div class="read-funnel">
        <h3><?= e($funnel['title']) ?></h3>
        <p><?= e($funnel['body']) ?></p>
        <div class="btn-row" style="justify-content:center">
          <a class="btn btn-primary" href="<?= e($funnel['primary']['url']) ?>"><?= e($funnel['primary']['label']) ?></a>
          <?php if (!empty($funnel['ghost'])): ?><a class="btn btn-ghost" href="<?= e($funnel['ghost']['url']) ?>"><?= e($funnel['ghost']['label']) ?></a><?php endif; ?>
        </div>
      </div>
      <nav class="read-nav">
        <?php if ($prev): ?><a class="prev" href="<?= e($prev['url']) ?>"><span class="rn-dir">← 上一篇</span><?= e($prev['label']) ?></a><?php else: ?><span class="spacer"></span><?php endif; ?>
        <?php if ($next): ?><a class="next" href="<?= e($next['url']) ?>"><span class="rn-dir">下一篇 →</span><?= e($next['label']) ?></a><?php else: ?><span class="spacer"></span><?php endif; ?>
      </nav>
    <?php endif; ?>
    </div>
  </article>

</div>
<script>
/* /lens 文末「訂閱拆書電子報」:沿用站上 email 捕捉慣例(POST /api/subscribe + 蜜罐 + painUnlocked) */
(function(){
  var f = document.getElementById('lensNews'); if (!f) return;
  var UNLOCK = 'painUnlocked';
  function stored(){ try { return localStorage.getItem(UNLOCK) || ''; } catch(e){ return ''; } }
  var pre = stored(); if (pre) { var i = document.getElementById('lensNewsEmail'); if (i) i.value = pre; }
  f.addEventListener('submit', function(e){
    e.preventDefault();
    var email = (document.getElementById('lensNewsEmail').value || '').trim();
    var hp = (f.querySelector('.ln-hp') || {}).value || '';
    var msg = document.getElementById('lensNewsMsg');
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) { msg.textContent = 'email 看起來怪怪的,再確認一下?'; return; }
    var btn = f.querySelector('button'); if (btn) { btn.disabled = true; btn.textContent = '送出中…'; }
    fetch('/api/subscribe', { method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({ email: email, website: hp, source: 'lens-newsletter' }) })
      .then(function(r){ return r.json().catch(function(){ return { ok: r.ok }; }); })
      .then(function(){
        try { localStorage.setItem(UNLOCK, email); } catch(e){}
        f.style.display = 'none';
        msg.textContent = '訂閱成功 ✓ 下一篇好書,信箱見。';
        msg.className = 'ln-fine ln-done';
      })
      .catch(function(){ if (btn) { btn.disabled = false; btn.textContent = '免費訂閱'; } msg.textContent = '送出失敗,稍後再試一次?'; });
  });
})();
</script>
<script src="/assets/js/reading.js?v=1" defer></script>
