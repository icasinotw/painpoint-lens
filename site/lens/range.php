<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '火追上來時，他們手裡還抓著那把鋸子——你那把放不下的，叫「我這個點子」｜痛點 P.A.I.N.',
  'desc'  => '艾波斯坦《跨能致勝》借曼恩峽谷打火員的死，講一件事：越熟練的本事，越難在該放手時放手。用痛點之尺重讀：市場是一座「險惡」的練習場，你卻把一萬個鐘頭砸在它身上，把一個沒人要的點子磨到完美。那把放不下的鋸子叫沉沒成本——掂得動它的，是一個肯說真話的陌生人。',
  'path'  => '/lens/range',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《跨能致勝》',
  'heading'   => '你那把放不下的鋸子，叫「我這個點子」',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/range.html',
  'book'      => ['name' => '跨能致勝（Range）', 'author' => 'David Epstein 大衛・艾波斯坦'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你抱得最緊的那個點子，是還能救命的工具，還是已經在拖累你逃命的鋸子？',
    'body'    => '艾波斯坦教你看清「越熟練越難放手」這個陷阱；《痛點》這把尺，幫你掂出此刻最該放手的那把鋸子，就是你捨不得拿去驗的「一定有人要」。現在就免費體檢一個點子，五分鐘把那句會發光的話，換算成一個查得到對錯的冷數字——它到底有幾個真人、為它掏過幾塊錢。',
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
    ['name' => '跨能致勝',  'path' => '/lens/range'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
