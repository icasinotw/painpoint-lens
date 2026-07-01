<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '船還沒沉，就有人在為沉船的恐懼付錢：用痛點之尺拆《金融創造文明》｜痛點 P.A.I.N.',
  'desc'  => '戈茲曼用五千年金融史證明一件事：海事借貸、公債、退休金這些工具，沒有一樣是天才憑空想出來的，全是被一個「早就有人在為它痛」的難處逼出來的。用痛點的眼光重讀：你那個愈想愈完整的點子，是接在一個已經有人在為它掏錢忍耐的真痛上，還是一個還沒讓任何人痛過的漂亮想像？',
  'path'  => '/lens/money-changes-everything',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《金融創造文明》',
  'heading'   => '船還沒沉，就有人在為沉船的恐懼付錢',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/money-changes-everything.html',
  'book'      => ['name' => '金融創造文明（Money Changes Everything）', 'author' => 'William Goetzmann 威廉・戈茲曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先找到在痛的人，再動手做東西',
    'body'    => '金融五千年只認一種順序：先有一群人為某件事痛了很久、付了很久的代價，工具才被那個痛擠出來。同一套眼光用在你手上那個「我覺得會成」的點子上，就是先去找那個已經在為這件事掏錢、費事、硬撐的真人，確認痛是真的，再開始蓋。',
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
    ['name' => '金融創造文明',      'path' => '/lens/money-changes-everything'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
