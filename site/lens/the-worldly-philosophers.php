<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '經濟學的大師，沒一個是在書房裡想出來的｜痛點 P.A.I.N.',
  'desc'  => '海爾布魯諾《俗世哲學家》把史密斯、馬爾薩斯、馬克思、凱因斯寫成一群「入世」的哲學家——他們的本事不是更會推理，是肯走進市場、工廠、人群裡看真人怎麼為錢行動。用痛點之尺重讀：你卻常常反過來，坐在書房裡推想客戶「應該」會要這個。先走出去看一眼，你那套漂亮推論才有地基。',
  'path'  => '/lens/the-worldly-philosophers',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《俗世哲學家》',
  'heading'   => '經濟學的大師，沒一個是在書房裡想出來的',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-worldly-philosophers.html',
  'book'      => ['name' => '俗世哲學家', 'author' => 'Robert Heilbroner 海爾布魯諾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你筆記本上那個客戶，去看過真人了嗎',
    'body'    => '那群俗世哲學家的本事，是肯走出書房、看真實的人怎麼為錢行動。你那個點子最該補的也是這一步：趁還沒辭職、沒寫半行程式，先去看幾個真有這個麻煩的人，現在實際上怎麼湊合著解決。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '俗世哲學家',   'path' => '/lens/the-worldly-philosophers'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
