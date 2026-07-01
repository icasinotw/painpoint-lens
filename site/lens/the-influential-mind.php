<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為證據會說服人，大腦最先擋掉的就是證據：用痛點之尺重讀《你的大腦決定你是誰》｜痛點 P.A.I.N.',
  'desc'  => '神經科學家沙羅特《你的大腦決定你是誰》證明：更多、更正確的資料改變不了人心，大腦會替既有信念辯護、把證據當成攻擊。用痛點的眼光重讀：你造不出「想要」，只能找到一個已經在那裡的想要接上去——端出更漂亮的計畫，說服不了市場，就像端出更多數據，說服不了對面那個人。',
  'path'  => '/lens/the-influential-mind',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《你的大腦決定你是誰》',
  'heading'   => '你以為證據會說服人，大腦最先擋掉的就是證據',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-influential-mind.html',
  'book'      => ['name' => '你的大腦決定你是誰(The Influential Mind)', 'author' => 'Tali Sharot 塔莉・沙羅特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '說服別人之前，先確認有人要',
    'body'    => '沙羅特證明，你灌不進一個不存在的在乎；同一條紀律搬到你的點子上，就是別急著說服市場，先去找一個已經在為這件事痛、已經在花錢的人，把東西接上去。',
    'primary' => ['url' => '/lens', 'label' => '再讀一篇拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                'path' => '/'],
    ['name' => '痛點之尺',             'path' => '/lens'],
    ['name' => '你的大腦決定你是誰',   'path' => '/lens/the-influential-mind'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
