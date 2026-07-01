<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '喊得越大聲的未來，越要先過磅：用痛點之尺重讀《這個世界運作的真相》｜痛點 P.A.I.N.',
  'desc'  => '瓦茲拉夫・史密爾《這個世界運作的真相》拒絕給你一個關於未來的漂亮故事，只把每個說法拆成看得見的實物數量、擺上磅秤。用痛點的眼光重讀，他對整個文明做的，正是《痛點》逼創業者練的功——別為一個沒人驗過的漂亮承諾點頭，先把那本帳算清、掂過重量再說。',
  'path'  => '/lens/how-the-world-really-works',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《這個世界運作的真相》',
  'heading'   => '喊得越大聲的未來，越要先過磅',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/how-the-world-really-works.html',
  'book'      => ['name' => '這個世界運作的真相', 'author' => 'Vaclav Smil 瓦茲拉夫・史密爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近點頭的那個未來，查過帳嗎？',
    'body'    => '史密爾把整個世界拆成算得出的實物數量再決定信不信；同一套「別為漂亮承諾先掏心，先把代價算清」的紀律，也能拿去重看你手上正在推的那個計畫或那個決定。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '這個世界運作的真相', 'path' => '/lens/how-the-world-really-works'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
