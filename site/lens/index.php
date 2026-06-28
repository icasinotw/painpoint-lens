<?php
require __DIR__ . '/../_init.php';
$articles = require __DIR__ . '/_articles.php';   // 單一真相來源;卡片由此自動長

// 分類頁籤:每篇依「主分類」(category 取／前半)歸一類,次分類忽略
$catCounts = [];
foreach ($articles as $a) {
  $c = pain_primary_cat($a['category']);
  $catCounts[$c] = ($catCounts[$c] ?? 0) + 1;
}
arsort($catCounts);                 // 文章多的分類排前面(PHP 8 穩定排序)
$cats = array_keys($catCounts);
$total = count($articles);

// 依主題瀏覽:只列「已達標、有主題頁」的分類(與 /lens/c 主題頁、sitemap 同一道閘門:
// 滿 PAIN_LENS_CAT_MIN 篇 + 有手寫 intro)。滿篇數會自動長出一張主題卡,不必動這支檔;篇數多的排前面。
$hubCats = pain_lens_eligible_cats($articles);
uasort($hubCats, fn($a, $b) => $b['count'] <=> $a['count']);

$page = [
  'title' => '痛點之尺：用 P.A.I.N. 拆解商業書｜痛點 P.A.I.N.',
  'desc'  => '把《痛點》的 P.A.I.N. 四問當成手術刀，一本一本拆解經典商業書：這本書在解誰的痛、痛多深、方法真能把痛變輕嗎、數字成不成立。讀別人的書，練自己判斷點子的眼力。',
  'path'  => '/lens',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',   'path' => '/'],
      ['name' => '痛點之尺', 'path' => '/lens'],
    ]),
    pain_lens_itemlist($cfg, $articles),
  ],
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main class="wrap section">
  <div class="section-head">
    <p class="eyebrow">痛點之尺</p>
    <h1 class="h-display">用一把尺，拆開一本商業書</h1>
    <p class="muted">把 P.A.I.N. 四問當成手術刀，一本一本拆給你看：這本書在解誰的痛、痛多深、方法真能把痛變輕嗎、數字成不成立。讀別人的書，練自己判斷點子的眼力。</p>
  </div>

  <?php if ($hubCats): ?>
  <section class="lens-hub" aria-label="依主題瀏覽拆書">
    <p class="eyebrow lens-hub-eyebrow">依主題深入讀</p>
    <div class="lens-hub-grid">
      <?php foreach ($hubCats as $name => $h): ?>
      <a class="lens-hub-card" href="/lens/c/<?= e($h['slug']) ?>">
        <span class="lens-hub-cat"><?= e($name) ?></span>
        <span class="lens-hub-title"><?= e($h['title']) ?></span>
        <span class="lens-hub-meta"><?= (int)$h['count'] ?> 篇拆書<span class="lens-hub-arrow" aria-hidden="true">→</span></span>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>

  <div class="lens-tabs" role="tablist" aria-label="依分類篩選拆書文章">
    <button type="button" class="lens-tab is-active" data-cat="all" aria-pressed="true">全部<span class="lens-tab-n"><?= $total ?></span></button>
    <div class="lens-cats">
      <?php foreach ($cats as $c): $cc = pain_lens_cat_config($c, $articles); ?>
        <?php if ($cc): /* 有獨立主題頁:真連結(漸進增強——爬蟲/無 JS 走到 /lens/c/{slug},有 JS 則攔截做即時篩選) */ ?>
      <a class="lens-tab" href="/lens/c/<?= e($cc['slug']) ?>" data-cat="<?= e($c) ?>" aria-pressed="false"><?= e($c) ?><span class="lens-tab-n"><?= $catCounts[$c] ?></span></a>
        <?php else: ?>
      <button type="button" class="lens-tab" data-cat="<?= e($c) ?>" aria-pressed="false"><?= e($c) ?><span class="lens-tab-n"><?= $catCounts[$c] ?></span></button>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
  <p class="lens-count" id="lensCount" aria-live="polite">共 <?= $total ?> 篇拆書</p>

  <?php /* 折疊用的純 CSS 開關:放在清單前面,:checked 才能用 ~ 選到後面的清單與按鈕。無 JS 也能展開。 */ ?>
  <input type="checkbox" id="lensMore" class="lens-more-cb">
  <div class="read-list lens-grid is-collapsed" id="lensList">
    <?php foreach ($articles as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/lens/<?= e($a['slug']) ?>" data-category="<?= e($cat) ?>">
      <div class="ri-top">
        <span class="ri-kicker"><?= e($a['kicker']) ?></span>
        <span class="lens-cat-badge"><?= e($cat) ?></span>
      </div>
      <h3><?= e($a['title']) ?></h3>
      <p><?= e($a['blurb']) ?></p>
    </a>
    <?php endforeach; ?>
  </div>

  <div class="lens-more-row" id="lensMoreRow">
    <label for="lensMore" class="lens-more-btn">顯示全部 <?= $total ?> 篇<span class="lens-more-ico" aria-hidden="true">▾</span></label>
  </div>

  <p class="lens-empty" hidden>這個分類還沒有文章。</p>

  <div class="btn-row" style="justify-content:center;margin-top:40px">
    <a class="btn btn-primary" href="/tool">先免費體檢一個自己的點子</a>
    <a class="btn btn-ghost" href="/read">免費試讀《痛點》</a>
  </div>
</main>
<script>
(function(){
  var list    = document.getElementById('lensList');
  var tabs    = document.querySelectorAll('.lens-tab');
  var items   = document.querySelectorAll('#lensList .read-item');
  var countEl = document.getElementById('lensCount');
  var moreRow = document.getElementById('lensMoreRow');
  var moreCb  = document.getElementById('lensMore');
  function apply(cat){
    if (cat === 'all'){
      // 全部:交還給 CSS 折疊(前 24 張),清掉篩選、重置「顯示全部」鈕。
      if (list) list.classList.add('is-collapsed');
      items.forEach(function(it){ it.hidden = false; });
      if (moreCb)  moreCb.checked = false;
      if (moreRow) moreRow.hidden = false;
      if (countEl) countEl.textContent = '共 ' + items.length + ' 篇拆書';
    } else {
      // 分類:關掉折疊改由 JS 篩選(分類數量少,整批攤開、不需折疊鈕)。
      if (list) list.classList.remove('is-collapsed');
      var shown = 0;
      items.forEach(function(it){
        var on = it.getAttribute('data-category') === cat;
        it.hidden = !on;
        if (on) shown++;
      });
      if (moreCb)  moreCb.checked = false;
      if (moreRow) moreRow.hidden = true;
      if (countEl) countEl.textContent = '「' + cat + '」' + shown + ' 篇 · 共 ' + items.length + ' 篇';
    }
    tabs.forEach(function(t){
      var active = t.getAttribute('data-cat') === cat;
      t.classList.toggle('is-active', active);
      t.setAttribute('aria-pressed', active ? 'true' : 'false');
    });
  }
  tabs.forEach(function(t){
    t.addEventListener('click', function(e){
      if (t.tagName === 'A') e.preventDefault();  // 有 JS:即時篩選;無 JS / 爬蟲 / 中鍵開新分頁 → 照常連到 /lens/c/{slug}
      apply(t.getAttribute('data-cat'));
    });
  });
})();
</script>
<?php require __DIR__ . '/../partials/footer.php'; ?>
