<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '會臨場反應的人，早就放下手裡那套稿：用痛點之尺重讀《思考更敏捷，說話更機智》｜痛點 P.A.I.N.',
  'desc'  => '亞伯拉罕在《思考更敏捷，說話更機智》教你臨場開口時放下排練好的稿、別再表演，改成一場真的在聽的對話。用痛點的眼光重讀：創業者手上那份簡報，就是那套捨不得放下的稿——所謂需求驗證，就是閉上嘴、問一句、真的聽對方拿這個問題怎麼辦。',
  'path'  => '/lens/think-faster-talk-smarter',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《思考更敏捷，說話更機智》',
  'heading'   => '會臨場反應的人，早就放下手裡那套稿',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/think-faster-talk-smarter.html',
  'book'      => ['name' => '思考更敏捷，說話更機智（Think Faster, Talk Smarter: How to Speak Successfully When You\'re Put on the Spot）', 'author' => 'Matt Abrahams 麥特・亞伯拉罕'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把「放下稿、去聽」這個動作，用在你的點子上',
    'body'    => '亞伯拉罕教你臨場開口時放下排練好的稿、去聽對方真正在說什麼；痛點這把尺，把同一個動作用在你手上那個點子——別再對著人播放你的簡報，先閉上嘴，弄懂對面到底要不要。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '思考更敏捷，說話更機智',    'path' => '/lens/think-faster-talk-smarter'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
