<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你越用力想像點子成功，就越不會去驗它｜痛點 P.A.I.N.',
  'desc'  => '《怪咖心理學之59秒的練習》拿科學證據敲碎那些感覺很對、卻沒人驗過的勵志建議——連「想像成功」都被證實會讓你更難達標。把這把篩子轉向你的點子：你愈用力想像它會紅，就愈不會出門去驗，到底有沒有人真的要。',
  'path'  => '/lens/59-seconds',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《怪咖心理學之59秒的練習》',
  'heading'   => '你越用力想像點子成功，就越不會去驗它',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/59-seconds.html',
  'book'      => ['name' => '怪咖心理學之59秒的練習', 'author' => 'Richard Wiseman 李察・韋斯曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把這把篩子，先轉向你自己那個點子',
    'body'    => '韋斯曼教你對每條建議都先問一句「有人驗過嗎」；同一個問題，你那個還沒問過半個人的點子，更該先被問一次。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '怪咖心理學之59秒的練習', 'path' => '/lens/59-seconds'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
