<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '它想變成巨人，於是什麼客戶都收：用痛點之尺重讀《黑暗巨塔》｜痛點 P.A.I.N.',
  'desc'  => '恩里奇在《黑暗巨塔》裡還原德意志銀行的興衰：一家百年老銀行一心想擠進華爾街頂層，為此什麼客戶都收、什麼風險都扛，最後把自己壓垮。用痛點的眼光重讀：它拚的從來不是「被更多人需要」，是「看起來夠大夠威」——你手上的成長，有多少停掉補貼還站得住？',
  'path'  => '/lens/dark-towers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《黑暗巨塔》',
  'heading'   => '它想變成巨人，於是什麼客戶都收',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/dark-towers.html',
  'book'      => ['name' => '黑暗巨塔：德意志銀行的興衰', 'author' => 'David Enrich（大衛・恩里奇）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「越長越大」的東西，是真的有人要，還是撐出來的？',
    'body'    => '把最近讓你得意的成長訊號一條條寫下來，對每一條問一句：這是因為更多人真心需要我，還是因為我在花錢、借錢、打折撐場面？停掉補貼就會塌的那幾條，先自己圈出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '黑暗巨塔',    'path' => '/lens/dark-towers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
