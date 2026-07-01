<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你以為在做策略，其實只是在做計畫｜經典觀念',
  'desc'  => '年度會議產出一本厚厚的計畫書，大家都很安心，卻答不出「憑什麼贏顧客」。策略學者羅傑・馬丁說，把可控的成本、時程排好只是計畫，真正的策略是對外下注、一定伴隨不安。',
  'path'  => '/idea/big-lie-strategic-planning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 羅傑・馬丁',
  'heading'   => '你以為在做策略，其實只是在做計畫',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/big-lie-strategic-planning.html',
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
    ['name' => '策略與計畫的差別', 'path' => '/idea/big-lie-strategic-planning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
