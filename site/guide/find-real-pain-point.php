<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '怎麼找到真正的痛點:用看的、不用問的,挖出別人願意付錢的痛｜痛點之尺',
  'desc'  => '大部分人「找痛點」是坐在書桌前想出來的,那是願望不是痛點。真痛點看的是「他已經為它付出過什麼」——用 Excel 土法煉鋼、付錢找人代勞。教你分辨真痛與不便、痛點藏在哪、怎麼用觀察(而非問卷)把它挖出來。',
  'path'  => '/guide/find-real-pain-point',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '創業指南 · 找痛點',
  'heading'   => '怎麼找到真正的痛點',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/find-real-pain-point.html',
  'back'      => ['url' => '/guide', 'label' => '← 全部創業指南'],
  'root'      => ['name' => '創業指南', 'path' => '/guide'],
  'funnel'    => [
    'title'   => '找到一個痛了,先量量看它夠不夠深',
    'body'    => '把你觀察到的痛放上 P.A.I.N. 之尺——免費的點子體檢工具,五分鐘陪你看出它是真痛還是不便、值不值得動手。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/fieldkit', 'label' => '打開《出門找痛》工具箱'],
  ],
  'prev'      => ['url' => '/guide/validate-startup-idea', 'label' => '如何驗證創業點子'],
  'next'      => ['url' => '/guide/validate-market-demand', 'label' => '怎麼知道有沒有人要(驗證市場需求)'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '創業指南',  'path' => '/guide'],
    ['name' => '怎麼找到真正的痛點', 'path' => '/guide/find-real-pain-point'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
