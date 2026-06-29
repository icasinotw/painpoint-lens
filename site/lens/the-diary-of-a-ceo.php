<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '讀三十三條法則前，先算清楚你在痛什麼：用痛點之尺重讀《執行長日記》｜痛點 P.A.I.N.',
  'desc'  => '《執行長日記》把巴列特的體悟收斂成三十三條商業與人生法則，但一份清單最甜的陷阱，是讓你以為收藏了就等於改變。用痛點的眼光重讀：在伸手拿任何一條法則之前，先算清楚你正在痛的是哪一種痛，再回頭挑那條對得上傷口的法則。',
  'path'  => '/lens/the-diary-of-a-ceo',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《執行長日記》',
  'heading'   => '讀三十三條法則前，先算清楚你在痛什麼',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-diary-of-a-ceo.html',
  'book'      => ['name' => '執行長日記：33條商業與人生黃金法則', 'author' => 'Steven Bartlett（史蒂文・巴列特）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '這禮拜最讓你睡不好的，是哪一件事？',
    'body'    => '別急著收藏第三十四條法則。先把你正在痛的那一件事寫到能算出代價，再回頭挑那條對得上它的法則——這才是這本書真正幫得到你的用法。',
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
    ['name' => '執行長日記',  'path' => '/lens/the-diary-of-a-ceo'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
