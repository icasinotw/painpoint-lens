<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你點子最該收下的那筆回饋，被你歸進了「不算數」那一格：用痛點之尺拆《不當行為》｜痛點 P.A.I.N.',
  'desc'  => '《不當行為》裡塞勒靠一個笨動作拿下諾貝爾獎：把理論說「不該算數」的異常，一筆一筆抄下來。用痛點的眼光重讀——你替點子打的每個圓場，都是把市場的真話歸進「看似無關因素」；今晚把它們抄成清單，再走出去找三五個真人查證有沒有人要。',
  'path'  => '/lens/misbehaving',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《不當行為》',
  'heading'   => '你點子最該收下的那筆回饋，被你歸進了「不算數」那一格',
  'published' => '2026-06-25',
  'updated'   => '2026-06-25',
  'content'   => __DIR__ . '/_content/misbehaving.html',
  'book'      => ['name' => '不當行為：行為經濟學之父教你如何聰明思考、做好決策（Misbehaving: The Making of Behavioral Economics）', 'author' => 'Richard H. Thaler 理查・塞勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子，現在站在一塊空白的黑板前面',
    'body'    => '塞勒把每一筆「不該算數」的異常抄上黑板，抄出一座諾貝爾獎；《痛點》這把尺，幫你在悶頭做下去之前，先把你一直解釋掉的那些現實攤開來驗。現在就免費體檢一個點子，五分鐘標出你最沒底、最該第一個去撞的那一格；或翻翻《痛點》電子書。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/book', 'label' => '看《痛點》電子書'],
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
    ['name' => '不當行為',  'path' => '/lens/misbehaving'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
