<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '為什麼越聰明的人越不會學習｜經典觀念',
  'desc'  => '克里斯・阿吉里斯(Chris Argyris)1991 年在《哈佛商業評論》發表〈Teaching Smart People How to Learn〉,點出一個矛盾:越專業、越少失敗的人,一被質疑越容易防衛、把錯推給別人。本文用白話講清單環與雙環學習,以及主管怎麼先檢討自己、帶團隊一起學。',
  'path'  => '/idea/teaching-smart-people-to-learn',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 克里斯・阿吉里斯',
  'heading'   => '為什麼越聰明的人越不會學習',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/teaching-smart-people-to-learn.html',
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
    ['name' => '教聰明人學習', 'path' => '/idea/teaching-smart-people-to-learn'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
