<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '克里斯汀生：你要用什麼標準衡量人生｜經典觀念',
  'desc'  => '破壞式創新之父克里斯汀生，把研究企業成敗的工具反過來對準人生：你真正的策略藏在時間花去哪、別對家人做延後投資、當心「就這一次」的邊際成本陷阱，並趁早想清楚要用什麼尺衡量自己。',
  'path'  => '/idea/how-will-you-measure-your-life',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 克雷頓・克里斯汀生',
  'heading'   => '克里斯汀生：你要用什麼標準衡量人生',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-will-you-measure-your-life.html',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '衡量人生', 'path' => '/idea/how-will-you-measure-your-life'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
