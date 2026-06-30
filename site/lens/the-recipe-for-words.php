<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '強的話有配方，照著做就煮得出來：用痛點之尺重讀《只靠靈感，永遠寫不出好文案！》｜痛點 P.A.I.N.',
  'desc'  => '佐佐木圭一說好文案不靠靈感、靠配方：把 No 繞成 Yes，再用幾道食譜把話煮出勁道。用 P.A.I.N. 補上配方夠不著的那一格——先驗證你要講的那件事真有人要，那句話才煮得動。',
  'path'  => '/lens/the-recipe-for-words',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《只靠靈感，永遠寫不出好文案！》',
  'heading'   => '強的話有配方，照著做就煮得出來',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-recipe-for-words.html',
  'book'      => ['name' => '只靠靈感，永遠寫不出好文案！', 'author' => '佐佐木圭一'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你要講的那件事，到底有沒有人要？',
    'body'    => '佐佐木教你把話煮得動聽；在那之前，先花五分鐘確認你要講的那件事，對面真的有人在痛。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '只靠靈感，永遠寫不出好文案！', 'path' => '/lens/the-recipe-for-words'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
