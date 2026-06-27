<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '全票通過的那場會，跟你問來的「我會用」是同一種假：用痛點之尺重讀《克服團隊領導的5大障礙》｜痛點 P.A.I.N.',
  'desc'  => '《克服團隊領導的5大障礙》說一支隊伍爛掉，是因為沒人肯當眾認錯、把難堪的真話擺上桌。用痛點的眼光重讀蘭奇歐尼：你最不敢問市場的那句「搞不好沒人要」，跟那桌高手嚥回去的真話是同一句——先對自己的點子示弱，再走出門要一個真人掏錢。',
  'path'  => '/lens/the-five-dysfunctions-of-a-team',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《克服團隊領導的5大障礙》',
  'heading'   => '全票通過的那場會，跟你問來的「我會用」是同一種假',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/the-five-dysfunctions-of-a-team.html',
  'book'      => ['name' => '克服團隊領導的5大障礙', 'author' => 'Patrick Lencioni 派屈克・蘭奇歐尼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你那個點子，站不站得住？',
    'body'    => '蘭奇歐尼教你讓一桌人敢說真話；《痛點》這把尺，幫你先對自己的點子說一次真話。現在就免費體檢一個點子，五分鐘找出你最不敢驗的那一格；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '克服團隊領導的5大障礙',    'path' => '/lens/the-five-dysfunctions-of-a-team'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
