<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把一個真痛解到上癮，就成了壟斷：用痛點之尺重讀《被壟斷的心智》｜痛點 P.A.I.N.',
  'desc'  => '法蘭克林・富爾在《被壟斷的心智》裡，寫谷歌、臉書、亞馬遜如何壟斷我們的心智。用痛點的眼光反過來讀：它們都是「把一個真痛解到上癮」的範本——解到別人離不開，就是最深的護城河；而免費那一條，代價從不寫在帳單上。',
  'path'  => '/lens/world-without-mind',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《被壟斷的心智》',
  'heading'   => '把一個真痛解到上癮，就成了壟斷',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/world-without-mind.html',
  'book'      => ['name' => '被壟斷的心智：谷歌、臉書、亞馬遜的覬覦與我們的精神獨立（World Without Mind）', 'author' => 'Franklin Foer 法蘭克林・富爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你解的那個痛，深到讓人離不開了嗎?',
    'body'    => '富爾寫的是巨頭把一個真痛解到讓人上癮的終局;同一把尺，也能拿來戳你自己手上的點子——它解的痛夠不夠深，深到有人會為它卡住、為它掏錢。把它攤開照一照，看看那條漂亮曲線底下，站的是真離不開的人，還是隨時會走的過客。',
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
    ['name' => '被壟斷的心智', 'path' => '/lens/world-without-mind'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
