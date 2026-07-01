<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '光有創意還不夠：李維特這篇經典在說什麼｜經典觀念',
  'desc'  => '希奧多・李維特(Theodore Levitt)1963 年在《哈佛商業評論》發表的〈Creativity Is Not Enough〉,把創意和創新分成兩件事:想出點子人人會,把點子扛過現實做出來的人才稀缺又值錢。用白話帶你抓重點,以及主管該怎麼看待點子與提點子的人。',
  'path'  => '/idea/creativity-is-not-enough',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 希奧多・李維特',
  'heading'   => '光有創意還不夠，李維特這篇經典在說什麼',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/creativity-is-not-enough.html',
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
    ['name' => '光有創意還不夠', 'path' => '/idea/creativity-is-not-enough'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
