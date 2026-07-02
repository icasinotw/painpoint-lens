<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '別急著把團隊帶好，先搞清楚你帶的是哪一種：用痛點之尺重讀《高能團隊的關鍵ABCDE五法則》｜痛點 P.A.I.N.',
  'desc'  => '《高能團隊的關鍵ABCDE五法則》說團隊是有法則的、不是靠精神喊話。用痛點的眼光重讀麻野耕司：帶團隊跟做生意同一個紀律——動手前先認出你這支是哪種隊，別拿別人的成功劇本硬套，不然抄來的都是別人的解。',
  'path'  => '/lens/the-team',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《高能團隊的關鍵ABCDE五法則》',
  'heading'   => '別急著把團隊帶好，先搞清楚你帶的是哪一種',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-team.html',
  'book'      => ['name' => '高能團隊的關鍵ABCDE五法則', 'author' => '麻野耕司'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先分清楚你帶的是哪種隊，再決定怎麼帶',
    'body'    => '麻野耕司要你動手帶團隊之前，先認出它是哪一種；痛點這把尺，把同一個動作用在你手上任何一個決定——先確認你面對的是什麼，再選招式。',
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
    ['name' => '高能團隊的關鍵ABCDE五法則', 'path' => '/lens/the-team'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
