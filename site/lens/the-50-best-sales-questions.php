<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最強的業務，話比客戶還少：用痛點之尺重讀《頂尖業務的50個最強問句》｜痛點 P.A.I.N.',
  'desc'  => '青木毅把銷售翻了面：頂尖業務不靠口才講產品，而是靠問題讓客戶自己說出需求。用痛點的眼光重讀：他這套「問，不要說」其實是一台量痛的機器——而手上只有點子、急著解釋自己有多好的你，最該閉嘴發問的，搞不好正是面對自己那個點子。',
  'path'  => '/lens/the-50-best-sales-questions',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《頂尖業務的50個最強問句》',
  'heading'   => '最強的業務，話比客戶還少',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-50-best-sales-questions.html',
  'book'      => ['name' => '頂尖業務的50個最強問句', 'author' => '青木毅'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，有沒有人真的在痛？',
    'body'    => '青木教業務員別急著解釋、先發問；同一套功夫，也能掉頭逼問你自己的點子。花幾分鐘，把它的痛點一格一格問清楚，看看哪一格其實還空著。',
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
    ['name' => '頂尖業務的50個最強問句', 'path' => '/lens/the-50-best-sales-questions'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
