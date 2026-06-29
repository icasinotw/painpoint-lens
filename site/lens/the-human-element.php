<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '阻力清得再乾淨，飛機照樣沒人要搭：用痛點之尺重讀《心理摩擦力》｜痛點 P.A.I.N.',
  'desc'  => '《心理摩擦力》要你別再替點子加燃料，改去拔掉慣性、費力、情感、抗拒這四道阻力。用痛點的眼光重讀：減摩擦是替點子清跑道，威力驚人；但跑道清得再乾淨，也得先確認那班飛機，飛去的地方真有人在等——它甚至會替你做出一個假的「有人要」。',
  'path'  => '/lens/the-human-element',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《心理摩擦力》',
  'heading'   => '阻力清得再乾淨，飛機照樣沒人要搭',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-human-element.html',
  'book'      => ['name' => '心理摩擦力', 'author' => 'Loran Nordgren（洛蘭・諾格倫）、David Schonthal（大衛・尚塔爾）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '拔摩擦之前，先確認跑道盡頭有人',
    'body'    => '《心理摩擦力》教你把擋路的四道阻力一道道拆掉；痛點這把尺，幫你先答更前面那一題——路的盡頭，到底有沒有人在等。現在就免費體檢一個點子，五分鐘分清你面對的是摩擦問題，還是根本沒人要。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',      'path' => '/'],
    ['name' => '痛點之尺',   'path' => '/lens'],
    ['name' => '心理摩擦力',  'path' => '/lens/the-human-element'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
