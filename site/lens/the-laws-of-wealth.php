<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你跟你的基金之間，差了一個你：用痛點之尺拆《行為投資金律》｜痛點 P.A.I.N.',
  'desc'  => '基金是賺的，買它的人卻常常沒全賺到，中間漏掉的那一截就是「行為差距」。用痛點的眼光重讀《行為投資金律》——克羅斯比把那截差距換算成你算得出來的代價，再要你把及格線從大盤換回自己的人生。',
  'path'  => '/lens/the-laws-of-wealth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《行為投資金律》',
  'heading'   => '你跟你的基金之間，差了一個你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-laws-of-wealth.html',
  'book'      => ['name' => '行為投資金律（The Laws of Wealth）', 'author' => 'Daniel Crosby 丹尼爾・克羅斯比'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看清楚自己怎麼把報酬做掉之後，下一個讓你心動的點子先別急著押',
    'body'    => '克羅斯比幫你把「管不住自己」換算成算得出來的代價；輪到你自己那個躍躍欲試的點子時，先攤開來照一照——它底下到底有沒有真東西撐著，還是只是又一個編得太順的故事。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '行為投資金律',   'path' => '/lens/the-laws-of-wealth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
