<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '投資是場輸家的遊戲，少犯錯的人才贏：用痛點之尺重讀《投資終極戰》｜痛點 P.A.I.N.',
  'desc'  => '艾利斯用一場網球講透《投資終極戰》：職業比賽靠好球，業餘比賽靠對手失誤——投資也一樣，你最大的對手是會半夜想逃的自己。用痛點的眼光重讀查爾斯・艾利斯，再把同一把尺，借去戳你那個還沒驗過的點子。',
  'path'  => '/lens/winning-the-losers-game',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《投資終極戰》',
  'heading'   => '投資是場輸家的遊戲，少犯錯的人才贏',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/winning-the-losers-game.html',
  'book'      => ['name' => '投資終極戰（Winning the Loser\'s Game）', 'author' => 'Charles Ellis 查爾斯・艾利斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看清自己在玩哪種遊戲之後，下一個點子先別急著上場',
    'body'    => '艾利斯教你在投資場上少送對手分數；你手上那個還沒生出來的點子，缺的是另一張考卷——到底有沒有人真的會為它掏錢。花五分鐘把它攤開照一照，先看出你最沒驗過、也最致命的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '投資終極戰',   'path' => '/lens/winning-the-losers-game'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
