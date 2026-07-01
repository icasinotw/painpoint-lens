<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '設計思考：先去看人，別先想產品｜經典觀念',
  'desc'  => 'IDEO 執行長提姆・布朗在《哈佛商業評論》提出的設計思考，用白話拆給你聽：以人為本、先做粗糙原型早點試、讓不同專業的人一起想。配便當店、手搖飲這些台灣在地小例子，不必請顧問今天就能動手。',
  'path'  => '/idea/design-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 提姆・布朗',
  'heading'   => '設計思考：先去看人，別先想產品',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/design-thinking.html',
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
    ['name' => '設計思考',  'path' => '/idea/design-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
