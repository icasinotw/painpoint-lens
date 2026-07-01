<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最好的思考，都發生在你的頭殼外面：用痛點之尺重讀《在大腦外思考》｜痛點 P.A.I.N.',
  'desc'  => '安妮・墨菲・保羅在《在大腦外思考》拆掉「聰明＝什麼都在腦裡搞定」的排名，要你把思考外包給身體、空間和別人。用痛點的眼光重讀：你最該搬出腦外去驗的那個念頭，叫做「到底有沒有人要」——它的答案不在你頭裡，在幾個真人的反應裡。',
  'path'  => '/lens/the-extended-mind',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《在大腦外思考》',
  'heading'   => '最好的思考，都發生在你的頭殼外面',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-extended-mind.html',
  'book'      => ['name' => '在大腦外思考', 'author' => 'Annie Murphy Paul（安妮・墨菲・保羅）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你腦裡養了很久的那個點子，禁得起搬出去嗎？',
    'body'    => '別再讓它只在腦子裡發亮。挑一個真的符合的人，把它講給對方聽，看他的反應是亮起來還是禮貌地點頭。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '在大腦外思考',      'path' => '/lens/the-extended-mind'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
