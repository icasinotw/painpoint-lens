<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你點子的犀牛，是一群人沒掏的錢｜痛點 P.A.I.N.',
  'desc'  => '渥克在《灰犀牛》說，真正壓垮你的，往往是一頭你看了很久、卻遲遲沒動的犀牛，而不是事後才被叫成「黑天鵝」的意外。用痛點之尺重讀：你那個點子最前面那頭犀牛，是一群人遲遲沒掏的錢——牠不衝不吼，長相就是「沒有人來」，最便宜的處理時機，是牠還離你很遠的時候。',
  'path'  => '/lens/the-gray-rhino',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《灰犀牛》',
  'heading'   => '你點子的犀牛，是一群人沒掏的錢',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-gray-rhino.html',
  'book'      => ['name' => '灰犀牛', 'author' => 'Michele Wucker 米歇爾・渥克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那頭犀牛，逼到燈光下了嗎？',
    'body'    => '渥克要你正視一頭看得見的危機；你那個點子的犀牛更難認，牠的長相就是「沒有人來」。趁牠還遠，先走過去看清楚——去找幾個真有這個痛的人，看他現在怎麼將就、上次為它掏過多少時間和錢。',
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
    ['name' => '灰犀牛', 'path' => '/lens/the-gray-rhino'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
