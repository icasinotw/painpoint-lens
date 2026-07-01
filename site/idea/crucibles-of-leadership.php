<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '領導的熔爐：那次把你打到谷底的事｜經典觀念',
  'desc'  => '偉大的領導人幾乎都經歷過一次「熔爐級」的嚴酷試煉——被逼到極限、重新檢視自己是誰。班尼斯與湯瑪斯2002年在《哈佛商業評論》的〈Crucibles of Leadership〉指出：差別不在有沒有遇到磨難，而在能不能萃取意義、重新鑄造自己，其中最關鍵的是逆境中找路的「適應力」。',
  'path'  => '/idea/crucibles-of-leadership',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 班尼斯與湯瑪斯',
  'heading'   => '領導的熔爐：那次把你打到谷底的事',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/crucibles-of-leadership.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/idea', 'label' => '更多經典觀念'],
    'ghost'   => ['url' => '/lens', 'label' => '去看更多拆書'],
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
    ['name' => '領導的熔爐', 'path' => '/idea/crucibles-of-leadership'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
