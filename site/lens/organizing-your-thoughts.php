<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《思考整理學》｜痛點 P.A.I.N.',
  'desc'  => '外山滋比古《思考整理學》把思考講成釀酒：念頭先擱著發酵、熬掉雜質，留下熟成的好點子。用痛點的眼光重讀：發酵熬的是念頭在你腦中的成色，卻問不出外頭到底有沒有人要——在關起門釀一年之前，先趁它還粗糙，端出去給一個真人嚐一口。',
  'path'  => '/lens/organizing-your-thoughts',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《思考整理學》',
  'heading'   => '你在腦袋裡釀了一年的點子，還沒人嚐過',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/organizing-your-thoughts.html',
  'book'      => ['name' => '思考整理學（思考の整理学）', 'author' => 'Shigehiko Toyama 外山滋比古'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個釀了很久、卻還沒人嚐過的點子？',
    'body'    => '在把它關進腦袋裡再多釀一年之前，先趁它還粗糙，找一個真人嚐一口——一個下午問來的反應，可能替你省下整整一年。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '思考整理學',   'path' => '/lens/organizing-your-thoughts'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
