<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你受不了的那個人，是你還沒驗過的一個假設：用痛點之尺重讀《跳出問題的框框》｜痛點 P.A.I.N.',
  'desc'  => '《跳出問題的框框》說，多數關係的死結不在對方，在你看對方的眼光。用痛點的眼光重讀：你對那個人下的定論，其實是一個你從沒驗過、卻又需要它成立的假設——因為它正幫你擋住一個更難面對的問題。',
  'path'  => '/lens/leadership-and-self-deception',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跳出問題的框框》',
  'heading'   => '你受不了的那個人，是你還沒驗過的一個假設',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/leadership-and-self-deception.html',
  'book'      => ['name' => '跳出問題的框框', 'author' => 'The Arbinger Institute（亞賓澤協會）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先驗問題在誰身上，再動手解',
    'body'    => '《跳出問題的框框》要你回頭看：你對那個人的定論，是驗來的，還是你需要它成立？同樣一個動作，也能對準你的點子——先確認痛在哪，再決定怎麼解。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '跳出問題的框框',   'path' => '/lens/leadership-and-self-deception'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
