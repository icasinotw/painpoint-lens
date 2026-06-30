<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '衝出去，是為了換一個桌上想不到的答案：用痛點之尺重讀《人生準備40%就先衝》｜痛點 P.A.I.N.',
  'desc'  => '謝文憲說，別等準備到一百分，湊到四成就動，剩下的路上邊走邊補。用痛點的眼光重讀：四成就衝的真正用途，是用最小、收得回的代價，去換一個你在桌上怎麼想都想不到的真實回饋——而不是壯著膽賭一把；今晚就能替一件拖很久的事問兩個問題，分清楚這一步是去拿答案，還是去賭運氣。',
  'path'  => '/lens/just-go-at-40-percent',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《人生準備40%就先衝》',
  'heading'   => '衝出去，是為了換一個桌上想不到的答案',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/just-go-at-40-percent.html',
  'book'      => ['name' => '人生準備40%就先衝', 'author' => '謝文憲'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最近一直想衝的那件事，衝出去到底能換到什麼真實回饋？',
    'body'    => '挑一件你一直「等準備好」的事，先別問自己夠不夠勇敢，改問：衝出去能換到一個我現在想不到的真實回饋嗎？萬一錯了，賠掉的收得回來嗎？這兩個答案寫下來，你就知道這一步現在該不該跨。',
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
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '人生準備40%就先衝',   'path' => '/lens/just-go-at-40-percent'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
