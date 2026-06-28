<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「一定有人要」是觀察，還是你自己下的評論？用痛點之尺重讀《非暴力溝通》｜痛點 P.A.I.N.',
  'desc'  => '《非暴力溝通》的盧森堡要你分清觀察與評論：只說攝影機拍得到的事實，別把判斷當成事實講出去。用痛點之尺重讀：你那句「一定有人要」正是一句被當成觀察的評論——沒有鏡頭拍到陌生人掏錢，它就還沒驗過。',
  'path'  => '/lens/nonviolent-communication',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《非暴力溝通》',
  'heading'   => '「一定有人要」，是你當成事實寫下的評論',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/nonviolent-communication.html',
  'book'      => ['name' => '非暴力溝通：愛的語言', 'author' => 'Marshall B. Rosenberg 馬歇爾・盧森堡'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，是攝影機拍得到的觀察，還是你自己下的評論？',
    'body'    => '盧森堡要你只說攝影機拍得到的事實。這禮拜，把你的東西連同一個你真會收的價格，端到一個對你沒義務的陌生人面前——讓他掏不掏錢，替你把那句評論，驗成一句真的觀察。',
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
    ['name' => '非暴力溝通', 'path' => '/lens/nonviolent-communication'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
