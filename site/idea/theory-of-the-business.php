<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '公司一直做對事，為什麼還是走下坡｜經典觀念',
  'desc'  => '每家公司背後都藏著一套沒寫出來的假設：我們是誰、市場是什麼、顧客要什麼、靠什麼贏。杜拉克說，公司出大問題常不是做錯事，而是這套假設悄悄過期了。用白話和台灣例子，帶你學會定期體檢自己的經營假設。',
  'path'  => '/idea/theory-of-the-business',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 彼得・杜拉克',
  'heading'   => '公司一直做對事，為什麼還是走下坡',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/theory-of-the-business.html',
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
    ['name' => '企業的經營理論', 'path' => '/idea/theory-of-the-business'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
