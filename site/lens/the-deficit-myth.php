<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《赤字迷思》｜痛點 P.A.I.N.',
  'desc'  => '凱爾頓《赤字迷思》拆穿「國家要像家庭一樣量入為出」是個錯問題，真正該盯的是真實資源而非帳面數字。用痛點的眼光重讀：你對點子說的「我還沒準備好」，就是同一種赤字迷思——拿一個讓你安心的理由，繞開「外面到底有沒有人要」這個唯一算數的問題。這禮拜把最粗糙的版本拿去問一個真人。',
  'path'  => '/lens/the-deficit-myth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《赤字迷思》',
  'heading'   => '「等我準備好」，是你對自己說的赤字迷思',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-deficit-myth.html',
  'book'      => ['name' => '赤字迷思：現代貨幣理論和為人民而生的經濟', 'author' => '史蒂芬妮・凱爾頓 Stephanie Kelton'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「還沒準備好」，外面真的有人在等嗎？',
    'body'    => '《赤字迷思》讓你看清「還沒準備好」常常只是個讓你安心的擋箭牌；接下來該不該繼續準備，只看一件事——把最粗糙的版本拿去問一個真人，他要不要。',
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
    ['name' => '赤字迷思',  'path' => '/lens/the-deficit-myth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
