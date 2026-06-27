<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那場創意競擇選了上百回，卻沒讓一個點子真的死掉｜痛點 P.A.I.N.',
  'desc'  => '科辛達《創意競擇》把蘋果做產品的方法拆得又具體又誠實——一輪輪 demo 像演化般篩出最好的版本。用痛點之尺重讀：演化靠淘汰前進，而你那台篩選機只選「哪一版更好」、從不問「該不該做」，評審席上還只坐著你自己。',
  'path'  => '/lens/creative-selection',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《創意競擇》',
  'heading'   => '你那場創意競擇選了上百回，卻從沒讓一個點子真的死掉',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/creative-selection.html',
  'book'      => ['name' => '創意競擇', 'author' => 'Ken Kocienda 肯・科辛達'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那台篩選機，這輩子讓任何一版點子真的死過嗎？',
    'body'    => '《創意競擇》教你把東西一版版磨到極好，卻沒教你在動手之前先確認外面有沒有人要。花五分鐘，替你的點子找出最虛的那一軸。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '創意競擇',      'path' => '/lens/creative-selection'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
