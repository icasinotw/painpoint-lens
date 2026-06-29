<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '整個團隊埋頭做到流汗，沒人抬頭看門外：用痛點之尺重讀《創客創業導師程天縱的經營學》｜痛點 P.A.I.N.',
  'desc'  => '程天縱把「經營」和「管理」切開：管理是把事情做對，經營是做對的事。用痛點的眼光重讀——他在公司層級講的「先做對的事」，就是創業者在點子層級的「先確認有人要」，只是換了高度；而最前面那一步怎麼確認方向，這本書當你早就會了。',
  'path'  => '/lens/terry-cheng-on-management',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《創客創業導師程天縱的經營學》',
  'heading'   => '整個團隊埋頭做到流汗，沒人抬頭看門外',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/terry-cheng-on-management.html',
  'book'      => ['name' => '創客創業導師程天縱的經營學', 'author' => '程天縱'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最得意的那件事，外面真有人在等嗎？',
    'body'    => '把你或團隊最近磨得最起勁的那一件事挑出來，問一句：如果它今天停掉，外面有誰會立刻跑來找你？叫得出三五個名字，方向大概是穩的；叫不出來，先別再優化了，回頭把「有沒有人要」這一格補起來。',
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
    ['name' => '程天縱的經營學',  'path' => '/lens/terry-cheng-on-management'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
