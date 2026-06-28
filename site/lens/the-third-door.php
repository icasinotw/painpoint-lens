<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '敲一百次的那扇門，得先給門後的人一個理由：用痛點之尺拆《第三道門》｜痛點 P.A.I.N.',
  'desc'  => '《第三道門》把成功講成一間夜店，永遠有第三道門可鑽——讀歪了，就變成「夠拚就敲得開」。用痛點的眼光重讀：門開不開多半由門後那個人決定，動手敲一百次之前，先確認他有沒有一個非開不可的理由想要你。',
  'path'  => '/lens/the-third-door',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《第三道門》',
  'heading'   => '敲一百次的那扇門，得先給門後的人一個理由',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-third-door.html',
  'book'      => ['name' => '第三道門（The Third Door）', 'author' => 'Alex Banayan 亞歷士・班納揚'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正好有扇門想敲？先驗一驗門後有沒有人',
    'body'    => '《第三道門》給你往巷子走的膽量；《痛點》這把尺，幫你在敲下去之前，先確認門後真有人有理由想要你。花五分鐘免費體檢一個點子，看出你最弱的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '第三道門',    'path' => '/lens/the-third-door'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
