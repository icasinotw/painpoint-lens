<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒有不擔風險的高報酬，你那句「一定有人要」就是穩賺的幻覺｜痛點 P.A.I.N.',
  'desc'  => '《投資金律》作者伯恩斯坦立下四根支柱，第一根就釘死：沒有不擔風險的高報酬。用痛點之尺重讀：你那句「一定有人要」正是穩賺的幻覺——沒人要的風險沒有消失，只是被你藏到了不會去看的地方；挖出來標價的唯一辦法，是讓一個陌生人決定掏不掏錢。',
  'path'  => '/lens/the-four-pillars-of-investing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《投資金律》',
  'heading'   => '聞起來穩賺不賠的，風險都被你藏起來了',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-four-pillars-of-investing.html',
  'book'      => ['name' => '投資金律（The Four Pillars of Investing）', 'author' => 'William Bernstein 威廉・伯恩斯坦'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個你篤定「一定有人要」、卻還沒人付錢的點子？',
    'body'    => '伯恩斯坦要你動手前先把藏起來的風險標個價；這個點子也值得你照同一條鐵律驗一次——先去碰那塊「有沒有人肯掏錢」的風險，別等砸下兩年才讓它來碰你。',
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
    ['name' => '投資金律',      'path' => '/lens/the-four-pillars-of-investing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
