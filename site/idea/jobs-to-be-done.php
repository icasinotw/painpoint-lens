<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '顧客不是買產品，是雇用它去完成一件事｜經典觀念',
  'desc'  => '克里斯汀生的「用途理論」（Jobs to Be Done）用白話講：顧客走進你店裡，是為了完成生活中某件任務才「雇用」你的產品。看懂那件任務，你才知道真正的對手是誰、該改哪裡。配手搖飲與早餐店的台灣例子。',
  'path'  => '/idea/jobs-to-be-done',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 克里斯汀生',
  'heading'   => '顧客不是買產品，是雇用它去完成一件事',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/jobs-to-be-done.html',
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
    ['name' => '用途理論',  'path' => '/idea/jobs-to-be-done'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
