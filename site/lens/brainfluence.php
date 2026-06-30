<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '神經行銷是擴音器，先得有人想聽：用痛點之尺重讀《大腦拒絕不了的行銷》｜痛點 P.A.I.N.',
  'desc'  => '《大腦拒絕不了的行銷》給你一百個讓大腦點頭的神經行銷開關，每一招都真有研究撐腰。用痛點之尺重讀：這些招本質上都是擴音器，先得有人想聽——動手調鈕前，先驗那個需求是不是真的存在。',
  'path'  => '/lens/brainfluence',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大腦拒絕不了的行銷》',
  'heading'   => '神經行銷是擴音器，先得有人想聽',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/brainfluence.html',
  'book'      => ['name' => '大腦拒絕不了的行銷：100個讓顧客掏錢的祕密', 'author' => 'Roger Dooley 羅傑・杜利'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在調這一百顆鈕之前，先確認有人想聽',
    'body'    => '杜利教你把「想買」放得更大聲；痛點之尺幫你確認那個聲音是不是真的在。花五分鐘免費體檢一個點子，看看你要賣的東西，街上到底有沒有人想停下來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '大腦拒絕不了的行銷', 'path' => '/lens/brainfluence'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
