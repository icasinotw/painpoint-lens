<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '蓋茲走進酒吧，平均值就開始騙人：用痛點之尺重讀《把統計學剝光光》｜痛點 P.A.I.N.',
  'desc'  => '《把統計學剝光光》作者惠倫說，多數人怕統計都怕錯了地方。用痛點的眼光重讀：你蒐集數字想客觀，但平均值、歪掉的樣本、被誤讀的因果，正用一張「客觀」的臉，把你本來就想聽的答案餵給你。',
  'path'  => '/lens/naked-statistics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《把統計學剝光光》',
  'heading'   => '蓋茲走進酒吧，平均值就開始騙人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/naked-statistics.html',
  'book'      => ['name' => '把統計學剝光光（Naked Statistics）', 'author' => '查爾斯・惠倫 Charles Wheelan'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你手上那個數字，是不是在騙你自己？',
    'body'    => '《把統計學剝光光》教你看穿數字裡的戲法；至於你自己那個點子站不站得住，得拿真實的人、真實的錢去對一對。',
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
    ['name' => '把統計學剝光光',  'path' => '/lens/naked-statistics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
