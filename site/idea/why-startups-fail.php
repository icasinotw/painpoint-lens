<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '新創收攤，常常不是不夠拚｜經典觀念',
  'desc'  => '新創收攤，多半跟不夠努力無關，而是掉進幾種可以預測的失敗模式。哈佛教授艾森曼歸納的好點子壞夥伴、假起步、速度陷阱，用台灣的例子講清楚，幫你提前繞開。',
  'path'  => '/idea/why-startups-fail',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 湯姆・艾森曼',
  'heading'   => '新創收攤，常常不是不夠拚',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/why-startups-fail.html',
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
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '新創為何失敗', 'path' => '/idea/why-startups-fail'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
