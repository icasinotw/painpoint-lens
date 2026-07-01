<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '市場還沒開口，你的大腦已經先替它答應了：用痛點之尺重讀《我們為何相信》｜痛點 P.A.I.N.',
  'desc'  => '薛莫在《我們為何相信》說，大腦是一台先相信、再找理由的機器：你先落在一個結論上，才回頭替它蒐集贊成的證據。用痛點的眼光重讀：這正解釋了「先確認有人要」為什麼難到違反人性——你以為在驗證點子，其實你的腦早替它湊好一整疊贊成票，還把每句客套都聽成市場在喊你。',
  'path'  => '/lens/the-believing-brain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《我們為何相信》',
  'heading'   => '市場還沒開口，你的大腦已經先替它答應了',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-believing-brain.html',
  'book'      => ['name' => '我們為何相信', 'author' => 'Michael Shermer（麥可・薛莫）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「一定有人要」的點子，真的有人要嗎？',
    'body'    => '別再問朋友喜不喜歡了——他們是你請來的贊成證人。這禮拜找三個最有資格拒絕你的人，問一個逼得出真金白銀的問題：現在就要付錢，你會不會付。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '我們為何相信',      'path' => '/lens/the-believing-brain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
