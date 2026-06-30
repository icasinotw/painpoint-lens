<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '樂高什麼都想做的那幾年，差點把自己玩垮：用痛點之尺重讀《玩得好！樂高商業冒險之旅》｜痛點 P.A.I.N.',
  'desc'  => '《玩得好！樂高商業冒險之旅》裡，延斯・安德森寫的不只是樂高怎麼紅，是它在最風光、點子最多的那幾年怎麼差點破產。用痛點的眼光重讀這部家族傳記：一家公司滿手才華、年年創新，照樣會死——當它把「成長」誤當成「做更多種東西」，弄丟了「我們在替誰、解一個多深的痛」。',
  'path'  => '/lens/the-lego-story',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《玩得好！樂高商業冒險之旅》',
  'heading'   => '樂高什麼都想做的那幾年，差點把自己玩垮',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-lego-story.html',
  'book'      => ['name' => '玩得好！樂高商業冒險之旅', 'author' => '延斯・安德森 Jens Andersen'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那一攤東西，每一塊都有人在等嗎？',
    'body'    => '樂高差點倒，是因為它一直加、卻沒回頭問誰在痛。《痛點》這把尺，先幫你把「到底是誰、為了什麼會掏錢」問到具體。挑一個你正猶豫要不要做的點子，五分鐘跑一遍，看清楚它值不值得你動工。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '玩得好！樂高商業冒險之旅', 'path' => '/lens/the-lego-story'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
