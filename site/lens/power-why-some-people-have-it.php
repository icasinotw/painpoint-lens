<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '升遷不是發給乖學生的獎狀：用痛點之尺重讀《權力：史丹佛大師的經典課》｜痛點 P.A.I.N.',
  'desc'  => '菲佛《權力：史丹佛大師的經典課》拆掉一套讓人安心的劇本：把事做好，自然會被看見、會輪到你。用痛點的眼光重讀：你對「職場怎麼往上走」的理解，是親眼驗過的現實，還是一套沒驗證的漂亮故事？',
  'path'  => '/lens/power-why-some-people-have-it',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《權力：史丹佛大師的經典課》',
  'heading'   => '升遷不是發給乖學生的獎狀',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/power-why-some-people-have-it.html',
  'book'      => ['name' => '權力：史丹佛大師的經典課（Power: Why Some People Have It—and Others Don\'t）', 'author' => '傑夫瑞・菲佛 Jeffrey Pfeffer'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂權力怎麼流動之後，回頭看看你自己這一格',
    'body'    => '菲佛要你別再用「應該」去猜職場怎麼運作，改用親眼驗過的證據。同一個動作，也能拿來照你手上正在做的事：你最常拿來說服自己的那個理由，到底站不站得住。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '痛點之尺',  'path' => '/lens'],
    ['name' => '權力',     'path' => '/lens/power-why-some-people-have-it'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
