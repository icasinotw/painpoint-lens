<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你腦裡那個最順的故事，你從沒驗過：用痛點之尺重讀《進化型領導》｜痛點 P.A.I.N.',
  'desc'  => '貝爾格在《進化型領導》裡盯的是你腦中那一下「喀」的篤定感——你想通了它會亮，你想歪了它照樣亮。用痛點的眼光重讀：你懂得把點子拿出去做需求驗證，卻從不驗證自己腦裡那個又順又篤定的判斷。這禮拜，替你最有把握的那個結論，留一道能戳破它的問句，再動手。',
  'path'  => '/lens/unlocking-leadership-mindtraps',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《進化型領導》',
  'heading'   => '你腦裡那個最順的故事，你從沒驗過',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/unlocking-leadership-mindtraps.html',
  'book'      => ['name' => '進化型領導（Unlocking Leadership Mindtraps）', 'author' => 'Jennifer Garvey Berger 珍妮佛・加維・貝爾格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個判斷，你篤定到不太想再聽別的說法？',
    'body'    => '在你照著它拍板、投下時間和人之前，先把那份篤定當成一個還沒驗過的假設，替它找一個能戳破它的證據。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '進化型領導',  'path' => '/lens/unlocking-leadership-mindtraps'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
