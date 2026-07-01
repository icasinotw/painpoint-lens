<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '每天推進一點點,比大成就更能點燃動力｜經典觀念',
  'desc'  => '想激勵團隊,多數主管先想到加薪、獎金、精神喊話,卻常沒效。哈佛的艾默伯與克瑞默2011年經典〈The Power of Small Wins〉,分析近一萬兩千則工作日誌發現:最能點燃動力的,是每天在有意義工作上往前推進一點點的「進展定律」。用台灣在地例子帶你抓住重點,附今天就能動手的做法。',
  'path'  => '/idea/power-of-small-wins',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 艾默伯與克瑞默',
  'heading'   => '每天推進一點點，比大成就更能點燃動力',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/power-of-small-wins.html',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '小勝利的力量', 'path' => '/idea/power-of-small-wins'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
