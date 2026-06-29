<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '錢和時間一緊，你會聰明地漏掉最該驗的那一題：用痛點之尺重讀《匱乏經濟學》｜痛點 P.A.I.N.',
  'desc'  => '《匱乏經濟學》說，缺錢、缺時間缺得夠凶，匱乏會擄獲你整顆腦袋，把視野收窄成一條隧道。用痛點之尺重讀：對埋頭趕工的創業者，最先被隧道推進黑暗的，往往就是「有沒有人真的要買」那一題——而跑道越短，你越笨，偏偏笨在最該清醒的那一關。',
  'path'  => '/lens/scarcity',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《匱乏經濟學》',
  'heading'   => '錢和時間一緊，你會聰明地漏掉最該驗的那一題',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/scarcity.html',
  'book'      => ['name' => '匱乏經濟學（Scarcity）', 'author' => 'Sendhil Mullainathan 森迪爾・穆蘭納珊、Eldar Shafir 埃爾達・夏菲爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個埋頭在做的東西，光圈外真的有人要嗎？',
    'body'    => '匱乏會把你的視野收成一條隧道，最先被推進黑暗的，往往就是「有沒有人要買」那一題。趁隧道還沒收緊，花五分鐘把一個點子攤開來照一照，看出你最弱、最沒驗過的那一軸。',
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
    ['name' => '匱乏經濟學', 'path' => '/lens/scarcity'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
