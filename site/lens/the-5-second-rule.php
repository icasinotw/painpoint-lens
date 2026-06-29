<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '五秒鐘，你的腦袋就編好了不做的理由：用痛點之尺重讀《五秒法則》｜痛點 P.A.I.N.',
  'desc'  => '羅賓斯說，你冒出一股想行動的念頭時，腦袋只給你五秒，五秒一過就替你編好了不做的理由，所以倒數五、四、三、二、一，搶在藉口成形前先動。用痛點的眼光重讀：這招治得了「知道該做卻不敢」的猶豫，卻分不出另一種——你以為該做、其實還沒驗證過的衝動；對著沒驗的方向倒數五秒，只會賠得更快。',
  'path'  => '/lens/the-5-second-rule',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《五秒法則》',
  'heading'   => '五秒鐘，你的腦袋就編好了不做的理由',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-5-second-rule.html',
  'book'      => ['name' => '五秒法則', 'author' => 'Mel Robbins（梅爾・羅賓斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你一直舉棋不定的那件事，是哪一種？',
    'body'    => '下一次衝動上來、你正要倒數五秒衝出去之前，先分清楚：你是不敢，還是還沒驗。分清楚了，再決定要不要數到一。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => '五秒法則',      'path' => '/lens/the-5-second-rule'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
