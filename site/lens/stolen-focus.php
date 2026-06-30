<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你戒了手機，專注力還是沒回來：用痛點之尺重讀《誰偷走了你的專注力？》｜痛點 P.A.I.N.',
  'desc'  => '海利在《誰偷走了你的專注力？》裡證明：你的分心不是意志力不夠，是被一整套被設計過的環境系統性地拿走的。用痛點的眼光重讀：他整本書都在做痛點對生意做的同一件事——先確認真正在痛的源頭在哪，別把力氣砸在一個從頭就不是病灶的地方，更別被「再自律一點」這個漂亮劇本騙走。',
  'path'  => '/lens/stolen-focus',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《誰偷走了你的專注力？》',
  'heading'   => '你戒了手機，專注力還是沒回來',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/stolen-focus.html',
  'book'      => ['name' => '誰偷走了你的專注力？', 'author' => 'Johann Hari（約翰・海利）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近的分心，到底是誰的問題？',
    'body'    => '下次又覺得自己不專注、正要罵自己之前，先停一秒：這次是我真的不想做，還是哪個外力正在替我按下選擇鍵？先認出那個外力，再決定要動手改哪裡。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '誰偷走了你的專注力？',     'path' => '/lens/stolen-focus'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
