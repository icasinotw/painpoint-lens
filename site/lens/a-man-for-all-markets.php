<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '贏一輩子的人，從不押到輸一次就出局：用痛點之尺拆《他是賭神，更是股神》｜痛點 P.A.I.N.',
  'desc'  => '索普先在賭桌上算出贏面、發明算牌，再把同一顆腦袋搬到華爾街連賺快二十年。但真正讓他活到最後的，是他從不把自己押到「輸一次就出局」的位置。用痛點的眼光重讀：你賭一個點子時，別只問有沒有機會，先算清楚賭錯了還剩不剩下一局。',
  'path'  => '/lens/a-man-for-all-markets',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《他是賭神，更是股神》',
  'heading'   => '贏一輩子的人，從不押到輸一次就出局',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/a-man-for-all-markets.html',
  'book'      => ['name' => '他是賭神，更是股神（A Man for All Markets）', 'author' => 'Edward Thorp 愛德華・索普'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別只算「會不會贏」，先算「賭錯了還剩不剩下一局」',
    'body'    => '索普一輩子只做兩個動作：先算清楚自己有沒有優勢，再算清楚就算全錯，明天還能不能坐回牌桌。同一套心法，用在你手上那個「我覺得會成」的點子上，就是先確認真的有人要，再把賭注壓到輸得起的大小。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '他是賭神，更是股神',        'path' => '/lens/a-man-for-all-markets'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
