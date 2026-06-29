<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺重讀《領導禪》｜痛點 P.A.I.N.',
  'desc'  => '菲爾・傑克森拿過十一枚 NBA 冠軍戒指，帶過喬丹、柯比、歐尼爾這些最大的自我，靠的卻是「不自己出手」。用痛點的眼光重讀《領導禪》：你愛上的那套漂亮劇本，市場早就背熟了；把「非我不可」放下，事業才長得出第二個投得進的人。',
  'path'  => '/lens/eleven-rings',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《領導禪》',
  'heading'   => '十一枚冠軍戒指，沒有一枚是他自己投進的',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/eleven-rings.html',
  'book'      => ['name' => '領導禪：NBA最強總教頭親自傳授「無私」與「智慧」的魔力領導學', 'author' => 'Phil Jackson 菲爾・傑克森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '帶人帶到心累，問題可能不在他們身上',
    'body'    => '傑克森逼喬丹學的，是把「非我不可」放下；同一把尺對著你手上的事業問一句：有哪一件，是你以為非你不可、其實早該交出去的？',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '領導禪',     'path' => '/lens/eleven-rings'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
