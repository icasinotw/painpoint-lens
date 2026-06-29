<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先確認有人要跟你下這盤棋，再談下五步：用痛點之尺重讀《步步為贏》｜痛點 P.A.I.N.',
  'desc'  => '貝大衛在《步步為贏》用「下五步」把策略拆成五個動作，每一步都教得扎實。用痛點的眼光重讀：這五步都是在棋盤上動子，他卻把最前面那個「有沒有人要跟你下」當成現成的——而那，正是你動手前最該先補的第零步。',
  'path'  => '/lens/your-next-five-moves',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《步步為贏》',
  'heading'   => '先確認有人要跟你下這盤棋，再談下五步',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/your-next-five-moves.html',
  'book'      => ['name' => '步步為贏：超前部署你的下五步（Your Next Five Moves）', 'author' => 'Patrick Bet-David 派崔克・貝大衛、Greg Dinkin 格雷格・丁金'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你規劃下五步之前，先確認牌桌上真的有人',
    'body'    => '《步步為贏》教你把每一步往後推演到第五步，這把尺幫你先補上動手前的第零步——確認外面真的有人在等。拿一個你心裡的點子來跑跑看，五分鐘照出你最弱的那一軸。',
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
    ['name' => '步步為贏',  'path' => '/lens/your-next-five-moves'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
