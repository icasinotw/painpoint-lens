<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '課還沒有人要，別急著替它蓋一台自動販賣機：用痛點之尺重讀《線上課程大全》｜痛點 P.A.I.N.',
  'desc'  => '《線上課程大全》把「賣課」拆成一台完整的自動化漏斗機器，卻預設那堂課已經有人要。用 P.A.I.N. 補上它跳過的兩格：誰在痛、痛多深——在蓋機器之前，先親手成交一次。',
  'path'  => '/lens/the-online-course-playbook',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《線上課程大全》',
  'heading'   => '課還沒有人要，別急著替它蓋一台自動販賣機',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-online-course-playbook.html',
  'book'      => ['name' => '線上課程大全', 'author' => '布棉（徐財星）、崔曉玲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在蓋整台賣課機器之前，先驗一下你那堂課',
    'body'    => '《線上課程大全》教你把課賣得更大、更自動；痛點這把尺，幫你先確認外面有沒有人要。花五分鐘，把「誰在痛、痛多深」這兩格寫清楚。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '線上課程大全',    'path' => '/lens/the-online-course-playbook'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
