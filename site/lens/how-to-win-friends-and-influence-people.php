<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '市場說不要，你卻在準備反駁的講稿：用痛點之尺重讀《人性的弱點》｜痛點 P.A.I.N.',
  'desc'  => '卡內基《人性的弱點》最反直覺的一條：你贏不了爭論。用痛點的眼光重讀，創業者最貴的一場辯論，正是跟冷淡的市場吵——沒人買時，你心裡先長出來的不是「我搞錯了嗎」，是一份替自己辯護的講稿。卡內基要你別說服對方想要你的東西，先去看他本來就想要什麼；而他假設對方已坐你對面，創業偏偏要你先把人找出來、看著他真的付一次錢。',
  'path'  => '/lens/how-to-win-friends-and-influence-people',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《人性的弱點》',
  'heading'   => '市場說不要，你卻在準備反駁的講稿',
  'published' => '2026-06-26',
  'updated'   => '2026-06-26',
  'content'   => __DIR__ . '/_content/how-to-win-friends-and-influence-people.html',
  'book'      => ['name' => '人性的弱點', 'author' => 'Dale Carnegie 戴爾・卡內基'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '在你掏出下一張反駁市場的講稿之前',
    'body'    => '《人性的弱點》教你別跟人爭、先去看對方本來要什麼；《痛點》這把尺，幫你把那個「對方」從你腦中拉到現實——確認外面真的有人在為這個痛掏錢，不是你一個人對著空氣練功。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '首頁',        'path' => '/'],
    ['name' => '痛點之尺',     'path' => '/lens'],
    ['name' => '人性的弱點',    'path' => '/lens/how-to-win-friends-and-influence-people'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
