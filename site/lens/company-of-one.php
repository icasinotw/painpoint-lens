<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「夠了」是個好問題，前提是你已經「有」：用痛點之尺重讀《一人公司》',
  'desc'  => '《一人公司》敢跟「生意一定要長大」頂嘴，把「夠了」算成一個要認真算的數字——但賈維斯是先有了一票付錢的客戶，才談得起克制。用痛點之尺重讀：你那個點子還沒半個客戶，別急著拿「小而美」替「還沒人要」化妝；先去掙到那第一個肯掏錢的陌生人。',
  'path'  => '/lens/company-of-one',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一人公司》',
  'heading'   => '還沒半個客戶，你就先學會了「小而美就好」',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/company-of-one.html',
  'book'      => ['name' => '一人公司：為什麼小而美是未來企業發展的趨勢(Company of One)', 'author' => 'Paul Jarvis 保羅・賈維斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在喊「夠了」之前，你那個點子的進帳，先大於零了嗎？',
    'body'    => '賈維斯的「夠了」，是先有一票付錢客戶才談得起的克制。趁押上下一個一兩年之前，先替你那個點子掙到第一筆真實的進帳——挑一個最具體的東西、開個價、找一個不欠你人情的陌生人，把錢真的收進來。',
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
    ['name' => '一人公司',  'path' => '/lens/company-of-one'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
