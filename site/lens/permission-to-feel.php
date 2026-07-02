<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《情緒解鎖》｜痛點 P.A.I.N.',
  'desc'  => '耶魯情緒智能中心的馬克・布雷克特發現，多數大人連自己此刻的感覺都叫不出名字——一股情緒剛冒出來，手已經動了。用痛點的眼光重讀：創業最貴的錯是對沒驗證過的痛砸解法，你對自己的情緒天天在犯同一個錯；把「累」讀成「他很煩」、把「怕」讀成「這事很無聊」，就會拿很貴的解法去對付一個不在那裡的問題。',
  'path'  => '/lens/permission-to-feel',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《情緒解鎖》',
  'heading'   => '情緒叫錯名字，你就對錯的人發火',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/permission-to-feel.html',
  'book'      => ['name' => '情緒解鎖（Permission to Feel）', 'author' => 'Marc Brackett 馬克・布雷克特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你以為在痛的，常常不是真正卡著你的',
    'body'    => '一股感覺剛冒出來，多數人連它是什麼都還沒認準，手就動了——把「累」當成「他很煩」，於是對錯的人發火。先停三秒，替那個感覺認出準確的名字，該做的事往往會自己浮出來一半。',
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
    ['name' => '情緒解鎖',   'path' => '/lens/permission-to-feel'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
