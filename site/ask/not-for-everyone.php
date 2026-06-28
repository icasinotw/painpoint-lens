<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '東西「人人都用得到」為什麼反而沒人買？把 TA 從「所有人」收窄成一個人｜痛點之尺',
  'desc'  => '「所有人都用得到」聽起來是優點，其實是危險信號——對著一群面目模糊的「所有人」開口，永遠收到最多客套、最少真痛，因為沒有任何一個人痛到要為它付代價。一套把鏡頭從「所有人」推到「一個人」的收窄法:誰痛得最兇、已經在花錢花時間克難解、會半夜爬起來找解方?再加一道反向測試:只能留一種人，你留誰?選不出來就是還沒鎖定。窄不是放棄市場，是先找到那一小群正在為這件事流血的人。',
  'path'  => '/ask/not-for-everyone',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 鎖定誰',
  'heading'   => '我的東西「人人都用得到」，為什麼反而沒人真的買單？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/not-for-everyone.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '在做給「所有人」以前，先找出那一個最痛的人',
    'body'    => '免費的點子體檢，會帶你照 P.A.I.N. 一格一格——尤其逼你回答最前面那一格:這東西到底是做給誰的?把面目模糊的「所有人」，收窄成一小群此刻正為它流血、最不耐煩的人。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/fake-demand', 'label' => '二十幾個人都說「我會買」，上線那天一張單都沒進'],
  'next'      => ['url' => '/ask/preorder-validation', 'label' => '有人付了訂金，就代表「驗證過了」嗎？'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '拆問題',     'path' => '/ask'],
    ['name' => '鎖定誰',     'path' => '/ask/not-for-everyone'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
