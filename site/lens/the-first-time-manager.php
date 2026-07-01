<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《普通主管才是最強主管》｜痛點 P.A.I.N.',
  'desc'  => '《普通主管才是最強主管》勸新手主管上任先別急著大改一番。用痛點的眼光重讀貝爾克：在你動手改任何東西之前，先對自己的團隊做一輪需求驗證——搞清楚他們真正的痛在哪，別照著「該有魄力」的劇本亂放第一把火。',
  'path'  => '/lens/the-first-time-manager',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《普通主管才是最強主管》',
  'heading'   => '急著立威的新主管，往往連團隊痛在哪都沒問',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-first-time-manager.html',
  'book'      => ['name' => '普通主管才是最強主管', 'author' => 'Loren B. Belker 洛倫・貝爾克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '動手改之前，先確認那個痛是真的',
    'body'    => '貝爾克叫新主管上任先別急著立威，先看清團隊到底卡在哪。帶人如此，你手上的點子也一樣——動手之前，先確認底下真的有人在痛。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                   'path' => '/'],
    ['name' => '痛點之尺',                'path' => '/lens'],
    ['name' => '普通主管才是最強主管',      'path' => '/lens/the-first-time-manager'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
