<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別人為什麼不信你?信任的三根柱子｜經典觀念',
  'desc'  => '法蘭西斯・佛雷與安・莫里斯(Frances X. Frei & Anne Morriss)2020 年在《哈佛商業評論》發表的〈Begin with Trust〉,把信任拆成真誠、邏輯、同理三根柱子。別人不信你,通常是其中一根在晃。本文用台灣職場例子,教你先找出自己晃的是哪一根,再對症修。',
  'path'  => '/idea/begin-with-trust',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 佛雷與莫里斯',
  'heading'   => '別人為什麼不信你？信任三根柱子',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/begin-with-trust.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '信任三根柱子', 'path' => '/idea/begin-with-trust'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
