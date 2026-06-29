<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你蓋了一座完美的塔，沒人問你那道題：用痛點之尺重讀《邏輯思考的技術》｜痛點 P.A.I.N.',
  'desc'  => '《邏輯思考的技術》用 MECE 和 So What 教你把論點搭成一座挑不出破綻的金字塔。但用痛點的眼光看，邏輯成立只驗了塔本身穩不穩，沒驗對方有沒有在問這道題——動筆前先「確認課題」，等於替你的話做一次需求驗證。',
  'path'  => '/lens/logical-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《邏輯思考的技術》',
  'heading'   => '你蓋了一座完美的塔，沒人問你那道題',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/logical-thinking.html',
  'book'      => ['name' => '邏輯思考的技術：寫作、簡報、解決問題的有效方法', 'author' => '照屋華子、岡田惠子'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '下一份要送出去的東西，最上面那句，你寫的是答案，還是問句？',
    'body'    => '《邏輯思考的技術》教你把論點塔搭得無懈可擊；可塔蓋得再穩，也得先確認對方在問這道題。送出去之前，先把你的結論還原成一句對方真正想問的問題，再回頭檢查每一段有沒有都在答它。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '邏輯思考的技術',   'path' => '/lens/logical-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
