<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '動筆前排好的那張大綱，多半是個漂亮的陷阱：用痛點之尺重讀《卡片盒筆記》｜痛點 P.A.I.N.',
  'desc'  => '艾倫斯說，多數人寫東西寫得痛苦，毛病出在最先那個動作：先排一份漂亮大綱，再照著填。用痛點的眼光重讀《卡片盒筆記》：那張大綱是你對題目懂得最少時就釘死的骨架，跟創業者開工前那份完美計畫書同一個病——別信漂亮劇本，讓題目從你一張張真實卡片裡自己長出來。',
  'path'  => '/lens/how-to-take-smart-notes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《卡片盒筆記》',
  'heading'   => '動筆前排好的那張大綱，多半是個漂亮的陷阱',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/how-to-take-smart-notes.html',
  'book'      => ['name' => '卡片盒筆記：最高效思考筆記術，德國教授超強秘技，促進寫作、學習與思考，使你的所學得以一以貫之', 'author' => 'Sönke Ahrens（申克・艾倫斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你下一篇要寫的東西，打算先排大綱，還是先攤卡片？',
    'body'    => '把開工前那張漂亮大綱先收起來，把手邊真正想過的材料攤開，看題目自己從哪一堆浮出來——這才是這套方法搬到你工作上的真正吃法。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '卡片盒筆記',      'path' => '/lens/how-to-take-smart-notes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
