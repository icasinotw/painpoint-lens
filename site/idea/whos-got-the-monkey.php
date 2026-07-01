<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '主管的時間：猴子在誰背上？｜經典觀念',
  'desc'  => '昂肯與瓦斯 1974 年在《哈佛商業評論》用「猴子」比喻主管為何忙到爆、部屬卻很閒。白話拆解：對話結束時，下一步是誰要動？怎麼讓猴子留在部屬背上，以及授權的五個自由度。',
  'path'  => '/idea/whos-got-the-monkey',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 昂肯與瓦斯',
  'heading'   => '主管的時間：猴子在誰背上？',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/whos-got-the-monkey.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典，值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本，當你進門的橋。讀懂了觀念，更多用同一種眼光拆解的商業經典，都在拆書區等你。',
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
    ['name' => '首頁',      'path' => '/'],
    ['name' => '經典觀念',   'path' => '/idea'],
    ['name' => '猴子在誰背上', 'path' => '/idea/whos-got-the-monkey'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
