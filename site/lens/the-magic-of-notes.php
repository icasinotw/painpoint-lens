<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '筆記真正的魔力，在你替它寫下一句「所以呢」：用痛點之尺重讀《筆記的魔力》｜痛點 P.A.I.N.',
  'desc'  => '前田裕二說，多數人的筆記只做到「記錄」，真正有魔力的是下一步「抽象化」——逼自己回答這件事在說什麼。用痛點的眼光重讀《筆記的魔力》：客戶嘴上的抱怨只是水面那層事實，把它往下抽成真正的痛，就是這套筆記術搬到生意上的吃法；今晚就能挑一件小事，在底下多寫兩行。',
  'path'  => '/lens/the-magic-of-notes',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《筆記的魔力》',
  'heading'   => '筆記真正的魔力，在你替它寫下一句『所以呢』',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-magic-of-notes.html',
  'book'      => ['name' => '筆記的魔力 The Magic of Memos', 'author' => '前田裕二'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你今天注意到的那件小事，停在「記下來」還是「抽出來」？',
    'body'    => '挑一件今天讓你停了一下的小事，逼自己在底下多寫兩行——它在說什麼、明天能用到哪裡，這才是這套筆記術真正搬得進你生活的吃法。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '筆記的魔力',      'path' => '/lens/the-magic-of-notes'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
