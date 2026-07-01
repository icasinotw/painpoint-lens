<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '為什麼你的數據打動不了人心｜經典觀念',
  'desc'  => '完美的數據簡報,台下卻無動於衷——因為數據只到腦、進不了心。好萊塢編劇導師麥基2003年在《哈佛商業評論》的專訪〈Storytelling That Moves People〉:真正讓人行動的是故事,而好故事的引擎是誠實面對阻力。用台灣在地例子帶你把一份提案改寫成一個故事。',
  'path'  => '/idea/storytelling-that-moves-people',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 羅伯特・麥基',
  'heading'   => '為什麼你的數據打動不了人心',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/storytelling-that-moves-people.html',
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
    ['name' => '首頁',       'path' => '/'],
    ['name' => '經典觀念',    'path' => '/idea'],
    ['name' => '用故事說服',  'path' => '/idea/storytelling-that-moves-people'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
