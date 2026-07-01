<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '做簡報的人，最像那種悶頭做產品的創業者：用痛點之尺重讀《說一場有故事的簡報》｜痛點 P.A.I.N.',
  'desc'  => '娜菲克在《說一場有故事的簡報》要你別急著打開軟體：先搞清楚台下是誰、你要他們做什麼，再做投影片。用痛點的眼光重讀：一場簡報其實是一次需求驗證——先確認有人要聽，再動手做，別把沒人在乎的內容，做得又精美又完整。',
  'path'  => '/lens/storytelling-with-you',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《說一場有故事的簡報》',
  'heading'   => '做簡報的人，最像那種悶頭做產品的創業者',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/storytelling-with-you.html',
  'book'      => ['name' => '說一場有故事的簡報', 'author' => 'Cole Nussbaumer Knaflic（柯爾・諾瑟鮑姆・娜菲克）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你下一場簡報想推動的那件事，先講給一個真人聽了嗎？',
    'body'    => '別再對著空氣預演。挑一個真的符合的聽眾，把你那句話講給他，看他的臉是亮起來、還是禮貌地點頭。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '說一場有故事的簡報',       'path' => '/lens/storytelling-with-you'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
