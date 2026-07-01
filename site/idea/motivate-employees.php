<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '加薪留不住人,激勵員工的真正開關｜經典觀念',
  'desc'  => '老闆幫員工加薪,士氣卻沒起色。赫茨伯格1968年《哈佛商業評論》經典〈How Do You Motivate Employees?〉用白話與台灣在地例子告訴你:保健因子只能消除不滿,真正的動力來自成就感與工作本身。',
  'path'  => '/idea/motivate-employees',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 弗雷德里克・赫茨伯格',
  'heading'   => '加薪留不住人，激勵員工的真正開關',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/motivate-employees.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '激勵員工',  'path' => '/idea/motivate-employees'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
