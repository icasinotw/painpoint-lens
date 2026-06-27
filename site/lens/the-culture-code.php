<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '蓋一座棉花糖塔，幼稚園小孩贏了一整桌 MBA：用痛點之尺重讀《高效團隊默默在做的三件事》｜痛點 P.A.I.N.',
  'desc'  => '《高效團隊默默在做的三件事》開頭，一群幼稚園小孩用義大利麵和棉花糖，蓋贏了一整桌 MBA。用痛點的眼光重讀：高材生輸在只蓋一座、最後一刻才知道會垮；而你正把這場十八分鐘的比賽拉成兩年，替一個還沒人驗過的點子，蓋一座不准垮的塔。',
  'path'  => '/lens/the-culture-code',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高效團隊默默在做的三件事》',
  'heading'   => '蓋一座棉花糖塔，幼稚園小孩贏了一整桌 MBA',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-culture-code.html',
  'book'      => ['name' => '高效團隊默默在做的三件事(The Culture Code)', 'author' => 'Daniel Coyle 丹尼爾・科伊爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那座塔，你打算第幾天才肯讓它垮？',
    'body'    => '《高效團隊默默在做的三件事》教你把失敗變便宜，讓真話早點浮出來；同一台機器，也能用在你一個人的點子上——讓它在第七天垮，別等到第七百天。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '高效團隊默默在做的三件事', 'path' => '/lens/the-culture-code'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
