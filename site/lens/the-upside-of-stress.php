<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '她花十年教人怕壓力，後來發現教錯了：用痛點之尺拆《輕鬆駕馭壓力》｜痛點 P.A.I.N.',
  'desc'  => '麥高尼格講了十年「壓力會傷身」，直到一份追蹤三萬人的研究讓她發現自己講反了——真正提高死亡率的是「壓力有害」這個信念。用痛點的眼光重讀《輕鬆駕馭壓力》：多數人忙著消滅壓力，卻沒去驗那個從沒被質疑過的劇本。',
  'path'  => '/lens/the-upside-of-stress',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《輕鬆駕馭壓力》',
  'heading'   => '她花十年教人怕壓力，後來發現教錯了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-upside-of-stress.html',
  'book'      => ['name' => '輕鬆駕馭壓力（The Upside of Stress）', 'author' => 'Kelly McGonigal 凱莉・麥高尼格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把「壓力有害」這個從沒驗過的劇本攤開來重算一遍',
    'body'    => '麥高尼格教你別急著消滅壓力，先弄懂自己是怎麼替它配旁白的；下次心跳飆起來的當下，先別把它讀成警報，停一秒，問問那股緊張到底在替你說什麼。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '輕鬆駕馭壓力',    'path' => '/lens/the-upside-of-stress'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
