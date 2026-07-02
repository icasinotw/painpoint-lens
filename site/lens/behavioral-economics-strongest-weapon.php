<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '顧客那句「我會用」，路上被三隻手改過：用痛點之尺重讀《行為經濟學是最強商業武器》｜痛點 P.A.I.N.',
  'desc'  => '相良奈美香把行為經濟學收進三個抽屜：大腦的慣性、當下的處境、那一刻的情緒。顧客那句「我會用」，一路被這三隻手改寫過。用痛點的眼光重讀：驗一件事有沒有人真的要，別多收一句保證，去挖一筆他「已經」付出的代價——那是三隻手唯一改不動的證據。',
  'path'  => '/lens/behavioral-economics-strongest-weapon',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《行為經濟學是最強商業武器》',
  'heading'   => '顧客那句「我會用」，路上被三隻手改過',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/behavioral-economics-strongest-weapon.html',
  'book'      => ['name' => '行為經濟學是最強商業武器', 'author' => '相良奈美香(Namika Sagara)'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那句「我會用」，換成你的點子還站得住嗎？',
    'body'    => '別再多收一句保證。把你手上最想投下去的點子攤開，看那群人此刻已經為這個問題花掉了多少錢、繞了多遠——那才是三隻手改不動的證據。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                        'path' => '/'],
    ['name' => '痛點之尺',                     'path' => '/lens'],
    ['name' => '行為經濟學是最強商業武器',       'path' => '/lens/behavioral-economics-strongest-weapon'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
