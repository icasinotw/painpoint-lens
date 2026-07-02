<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '出門問一個活人，難的是開口那一下｜痛點 P.A.I.N.',
  'desc'  => '海蒂・格蘭特用一連串實驗證明：別人願意幫你的程度，遠比你開口前敢想的高，你怕的拒絕大半是自己先替對方說的。把這個發現轉向你的點子——需求驗證真正卡住的那一步，常常不是不懂方法，是你走不出門、開不了口去問一個活人要不要。',
  'path'  => '/lens/reinforcements',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《好好拜託》',
  'heading'   => '開口前，你已經先替對方拒絕了你自己',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/reinforcements.html',
  'book'      => ['name' => '好好拜託', 'author' => 'Heidi Grant 海蒂・格蘭特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '開口問一個活人，是驗點子的第一個動作',
    'body'    => '格蘭特證明你對「被拒絕」的估計錯得離譜；同一份膽子，你那個還沒問過半個人的點子，更需要你走出門、開口問一次。',
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
    ['name' => '好好拜託', 'path' => '/lens/reinforcements'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
