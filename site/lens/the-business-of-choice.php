<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '顧客靠直覺選你，你也用同一套直覺騙自己｜痛點 P.A.I.N.',
  'desc'  => '《直覺行銷》把「人靠直覺決定、再補理由」變成贏得顧客的槓桿。用痛點之尺重讀：這套看穿別人直覺的本事，最該掉頭對準的，是你判斷自己點子時那台先拍板、再找理由的機器。',
  'path'  => '/lens/the-business-of-choice',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《直覺行銷》',
  'heading'   => '顧客靠直覺選你，你也用同一套直覺騙自己',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-business-of-choice.html',
  'book'      => ['name' => '直覺行銷', 'author' => 'Matthew Willcox 馬修・威爾克斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你對自己點子的那份篤定，是證據還是直覺？',
    'body'    => '《直覺行銷》教你看穿顧客的直覺；先掉頭看清楚自己的直覺，再決定要不要動手。',
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
    ['name' => '直覺行銷',  'path' => '/lens/the-business-of-choice'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
