<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '他把經理人當外科醫生教，只問一件事：治好了沒：用痛點之尺重讀《管理的本質》｜痛點 P.A.I.N.',
  'desc'  => '馬利克在《管理的本質》裡把管理從「你是不是天生的領袖」，改寫成一門像開刀、像彈鋼琴那樣學得會的手藝——有原則、有任務、有工具，一格一格都能檢查。用痛點的眼光重讀：他這套只認結果的尺，量得出你把事做得多好，卻沒回頭問這件事外面到底還有沒有人要。',
  'path'  => '/lens/management-the-essence-of-the-craft',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《管理的本質》',
  'heading'   => '他把經理人當外科醫生教，只問一件事：治好了沒',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/management-the-essence-of-the-craft.html',
  'book'      => ['name' => '管理的本質', 'author' => 'Fredmund Malik 佛瑞蒙德・馬利克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '挑一件你「管得很用心」的事，回頭問它一句',
    'body'    => '《管理的本質》逼你把管理者的價值，全換成「有沒有做出結果」；痛點這把尺再往前推一格——先確認你手上這件事，外面還有沒有人真的要。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '管理的本質',    'path' => '/lens/management-the-essence-of-the-craft'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
