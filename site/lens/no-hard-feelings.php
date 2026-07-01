<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的情緒是真的，但常常認錯對象｜痛點 P.A.I.N.',
  'desc'  => '《我工作，我沒有不開心》說，職場上的每一種情緒都帶著真情報，只是常常認錯對象——你氣的那件事，未必是真正惹你的那件。用痛點之尺重讀：在照著一股情緒拍板一個反悔不了的決定前，先驗它指向的是不是真問題。',
  'path'  => '/lens/no-hard-feelings',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《我工作，我沒有不開心》',
  'heading'   => '你的情緒是真的，但常常認錯對象',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/no-hard-feelings.html',
  'book'      => ['name' => '我工作，我沒有不開心', 'author' => 'Liz Fosslien 麗茲・佛斯蓮、Mollie West Duffy 莫莉・威斯特・杜菲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在照著一股情緒拍板之前，先讓它冷卻幾天',
    'body'    => '這本書教你替情緒取名、讀出它真正指向的問題；把同一份謹慎，用在你下一個因為一時情緒就想拍板的決定上。',
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
    ['name' => '我工作，我沒有不開心', 'path' => '/lens/no-hard-feelings'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
