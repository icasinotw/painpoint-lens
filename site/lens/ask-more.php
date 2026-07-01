<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '賽斯諾給你十種問題，驗點子的人偏偏抽錯那一把：用痛點之尺重讀《精準提問的力量》｜痛點 P.A.I.N.',
  'desc'  => '《精準提問的力量》把「怎麼問」拆成十來種問題：診斷、同理、搭橋、對峙……用痛點的眼光重讀：驗一個點子該不該做，只認其中最不起眼的「診斷型」；多數人卻一開口就問「你會買嗎」，那是一句早替對方寫好答案的問題。',
  'path'  => '/lens/ask-more',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精準提問的力量》',
  'heading'   => '賽斯諾給你十種問題，驗點子的人偏偏抽錯那一把',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/ask-more.html',
  'book'      => ['name' => '精準提問的力量（Ask More）', 'author' => 'Frank Sesno 法蘭克・賽斯諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '問對一個人之後，你還缺一整片市場的答案',
    'body'    => '《精準提問的力量》教你把一個人問到見骨；痛點這把尺，逼你補上他背後那一格——外面到底還有沒有第十個一樣在痛的人。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
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
    ['name' => '精準提問的力量', 'path' => '/lens/ask-more'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
