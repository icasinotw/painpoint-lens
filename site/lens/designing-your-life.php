<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你只給人生寫了一個版本,還沒驗證就全押了上去:用痛點之尺重讀《做自己的生命設計師》｜痛點 P.A.I.N.',
  'desc'  => '柏內特和埃文斯《做自己的生命設計師》把設計思維搬到人生上:好的人生不是想出來的,是畫幾個版本、去真實世界試出來的。用痛點的眼光重讀:你心裡那個「以後想成為誰」是個還沒驗證的點子——別關在腦裡排練漂亮劇本,先畫三個奧德賽計畫、約幾個真人,對一次真的數。',
  'path'  => '/lens/designing-your-life',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《做自己的生命設計師》',
  'heading'   => '你只給人生寫了一個版本,還沒驗證就全押了上去',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/designing-your-life.html',
  'book'      => ['name' => '做自己的生命設計師(Designing Your Life)', 'author' => 'Bill Burnett 比爾・柏內特、Dave Evans 戴夫・埃文斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '人生靠設計,點子也是',
    'body'    => '柏內特要你別再在腦裡排練那個想像的未來,畫三個版本、約幾個真人,先去真實世界對一次數;同一套「先確認再動手」的紀律,換到你手上的點子,就是別急著做,先確認真的有人為它痛。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
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
    ['name' => '做自己的生命設計師',  'path' => '/lens/designing-your-life'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
