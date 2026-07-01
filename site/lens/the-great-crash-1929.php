<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '趁崩盤替你查帳之前，先自己查一次：用痛點之尺重讀《1929年大崩盤》｜痛點 P.A.I.N.',
  'desc'  => '高伯瑞在《1929年大崩盤》裡發現，景氣好、沒人查帳的年頭，公司裡沒被拆穿的窟窿會悄悄變厚；崩盤只是那場遲到的查帳。用痛點的眼光重讀：你的點子在「感覺很順」時，也囤著一批從沒驗過的假設——趁市場還沒替你查帳，先自己翻一次。',
  'path'  => '/lens/the-great-crash-1929',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《1929年大崩盤》',
  'heading'   => '趁崩盤替你查帳之前，先自己查一次',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-great-crash-1929.html',
  'book'      => ['name' => '1929年大崩盤', 'author' => 'John Kenneth Galbraith（約翰・高伯瑞）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「大家都在搶」的東西，經得起查帳嗎？',
    'body'    => '趁數字還漂亮、你也還輸得起，先自己當一次掃興的查帳員：把最不敢深究的那條假設，丟到一個不會給你面子的陌生人面前，看他掏不掏錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '1929年大崩盤',     'path' => '/lens/the-great-crash-1929'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
