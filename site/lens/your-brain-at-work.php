<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '腦力是有預算的，你卻從沒算過這筆帳：用痛點之尺重讀《順著大腦來生活》｜痛點 P.A.I.N.',
  'desc'  => '洛克在《順著大腦來生活》把前額葉皮質寫成一個極耗能、額度有限的資源：你每做一個決定、忍住一次衝動，都在從同一個帳戶提款。用痛點的眼光重讀：他要你做的，正是痛點對生意做的——先替最貴的腦力標出價格，確認一件事值不值得你動腦，再把那天最清醒的額度，留給真正配得上它的那件。',
  'path'  => '/lens/your-brain-at-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《順著大腦來生活》',
  'heading'   => '腦力是有預算的，你卻從沒算過這筆帳',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/your-brain-at-work.html',
  'book'      => ['name' => '順著大腦來生活', 'author' => 'David Rock（大衛・洛克）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最該動腦的那件事，排在第幾順位？',
    'body'    => '別讓一整天的小事平分掉你的腦力。先想清楚明天哪一件事最需要你清醒的判斷，把它排到你精神最滿的時段先做。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '順著大腦來生活',    'path' => '/lens/your-brain-at-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
