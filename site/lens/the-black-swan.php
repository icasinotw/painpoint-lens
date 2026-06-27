<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最危險的黑天鵝，住在你自己的試算表裡：用痛點之尺重讀《黑天鵝效應》｜痛點 P.A.I.N.',
  'desc'  => '《黑天鵝效應》教你別再相信「我能預測未來」——但對一個要創業的人，最危險的黑天鵝不在市場，在你那張越做越漂亮的試算表裡。用痛點的眼光重讀塔雷伯的火雞、沉默證據與極端斯坦：別再蒐集成功故事、別再美化計劃，先走出去，確認真的有人在痛、會掏錢。',
  'path'  => '/lens/the-black-swan',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《黑天鵝效應》',
  'heading'   => '最危險的黑天鵝，住在你自己的試算表裡',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/the-black-swan.html',
  'book'      => ['name' => '黑天鵝效應（The Black Swan：The Impact of the Highly Improbable）', 'author' => 'Nassim Nicholas Taleb 納西姆·尼可拉斯·塔雷伯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你押上身家之前，先驗那張漂亮的試算表',
    'body'    => '《黑天鵝效應》拆穿你「我能預測」的幻覺；痛點這把尺，幫你回答它沒碰的下一題——你手上這個點子，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '黑天鵝效應',  'path' => '/lens/the-black-swan'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
