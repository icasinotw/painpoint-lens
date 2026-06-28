<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把判斷當成事實寫出去：用痛點之尺重讀《麥肯錫寫作技術與邏輯思考》',
  'desc'  => '《麥肯錫寫作技術與邏輯思考》逼你把每句話分成事實、評價、主張三種，別把判斷當成事實寫出去。用痛點之尺重讀：你那份點子草稿裡，只有最上面賭最大的「一定有人要」被你當成事實，卻是唯一一句沒拿事實撐過的判斷。',
  'path'  => '/lens/logical-writing-and-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《麥肯錫寫作技術與邏輯思考》',
  'heading'   => '高杉尚孝要你把判斷和事實分開；你整份點子裡，只有「一定有人要」那句，你當成了事實',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/logical-writing-and-thinking.html',
  'book'      => ['name' => '麥肯錫寫作技術與邏輯思考', 'author' => '高杉尚孝'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，是查得到的事實，還是你最想相信的判斷？',
    'body'    => '高杉教你把判斷和事實分開；你那個點子，最上面那句賭最大的，到現在還沒一件事實撐過。趁押上下一個一兩年之前，去找一個不欠你人情的陌生人，請他真的掏一次錢，把那句話從判斷搬進事實。',
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
    ['name' => '麥肯錫寫作技術與邏輯思考',  'path' => '/lens/logical-writing-and-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
