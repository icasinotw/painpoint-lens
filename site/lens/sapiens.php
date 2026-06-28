<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「一定有人要」，是一個只有你一個信徒的故事嗎？用痛點之尺重讀《人類大歷史》｜痛點 P.A.I.N.',
  'desc'  => '哈拉瑞《人類大歷史》最大的一個概念：智人靠「大家講好一起信的虛構故事」征服世界——錢、國家、公司都是這樣信出來的。用痛點之尺重讀：你那句「一定有人要」也是這種故事，信徒到今天還只有你一個；讓它變真的，差一個陌生人真金白銀掏一次錢。',
  'path'  => '/lens/sapiens',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《人類大歷史》',
  'heading'   => '哈拉瑞說，智人能管住整個地球，是因為會編出一個個大家肯一起信的故事；你那句「一定有人要」，正是這種故事，只是它的信徒到今天還只有你一個',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/sapiens.html',
  'book'      => ['name' => '人類大歷史：從野獸到扮演上帝（Sapiens: A Brief History of Humankind）', 'author' => 'Yuval Noah Harari 哈拉瑞'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，到今天還只有你一個人信？',
    'body'    => '在你再替它多排練一遍那套漂亮說法之前，先把它擺到一個不認識你、不會給你面子的陌生人面前，看他肯不肯為它真的掏一次錢。',
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
    ['name' => '人類大歷史',   'path' => '/lens/sapiens'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
