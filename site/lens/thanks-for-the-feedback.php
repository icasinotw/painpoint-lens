<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '不中聽的回饋，是你最便宜的一次市場驗證｜痛點 P.A.I.N.',
  'desc'  => '史東與西恩《謝謝你的指教》把鏡頭轉向「被指正的那個人」：能從話裡挖出多少，主導權在接收者手上。用痛點的眼光重讀——你聽不進用戶那句「我不會買」，跟聽不進主管的考評是同一個毛病，而你最想反駁的那句話，常是最便宜的一次市場驗證。',
  'path'  => '/lens/thanks-for-the-feedback',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《謝謝你的指教》',
  'heading'   => '不中聽的回饋，是你最便宜的一次市場驗證',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/thanks-for-the-feedback.html',
  'book'      => ['name' => '謝謝你的指教（Thanks for the Feedback）', 'author' => 'Douglas Stone 道格拉斯・史東、Sheila Heen 席拉・西恩'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近一次反駁掉的用戶回饋，是什麼？',
    'body'    => '史東教你別把人給的回饋當噪音砍掉；同一條尺倒過來量你的點子，就是先走出房間，確認外面真的有人為這件事在痛、痛到願意掏錢，而不是關在房間裡跟自己的計畫書對話。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '謝謝你的指教', 'path' => '/lens/thanks-for-the-feedback'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
