<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你卡了好幾年的那道題，問題出在題目本身：用痛點之尺重讀《大人學破局思考》｜痛點 P.A.I.N.',
  'desc'  => '張國洋、姚詩豪在《大人學破局思考》裡分難題與困局：難題有正解，困局怎麼選都不對、越用力越動不了。用痛點的眼光重讀——破局思考其實是把「先確認這道題值不值得解」這套需求驗證的眼光，從生意掉頭對準你自己的人生；今晚就能挑一件你一直在硬解的事，替它換一次題。',
  'path'  => '/lens/breakthrough-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《大人學破局思考》',
  'heading'   => '你卡了好幾年的那道題，問題出在題目本身',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/breakthrough-thinking.html',
  'book'      => ['name' => '大人學破局思考', 'author' => '張國洋、姚詩豪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近一直在「更努力」的那件事，是該繼續解，還是該換題？',
    'body'    => '挑一件你最近一直在硬解的事，把那道題寫成一句話，再逼自己在底下問一句「這件事到底該不該做下去」——兩句並排看一分鐘，你會第一次看清楚自己真正卡在哪。',
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
    ['name' => '大人學破局思考',   'path' => '/lens/breakthrough-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
