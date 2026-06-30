<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《這一生，你想留下什麼？》｜痛點 P.A.I.N.',
  'desc'  => '管過史丹佛、也管過 Google 的漢尼斯，把領導第一課給了謙卑。用痛點的眼光重讀《這一生，你想留下什麼？》：「留下什麼」不是一句感動的話，是一張等你離開才打得出來、卻現在就在累積的成績單。',
  'path'  => '/lens/leading-matters',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《這一生，你想留下什麼？》',
  'heading'   => '領導的成績單，要等你離開那天才打得出來',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/leading-matters.html',
  'book'      => ['name' => '這一生，你想留下什麼？：史丹佛的10堂領導課', 'author' => 'John L. Hennessy 約翰・漢尼斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你帶的那群人，因為你而變強了嗎？',
    'body'    => '漢尼斯把領導當成一筆要結算的帳；同一把尺對著你問一句：如果你明天就消失，手上這件事還轉得動嗎？六個月後，誰會因為你做過而更強？',
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
    ['name' => '這一生，你想留下什麼？', 'path' => '/lens/leading-matters'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
