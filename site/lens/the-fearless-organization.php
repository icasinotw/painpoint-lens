<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《心理安全感的力量》｜痛點 P.A.I.N.',
  'desc'  => '艾德蒙森發現愈好的醫療團隊、帳面上的出錯紀錄反而愈長——因為強隊敢承認，弱隊只敢沉默。用痛點之尺重讀《心理安全感的力量》：你替自己的點子蓋了一間最沉默的公司，只請了不會讓你難堪的人當董事，卻從沒讓一個會掏錢的陌生人當你的面搖頭。',
  'path'  => '/lens/the-fearless-organization',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《心理安全感的力量》',
  'heading'   => '她以為自己搞砸了論文——最好的醫療團隊，出錯紀錄反而最長',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-fearless-organization.html',
  'book'      => ['name' => '心理安全感的力量：別讓沉默扼殺了你和團隊的未來！', 'author' => 'Amy C. Edmondson 艾美・艾德蒙森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，敢不敢讓一個陌生人當面搖頭？',
    'body'    => '艾德蒙森教團隊把壞消息變便宜；同一招用在你自己的點子上，就是趁它還只值一個下午，先讓一個不疼你的人驗一次。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '心理安全感的力量',  'path' => '/lens/the-fearless-organization'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
