<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一選邊站，你就看不見對面那個人在痛：用痛點之尺重讀《社會向左，資本向右》｜痛點 P.A.I.N.',
  'desc'  => '柯利爾說，左右兩派都先抱緊自己那套漂亮故事，再回頭撿能佐證它的事實，於是被兩邊一起漏掉的真實痛苦，安靜地掉出了視野。用痛點的眼光重讀——你對自己的點子，也養了一套不肯放手的故事，它替你決定了哪些痛不必看；而被你濾掉的那個痛，往往正是你最需要看見的那一個。',
  'path'  => '/lens/the-future-of-capitalism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《社會向左，資本向右》',
  'heading'   => '一選邊站，你就看不見對面那個人在痛',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-future-of-capitalism.html',
  'book'      => ['name' => '社會向左，資本向右', 'author' => '保羅・柯利爾（Paul Collier）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把替你篩掉真相的那句話，拎出來重驗一次',
    'body'    => '柯利爾證明，最會騙過你的不是事實，是你早就信好的那套故事；痛點這把尺，只逼你把一句最篤定的「市場一定有需求」，押到一個不買帳的真人面前，重聽一遍。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '社會向左，資本向右',    'path' => '/lens/the-future-of-capitalism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
