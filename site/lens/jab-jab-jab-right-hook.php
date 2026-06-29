<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '右鉤拳練得再準，台上得先有人：用痛點之尺重讀《一擊奏效的社群行銷術》｜痛點 P.A.I.N.',
  'desc'  => '《一擊奏效的社群行銷術》把社群行銷拆成「刺拳、刺拳、刺拳，右鉤拳」——先給再要的一套拳法。用痛點的眼光重讀：范納洽把怎麼出拳教到出神入化，卻沒問台上有沒有一個會被打中的對手。先確認有人，再回來練你的組合拳。',
  'path'  => '/lens/jab-jab-jab-right-hook',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《一擊奏效的社群行銷術》',
  'heading'   => '右鉤拳練得再準，台上得先有人',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/jab-jab-jab-right-hook.html',
  'book'      => ['name' => '一擊奏效的社群行銷術', 'author' => 'Gary Vaynerchuk（蓋瑞・范納洽）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那套行銷，打得到人嗎？',
    'body'    => '范納洽教你把社群內容打進每個平台、先給再要；在你優化「給幾次、要幾次」之前，先確認台上真的站著一個會被打中的人。現在就免費體檢一個點子，五分鐘看出你最弱的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '一擊奏效的社群行銷術',     'path' => '/lens/jab-jab-jab-right-hook'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
