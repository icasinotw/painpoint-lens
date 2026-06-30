<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '顧問解的每道題，背後都有人先簽了單：用痛點之尺重讀《BCG問題解決力》｜痛點 P.A.I.N.',
  'desc'  => '《BCG問題解決力》把策略顧問的解題流程拆成可練的步驟，但顧問桌上的每道題，都是客戶先付錢確認值得解的。用痛點的眼光看：你拿這套武功解自己的點子，缺的不是方法，是那張先簽好的訂單——先去確認真有人為這件事肯掏錢，再動工。',
  'path'  => '/lens/bcg-problem-solving',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《BCG問題解決力》',
  'heading'   => '顧問解的每道題，背後都有人先簽了單',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/bcg-problem-solving.html',
  'book'      => ['name' => 'BCG問題解決力：一生受用的策略顧問思考法', 'author' => '徐瑞廷'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，有沒有人願意先簽單？',
    'body'    => '徐瑞廷教你把問題解到漂亮，但動工前還有一題沒人替你答：到底有沒有人為這件事肯掏錢。花五分鐘，把你點子最弱的那一軸先找出來。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => 'BCG問題解決力', 'path' => '/lens/bcg-problem-solving'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
