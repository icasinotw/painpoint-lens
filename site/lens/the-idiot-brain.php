<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你腦裡那個喊「這點子一定行」的聲音，正是最不能信的證人：用痛點之尺重讀《糗大了！原來是大腦搞的鬼》｜痛點 P.A.I.N.',
  'desc'  => '《糗大了！原來是大腦搞的鬼》用神經科學拆穿：你的大腦會偏心地替你想相信的點子蒐證、把被拒絕當成危險而幫你逃避驗證、事後還偷改你聽到的真話。用痛點的眼光重讀：判斷「有沒有人要」的那顆大腦，正是最不該信的那一顆——驗證得搬到它碰不到的地方。',
  'path'  => '/lens/the-idiot-brain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《糗大了！原來是大腦搞的鬼》',
  'heading'   => '你腦裡那個喊「這點子一定行」的聲音，正是最不能信的證人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-idiot-brain.html',
  'book'      => ['name' => '糗大了！原來是大腦搞的鬼', 'author' => 'Dean Burnett 迪恩・柏內特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title' => '判斷「有沒有人要」，別交給你自己那顆偏心的大腦',
    'body'  => '這本書告訴你大腦多會替你想相信的點子護航；《痛點》這把尺，教你把判斷搬到腦袋碰不到的地方——先在紙上寫死一條標準，再走出門聽真人怎麼說，回來對照那條你親手寫死的線。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                    'path' => '/'],
    ['name' => '痛點之尺',                 'path' => '/lens'],
    ['name' => '糗大了！原來是大腦搞的鬼',   'path' => '/lens/the-idiot-brain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
