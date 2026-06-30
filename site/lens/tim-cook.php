<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '救了蘋果的，是一個算庫存的人：用痛點之尺拆《提姆．庫克》｜痛點 P.A.I.N.',
  'desc'  => '賈伯斯過世後，所有人都等著看蘋果衰落，接手的卻是沉默寡言、只懂供應鏈的提姆．庫克——八年後蘋果市值破兆。用痛點的眼光拆利安德．卡尼這本傳記：我們太習慣把成功歸給台上那個有遠見的天才，卻低估了一件事——公司的價值有很大一塊，藏在沒人鼓掌、一天一天磨出來的執行裡。',
  'path'  => '/lens/tim-cook',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《提姆．庫克》',
  'heading'   => '救了蘋果的，是一個算庫存的人',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/tim-cook.html',
  'book'      => ['name' => '提姆．庫克（Tim Cook: The Genius Who Took Apple to the Next Level）', 'author' => '利安德・卡尼 Leander Kahney'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個沒人想碰的環節，正在替你省錢還是燒錢',
    'body'    => '找出你工作裡最不起眼、一停就出事的那個流程，把它現在花掉你多少時間、多少錢，算成一個數字。庫克盯庫存盯的就是這種數字——算得出來，你才磨得動它。',
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
    ['name' => '提姆．庫克', 'path' => '/lens/tim-cook'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
