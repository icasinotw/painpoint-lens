<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《高勝率創新》：別太早殺掉瘋點子，但先分清楚它是不是妄想｜痛點 P.A.I.N.',
  'desc'  => '巴考《高勝率創新》要你別太早掐死瘋點子；但抱著點子的人，最會拿這句替一個沒人要的東西續命。用痛點的眼光重讀「假性失敗」與「摩西陷阱」：瘋點子被偏見打壓、妄想被現實打回票，差別只能靠一個陌生人掏不掏錢來分。',
  'path'  => '/lens/loonshots',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高勝率創新》',
  'heading'   => '巴考教你別太早殺掉一個瘋點子，你卻拿這句，替一個沒人要的點子續命',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/loonshots.html',
  'book'      => ['name' => '高勝率創新', 'author' => 'Safi Bahcall 薩菲・巴考'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，是瘋點子，還是妄想？',
    'body'    => '巴考要你別太早殺掉瘋點子；痛點這把尺，幫你先分清它是被偏見打壓、還是被現實打回票。五分鐘免費體檢一個點子，看看它過不過得了那場你一直繞開的考試。',
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
    ['name' => '高勝率創新', 'path' => '/lens/loonshots'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
