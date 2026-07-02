<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《美好人生》：你正照著一份沒人替你驗過的人生劇本在走｜痛點 P.A.I.N.',
  'desc'  => '《美好人生》用一項跑了八十年的研究，把「有錢有名就會過得好」這份人人在演的人生劇本驗了一遍——結果排在最前面那幾格，跟晚年過得好不好關係很淡。用痛點的眼光重讀羅伯特・華德定格：別急著照劇本衝，先確認它真的通往你要去的地方。',
  'path'  => '/lens/the-good-life',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《美好人生》',
  'heading'   => '八十年的研究，幫你把人生的劇本驗了一遍',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/the-good-life.html',
  'book'      => ['name' => '美好人生', 'author' => '羅伯特・華德定格'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在照著劇本衝之前，先驗一下它通不通往你要的地方',
    'body'    => '華德定格用八十年的研究，逼你回頭確認人生這份劇本到底演不演得出它答應的結局；痛點這把尺，把同一個動作用在你手上任何一個決定——動手前，先確認你走的這條路真的有人到得了終點。',
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
    ['name' => '美好人生', 'path' => '/lens/the-good-life'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
