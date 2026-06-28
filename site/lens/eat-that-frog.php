<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '崔西要你天一亮先吃青蛙，但你那個點子天天先吞的是好嚥的小事：用痛點之尺重讀《時間管理，先吃了那隻青蛙》｜痛點 P.A.I.N.',
  'desc'  => '《時間管理，先吃了那隻青蛙》的崔西要你天一亮先吃掉最大最醜的那隻青蛙——最重要、最想逃的那一件。用痛點之尺重讀：你那個點子忙了兩年，天天先吞的都是好嚥的小事，那隻真正決定生死的青蛙——外面到底有沒有人肯付錢——你天天看見、天天挪到明天，一口沒咬過。',
  'path'  => '/lens/eat-that-frog',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《時間管理，先吃了那隻青蛙》',
  'heading'   => '那隻決定生死的青蛙，你天天挪到明天',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/eat-that-frog.html',
  'book'      => ['name' => '時間管理，先吃了那隻青蛙（Eat That Frog!）', 'author' => 'Brian Tracy 布萊恩・崔西'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，最重要的一步「明天再做」，一拖兩年了？',
    'body'    => '別再讓一籃好嚥的小事偷走你的早上。趁它還只是個念頭，連同一個你真會開口收的價格，擺到一個沒理由給你面子的陌生人面前，看他今天掏不掏錢——你拖了兩年的那隻青蛙，吞下去才知道牠是真是假。',
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
    ['name' => '時間管理，先吃了那隻青蛙',  'path' => '/lens/eat-that-frog'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
