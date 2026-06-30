<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他沒發明 QQ，只是比 ICQ 更懂網吧裡的人：用痛點之尺重讀《騰訊傳》｜痛點 P.A.I.N.',
  'desc'  => '吳曉波寫騰訊怎麼從一個照著 ICQ 描出來的 QQ，長成碰得到十億人的公司。被罵抄襲二十年，但它把好友名單搬上伺服器那一手，靠的是看見中國人多半在網吧上網。用痛點的眼光重讀：抄一個產品的外型誰都會，難的是看懂那個地方為什麼非改不可——而那要走出辦公室，去看用的人坐在哪。',
  'path'  => '/lens/the-tencent-story',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《騰訊傳》',
  'heading'   => '他沒發明 QQ，只是比 ICQ 更懂網吧裡的人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-tencent-story.html',
  'book'      => ['name' => '騰訊傳 1998-2016：中國互聯網公司演化論', 'author' => '吳曉波'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的用戶，正坐在哪間你還沒走進去的網吧？',
    'body'    => '騰訊那一手，靠的不是發明，是有人真的去看了用戶坐在哪裡上網。想清楚你手上那個賣不太動的東西，真正在用它的人，是在什麼場景、用什麼設備、卡在哪個動作。',
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
    ['name' => '騰訊傳',    'path' => '/lens/the-tencent-story'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
