<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在簽下一套系統之前，先問你的轉型要替誰止血：用痛點之尺重讀《數位轉型力》｜痛點 P.A.I.N.',
  'desc'  => '詹文男的《數位轉型力》把企業的數位之路切成數位化、數位優化、數位轉型三段，讓你看清自己其實還在第一階。用痛點的眼光重讀：這張地圖會告訴你站在哪，卻不會逼你先答最關鍵的一題——你要轉型解的痛，是顧客正在流血的傷口，還是你自己怕被淘汰的焦慮？',
  'path'  => '/lens/digital-transformation-power',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《數位轉型力》',
  'heading'   => '在簽下一套系統之前，先問你的轉型要替誰止血',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/digital-transformation-power.html',
  'book'      => ['name' => '數位轉型力：最完整的企業數位化策略×50間成功企業案例解析', 'author' => '詹文男 等（資策會數位轉型研究團隊）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個數位專案，到底在替誰止血？',
    'body'    => '挑你公司這一年砸最多錢的那個數位專案，問一句：今天把它整個關掉，營收、成本、顧客留存哪一條數字會真的動？指不出那條線，那筆錢買的多半是安心，不是顧客的痛。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '數位轉型力',    'path' => '/lens/digital-transformation-power'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
