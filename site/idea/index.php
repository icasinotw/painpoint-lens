<?php
require __DIR__ . '/../_init.php';
$articles = require __DIR__ . '/_articles.php';   // 單一真相來源;卡片由此自動長
$total = count($articles);

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

  <p class="lens-count">共 <?= $total ?> 篇經典觀念</p>

  <div class="read-list">
    <?php foreach ($articles as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/idea/<?= e($a['slug']) ?>">
      <div class="ri-top">
        <span class="ri-kicker"><?= e($a['kicker']) ?></span>
        <span class="lens-cat-badge"><?= e($cat) ?></span>
      </div>
      <h3><?= e($a['title']) ?></h3>
      <p><?= e($a['blurb']) ?></p>
    </a>
    <?php endforeach; ?>
  </div>

  <div class="btn-row" style="justify-content:center;margin-top:40px">
    <a class="btn btn-primary" href="/lens">去看拆書</a>
    <a class="btn btn-ghost" href="/guide">看創業指南</a>
  </div>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
