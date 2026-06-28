<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '布雷格曼的鬧鐘每小時問你「是不是在做最該做的事」，唯獨那件最該做的它從沒問過：用痛點之尺重讀《關鍵18分鐘》｜痛點 P.A.I.N.',
  'desc'  => '《關鍵18分鐘》的布雷格曼把分心的解藥濃縮成每天十八分鐘：早上排行事曆、每小時讓鬧鈴問你「此刻是不是在做最該做的事」、晚上覆盤。用痛點之尺重讀：這台儀器只會盡責地守住你一早寫下的清單，卻檢查不了清單本身對不對；你那個點子最該做的「讓陌生人掏錢、驗一定有人要」，從沒被排進清單，於是每小時的嗶聲，一次也沒抓到它。',
  'path'  => '/lens/18-minutes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《關鍵18分鐘》',
  'heading'   => '布雷格曼給你一台每個整點都會叫你一聲的儀器，逼你回答「此刻手上這件，是不是我最該做的事」；你那個點子守著它運轉了兩年，每一聲都答得出「是」——只因為最該做的那一件，走出門讓一個陌生人掏錢、驗一句「一定有人要」，你從沒把它排進一早親手寫下的那張清單',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/18-minutes.html',
  'book'      => ['name' => '關鍵18分鐘（18 Minutes: Find Your Focus, Master Distraction, and Get the Right Things Done）', 'author' => 'Peter Bregman 彼得・布雷格曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '最該驗的那一步，天天被你排在行事曆之外？',
    'body'    => '布雷格曼那台儀器，只會盡責地守著你一早排進去的事；唯獨「外面到底有沒有人要」那一格，你從沒填過。趁點子還只是個念頭，找個跟你非親非故的人，讓他看著你的東西和標價，當場決定付不付錢。',
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
    ['name' => '關鍵18分鐘',  'path' => '/lens/18-minutes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
