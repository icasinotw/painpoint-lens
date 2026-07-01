<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '掛名團隊還是真團隊?一篇經典幫你分清楚｜經典觀念',
  'desc'  => '一群人掛上團隊的名字,不等於真的是團隊。卡然巴赫與史密斯1993年在《哈佛商業評論》的經典〈The Discipline of Teams〉,教你分清「工作群體」與「真團隊」:真團隊有共同目的、具體目標、共同方法,還要彼此當責,產出才會大於個人加總。',
  'path'  => '/idea/discipline-of-teams',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 卡然巴赫與史密斯',
  'heading'   => '掛名團隊還是真團隊？一篇經典幫你分清楚',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/discipline-of-teams.html',
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
    ['name' => '團隊的紀律', 'path' => '/idea/discipline-of-teams'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
