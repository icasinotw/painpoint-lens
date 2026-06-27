<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你忙著數傳球，那隻會殺掉點子的大猩猩，就從你眼前走過去｜《為什麼你沒看見大猩猩？》拆書・痛點 P.A.I.N.',
  'desc'  => '查布利斯和西蒙斯讓半數人對著鏡頭中央捶胸九秒的大猩猩視而不見——你眼睛只忙著數傳球，牠就隱形了。用痛點的眼光重讀《為什麼你沒看見大猩猩？》：抱著點子的你也在數傳球，盯著功能、介面、上線日，而「到底有沒有人要」這隻大猩猩，正從你最篤定的盲區走過去。',
  'path'  => '/lens/the-invisible-gorilla',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《為什麼你沒看見大猩猩？》',
  'heading'   => '你忙著數傳球，那隻會殺掉點子的大猩猩，就從你眼前走過去',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-invisible-gorilla.html',
  'book'      => ['name' => '為什麼你沒看見大猩猩？（The Invisible Gorilla：How Our Intuitions Deceive Us）', 'author' => 'Christopher Chabris 克里斯・查布利斯、Daniel Simons 丹尼爾・西蒙斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，正是你最該照一照的盲區',
    'body'    => '《為什麼你沒看見大猩猩？》讓你看見錯覺怎麼運作；痛點這把尺，幫你把手電筒硬轉向你一直不敢照的那塊地方——你手上這個點子，外面到底有沒有人在痛、會不會掏錢。花五分鐘免費體檢一個點子，照出你最弱的那一軸；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '為什麼你沒看見大猩猩？',   'path' => '/lens/the-invisible-gorilla'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
