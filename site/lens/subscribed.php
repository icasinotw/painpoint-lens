<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你連一個訂戶都還沒有，就在算怎麼讓他續第二年：用痛點之尺重讀《訂閱經濟》｜痛點 P.A.I.N.',
  'desc'  => '《訂閱經濟》把財務報表重畫一遍，告訴你訂閱生意的命脈是流失率——客戶每個月都重新投一次票。但這套儀表板要先有人訂第一次才轉得動。用痛點之尺重讀左軒霆：經常性收入是一張押兩次的賭注，先確認有人要，再去談怎麼讓他續第二年。',
  'path'  => '/lens/subscribed',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《訂閱經濟》',
  'heading'   => '你連一個訂戶都還沒有，就在算怎麼讓他續第二年',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/subscribed.html',
  'book'      => ['name' => '訂閱經濟：如何用最強商業模式，開啟全新服務商機', 'author' => 'Tien Tzuo 左軒霆'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那筆「第二年的續訂」，靠的是第一年有人真的要',
    'body'    => '《訂閱經濟》教你把訂戶經營成一條穩穩流進來的河；《痛點》這把尺，幫你先確認上游那座水庫真的有水。現在就免費體檢一個點子，五分鐘找出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '訂閱經濟',  'path' => '/lens/subscribed'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
