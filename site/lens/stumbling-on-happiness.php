<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你想像中的客戶,跟你想像中的快樂一樣會騙你:用痛點之尺重讀《哈佛最受歡迎的幸福練習課》｜痛點 P.A.I.N.',
  'desc'  => '吉爾伯特《哈佛最受歡迎的幸福練習課》證明:人類預測自己未來感受的能力爛得出奇——想像力會自動拿現在替未來上色、省略掉所有麻煩細節,還不告訴你。用痛點的眼光重讀:創業者每天都在犯同一個錯,只是把「想像自己會多快樂」換成「想像市場會多愛我」;吉爾伯特開的解藥(別空想,去問一個正活在那處境裡的真人),正是需求驗證最素樸的那句話。',
  'path'  => '/lens/stumbling-on-happiness',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《哈佛最受歡迎的幸福練習課》',
  'heading'   => '你想像中的客戶,跟你想像中的快樂一樣會騙你',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/stumbling-on-happiness.html',
  'book'      => ['name' => '哈佛最受歡迎的幸福練習課(Stumbling on Happiness)', 'author' => 'Daniel Gilbert 丹尼爾・吉爾伯特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '別再用想像力跑市場模擬',
    'body'    => '吉爾伯特要你別空想自己的未來,去問一個正活在那處境裡的真人;同一招搬到你的點子上,就是別坐在房裡想像有沒有人要——出門找幾個正被這問題折磨的人,看他們現在怎麼撐。',
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
    ['name' => '哈佛最受歡迎的幸福練習課', 'path' => '/lens/stumbling-on-happiness'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
