<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把每天當第一天，就是逼自己重問有沒有人要：用痛點之尺重讀《永遠都是第一天》｜痛點 P.A.I.N.',
  'desc'  => '坎特羅威茲《永遠都是第一天》拆解科技巨頭怎麼靠「工程師心態」不死，寫給大公司。用痛點的眼光翻到另一面：貝佐斯說的「第二天」最早的症狀，是你不再回頭問「現在還有沒有人要」——而這個病，你做出第一個有人用的東西那天就會找上門。',
  'path'  => '/lens/always-day-one',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《永遠都是第一天》',
  'heading'   => '把每天當第一天，就是逼自己重問有沒有人要',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/always-day-one.html',
  'book'      => ['name' => '永遠都是第一天', 'author' => 'Alex Kantrowitz 亞歷克斯·坎特羅威茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那個東西，現在還有人為它在痛嗎？',
    'body'    => '坎特羅威茲教巨頭怎麼不滑進「第二天」；而你手上那個東西，得先確認外面還有人因為那個痛、願意掏錢。現在就免費體檢一個點子，五分鐘量出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '永遠都是第一天',      'path' => '/lens/always-day-one'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
