<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一個連得起三十億人的機器，少問了一句話：用痛點之尺拆《獲利至上》｜痛點 P.A.I.N.',
  'desc'  => '《獲利至上》挖出 Facebook 內部十年——從俄羅斯干預、劍橋分析到緬甸的仇恨外溢，一台把「連結更多人」做到極致的成長機器，如何一路輾過它本來要服務的人。用痛點的眼光拆這本書：當你優化的數字，跟「真的有人被你解了痛」脫了鉤，衝到三十億用戶也只是把一個沒驗過的假設，放大到全世界面前。',
  'path'  => '/lens/an-ugly-truth',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《獲利至上》',
  'heading'   => '一個連得起三十億人的機器，少問了一句話',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/an-ugly-truth.html',
  'book'      => ['name' => '獲利至上：Meta集團稱霸全球的經營黑幕（An Ugly Truth）', 'author' => 'Sheera Frenkel 席拉・法蘭克、Cecilia Kang 西西莉亞・康'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在優化的那個數字，撐得住這一問嗎',
    'body'    => '找出你自己或團隊現在最在乎的那個數字——日活躍、營收、追蹤數、停留時間。問一句：如果它明天翻倍，我聲稱要服務的那個人，他的某個痛真的會跟著變輕嗎？還是他只是停得更久、付得更多？答得越心虛，你離書裡那台機器就越近。',
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
    ['name' => '獲利至上',  'path' => '/lens/an-ugly-truth'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
