<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '找到一個真實的需求，普克只說了前半句：用痛點之尺重讀《惠普風範》｜痛點 P.A.I.N.',
  'desc'  => '惠普創辦人普克在《惠普風範》裡留下一句名言：找到一個真實的需求，然後把它滿足。用痛點之尺重讀：這句座右銘普克只講了讓人安心的前半句——他從沒教你，怎麼確認那個需求是真的，而不是你一廂情願以為的。那一步，才最會要一家新公司的命。',
  'path'  => '/lens/the-hp-way',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《惠普風範》',
  'heading'   => '找到一個真實的需求，普克只說了前半句',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-hp-way.html',
  'book'      => ['name' => '惠普風範', 'author' => '大衛・普克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「真實的需求」，叫得出三個正在痛的真人嗎？',
    'body'    => '把你正在做、或正想做的那件事攤開，試著列出三個你叫得出名字、而且已經自己花錢花時間想解決這件事的真人。列得出，需求是真的；列不出，先去找到第一個。',
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
    ['name' => '惠普風範',    'path' => '/lens/the-hp-way'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
