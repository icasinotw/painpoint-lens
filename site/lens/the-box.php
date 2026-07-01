<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '船最貴的時候，是它停在碼頭的時候：用痛點之尺重讀《貨櫃與航運》｜痛點 P.A.I.N.',
  'desc'  => '《貨櫃與航運》寫的是貨櫃如何改寫世界貿易，底層卻是一堂「把成本算對地方」的課。用痛點的眼光重讀：全行業盯著海洋，錢卻在碼頭上流光——你這門生意真正的破洞，是不是也不在你天天盯著的那裡？',
  'path'  => '/lens/the-box',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《貨櫃與航運》',
  'heading'   => '船最貴的時候，是它停在碼頭的時候',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-box.html',
  'book'      => ['name' => '貨櫃與航運：貨櫃如何讓世界變小、經濟變大', 'author' => 'Marc Levinson 馬克・萊文森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你這門生意真正的成本，算對地方了嗎？',
    'body'    => '麥克連靠重算一筆全行業算錯的帳，搬走了整個航運業。你手上的生意，也值得先把「錢到底在哪一段流掉」老實算一遍。用痛點之尺，把這個問題想清楚。',
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
    ['name' => '貨櫃與航運', 'path' => '/lens/the-box'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
