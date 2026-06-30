<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他們在你的廣告前哭了，然後關掉，沒買：用痛點之尺重讀《故事行銷》｜痛點 P.A.I.N.',
  'desc'  => '李洛克《故事行銷》把說故事變成一套照著做就會動人的靶心人公式，瞄得也準——主角是顧客、阻礙是顧客的痛。但公式調的是「感動」，而感動不會自己變成訂單。用 P.A.I.N. 補一刀：先確認那個阻礙是真人正在花錢解的痛，再餵進公式。',
  'path'  => '/lens/story-marketing',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《故事行銷》',
  'heading'   => '他們在你的廣告前哭了，然後關掉，沒買',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/story-marketing.html',
  'book'      => ['name' => '故事行銷', 'author' => '李洛克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個催淚的故事，賣得動嗎？',
    'body'    => '李洛克教你把顧客的阻礙說得催淚；痛點之尺再問一句：那個阻礙，是真人正在花錢解的痛，還是你為了好寫捏出來的？五分鐘把心裡那個顧客，跟現實對一次。',
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
    ['name' => '故事行銷',  'path' => '/lens/story-marketing'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
