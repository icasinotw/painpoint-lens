<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '專注模式、發散模式換著照，都照不到「一定有人要」那一格；用痛點之尺重讀《大腦喜歡這樣學》｜痛點 P.A.I.N.',
  'desc'  => '歐克莉《大腦喜歡這樣學》最有名的一手，是把大腦解難題分成專注與發散兩種模式，卡關時鬆手讓發散模式接上。用痛點之尺重讀：你那個點子想了兩年，兩種模式換著照，照不到的始終是同一格——它要的答案根本不長在你腦袋裡，住在一個你還沒見過、肯不肯掏錢的陌生人那一邊。',
  'path'  => '/lens/a-mind-for-numbers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大腦喜歡這樣學》',
  'heading'   => '兩種模式換著照，照不到的始終是同一格',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/a-mind-for-numbers.html',
  'book'      => ['name' => '大腦喜歡這樣學（A Mind for Numbers）', 'author' => 'Barbara Oakley 芭芭拉・歐克莉'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，兩種模式換著想了兩年，還沒打到腦袋外面過？',
    'body'    => '別再多想一個版本了。趁它還只是個念頭，連同一個真實的價格，擺到一個沒理由給你面子的陌生人面前，看他肯不肯當場掏錢——這一格的答案，你關在自己腦袋裡再聰明也兜不出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '大腦喜歡這樣學',  'path' => '/lens/a-mind-for-numbers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
