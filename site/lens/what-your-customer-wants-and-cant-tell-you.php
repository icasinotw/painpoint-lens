<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '那聲「噓」，最後瞞住的是你自己：用痛點之尺重讀《噓，別讓顧客知道原來你用了這一招！》｜痛點 P.A.I.N.',
  'desc'  => '梅莉娜・帕默教你讀懂大腦、在顧客開口前把選項擺好，他自己就會點頭。用痛點之尺重讀：這些招數推得動一個站在攤子前猶豫的人，卻變不出一個願意走過來的人——一個被推出來的「好」，證明不了底下真有人在痛。',
  'path'  => '/lens/what-your-customer-wants-and-cant-tell-you',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《噓，別讓顧客知道原來你用了這一招！》',
  'heading'   => '那聲「噓」，最後瞞住的是你自己',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/what-your-customer-wants-and-cant-tell-you.html',
  'book'      => ['name' => '噓，別讓顧客知道原來你用了這一招！', 'author' => '梅莉娜・帕默'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在學會催單之前，先確認有人想被你催',
    'body'    => '帕默教你讀懂顧客大腦怎麼點頭；痛點之尺幫你確認，點頭之前，這個人是不是真的需要。花五分鐘免費體檢一個點子，看看把所有招數拿掉以後，還有沒有人自己想走過來。',
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
    ['name' => '噓，別讓顧客知道原來你用了這一招！', 'path' => '/lens/what-your-customer-wants-and-cant-tell-you'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
