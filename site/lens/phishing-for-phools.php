<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《釣愚》｜痛點 P.A.I.N.',
  'desc'  => '兩位諾貝爾經濟學家在《釣愚》裡證明：只要有錢可賺，市場永遠生得出一個肯為你掏錢的人。用痛點之尺重讀：你約人喝咖啡、熱情講完點子，對方那句「我會買」，很可能是被你當場薰出來的香味釣上鉤的——這禮拜，把你自己從測試裡退出來，看沒有香味時還有沒有人付錢。',
  'path'  => '/lens/phishing-for-phools',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《釣愚》',
  'heading'   => '對面那一句「我會買」，是你親手替自己釣上來的',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/phishing-for-phools.html',
  'book'      => ['name' => '釣愚：操縱與欺騙的經濟學', 'author' => 'George Akerlof 喬治・艾克羅夫、Robert Shiller 羅伯・席勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個「一定有人要」的點子，你替它放過幾次香味？',
    'body'    => '《釣愚》說市場永遠生得出一個肯掏錢的人；同一把尺對準你的點子，就是先把你自己那股熱情退出去，看沒有香味時還有沒有人付錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '釣愚',       'path' => '/lens/phishing-for-phools'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
