<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '全世界最有錢的公司，買不到一個「還有誰在痛」的答案：用痛點之尺重讀《蘋果進行式》｜痛點 P.A.I.N.',
  'desc'  => '賈伯斯走後，蘋果一度衝上三兆美元，但撐起這多出來的市值，大半不是新發明，而是從已經賣出的幾億支手機身上多收一點——從革新，走到鍍金。用痛點之尺重讀《蘋果進行式》：你的生意也有兩種成長，報表分不出鍍金和革新，連最有錢的公司都躲不掉「金總有一天鍍到頭」那一天。',
  'path'  => '/lens/after-steve',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《蘋果進行式》',
  'heading'   => '全世界最有錢的公司，買不到一個「還有誰在痛」的答案',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/after-steve.html',
  'book'      => ['name' => '蘋果進行式', 'author' => 'Tripp Mickle 特里普・米克爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '你這個月的成長，是鍍來的，還是革出來的',
    'body'  => '蘋果後賈伯斯時代最會的，是從已經買過的人身上再多收一點；《痛點》這把尺，幫你分清哪一筆是從老客戶鍍出來的、哪一筆是真的解掉一個新的痛。看懂這兩種成長的比例，你才知道自己是往前長，還是在原地把地板擦亮。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '蘋果進行式',   'path' => '/lens/after-steve'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
