<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把頭銜拿掉，還有誰真的跟著你：用痛點之尺重讀《領導，不需要頭銜》｜痛點 P.A.I.N.',
  'desc'  => '班尼斯訪遍近三十位領導者，發現他們唯一的共同點是各自把自己活成了完整的人——領導，從來不靠名片上那行頭銜。用痛點的眼光重讀《領導，不需要頭銜》：頭銜是還沒驗證就先撥下的預算，真要驗領導力，把職權整個拿掉，數數看還剩幾個人會為你動。',
  'path'  => '/lens/on-becoming-a-leader',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《領導，不需要頭銜》',
  'heading'   => '把頭銜拿掉，還有誰真的跟著你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/on-becoming-a-leader.html',
  'book'      => ['name' => '領導，不需要頭銜', 'author' => '華倫・班尼斯 Warren Bennis'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '下一個願意跟你走的人，是怎麼來的？',
    'body'    => '頭銜借得到別人的時間，借不到別人的真心。下次想用職權壓一件事之前，先想想沒有頭銜的版本——這正是班尼斯說的，把自己活成領導者的起點。',
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
    ['name' => '領導，不需要頭銜', 'path' => '/lens/on-becoming-a-leader'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
