<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先扣「有沒有人要」，剩下的才准做：用痛點之尺重讀《獲利優先》｜痛點 P.A.I.N.',
  'desc'  => '米卡洛維茲把算式倒過來——先扣獲利、剩的才准花，因為排在最後的東西永遠輪不到。用痛點的眼光重讀：你那個點子也有一條算式，卻把最該先扣的「有沒有人要」留到了最後，跟舊公式裡的獲利一樣，永遠輪不到。',
  'path'  => '/lens/profit-first',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《獲利優先》',
  'heading'   => '你把「有沒有人要」，留到了最後才問',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/profit-first.html',
  'book'      => ['name' => '獲利優先', 'author' => 'Mike Michalowicz 麥可・米卡洛維茲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上有個點子，卻一直繞著「有沒有人要」走？',
    'body'    => '《獲利優先》教你把最要緊的那一口先夾走、別留到最後；同一招用在點子上，就是動工前先確認那一頭真的有人，再決定要不要整缸倒過去。',
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
    ['name' => '獲利優先',  'path' => '/lens/profit-first'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
