<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你有多不道德?連你自己都不知道｜經典觀念',
  'desc'  => '幾乎每個人都自認公平正直,卻在挑人、給獎金、評估貢獻時不知不覺偏向自己人。巴納吉、貝澤曼與查夫2003年《哈佛商業評論》經典〈How (Un)ethical Are You?〉:真正害人的偏見多半藏在無意識裡。用台灣職場例子帶你認得內隱刻板印象、偏袒自己人、高估功勞、利益衝突,解法不是喊要更有道德,是承認盲點、用資料與制度去抓它。',
  'path'  => '/idea/how-unethical-are-you',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 巴納吉、貝澤曼與查夫',
  'heading'   => '你有多不道德？連你自己都不知道',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-unethical-are-you.html',
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
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '你有多不道德',   'path' => '/idea/how-unethical-are-you'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
