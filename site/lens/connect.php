<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你在氣的那個人，常住在你腦子裡：用痛點之尺拆《史丹佛人際動力學》｜痛點 P.A.I.N.',
  'desc'  => '布雷弗德和羅賓把史丹佛開了半世紀的「觸感課」寫成《史丹佛人際動力學》：一段關係要變深，靠的是當面交換真實回饋，不是靠猜。用痛點的眼光重讀——你對一個人下的定論，常只是你腦子裡自己拼出來的版本；他真正怎麼想，得走過去跟真人核對一次才知道。關係，也要做需求驗證。',
  'path'  => '/lens/connect',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《史丹佛人際動力學》',
  'heading'   => '你在氣的那個人，常住在你腦子裡',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/connect.html',
  'book'      => ['name' => '史丹佛人際動力學（Connect: Building Exceptional Relationships）', 'author' => 'David Bradford 大衛・布雷弗德、Carole Robin 凱蘿・羅賓'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把猜來的動機收回來，這個動作不只用在關係上',
    'body'    => '布雷弗德和羅賓教你在關係裡別把腦補的動機當成事實；換到你手上正在做的那件事，同一條紀律是——別把「我覺得一定有人要」當成已經有人要，走出去跟真人對一次帳。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',            'path' => '/'],
    ['name' => '痛點之尺',         'path' => '/lens'],
    ['name' => '史丹佛人際動力學',   'path' => '/lens/connect'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
