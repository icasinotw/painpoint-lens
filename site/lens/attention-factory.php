<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '真話寫在你滑掉的那半秒裡：用痛點之尺重讀《抖音》｜痛點 P.A.I.N.',
  'desc'  => '馬修・布倫南《抖音》拆開那台「猜中你」的機器：它從不問你喜不喜歡，只看你零點幾秒就滑掉。用 P.A.I.N. 重讀——它證明了行為比嘴誠實，但它量的是注意力，你的點子要驗的，是有沒有人為這個痛掏錢。',
  'path'  => '/lens/attention-factory',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《抖音》',
  'heading'   => '真話寫在你滑掉的那半秒裡',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/attention-factory.html',
  'book'      => ['name' => '抖音', 'author' => 'Matthew Brennan 馬修・布倫南'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '想知道你手上那個點子，黏的是眼球，還是痛？',
    'body'    => '抖音證明了行為比嘴巴誠實。把同一把尺轉向你自己：用 P.A.I.N. 體檢工具，五分鐘看清你抓到的是一時停留的注意力，還是有人真的在為這個痛掏錢。',
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
    ['name' => '抖音',      'path' => '/lens/attention-factory'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
