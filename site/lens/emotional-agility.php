<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別急著把那股情緒弄掉，先讀它：用痛點之尺重讀《情緒靈敏力》｜痛點 P.A.I.N.',
  'desc'  => '蘇珊・大衛在《情緒靈敏力》裡說，難受的情緒不是要被消音的雜訊，是一份還沒讀的訊號——壓下去、或繞著它打轉，都是沒去讀它。用痛點的眼光重讀：把情緒當成一個替你指方向的儀表，讀出它在指哪一件你其實很在乎、卻一直繞著走的事，再把那股感覺，換成一張你算得出來的帳單。',
  'path'  => '/lens/emotional-agility',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《情緒靈敏力》',
  'heading'   => '你那股壞情緒，是一份你還沒讀的訊號',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/emotional-agility.html',
  'book'      => ['name' => '情緒靈敏力（Emotional Agility）', 'author' => 'Susan David（蘇珊・大衛）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近一直壓著、或一直繞著的那股情緒，是哪一股？',
    'body'    => '別急著把它弄掉。先問它兩句：這盞燈在替我指哪一件我其實很在乎的事？為了不去碰它，我這陣子悄悄付了什麼代價？把答案寫下來，那團「心情不好」就會結成一張你算得出來的帳單。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '情緒靈敏力',     'path' => '/lens/emotional-agility'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
