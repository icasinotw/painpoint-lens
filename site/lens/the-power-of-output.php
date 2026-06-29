<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你輸出給自己看，現實當然沒動：用痛點之尺重讀《最高學以致用法》｜痛點 P.A.I.N.',
  'desc'  => '《最高學以致用法》（輸出大全）說：現實只會因為輸出而改變，輸入只動到你腦中的世界。用痛點的眼光重讀樺澤紫苑這本書——你忙著寫、忙著做，收件人卻永遠是自己和同溫層，於是你以為在前進、現實一格沒動。真正算數的輸出，是把東西送到一個會說真話的陌生人面前。這禮拜，把你的輸出收件人名單列出來，劃掉自己和會捧你的人。',
  'path'  => '/lens/the-power-of-output',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《最高學以致用法》',
  'heading'   => '你輸出給自己看，現實當然沒動',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-power-of-output.html',
  'book'      => ['name' => '最高學以致用法', 'author' => '樺澤紫苑（Shion Kabasawa）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近的輸出，收件人是誰？',
    'body'    => '在追下一本書、上下一堂課之前，先把你這禮拜真正「拿到別人面前」的東西數一遍——數得出來，你才算真的在輸出。',
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
    ['name' => '最高學以致用法',  'path' => '/lens/the-power-of-output'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
