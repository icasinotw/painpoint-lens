<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '在每個人心裡的籤筒，你放進了幾張籤：用痛點之尺重讀《機率思考的策略論》｜痛點 P.A.I.N.',
  'desc'  => '森岡毅用偏好與機率救活了環球影城，他要你把資源全壓在「讓更多人願意選你」這根槓桿上，下注前先算勝率。用痛點的眼光重讀：這套數學要先有一座已經在轉的樂園——你若還在零，先別算市占，先蹲下來數清楚地上有沒有人替你放了第一張籤。',
  'path'  => '/lens/probability-thinking-strategy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《機率思考的策略論》',
  'heading'   => '在每個人心裡的籤筒，你放進了幾張籤',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/probability-thinking-strategy.html',
  'book'      => ['name' => '機率思考的策略論：從消費者的偏好，邁向精準行銷，找出「高勝率」的策略（確率思考の戦略論）', 'author' => '森岡毅、今西聖貴'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在算市占之前，先確認地上有沒有人',
    'body'    => '森岡毅教你怎麼讓更多人把你放進心裡那個籤筒；同一把尺，也能拿來戳你自己那個還沒出生的點子——在它有偏好、有需求曲線可以算之前，先確認真的有人正在為這件事受苦。花五分鐘把那個點子攤開照一照，看看最弱的是哪一軸。',
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
    ['name' => '機率思考的策略論', 'path' => '/lens/probability-thinking-strategy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
