<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '思考模型收了三百個，真正擋住你騙自己的有幾個：用痛點之尺重讀《超級思維》｜痛點 P.A.I.N.',
  'desc'  => '《超級思維》把橫跨各學科的三百個思考模型整理成一張網。用痛點的眼光重讀：你不缺模型，缺的是臨場想得起來那一個——機會成本替你把代價算成數字、逆向思考替你那套太順的說法挑毛病，這兩格就夠你回本。',
  'path'  => '/lens/super-thinking',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《超級思維》',
  'heading'   => '思考模型收了三百個，真正擋住你騙自己的有幾個',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/super-thinking.html',
  'book'      => ['name' => '超級思維：跨界整合 300 個最強思考模型，提升判斷力、解決問題，終極理性決策聖經', 'author' => 'Gabriel Weinberg 蓋布瑞・溫柏格、Lauren McCann 蘿倫・麥肯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '先算清楚，你選了這個放棄掉什麼',
    'body'    => '《超級思維》給你三百個思考模型；痛點這把尺，只逼你先把一件事算清楚——你選了這個，真正放棄掉的是什麼。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '超級思維',    'path' => '/lens/super-thinking'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
