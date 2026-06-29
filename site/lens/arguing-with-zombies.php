<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最該打死的那隻殭屍，養在你的點子裡：用痛點之尺重讀《克魯曼戰殭屍》｜痛點 P.A.I.N.',
  'desc'  => '克魯曼說「殭屍想法」死不掉，是因為有人靠它活著。把這把鏟子轉向你自己的點子，你會挖出幾隻親手餵大的殭屍——而你正是最不想看它斷氣的人。用痛點的眼光，談為什麼點子要交給會掏錢的陌生人去驗屍。',
  'path'  => '/lens/arguing-with-zombies',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《克魯曼戰殭屍》',
  'heading'   => '你最該打死的那隻殭屍，養在你的點子裡',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/arguing-with-zombies.html',
  'book'      => ['name' => '克魯曼戰殭屍：洞悉殭屍經濟的本質，看穿政府的謊言，挺身捍衛我們的未來', 'author' => 'Paul Krugman 保羅・克魯曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在替哪一句話續命？',
    'body'    => '《克魯曼戰殭屍》教你揪出死不掉的殭屍想法；揪自己點子裡那隻最難。走出去，讓會掏錢的真人替你驗屍，比你坐著想一百遍都準。',
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
    ['name' => '克魯曼戰殭屍', 'path' => '/lens/arguing-with-zombies'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
