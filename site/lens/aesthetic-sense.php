<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你的品味，和你對點子的偏心，長得一模一樣：用痛點之尺重讀《美意識》｜痛點 P.A.I.N.',
  'desc'  => '山口周《美意識》主張：當大家用同一套分析、算出同一個正確答案，你得靠算不出來的美意識才能不一樣，他甚至要經營者去看畫。用痛點的眼光重讀：你的品味和你對自己點子的偏心，從裡面看一模一樣——挑出你最不肯妥協的那塊堅持，拿去門外問有沒有人真為它付過錢，再決定它是地基還是錯覺。',
  'path'  => '/lens/aesthetic-sense',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《美意識》',
  'heading'   => '你的品味，和你對點子的偏心，長得一模一樣',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/aesthetic-sense.html',
  'book'      => ['name' => '美意識：世界頂尖菁英為什麼都在鍛鍊「美意識」？（世界のエリートはなぜ「美意識」を鍛えるのか）', 'author' => '山口周 Shu Yamaguchi'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最不肯妥協的那塊堅持，門外有人要嗎？',
    'body'    => '那塊「少了它就不是我想做的東西」的堅持，很可能是你的美意識，也可能只是你太愛它。趁還沒押上去，先挑出它，去問門外那群人，有沒有誰真的為它花過錢。',
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
    ['name' => '美意識',    'path' => '/lens/aesthetic-sense'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
