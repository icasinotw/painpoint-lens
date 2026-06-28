<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子帳上最大那座山，是利滾利滾出來的，還是有人真的存過本金？｜痛點 P.A.I.N.',
  'desc'  => '皮凱提用三百年稅務資料證明 r 大於 g：錢堆成山就會自己長，長得比你流汗做出新東西還快，過去會把未來吃掉。用痛點之尺重讀《二十一世紀資本論》：你那個點子最大的資產「一定有人要」，利滾利滾了兩年，本金卻還是零——這禮拜，逼它賺第一塊 g。',
  'path'  => '/lens/capital-in-the-twenty-first-century',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《二十一世紀資本論》',
  'heading'   => '那個假設滾了兩年利息，本金到今天還是零',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/capital-in-the-twenty-first-century.html',
  'book'      => ['name' => '二十一世紀資本論（Capital in the Twenty-First Century）', 'author' => 'Thomas Piketty 托瑪・皮凱提'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個帳面上越堆越高、卻還沒人掏錢的點子？',
    'body'    => '在你再往它裡頭多堆一個週末之前，先把手抽開，看看撐著那座山的，是真的有人要，還是你自己一鏟一鏟堆出來的利息。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '二十一世紀資本論',        'path' => '/lens/capital-in-the-twenty-first-century'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
