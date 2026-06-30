<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《FBI教你讀心術》｜痛點 P.A.I.N.',
  'desc'  => '《FBI教你讀心術》教你讀身體、不讀嘴巴——人會說客套話，身體比較不會。用痛點的眼光重讀：驗一個點子有沒有人要，別信問卷上那句「我會買」，去看一個正在痛的人，已經為這件事掏過什麼錢、湊過什麼克難解法。',
  'path'  => '/lens/what-every-body-is-saying',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《FBI教你讀心術》',
  'heading'   => '真正在痛的人，身體會先漏餡',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/what-every-body-is-saying.html',
  'book'      => ['name' => 'FBI教你讀心術（What Every BODY Is Saying）', 'author' => 'Joe Navarro 喬・納瓦羅、Marvin Karlins 馬文・卡林斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別問他會不會買，看他已經為這件事做了什麼',
    'body'    => '想知道一個點子有沒有人要，問卷上那句「我會買」最不可靠。找一個你認定正在痛的人，看他已經掏過的錢、湊過的克難解法——身體做過的事，比嘴巴說過的話誠實。',
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
    ['name' => 'FBI教你讀心術',  'path' => '/lens/what-every-body-is-saying'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
