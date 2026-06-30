<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先有人需要你，你才付得起任性：用痛點之尺拆《Patagonia任性創業法則》｜痛點 P.A.I.N.',
  'desc'  => '修納把「浪來了就放員工去衝浪」寫進書名，大家記住的是這家公司多酷。用痛點的眼光重讀：他放得了員工去衝浪、敢停掉最好賣的岩釘、敢叫客人別買，全因為腳底下早有一塊真實的需求撐著。任性不是起點，是先解決一個真痛之後才付得起的奢侈；大多數人抄走了任性，地基卻留在原地。',
  'path'  => '/lens/let-my-people-go-surfing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《Patagonia任性創業法則》',
  'heading'   => '先有人需要你，你才付得起任性',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/let-my-people-go-surfing.html',
  'book'      => ['name' => 'Patagonia任性創業法則（Let My People Go Surfing: The Education of a Reluctant Businessman）', 'author' => 'Yvon Chouinard 伊方・修納'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂任性要有地基撐之後，輪到你自己那塊地基',
    'body'    => '修納的任性，底下踩著一個攸關性命的真需求；輪到你最捨不得妥協的那個堅持，別只在心裡確信——攤開來，看看底下到底有沒有人真的痛著、等著有人來解。',
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
    ['name' => 'Patagonia任性創業法則', 'path' => '/lens/let-my-people-go-surfing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
