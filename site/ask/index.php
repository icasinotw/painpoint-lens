<?php
require __DIR__ . '/../_init.php';
$articles = require __DIR__ . '/_articles.php';   // 單一真相來源;卡片由此自動長
$total = count($articles);

$page = [
  'title' => '痛點之尺・拆問題:動手以前，先把這個判斷想清楚｜痛點 P.A.I.N.',
  'desc'  => '不拆書，拆你正卡著的那個處境。把腦中那個「該不該做」的問題，放到《痛點》的 P.A.I.N. 之尺上量一遍:沒人做的市場是藍海還是墳場、訪談怎麼避開假需求、有人付了訂金算不算驗證。少而精,每篇都帶你做一次動手前的判斷。',
  'path'  => '/ask',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',   'path' => '/'],
      ['name' => '拆問題',  'path' => '/ask'],
    ]),
    pain_ask_itemlist($cfg, $articles),
  ],
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main class="wrap section">
  <div class="section-head">
    <p class="eyebrow">痛點之尺・拆問題</p>
    <h1 class="h-display">動手以前，先把這個判斷想清楚</h1>
    <p class="muted">這裡不拆書，拆的是你正卡著的那個處境。把腦中那個「該不該做」的問題，放到 P.A.I.N. 之尺上量一遍——誰在痛、痛多深、那個痛養不養得活一個解法。少而精，一篇接著一篇，幫你練動手前那一刀的判斷。</p>
  </div>

  <p class="lens-count">共 <?= $total ?> 篇拆問題</p>

  <div class="read-list">
    <?php foreach ($articles as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/ask/<?= e($a['slug']) ?>">
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
