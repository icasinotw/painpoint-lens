<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '領導者到底在做什麼：管理與領導的分工｜經典觀念',
  'desc'  => '哈佛商學院教授約翰・科特說，管理和領導是兩件不同、但都必要的事：管理應付複雜、領導應付變化。多數公司的毛病是「管理過度、領導不足」。用台灣在地例子白話帶你分清楚，附今天就能自問的一句檢查句。',
  'path'  => '/idea/what-leaders-really-do',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 約翰・科特',
  'heading'   => '領導者到底在做什麼：管理與領導的分工',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/what-leaders-really-do.html',
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
    ['name' => '管理與領導', 'path' => '/idea/what-leaders-really-do'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
