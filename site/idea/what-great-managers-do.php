<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '頂尖主管只做好這一件事｜經典觀念',
  'desc'  => '平庸主管想把每個人磨成一樣，頂尖主管做的核心一件事，是發現每個部屬的獨特之處，拿他的長處、觸發點與學習風格當槓桿。馬克斯・巴金漢2005年在《哈佛商業評論》的〈What Great Managers Do〉，用下棋的比喻和台灣小店的例子，帶你看懂怎麼把人擺到對的位置。',
  'path'  => '/idea/what-great-managers-do',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 馬克斯・巴金漢',
  'heading'   => '頂尖主管只做好這一件事',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/what-great-managers-do.html',
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
    ['name' => '頂尖主管只做好這一件事', 'path' => '/idea/what-great-managers-do'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
