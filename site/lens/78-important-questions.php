<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《會問問題，才會帶人》｜痛點 P.A.I.N.',
  'desc'  => '克拉克-艾普斯坦說領導最強的工具不是答案，是問題，她給了七十八個。用痛點的眼光重讀：主管以為自己很懂團隊，那份「懂」多半是辦公室裡自己編的劇本，從沒拿一個真人對過——帶人跟驗點子一樣，最貴的錯都是把「我以為」當成「我知道」。',
  'path'  => '/lens/78-important-questions',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《會問問題，才會帶人》',
  'heading'   => '你對團隊的了解，多半是你自己編的劇本',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/78-important-questions.html',
  'book'      => ['name' => '會問問題，才會帶人（78 Important Questions Every Leader Should Ask and Answer）', 'author' => 'Chris Clarke-Epstein 克莉絲・克拉克-艾普斯坦'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你以為你懂你的團隊，那份懂驗過貨嗎',
    'body'    => '主管最貴的錯，跟創業者一樣，是把腦中那套「我以為」當成「我知道」；先去問一個真人，再決定怎麼帶他。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',               'path' => '/'],
    ['name' => '痛點之尺',            'path' => '/lens'],
    ['name' => '會問問題，才會帶人',   'path' => '/lens/78-important-questions'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
