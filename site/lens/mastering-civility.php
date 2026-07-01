<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '沒禮貌的代價，從來不會寄帳單來：用痛點之尺重讀《禮貌的力量》｜痛點 P.A.I.N.',
  'desc'  => '克莉絲汀・波拉斯《禮貌的力量》把職場沒禮貌換算成一張公司年年在流血的帳單。用痛點的眼光重讀：別聽人嘴上說「沒事」，去看他實際少做了多少——這筆沒人開發票的帳，一直在你看不見的地方複利。',
  'path'  => '/lens/mastering-civility',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《禮貌的力量》',
  'heading'   => '沒禮貌的代價，從來不會寄帳單來',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/mastering-civility.html',
  'book'      => ['name' => '禮貌的力量', 'author' => 'Christine Porath 克莉絲汀・波拉斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你團隊的沒禮貌，正在悄悄漏掉多少錢？',
    'body'    => '《禮貌的力量》把那筆沒人對帳的內部損耗算給你看；換到生意上，同一套紀律也能拿去量你手上那個點子——別聽人嘴上說，去看行為。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '禮貌的力量',  'path' => '/lens/mastering-civility'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
