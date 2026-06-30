<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你對自己的了解，是一份從沒拿去問過人的草稿：用痛點之尺重讀《深度洞察力》｜痛點 P.A.I.N.',
  'desc'  => '九成五的人自認很有自我覺察，真正達標的只有一到一成五。歐里希這本《深度洞察力》直接對「內省」下手：問「為什麼」只會生出你最想聽的故事，要改問「是什麼」、再去找會說真話的人對照。用痛點的眼光拆它：自我覺察，其實就是對「你自己」這個點子做需求驗證。',
  'path'  => '/lens/insight',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《深度洞察力》',
  'heading'   => '你對自己的了解，是一份從沒拿去問過人的草稿',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/insight.html',
  'book'      => ['name' => '深度洞察力（Insight）', 'author' => 'Tasha Eurich 塔莎・歐里希'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最確定的那件事，問過別人了嗎',
    'body'    => '對自己最得意的設定、對老問題最順口的解釋，往往就是最沒被人驗過的一份草稿；把它寫成一句具體的話，拿去問一個敢說真話的人，你的自我了解才從「自己說了算」往「驗過了」挪一格。',
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
    ['name' => '深度洞察力',  'path' => '/lens/insight'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
