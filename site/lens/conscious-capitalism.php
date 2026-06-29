<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '再高的目的，也得先有一個真的在痛的人：用痛點之尺重讀《品格致勝》｜痛點 P.A.I.N.',
  'desc'  => '約翰・麥基與拉哲・西索迪亞在《品格致勝》裡，把企業還原成一件值得投入一生的事——更高的目的、利害關係人整合、有意識的領導與文化。用痛點之尺重讀：這本書站在「生意已經會轉」的那一端往回看，卻沒逼你回答它跳過的那一格——底下到底有沒有一個真的在痛、願意掏錢的人，撐得起你那句熱血的使命。',
  'path'  => '/lens/conscious-capitalism',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《品格致勝》',
  'heading'   => '再高的目的，也得先有一個真的在痛的人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/conscious-capitalism.html',
  'book'      => ['name' => '品格致勝', 'author' => '約翰・麥基、拉哲・西索迪亞'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「更高的目的」，底下站著一個真的在痛的人嗎？',
    'body'    => '挑出你正在做、或正想做的那件事，試著叫出三個正為它困擾、而且已經自己花錢花時間想解決的真人。叫得出，你的目的就有地基；叫不出，先去找到第一個。',
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
    ['name' => '品格致勝',    'path' => '/lens/conscious-capitalism'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
