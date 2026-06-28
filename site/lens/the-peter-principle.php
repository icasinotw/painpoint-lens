<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '每個人都升到自己做不好的那一格：用痛點之尺重讀《彼得原理》｜痛點 P.A.I.N.',
  'desc'  => '《彼得原理》發現一條讓人笑不出來的鐵律：在層級裡，每個人都升到自己做不好的那一格才停，因為升遷只看你上一格的成績。用痛點的眼光重讀——你那個點子，也正拿履歷與把握當證據，賭一個還沒有半個陌生人投過票的市場。',
  'path'  => '/lens/the-peter-principle',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《彼得原理》',
  'heading'   => '你拿上一格的成績單，賭一個全新的市場',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-peter-principle.html',
  'book'      => ['name' => '彼得原理', 'author' => 'Laurence J. Peter、Raymond Hull'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上正好有個點子，想知道它站不站得住？',
    'body'    => '《彼得原理》讓你看懂升遷怎麼把人送進做不來的位子；痛點之尺只多問一句——你那個點子，有沒有一個陌生人真的為它掏過錢。',
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
    ['name' => '彼得原理',  'path' => '/lens/the-peter-principle'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
