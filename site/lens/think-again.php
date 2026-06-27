<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把你那個點子，從「信仰」改回「假設」：用痛點之尺拆《逆思維》｜痛點 P.A.I.N.',
  'desc'  => '創業者最常見的死法不是不夠拚，是抱著一個錯點子越陷越深。《逆思維》教的「像科學家一樣思考」，正是痛點要你對自己的點子做的事——把它從不准被碰的信仰，改回一個拿證據去測、測錯就改的假設。',
  'path'  => '/lens/think-again',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《逆思維》',
  'heading'   => '把你那個點子，從「信仰」改回「假設」',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/think-again.html',
  'book'      => ['name' => '逆思維（Think Again）', 'author' => 'Adam Grant 亞當・格蘭特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你繼續往那個點子裡倒錢之前，先驗它',
    'body'    => '《逆思維》讓你願意承認自己可能押錯了寶；《痛點》這把尺，幫你把那個「可能」變成證據——在你繼續往一個點子裡倒時間和錢之前，先驗它到底有沒有人要。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '逆思維',      'path' => '/lens/think-again'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
