<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《精實企業》：你正用管成熟生意的方式，管一個還沒人要的點子｜痛點 P.A.I.N.',
  'desc'  => '《精實企業》教大公司把「探索」和「深耕」分開管，用「創新會計」替沒驗過的新事換一塊計分板。用痛點之尺重讀：抱著點子的你，正用管成熟生意的路線圖與進度條，在管一件百分之百還沒人要的事——換一本帳，別記你做了多少，記你驗掉了多少。',
  'path'  => '/lens/lean-enterprise',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《精實企業》',
  'heading'   => '你拿賺錢生意的計分板，替沒人要的點子打分',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/lean-enterprise.html',
  'book'      => ['name' => '精實企業：高績效組織如何達成創新規模化', 'author' => 'Jez Humble 傑茲・漢柏（與 Joanne Molesky、Barry O’Reilly 合著）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那塊計分板上，有沒有一格在量「有沒有人要」？',
    'body'    => '《精實企業》用「創新會計」幫大公司換掉舊計分板。花五分鐘，替你的點子驗一下最沒被驗過的是哪一軸。',
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
    ['name' => '精實企業',  'path' => '/lens/lean-enterprise'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
