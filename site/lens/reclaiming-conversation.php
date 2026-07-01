<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你發問卷，是為了躲開客戶皺眉那一下：用痛點之尺重讀《重新與人對話》｜痛點 P.A.I.N.',
  'desc'  => '雪莉・特克說，我們逃離面對面的對話，是因為打字可以先改過再送出，真人對話卻收不回來。用痛點之尺重讀《重新與人對話》：你寧可發問卷、看數據也不肯坐到客戶對面，逃的是同一件事——而你剪掉的那一下，剛好是唯一會跟你說實話的地方。',
  'path'  => '/lens/reclaiming-conversation',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《重新與人對話》',
  'heading'   => '你發問卷，是為了躲開客戶皺眉那一下',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/reclaiming-conversation.html',
  'book'      => ['name' => '重新與人對話', 'author' => 'Sherry Turkle 雪莉・特克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '特克告訴你為什麼逃，痛點告訴你走出去要聽什麼',
    'body'  => '特克把「我們為什麼躲開面對面的對話」講得極透；《痛點》這把尺接手下半場——坐到一個真人對面之後，怎麼問到痛、怎麼從他已經花掉的時間和錢裡，看出他是不是真的在痛。願意走出門是上半場，聽懂哪張臉會付錢，才是把點子做對的下半場。',
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
    ['name' => '重新與人對話', 'path' => '/lens/reclaiming-conversation'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
