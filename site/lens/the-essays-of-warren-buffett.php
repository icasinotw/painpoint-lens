<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《巴菲特寫給股東的信》',
  'desc'  => '《巴菲特寫給股東的信》一輩子守一條紀律——能力圈：只在自己真懂的生意裡出手，圈外的碰都不碰。用痛點的眼光重讀：你懂產品、懂技術，全在圈內；唯獨「有沒有陌生人肯掏錢」那一格坐在你圈外最遠的角落，你卻拿全副身家押了上去。',
  'path'  => '/lens/the-essays-of-warren-buffett',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《巴菲特寫給股東的信》',
  'heading'   => '你押上全副身家的那一格，正在你能力圈外',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-essays-of-warren-buffett.html',
  'book'      => ['name' => '巴菲特寫給股東的信（The Essays of Warren Buffett）', 'author' => 'Warren Buffett 華倫・巴菲特、Lawrence Cunningham 勞倫斯・康寧漢'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在把身家押上那一格之前，先確認它在你圈裡還是圈外',
    'body'    => '巴菲特只在能力圈內出手，圈外的碰都不碰。這把尺幫你把那條線畫到自己的點子上：先認出「有沒有人要」落在圈裡還是圈外，再決定該不該拿好幾年去押它。',
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
    ['name' => '巴菲特寫給股東的信',  'path' => '/lens/the-essays-of-warren-buffett'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
