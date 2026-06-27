<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你裝不出一個沒人要的習慣：用痛點之尺拆《為什麼我們這樣生活，那樣工作？》｜痛點 P.A.I.N.',
  'desc'  => '《為什麼我們這樣生活，那樣工作？》把企業怎麼替顧客裝上習慣拆得極漂亮——但習慣得接在一個本來就有的渴望上，你裝不出一個沒人在癢的需求。用痛點的眼光重讀：在你忙著做簽到、推播、留存之前，先確認真的有人在痛、在等。',
  'path'  => '/lens/power-of-habit',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《為什麼我們這樣生活，那樣工作？》',
  'heading'   => '你裝不出一個沒人要的習慣',
  'published' => '2026-06-24',
  'updated'   => '2026-06-24',
  'content'   => __DIR__ . '/_content/power-of-habit.html',
  'book'      => ['name' => '為什麼我們這樣生活，那樣工作？（The Power of Habit）', 'author' => 'Charles Duhigg 查爾斯・杜希格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想讓客戶養成習慣？先確認有人在癢',
    'body'    => '《為什麼我們這樣生活，那樣工作？》教你怎麼把客戶留住——但前提是真的有人要。《痛點》這把尺，幫你在做留存之前，先驗證你的點子是不是真的有人在痛、值不值得做。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                          'path' => '/'],
    ['name' => '痛點之尺',                       'path' => '/lens'],
    ['name' => '為什麼我們這樣生活，那樣工作？',   'path' => '/lens/power-of-habit'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
