<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '站在創造價值那一邊，是一個故事說了算：用痛點之尺重讀《萬物的價值》｜痛點 P.A.I.N.',
  'desc'  => '馬祖卡托在《萬物的價值》裡指出：自從經濟學把價值等同於價格，只要收得到錢，任何抽租都能自稱在創造價值，那條分開「創造」與「搬走」的線，於是誰故事說得漂亮就畫在誰那邊。用痛點的眼光重讀：你那句「我在創造價值」也可能是個你自己最先信的劇本，真正把你放到線這邊的，是有人為一個真痛掏了錢。',
  'path'  => '/lens/the-value-of-everything',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《萬物的價值》',
  'heading'   => '站在創造價值那一邊，是一個故事說了算',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-value-of-everything.html',
  'book'      => ['name' => '萬物的價值（The Value of Everything: Making and Taking in the Global Economy）', 'author' => 'Mariana Mazzucato 瑪里亞娜・馬祖卡托'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '看懂那條線之後，先別急著替自己貼上「創造價值」的標籤',
    'body'    => '馬祖卡托逼你戒掉的，是把一個漂亮說法當成價值本身；你手上那個遲遲說不出「誰為它付過錢」的點子，卡的常常是同一件事。把它攤開照一照，看看你最拿得出手的那句價值主張，底下到底有沒有地基。',
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
    ['name' => '萬物的價值', 'path' => '/lens/the-value-of-everything'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
