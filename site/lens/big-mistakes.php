<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '越聰明的人，越容易愛上一個害死自己的故事：用痛點之尺拆《從本能交易到紀律交易》｜痛點 P.A.I.N.',
  'desc'  => '《從本能交易到紀律交易》蒐集史上最聰明投資人最慘的那筆賠錢——葛拉漢、李佛摩、鮑爾森、頂著諾貝爾獎的基金。他們栽的不是不夠聰明，是太會替自己編一套滴水不漏的劇本。用痛點的眼光重讀：你手上那個「我這次一定對」，靠的是外面的證據，還是你自己愈想愈信的一個故事？',
  'path'  => '/lens/big-mistakes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《從本能交易到紀律交易》',
  'heading'   => '越聰明的人，越容易愛上一個害死自己的故事',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/big-mistakes.html',
  'book'      => ['name' => '從本能交易到紀律交易（Big Mistakes: The Best Investors and Their Worst Investments）', 'author' => 'Michael Batnick 麥克·貝特尼克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個「我這次一定對」，是證據，還是自己編的劇本？',
    'body'    => '這本書裡最聰明的一群人，都輸在太相信自己腦中的故事。同一個提醒放到你身上：先把那個「一定對」拖出腦袋，去外面找一個真實的東西替它作證，再決定要不要押。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                       'path' => '/'],
    ['name' => '痛點之尺',                    'path' => '/lens'],
    ['name' => '從本能交易到紀律交易',          'path' => '/lens/big-mistakes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
