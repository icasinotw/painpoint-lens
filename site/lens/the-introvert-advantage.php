<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你花在變外向上的力氣，可能投錯了地方：用痛點之尺重讀《內向心理學》｜痛點 P.A.I.N.',
  'desc'  => '蘭妮在《內向心理學》把內向還原成一個能量問題：你靠獨處充電，硬撐社交就漏電。用痛點的眼光重讀：在你花力氣把自己改造得更外向之前，先做一次需求驗證——「更外向」真的解掉了你某個具體的痛，還是只在安撫「怕被別人覺得怪」的焦慮？別被「多社交才會成功」這支從沒替你驗算過的廣告，騙著去升級一個根本沒人要的版本的自己。',
  'path'  => '/lens/the-introvert-advantage',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《內向心理學》',
  'heading'   => '你花在變外向上的力氣，可能投錯了地方',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-introvert-advantage.html',
  'book'      => ['name' => '內向心理學', 'author' => 'Marti Olsen Laney（瑪蒂・蘭妮）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在「修」的那個缺點，真的在扣你的分嗎？',
    'body'    => '在你花力氣改掉自己之前，先確認那個「缺點」真的造成了具體損失，而不是你腦補出來的一場評價。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '內向心理學',     'path' => '/lens/the-introvert-advantage'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
