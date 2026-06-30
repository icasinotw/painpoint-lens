<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '文案的功夫，是把自己讓出去：用痛點之尺重讀《文案的基本修養》｜痛點 P.A.I.N.',
  'desc'  => '東東槍說「說什麼，比怎麼說重要」，這本書治的是文案的自我表達病——把屁股從作者的椅子，挪到讀者那邊。用 P.A.I.N. 補上他沒回頭看的一格：他要你替讀者著想，卻預設那張椅子上真坐著一個有需要的人；這個需要成不成立，得你動筆前自己先確認。',
  'path'  => '/lens/the-basics-of-copywriting',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《文案的基本修養》',
  'heading'   => '文案的功夫，是把自己讓出去',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-basics-of-copywriting.html',
  'book'      => ['name' => '文案的基本修養', 'author' => '東東槍'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你低頭服務的那個讀者，椅子上真的有人嗎？',
    'body'    => '東東槍逼你把自己讓出去、處處替讀者著想；在那之前，先花五分鐘確認那張椅子上真有一個帶著需要的人。',
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
    ['name' => '文案的基本修養', 'path' => '/lens/the-basics-of-copywriting'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
