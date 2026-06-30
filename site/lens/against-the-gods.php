<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '人類花三百年把未來變成算式，你還在擲筊：用痛點之尺拆《風險之書》｜痛點 P.A.I.N.',
  'desc'  => '伯恩斯坦在《風險之書》裡講人類花三百年，把未來從神的旨意手裡搶過來、變成可以算的東西。用痛點的眼光重讀：你那句「我感覺它會紅」，其實是現代版的對著骰子拜神——一個明明可以拿去外面驗的問題，被你當成命運交給直覺；先去問、先去量，才是把未來搶回自己手裡。',
  'path'  => '/lens/against-the-gods',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《風險之書》',
  'heading'   => '人類花三百年把未來變成算式，你還在擲筊',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/against-the-gods.html',
  'book'      => ['name' => '風險之書（Against the Gods: The Remarkable Story of Risk）', 'author' => 'Peter L. Bernstein 彼得・伯恩斯坦'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂未來是可以量的之後，輪到你那個躍躍欲試的點子',
    'body'    => '伯恩斯坦讓你相信「未來這件事，值得算」；輪到你自己那個正心動的點子，別只在腦子裡把它做成功一遍——攤開來，看看外面到底有沒有人要。',
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
    ['name' => '風險之書',     'path' => '/lens/against-the-gods'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
