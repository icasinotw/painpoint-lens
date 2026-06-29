<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個市場，是馬，還是斑馬？｜痛點 P.A.I.N.',
  'desc'  => '一萬年前肥沃月灣的農夫沒發明小麥，是認出了野地裡本來就在抽穗的那株草。用痛點的眼光重讀《槍炮、病菌與鋼鐵》：那些橫掃世界的民族贏在起手的牌，不在後來打造的槍。你那個點子也一樣——這禮拜，先別造槍，去田裡找找看有沒有人早就在為這個痛將就著。',
  'path'  => '/lens/guns-germs-and-steel',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《槍炮、病菌與鋼鐵》',
  'heading'   => '你那個市場，是馬，還是斑馬？',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/guns-germs-and-steel.html',
  'book'      => ['name' => '槍炮、病菌與鋼鐵（Guns, Germs, and Steel）', 'author' => 'Jared Diamond 賈德・戴蒙'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個市場，是會讓你騎上去的馬，還是咬人的斑馬？',
    'body'    => '在你套上韁繩、賭下去兩三年之前，先做一次斑馬測試：別問他喜不喜歡這個主意，去看一件硬邦邦的事實——為了這個痛，他上一次真的掏出錢或時間，是什麼時候、花了多少。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '槍炮、病菌與鋼鐵',        'path' => '/lens/guns-germs-and-steel'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
