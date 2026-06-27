<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你看見的市場，是大腦關在黑暗裡畫出來的一張畫｜痛點 P.A.I.N.',
  'desc'  => '伊葛門《大腦解密手冊》說，你這顆腦從沒直接碰過世界，它關在頭骨的黑暗裡，只憑幾筆電流就生成一整片現實。用痛點之尺重讀：你那句「一定有人要」，也是大腦在暗處自己畫的內部影片，它只在被現實打臉那一下才肯改稿——遞得進那記打臉的，只有一個肯掏真錢的陌生人。',
  'path'  => '/lens/the-brain-the-story-of-you',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《大腦解密手冊》',
  'heading'   => '你看見的市場，是大腦關在黑暗裡畫出來的一張畫',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/the-brain-the-story-of-you.html',
  'book'      => ['name' => '大腦解密手冊（The Brain: The Story of You）', 'author' => 'David Eagleman 大衛・伊葛門'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那張「市場很大」的畫面，是查證過的，還是你大腦在暗處自己畫好、自己信了的？',
    'body'    => '伊葛門讓你看清大腦怎麼造出你的現實；《痛點》這把尺，幫你揪出此刻正在你點子上放映的那支內部影片。現在就免費體檢一個點子，五分鐘看清你最篤定的那一格，是外面送進來的，還是你自己腦補的；或翻翻《痛點》電子書。',
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
    ['name' => '大腦解密手冊',  'path' => '/lens/the-brain-the-story-of-you'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
