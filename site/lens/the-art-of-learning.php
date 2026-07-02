<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《學習的王道》｜痛點 P.A.I.N.',
  'desc'  => '喬希・維茲勤在《學習的王道》裡回頭看：一個從小被誇「天才」的孩子，會把聰明當招牌來守，開始挑簡單的贏、繞開會輸的挑戰，人就停在原地。用痛點的眼光重讀——最貴的漂亮劇本，可能是別人替你貼上、你自己也捨不得撕的一張標籤，肯讓自己看起來笨一點，真正的學習才鑽得進來。',
  'path'  => '/lens/the-art-of-learning',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《學習的王道》',
  'heading'   => '被叫作天才的小孩，最先學會的是別出錯',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-art-of-learning.html',
  'book'      => ['name' => '學習的王道（The Art of Learning）', 'author' => 'Josh Waitzkin 喬希・維茲勤'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '招牌保住了，人卻停在原地',
    'body'    => '被誇「天才」的孩子，會把聰明當招牌守，遇到難題先算「別出錯、別砸了招牌」，於是挑簡單的贏、繞開會輸的挑戰。想真的變強，得先肯放下那張漂亮的標籤，願意在別人面前露出你不會的地方。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '學習的王道',       'path' => '/lens/the-art-of-learning'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
