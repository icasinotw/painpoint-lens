<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '市場全球化：賣同一套的勝算｜經典觀念',
  'desc'  => '品牌出海，每個市場都各改一套配方，真的比較貼心嗎？希奧多・李維特1983年在《哈佛商業評論》的〈The Globalization of Markets〉主張：科技把全世界的需求拉向趨同，賣同一套標準品、靠規模壓低成本的公司會勝出。用台灣手搖飲、鳳梨酥出海的例子講清楚，並誠實補上今天的折衷。',
  'path'  => '/idea/globalization-of-markets',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 希奧多・李維特',
  'heading'   => '市場全球化：賣同一套的勝算',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/globalization-of-markets.html',
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
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '市場全球化', 'path' => '/idea/globalization-of-markets'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
