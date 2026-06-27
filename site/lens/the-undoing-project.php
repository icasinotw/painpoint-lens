<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '為什麼明明在賠，你還是收不了手：用痛點之尺重讀《橡皮擦計畫》｜痛點 P.A.I.N.',
  'desc'  => '《橡皮擦計畫》講康納曼與特沃斯基如何證明人腦不是理性的算盤——其中最貴的一條是損失趨避：賠一塊的痛，約是賺一塊的兩倍。用痛點的眼光重讀：這正是你明明在賠、卻一直加碼、怎麼也收不了手的原因。趁還沒賠多，做一次歸零測驗，把點子交給一把不認沉沒成本的尺。',
  'path'  => '/lens/the-undoing-project',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《橡皮擦計畫》',
  'heading'   => '賠掉的那一筆，在你心裡重兩倍',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/the-undoing-project.html',
  'book'      => ['name' => '橡皮擦計畫（The Undoing Project：A Friendship That Changed Our Minds）', 'author' => 'Michael Lewis 麥可·路易士'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你替賠掉的錢，再加一筆之前',
    'body'    => '《橡皮擦計畫》照出你大腦在賠錢時動的手腳；痛點這把尺，幫你回答它不碰的下一題——你手上這個點子，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '橡皮擦計畫',  'path' => '/lens/the-undoing-project'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
