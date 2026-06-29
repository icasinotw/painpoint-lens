<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '想辦法弄壞它，才知道你的點子撐不撐得住：用痛點之尺重讀《像火箭科學家一樣思考》｜痛點 P.A.I.N.',
  'desc'  => '《像火箭科學家一樣思考》說，真正的科學家有個反直覺的習慣：手上一有心愛的假設，就設計一場最可能弄垮它的實驗。可是我們一有了心愛的點子，做的剛好相反——只蒐集說「會成功」的證據。用痛點的眼光重讀：在你拿一整年去點火之前，先在地面上想辦法把它弄壞，它撐得住，才值得你賭。',
  'path'  => '/lens/think-like-a-rocket-scientist',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《像火箭科學家一樣思考》',
  'heading'   => '想辦法弄壞它，才知道你的點子撐不撐得住',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/think-like-a-rocket-scientist.html',
  'book'      => ['name' => '像火箭科學家一樣思考（Think Like a Rocket Scientist: Simple Strategies You Can Use to Make Giant Leaps in Work and Life）', 'author' => 'Ozan Varol（歐贊・瓦羅）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，你只想證明它是對的',
    'body'    => '火箭升空前，工程師拼了命想在地面上把它弄壞；你那個點子，到現在還沒有人替它做過這件事。趁它還只是一個下午，先找個不會對你客氣的人，狠狠搖一搖它。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',               'path' => '/'],
    ['name' => '痛點之尺',            'path' => '/lens'],
    ['name' => '像火箭科學家一樣思考', 'path' => '/lens/think-like-a-rocket-scientist'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
