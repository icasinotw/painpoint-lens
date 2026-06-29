<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '交會點炸出一百個點子，挑哪個才是真正的難題：用痛點之尺重讀《梅迪奇效應》｜痛點 P.A.I.N.',
  'desc'  => '《梅迪奇效應》說文藝復興炸在佛羅倫斯，是梅迪奇家族逼不同領域相撞、點子連環炸——約翰森管那塊地叫「交會點」，整本書教你怎麼走到那裡。用痛點的眼光重讀：它是史上數一數二好用的點子製造機，卻沒配一把篩子；炸出一百個驚奇之後，真正的難題是挑出底下有人肯付錢的那一個。附一個這禮拜就能做的動作。',
  'path'  => '/lens/the-medici-effect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《梅迪奇效應》',
  'heading'   => '交會點炸出一百個點子，挑哪個才是真正的難題',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-medici-effect.html',
  'book'      => ['name' => '梅迪奇效應', 'author' => '法蘭斯・約翰森（Frans Johansson）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個漂亮的跨界點子，底下有人在痛嗎？',
    'body'    => '《梅迪奇效應》能把你送到點子最密的交會點，炸出滿手驚奇。難的是火花亮起來之後，挑出底下真有人肯付錢的那一簇——那一步，得你自己蹲下去問真人。',
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
    ['name' => '梅迪奇效應', 'path' => '/lens/the-medici-effect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
