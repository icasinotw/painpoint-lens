<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '叫你從頭解釋一遍，那份篤定就垮了：用痛點之尺重讀《知識的假象》｜痛點 P.A.I.N.',
  'desc'  => '《知識的假象》證明：你以為自己懂的事，理解大半寄放在別人腦袋裡。用痛點的眼光重讀——你對點子那份「明明很多人需要」的篤定，常常是整個房間借你的；把「為什麼有人會掏錢」的因果鏈從頭講一遍，卡住的地方就是你還沒真正擁有的東西。',
  'path'  => '/lens/the-knowledge-illusion',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《知識的假象》',
  'heading'   => '叫你從頭解釋一遍，那份篤定就垮了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-knowledge-illusion.html',
  'book'      => ['name' => '知識的假象：為什麼我們從未獨立思考？（The Knowledge Illusion）', 'author' => '史蒂芬・斯洛曼（Steven Sloman）、菲力浦・芬恩巴赫（Philip Fernbach）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那聲「我懂」，經得起一個追問嗎',
    'body'    => '《知識的假象》說：你以為懂的事，理解大半在別人腦袋裡。真要驗一個點子，把「為什麼有人會掏錢」的因果鏈從頭講一遍，講到卡住的地方，就是你還沒真正擁有的那一格。',
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
    ['name' => '知識的假象',  'path' => '/lens/the-knowledge-illusion'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
