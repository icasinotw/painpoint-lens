<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '機器很會達標，壞就壞在目標設錯了：用痛點之尺重讀《Life 3.0》｜痛點 P.A.I.N.',
  'desc'  => '鐵馬克《Life 3.0》說，真正該怕的不是 AI 學壞，是它太能幹、卻把你沒設好的目標衝到極致。用痛點的眼光重讀：你那間還沒賺錢的新創，本身就是一台只認一個數字的機器——你拚命衝的註冊數、下載數，背後到底站著真的會掏錢的人，還是一群一停補貼就走的影子？',
  'path'  => '/lens/life-3-0',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《Life 3.0》',
  'heading'   => '機器很會達標，壞就壞在目標設錯了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/life-3-0.html',
  'book'      => ['name' => 'Life 3.0：人工智慧時代，人類的牽絆與躍升（Life 3.0）', 'author' => 'Max Tegmark 邁克斯・鐵馬克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你拚命衝的那個數字，背後真的有人嗎？',
    'body'    => '鐵馬克要人類在造出超級智慧前，先想清楚到底要它幹嘛；同一個問題，你也欠你那間公司一次：你天天在衝的那個數字，背後是會掏錢的人，還是一停補貼就散的影子？出門找幾個真人，問他們已經為這件事花了多少。',
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
    ['name' => 'Life 3.0', 'path' => '/lens/life-3-0'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
