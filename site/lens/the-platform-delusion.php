<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你最愛講的那個詞，正幫你逃掉一筆帳：用痛點之尺重讀《平台假象》｜痛點 P.A.I.N.',
  'desc'  => '尼伊《平台假象》把「平台＝有網路效應＝贏者全拿」的劇本攔下來一家一家查，斷言網路效應是所有優勢裡最被高估的一張牌。用痛點的眼光重讀：「平台」是一個讓你提早鬆口氣、不再算帳的詞——把它收起來，改用「換掉你要付多大代價」這筆叛逃成本，重新驗一次你到底綁住了誰。',
  'path'  => '/lens/the-platform-delusion',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《平台假象》',
  'heading'   => '你最愛講的那個詞，正幫你逃掉一筆帳',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-platform-delusion.html',
  'book'      => ['name' => '平台假象', 'author' => 'Jonathan A. Knee（強納森・尼伊）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把那個詞收起來，先驗有沒有人離不開你',
    'body'    => '《平台假象》逼你別再用「平台」「網路效應」這些順口的詞交差，硬要你說清楚優勢到底卡在哪。把同一種懷疑往前搬一格：先確認真的有人，已經為你解的這個痛掏過錢、離不開你。五分鐘免費體檢一個點子，看出你最弱的那一格。',
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
    ['name' => '平台假象',    'path' => '/lens/the-platform-delusion'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
