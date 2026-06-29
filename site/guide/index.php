<?php
require __DIR__ . '/../_init.php';
$articles = require __DIR__ . '/_articles.php';   // 單一真相來源;卡片由此自動長
$total = count($articles);

$page = [
  'title' => '創業指南:動手前最該想清楚的幾個問題｜痛點 P.A.I.N.',
  'desc'  => '用《痛點》的 P.A.I.N. 之尺,把「如何驗證創業點子」這類最常被搜尋、卻最容易做錯的問題,一篇一篇講清楚——並帶你接到對應的工具、拆書與實作清單。少而精,每篇都是可照著走的判斷流程。',
  'path'  => '/guide',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',     'path' => '/'],
      ['name' => '創業指南',  'path' => '/guide'],
    ]),
    ['@type' => 'ItemList', 'name' => '痛點之尺・創業指南', 'itemListElement' => array_map(
      function ($a, $i) use ($cfg) {
        return ['@type' => 'ListItem', 'position' => $i + 1, 'url' => pain_base($cfg) . '/guide/' . $a['slug'], 'name' => $a['title']];
      }, $articles, array_keys($articles)
    )],
  ],
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main class="wrap section">
  <div class="section-head">
    <p class="eyebrow">痛點之尺・創業指南</p>
    <h1 class="h-display">動手前,最該想清楚的幾個問題</h1>
    <p class="muted">這裡把創業路上最常被搜尋、卻最容易做錯的問題,一題一題講清楚——用同一把 P.A.I.N. 之尺,給你可以照著走的判斷流程,再帶你接到對應的工具、拆書與實作清單。少而精,不灌水。</p>
  </div>

  <p class="lens-count">共 <?= $total ?> 篇創業指南</p>

  <div class="read-list">
    <?php foreach ($articles as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/guide/<?= e($a['slug']) ?>">
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
    <a class="btn btn-primary" href="/tool">先免費體檢一個自己的點子</a>
    <a class="btn btn-ghost" href="/lens">去看拆書</a>
  </div>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
