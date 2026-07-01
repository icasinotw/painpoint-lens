<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '創新別再喊口號,先修最弱的一環｜經典觀念',
  'desc'  => '創新不是喊「要更有創意」就會發生。韓森與博金蕭2007年在《哈佛商業評論》的〈創新價值鏈〉把創新拆成生點子、篩轉化、擴散落地三環;一條鏈的強度取決於最弱那一環,先診斷你最短的板,再對症下藥。',
  'path'  => '/idea/innovation-value-chain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 韓森與博金蕭',
  'heading'   => '創新別再喊口號，先修最弱的一環',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/innovation-value-chain.html',
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
    ['name' => '創新價值鏈', 'path' => '/idea/innovation-value-chain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
