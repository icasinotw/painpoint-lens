<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '最會算數字的師父，輸給一台傳真機：用痛點之尺重讀《師父》｜痛點 P.A.I.N.',
  'desc'  => '《師父》教你像老師傅一樣，用毛利、現金幾個數字就讀出一門生意的死活。但帳本量得出你現在這門生意健不健康，量不到撐著它的需求明年還在不在——布羅斯基自己那家帳面漂亮的快遞公司，就是被一台傳真機抽走了底下那塊地。',
  'path'  => '/lens/street-smarts',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《師父》',
  'heading'   => '最會算數字的師父，輸給一台傳真機',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/street-smarts.html',
  'book'      => ['name' => '師父：那些我在課堂外學會的本事', 'author' => 'Norm Brodsky、Bo Burlingham'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那門生意，腳下那塊地還在嗎？',
    'body'    => '《師父》教你把帳算到骨子裡；在動手算之前，先確認外面真有人要、而且會一直要。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '師父',      'path' => '/lens/street-smarts'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
