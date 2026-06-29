<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '思考工具一整櫃，最該驗的點子你偏不敢碰：用痛點之尺重讀《思考的框架》｜痛點 P.A.I.N.',
  'desc'  => '《思考的框架》把蒙格那套多元心智模式拆成一整櫃好用的思考工具——地圖不等於疆域、能力圈、反過來想。用痛點的眼光重讀：工具櫃再滿，都救不了一種人——他把工具拿去拆別人、就是不肯對準自己最珍惜的那個點子。最該被你照進去的，正是你最不想被質疑的那個假設。',
  'path'  => '/lens/the-great-mental-models',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《思考的框架》',
  'heading'   => '思考工具一整櫃，最該驗的點子你偏不敢碰',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-great-mental-models.html',
  'book'      => ['name' => '思考的框架', 'author' => 'Shane Parrish 夏恩・派瑞許'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最不想被質疑的那個點子，敢照一次嗎？',
    'body'    => '《思考的框架》教你換工具看世界，最難的是把工具對準自己最篤定的那個假設。痛點之尺前面那幾關，正好幫你把「真的有人要、痛不痛到肯付錢」這兩題逼著問一遍——花五分鐘，照一次你平常繞著走的那塊。',
    'primary' => ['url' => '/tool', 'label' => '免費照一次我的盲點'],
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
    ['name' => '思考的框架', 'path' => '/lens/the-great-mental-models'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
