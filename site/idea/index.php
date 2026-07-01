<?php
require __DIR__ . '/../_init.php';
$articles = require __DIR__ . '/_articles.php';   // 單一真相來源;卡片由此自動長
$total = count($articles);

// 分類頁籤:每篇依「主分類」(category 取／前半)歸一類,次分類忽略。
// 為什麼用分類而不是人名:作者幾乎一人一篇(20 幾位作者),照人名排會變成一人一個頁籤、
// 沒有分組作用;照分類排才能把讀者關心的主題(策略/領導/管理…)聚成好找的幾格。
$catCounts = [];
foreach ($articles as $a) {
  $c = pain_primary_cat($a['category']);
  $catCounts[$c] = ($catCounts[$c] ?? 0) + 1;
}
// 固定頁籤順序:與 /lens 同一套痛點重要性遞減邏輯,沒列到的排最後、彼此依篇數。
$PAIN_CAT_ORDER = ['創業','創新','行銷','敘事','策略','領導','管理','行為','生產力','理財','其他'];
$catRank = array_flip($PAIN_CAT_ORDER);
$cats = array_keys($catCounts);
usort($cats, function ($x, $y) use ($catRank, $catCounts) {
  $rx = $catRank[$x] ?? PHP_INT_MAX;
  $ry = $catRank[$y] ?? PHP_INT_MAX;
  if ($rx !== $ry) return $rx <=> $ry;                     // 固定痛點順序
  return ($catCounts[$y] ?? 0) <=> ($catCounts[$x] ?? 0);  // 未列到的才用篇數兜底
});

$page = [
  'title' => '經典觀念:把艱深的管理好文,讀成人話｜痛點 P.A.I.N.',
  'desc'  => '《哈佛商業評論》那些常被引用、卻艱深難啃的經典好文,這裡用最白話的方式幫你抓住核心觀念——一定寫明是哪位作者、哪篇文章,只教觀念、不照搬原文、文末指路原文。讀完你更讀得懂,也更想找原文來讀。',
  'path'  => '/idea',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',     'path' => '/'],
      ['name' => '經典觀念',  'path' => '/idea'],
    ]),
    ['@type' => 'ItemList', 'name' => '痛點之尺・經典觀念', 'itemListElement' => array_map(
      function ($a, $i) use ($cfg) {
        return ['@type' => 'ListItem', 'position' => $i + 1, 'url' => pain_base($cfg) . '/idea/' . $a['slug'], 'name' => $a['title']];
      }, $articles, array_keys($articles)
    )],
  ],
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main class="wrap section">
  <div class="section-head">
    <p class="eyebrow">痛點之尺・經典觀念</p>
    <h1 class="h-display">把艱深的管理經典,讀成人話</h1>
    <p class="muted">《哈佛商業評論》那些常被引用、卻艱深難啃的經典好文,這裡用最白話的方式,幫你三分鐘抓住核心觀念——每篇都寫明是哪位作者、哪篇文章,只教觀念、不照搬原文,讀完更想找原文來慢慢讀。少而精,不灌水。</p>
  </div>

  <div class="lens-tabs" role="tablist" aria-label="依分類篩選經典觀念">
    <button type="button" class="lens-tab is-active" data-cat="all" aria-pressed="true">全部<span class="lens-tab-n"><?= $total ?></span></button>
    <div class="lens-cats">
      <?php foreach ($cats as $c): ?>
      <button type="button" class="lens-tab" data-cat="<?= e($c) ?>" aria-pressed="false"><?= e($c) ?><span class="lens-tab-n"><?= $catCounts[$c] ?></span></button>
      <?php endforeach; ?>
    </div>
  </div>
  <p class="lens-count" id="ideaCount" aria-live="polite">共 <?= $total ?> 篇經典觀念</p>

  <div class="read-list" id="ideaList">
    <?php foreach ($articles as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/idea/<?= e($a['slug']) ?>" data-category="<?= e($cat) ?>">
      <div class="ri-top">
        <span class="ri-kicker"><?= e($a['kicker']) ?></span>
        <span class="lens-cat-badge"><?= e($cat) ?></span>
      </div>
      <h3><?= e($a['title']) ?></h3>
      <p><?= e($a['blurb']) ?></p>
    </a>
    <?php endforeach; ?>
  </div>

  <p class="lens-empty" hidden>這個分類還沒有文章。</p>

  <div class="btn-row" style="justify-content:center;margin-top:40px">
    <a class="btn btn-primary" href="/lens">去看拆書</a>
    <a class="btn btn-ghost" href="/guide">看創業指南</a>
  </div>
</main>
<script>
(function(){
  var tabs    = document.querySelectorAll('.lens-tab');
  var items   = document.querySelectorAll('#ideaList .read-item');
  var countEl = document.getElementById('ideaCount');
  var emptyEl = document.querySelector('.lens-empty');
  function apply(cat){
    var shown = 0;
    items.forEach(function(it){
      var on = (cat === 'all') || it.getAttribute('data-category') === cat;
      it.hidden = !on;
      if (on) shown++;
    });
    if (countEl) countEl.textContent = (cat === 'all')
      ? '共 ' + items.length + ' 篇經典觀念'
      : '「' + cat + '」' + shown + ' 篇 · 共 ' + items.length + ' 篇';
    if (emptyEl) emptyEl.hidden = shown > 0;
    tabs.forEach(function(t){
      var active = t.getAttribute('data-cat') === cat;
      t.classList.toggle('is-active', active);
      t.setAttribute('aria-pressed', active ? 'true' : 'false');
    });
  }
  tabs.forEach(function(t){
    t.addEventListener('click', function(){ apply(t.getAttribute('data-cat')); });
  });
})();
</script>
<?php require __DIR__ . '/../partials/footer.php'; ?>
