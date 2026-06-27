<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '李維特專戳「大家都知道」，你的點子正是其中一句｜《蘋果橘子經濟學》拆書・痛點 P.A.I.N.',
  'desc'  => '《蘋果橘子經濟學》整本書在做一件事——把一句「大家都知道」抓出來，問「真的嗎，證據呢」，再去看人真正做了什麼。用痛點的眼光重讀李維特：你那句「我這點子一定有人要」，正是最該被這樣查一次的傳聞；別聽人說「會買」，去看他已經為這件事花了什麼。',
  'path'  => '/lens/freakonomics',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《蘋果橘子經濟學》',
  'heading'   => '李維特專戳「大家都知道」，你的點子正是其中一句',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/freakonomics.html',
  'book'      => ['name' => '蘋果橘子經濟學（Freakonomics：A Rogue Economist Explores the Hidden Side of Everything）', 'author' => 'Steven D. Levitt 史蒂芬·李維特 & Stephen J. Dubner 史蒂芬·杜伯納'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把李維特那把尺，掉頭對準你自己的點子',
    'body'    => '《蘋果橘子經濟學》教你別信「大家都知道」、只信人真正做了什麼；痛點這把尺，幫你把這套查法用在它沒碰的那一題——你手上這個點子，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '蘋果橘子經濟學',  'path' => '/lens/freakonomics'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
