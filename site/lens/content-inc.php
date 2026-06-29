<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他把變現排到最後，帳單可沒打算等｜痛點 P.A.I.N.',
  'desc'  => '《內容電力公司》教你先用內容養出一群死忠讀者，變現留到第六步。用痛點之尺重讀普立茲：免費願意看你的人，和會付你錢的人，重疊得比你以為的少——別等燒掉兩三年才低頭確認底下有沒有錢。',
  'path'  => '/lens/content-inc',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《內容電力公司》',
  'heading'   => '他把變現排到最後，帳單可沒打算等',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/content-inc.html',
  'book'      => ['name' => '內容電力公司（Content Inc.）', 'author' => 'Joe Pulizzi 喬・普立茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '養大一群人之前，先確認他們痛在哪',
    'body'    => '普立茲教你把受眾養大；同一份力氣，先用來確認這群人身上有沒有一個會付錢的痛——別等走到第六步才低頭看。',
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
    ['name' => '內容電力公司', 'path' => '/lens/content-inc'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
