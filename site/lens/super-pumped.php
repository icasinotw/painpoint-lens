<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '叫車這個痛，Uber 解得漂亮，代價它算錯了：用痛點之尺重讀《恣意橫行》｜痛點 P.A.I.N.',
  'desc'  => '《恣意橫行》裡，Uber 把「叫車」這個痛解到了滿分——有人在痛、早就在付錢，市場用幾百億美元替它背書。用痛點之尺重讀：它差點作死自己，問題從來不在點子，而在把「市場驗證了我的點子」，聽成了「我這個人從此都對」。一本被驗證過的痛，從入場券被當成免死金牌的全程。',
  'path'  => '/lens/super-pumped',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《恣意橫行》',
  'heading'   => '叫車這個痛，Uber 解得漂亮，代價它算錯了',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/super-pumped.html',
  'book'      => ['name' => '恣意橫行：Uber 如何跌落神壇？', 'author' => 'Mike Isaac 麥克・伊薩克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個被點頭的點子，真的站得住嗎？',
    'body'    => 'Uber 把「有沒有人要、痛不痛到肯付錢」這兩關過得發亮，你的點子過得了嗎？痛點之尺前面那幾關，先幫你把這兩題問清楚——花五分鐘體檢一個點子，看出你最弱的那一軸。',
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
    ['name' => '恣意橫行',  'path' => '/lens/super-pumped'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
