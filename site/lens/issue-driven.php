<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '答案磨得再亮，也救不了一道爛題目：用痛點之尺重讀《麥肯錫教我的思考武器》｜痛點 P.A.I.N.',
  'desc'  => '安宅和人在麥肯錫、耶魯腦科學、Yahoo 日本之間繞了一圈，逼出同一句話：動手之前先選對議題。工作的價值是議題度乘上解的品質，多數人卻只顧把答案磨亮，在一道沒人要他答的題目上，走成他口中那條漂亮的「狗的路」。用痛點的眼光重讀：創業者議題度最高的那題，是「到底有沒有人要」——偏偏最多人埋頭跳過它，直接衝去把產品做漂亮。',
  'path'  => '/lens/issue-driven',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《麥肯錫教我的思考武器》',
  'heading'   => '答案磨得再亮，也救不了一道爛題目',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/issue-driven.html',
  'book'      => ['name' => '麥肯錫教我的思考武器', 'author' => '安宅和人（Kazuto Ataka）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個點子，議題度到底高不高？',
    'body'    => '把它寫成一句話：我賭某一種人，為了某一個具體的麻煩，願意掏錢。寫不具體，代表你還沒選對該答的那道題。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '麥肯錫教我的思考武器',     'path' => '/lens/issue-driven'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
