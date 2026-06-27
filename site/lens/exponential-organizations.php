<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '指數型成長是一台乘法機，最怕你餵進去的是個零：用痛點之尺重讀《指數型組織》｜痛點 P.A.I.N.',
  'desc'  => '《指數型組織》用一組燒掉幾十億美元的衛星開場，教你別用線性思考面對指數型世界，再遞給你 MTP 與 SCALE 一整套把規模催到十倍的乘法機。用痛點的眼光看：乘法機再強，乘的若是個沒人要的零，只會讓你更快更貴地把零放大；按下放大之前，先去找出那個非零的「1」。',
  'path'  => '/lens/exponential-organizations',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《指數型組織》',
  'heading'   => '指數型成長是一台乘法機，最怕你餵進去的是個零',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/exponential-organizations.html',
  'book'      => ['name' => '指數型組織', 'author' => 'Salim Ismail 薩利姆・伊斯梅爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那台乘法機架得再漂亮，要乘的數字是零嗎？',
    'body'    => '《指數型組織》教你用 MTP 和 SCALE 把規模催到十倍；《痛點》這把尺，幫你先確認要被放大的那個東西，真的有人肯掏錢。現在就免費體檢一個點子，五分鐘看出你最弱的那一軸；或翻翻《痛點》電子書。',
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
    ['name' => '指數型組織',  'path' => '/lens/exponential-organizations'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
