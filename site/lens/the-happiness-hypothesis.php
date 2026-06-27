<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '大象早就愛上了那個點子，騎象人只是回頭幫它編理由：用痛點之尺重讀《象與騎象人》｜痛點 P.A.I.N.',
  'desc'  => '《象與騎象人》把心智拆成大象與騎象人:理性的騎象人多半不是主人,是大象的發言人。用痛點之尺重讀——你信心滿滿的市場調查,其實是騎象人在替一個早就被愛上的點子蒐集贊成票;真正該看的,是別人的大象已經為這個痛付出了什麼。',
  'path'  => '/lens/the-happiness-hypothesis',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《象與騎象人》',
  'heading'   => '大象早就愛上了那個點子，騎象人只是回頭幫它編理由',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-happiness-hypothesis.html',
  'book'      => ['name' => '象與騎象人(The Happiness Hypothesis)', 'author' => 'Jonathan Haidt 強納森・海德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那份信心滿滿的點子，站不站得住?',
    'body'    => '《象與騎象人》讓你看穿自己腦袋裡那個一路替點子護航的發言人;《痛點》這把尺,幫你走出門去數外面真有幾頭象在餓。現在就免費體檢一個點子,五分鐘畫出你最弱的那一軸;或翻翻《痛點》電子書。',
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
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '象與騎象人',  'path' => '/lens/the-happiness-hypothesis'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
