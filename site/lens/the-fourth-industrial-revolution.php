<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '技術翻新到這一步，就有人要你那個點子嗎？用痛點之尺重讀《第四次工業革命》｜痛點 P.A.I.N.',
  'desc'  => '施瓦布《第四次工業革命》最深的一句話：這場革命會變成什麼樣，是人選的、不是技術定的。用痛點之尺重讀：抱著點子的你卻把它讀反了，以為技術翻新到這一步就等於有人要——真正決定它生死的那一票，還沒有一個陌生人自己掏錢投下。',
  'path'  => '/lens/the-fourth-industrial-revolution',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《第四次工業革命》',
  'heading'   => '你把它讀成了「技術到位，就有人要我點子」',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-fourth-industrial-revolution.html',
  'book'      => ['name' => '第四次工業革命（The Fourth Industrial Revolution）', 'author' => 'Klaus Schwab 克勞斯・施瓦布'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，正搭在某個「未來趨勢」上？',
    'body'    => '在你再替它多算一張漂亮的試算表之前，先把它擺到一個不認識你、沒理由給你面子的陌生人面前，看他肯不肯真的為它掏一次錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '第四次工業革命', 'path' => '/lens/the-fourth-industrial-revolution'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
