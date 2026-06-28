<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《子彈思考整理術》',
  'desc'  => '《子彈思考整理術》的「遷移」要你每月把沒做完的事用手重抄一遍，抄不動的就劃掉。用痛點的眼光重讀：你的待辦月月被這樣篩，你那個放了好幾年的點子卻從沒被要求重抄過——它賴在腦子裡，沒繳過一次過路費，也沒被一個肯掏錢的陌生人問過半句。',
  'path'  => '/lens/the-bullet-journal-method',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《子彈思考整理術》',
  'heading'   => '卡洛要你每月把沒做完的事重抄一遍，抄起來嫌煩的就劃掉；你那個點子，放了好幾年，從沒被要求重抄過一次',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-bullet-journal-method.html',
  'book'      => ['name' => '子彈思考整理術（The Bullet Journal Method）', 'author' => 'Ryder Carroll 瑞德・卡洛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在把那個點子排進清單之前，先讓它繳一次過路費',
    'body'    => '卡洛的遷移，篩的是你已經在做的事；這把尺要你先回答一件清單外的事——挑點子裡最像商品的一塊，開個價，找一個不欠你人情的陌生人，看他掏不掏錢。',
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
    ['name' => '子彈思考整理術',  'path' => '/lens/the-bullet-journal-method'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
