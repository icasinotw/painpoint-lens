<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《資本的祕密》｜痛點 P.A.I.N.',
  'desc'  => '德索托發現開發中國家的窮人手上躺著九兆美元房產，卻一毛都借不出來——因為那些資產沒被登記進一套別人認得的系統，他叫它「死資本」。用痛點的眼光重讀《資本的祕密》：你腦袋裡那個還沒人付錢的點子，也是一筆死資本。',
  'path'  => '/lens/the-mystery-of-capital',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《資本的祕密》',
  'heading'   => '你那個放著的點子，其實是一筆死資本',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-mystery-of-capital.html',
  'book'      => ['name' => '資本的祕密（The Mystery of Capital）', 'author' => 'Hernando de Soto 赫南多·德·索托'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個點子，是活資本還是死資本？',
    'body'    => '德索托說，資產沒被一套別人認得的系統登記，就只是死資本；《痛點》這把尺，幫你把同一個問題用回自己的點子——在你埋頭把它做完美之前，先讓一個素昧平生的陌生人，願意替它掏錢蓋下第一張章。',
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
    ['name' => '資本的祕密',      'path' => '/lens/the-mystery-of-capital'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
