<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你替大腦排的一天，它幾乎都不買單：用痛點之尺重讀《大腦當家》｜痛點 P.A.I.N.',
  'desc'  => '約翰・麥迪納《大腦當家》把大腦怎麼運作拆成十二條守則：注意力撐不過十分鐘、一心多用是誤會、少睡一點會讓你更笨。用痛點的眼光重讀，這是一份你從沒讀過的客戶規格書——別再憑「我以為它該這樣」，替自己的大腦排一整天它根本吃不下的行程。',
  'path'  => '/lens/brain-rules',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大腦當家》',
  'heading'   => '你替大腦排的一天，它幾乎都不買單',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/brain-rules.html',
  'book'      => ['name' => '大腦當家', 'author' => 'John Medina 約翰・麥迪納'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你替自己排的那一天，驗過它嗎？',
    'body'    => '麥迪納把大腦怎麼運作攤成一份規格書；同一套「先搞懂你要服務的對象、別憑想像硬做」的紀律，也能拿去重看你手上正在推的那個計畫或決定。',
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
    ['name' => '大腦當家', 'path' => '/lens/brain-rules'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
