<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '關掉燒錢的水龍頭，才看得出誰是真的要：用痛點之尺重讀《瘋狂、恐慌與崩盤》｜痛點 P.A.I.N.',
  'desc'  => '金德伯格在《瘋狂、恐慌與崩盤》裡指出，撐起每一場金融狂熱的，底下都是借來的錢——燃料一撤就崩。用痛點的眼光重讀：你那個「好像有人要」的點子，會不會也是補貼與風潮燒出來的熱鬧？關掉燃料，才看得出誰是真的要。',
  'path'  => '/lens/manias-panics-and-crashes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《瘋狂、恐慌與崩盤》',
  'heading'   => '關掉燒錢的水龍頭，才看得出誰是真的要',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/manias-panics-and-crashes.html',
  'book'      => ['name' => '瘋狂、恐慌與崩盤', 'author' => 'Charles P. Kindleberger（查爾斯・金德伯格）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你覺得「有人要」的那件事，是真需求，還是燃料燒出來的？',
    'body'    => '別急著把「大家都在搶、隊伍排到巷口」當成有人要。先問一句：把補貼、優惠、人情撤掉，還剩幾個人肯用原價買單？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',          'path' => '/lens'],
    ['name' => '瘋狂、恐慌與崩盤',    'path' => '/lens/manias-panics-and-crashes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
