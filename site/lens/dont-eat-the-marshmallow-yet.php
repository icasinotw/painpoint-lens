<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '忍住棉花糖之前，先看清誰會給你第二顆：用痛點之尺重讀《先別急著吃棉花糖》｜痛點 P.A.I.N.',
  'desc'  => '《先別急著吃棉花糖》把成功濃縮成一個動作：忍住不吃，等一下就有兩顆。但它沒檢查一個假設——第二顆，一定會來。用痛點的眼光重讀：在史丹佛那間房裡，第二顆有研究員掛保證；你人生那張桌子上沒有那個人。忍之前，先確認誰會端第二顆給你。',
  'path'  => '/lens/dont-eat-the-marshmallow-yet',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《先別急著吃棉花糖》',
  'heading'   => '忍住棉花糖之前，先看清誰會給你第二顆',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/dont-eat-the-marshmallow-yet.html',
  'book'      => ['name' => '先別急著吃棉花糖（Don\'t Eat the Marshmallow Yet!）', 'author' => 'Joachim de Posada（喬辛・迪・波沙達）、Ellen Singer'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你正在為哪一顆棉花糖，延遲享受？',
    'body'    => '在咬牙再等下去之前，先花五分鐘回答一個更要緊的問題：那顆你苦等的第二顆糖，到底有沒有人會端給你、那個人是誰？答得出來，你的忍才有意義；答不出來，先換一張桌子。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '先別急著吃棉花糖',     'path' => '/lens/dont-eat-the-marshmallow-yet'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
