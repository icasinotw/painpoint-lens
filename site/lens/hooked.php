<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '鉤子能鉤住人，靠的是一個早就在發作的癢：用痛點之尺重讀《鉤癮效應》｜痛點 P.A.I.N.',
  'desc'  => '《鉤癮效應》把「習慣怎麼長出來」拆成觸發、行動、變動的酬賞、投入四步。但這台鉤癮機器蓋在第一步那個內部觸發上——一個真實、會反覆發作的癢。用痛點的眼光重讀：先驗那個癢是真的、而且常常犯，後面三步的工程才有地基。',
  'path'  => '/lens/hooked',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《鉤癮效應》',
  'heading'   => '鉤子能鉤住人，靠的是一個早就在發作的癢',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/hooked.html',
  'book'      => ['name' => '鉤癮效應：創造習慣新商機', 'author' => 'Nir Eyal 尼爾・艾歐、Ryan Hoover 萊恩・胡佛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，要搔的癢是真的嗎？',
    'body'    => '《鉤癮效應》教你把鉤子打磨到發亮；《痛點》這把尺，幫你先驗那個癢真不真、常不常犯。現在就免費體檢一個點子，五分鐘量出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '鉤癮效應',  'path' => '/lens/hooked'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
