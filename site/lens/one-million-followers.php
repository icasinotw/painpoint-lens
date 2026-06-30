<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《百萬粉絲經營法則》｜痛點 P.A.I.N.',
  'desc'  => '布蘭登・肯恩三十天養出一百萬粉絲，靠的是一台便宜的內容測試機。用痛點之尺重讀：這台機器聰明得不得了，只是他一路在測「誰會按追蹤」，從沒測過「誰會掏錢」。把它的準星挪到「有沒有人要」，才是這本書真正值錢的用法。',
  'path'  => '/lens/one-million-followers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《百萬粉絲經營法則》',
  'heading'   => '他那套測爆款的方法，改去測有沒有人要',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/one-million-followers.html',
  'book'      => ['name' => '百萬粉絲經營法則：30天讓你的粉絲飆破百萬', 'author' => 'Brendan Kane 布蘭登・肯恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先確認有人要，再開廣告衝粉絲',
    'body'    => '肯恩教你用小錢測出會爆的內容；要不要先用同一招，測出「到底有沒有人要」這一格？花五分鐘，把它走一遍。',
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
    ['name' => '百萬粉絲經營法則', 'path' => '/lens/one-million-followers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
