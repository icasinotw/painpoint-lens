<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '為什麼強的公司做不了新事業:RPV 三種能力｜經典觀念',
  'desc'  => '資源人才都比新創多的老公司,想做新事業卻總卡住。克里斯汀生與歐佛多夫(Clayton Christensen & Michael Overdorf)2000 年在《哈佛商業評論》發表的〈Meeting the Challenge of Disruptive Change〉,用資源、流程、價值觀三種能力(RPV),說清楚讓公司變強的東西為何反而讓它做不了破壞式新事業,以及該怎麼辦。',
  'path'  => '/idea/meeting-disruptive-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 克里斯汀生與歐佛多夫',
  'heading'   => '為什麼強的公司做不了新事業',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/meeting-disruptive-change.html',
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
    ['name' => '面對破壞式變革', 'path' => '/idea/meeting-disruptive-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
