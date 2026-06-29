<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '下命令的人，離真相最遠：用痛點之尺重讀《翻轉領導力》｜痛點 P.A.I.N.',
  'desc'  => '馬凱特在一艘他並不熟的核子潛艦上，被現實逼著把決定權往下交給看得見儀表的人。用痛點的眼光重讀《翻轉領導力》：這跟做生意是同一個坑——最有權下判斷的位子，常常坐得離真實狀況最遠。與其讓資訊一層層往上爬，不如把權力搬到看得見現場的人手上；而真正的放權，不是辦一場活動，是每天忍住那隻想替部屬做決定的手。',
  'path'  => '/lens/turn-the-ship-around',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《翻轉領導力》',
  'heading'   => '下命令的人，離真相最遠',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/turn-the-ship-around.html',
  'book'      => ['name' => '翻轉領導力', 'author' => 'L. David Marquet（大衛・馬凱特）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你團隊裡最重要的那些決定，現在卡在誰身上？',
    'body'    => '挑一件最近大家都跑來問你的事，問自己：最先看到真實狀況的人是誰？如果是別人，那這個決定，本來就不該堆在你桌上。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '翻轉領導力',     'path' => '/lens/turn-the-ship-around'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
