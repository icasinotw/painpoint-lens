<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '站在對的曲線上，照樣可以血本無歸：用痛點之尺重讀《奇點已近》｜痛點 P.A.I.N.',
  'desc'  => '庫茲威爾《奇點已近》用一條畫了百年、沒斷過的運算力曲線，把人推向 2045 年的奇點。可一條再準的曲線只標得出終點，標不出你腳下這一步底下有沒有人要。用痛點的眼光重讀：趨勢的必然不等於你那一注的必然，看對方向也會死在「還沒輪到我」跟「沒人要我這一個」中間；曲線該畫，但畫完還得自己出門，數出幾個真的肯掏錢的人。',
  'path'  => '/lens/the-singularity-is-nearer',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《奇點已近》',
  'heading'   => '站在對的曲線上，照樣可以血本無歸',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-singularity-is-nearer.html',
  'book'      => ['name' => '奇點已近(The Singularity Is Nearer)', 'author' => 'Ray Kurzweil 雷・庫茲威爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '曲線畫得再準，也得有人要才算數',
    'body'    => '庫茲威爾教你把大趨勢畫成一條線；接下來那半題——你那條線底下，現在有沒有真人在痛、在掏錢——得自己出門驗。挑三個跟你不熟的人，看他們是不是已經在用爛辦法硬解這件事。',
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
    ['name' => '奇點已近',  'path' => '/lens/the-singularity-is-nearer'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
