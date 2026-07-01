<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '經理人其實不是坐著深思的人:明茲伯格的傳說與真相｜經典觀念',
  'desc'  => '亨利・明茲伯格(Henry Mintzberg)1975 年在《哈佛商業評論》發表的〈The Manager\'s Job: Folklore and Fact〉,用實地觀察戳破「經理人是冷靜規劃者」的迷思:真實的管理工作步調飛快、被切成碎片,還藏著十種你天天在扮卻沒名字的角色。碎片化不是你的失敗,而是這份工作的本質。',
  'path'  => '/idea/managers-job-folklore',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 亨利・明茲伯格',
  'heading'   => '經理人其實不是坐著深思的人',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/managers-job-folklore.html',
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
    ['name' => '經理人的工作', 'path' => '/idea/managers-job-folklore'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
