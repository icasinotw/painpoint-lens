<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '掃描得到大腦，掃描不到需要：用痛點之尺重讀《九成顧客全買單的腦神經行銷學》｜痛點 P.A.I.N.',
  'desc'  => '《九成顧客全買單的腦神經行銷學》要你別再問顧客、改用腦科學掃描他的決定。用痛點之尺重讀：掃描儀量得到大腦對眼前東西的反應，量不到一個人有沒有真的需要——最像證據的腦圖，可能正在量錯的東西。',
  'path'  => '/lens/brain-science-for-business',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《九成顧客全買單的腦神經行銷學》',
  'heading'   => '掃描得到大腦，掃描不到需要',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/brain-science-for-business.html',
  'book'      => ['name' => '九成顧客全買單的腦神經行銷學', 'author' => '萩原一平'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在掃描大腦之前，先確認有人想被你說服',
    'body'    => '萩原一平教你讀懂顧客大腦怎麼點頭；痛點之尺幫你確認，點頭之前，這個人是不是真的需要。花五分鐘免費體檢一個點子，看看你要賣的東西，有沒有人在你不在場時也想要。',
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
    ['name' => '九成顧客全買單的腦神經行銷學', 'path' => '/lens/brain-science-for-business'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
