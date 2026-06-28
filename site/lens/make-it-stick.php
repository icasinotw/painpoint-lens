<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '重讀一千遍讓你「覺得會了」，那是流暢的錯覺；用痛點之尺重讀《超牢記憶法》｜痛點 P.A.I.N.',
  'desc'  => '布朗《超牢記憶法》最狠的一刀：反覆重讀只餵你「我都會了」的踏實感，那叫流暢的錯覺，真記住沒有，只有把它考出來才算數。用痛點之尺重讀：你那個點子在腦裡重讀了上千遍，「一定有人要」那份篤定也是這麼養出來的——它從沒被一個會掏錢的陌生人考過一次。',
  'path'  => '/lens/make-it-stick',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超牢記憶法》',
  'heading'   => '布朗說，反覆重讀讓你「覺得自己會了」，那多半是一場流暢的錯覺；你那個點子在腦裡重讀了上千遍，「一定有人要」那份篤定，從沒被一個陌生人考過一次',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/make-it-stick.html',
  'book'      => ['name' => '超牢記憶法（Make It Stick）', 'author' => 'Peter Brown 彼得・布朗、Henry Roediger 亨利・羅迪格、Mark McDaniel 馬克・麥克丹尼爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，正等著上線那天，才第一次見真人？',
    'body'    => '別等了。趁它還只是個想法，先把它連同一個真實的價格，擺到一個沒理由給你面子的陌生人面前，看他肯不肯當場掏錢——那一場考試，你今天就考得起。',
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
    ['name' => '超牢記憶法',  'path' => '/lens/make-it-stick'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
