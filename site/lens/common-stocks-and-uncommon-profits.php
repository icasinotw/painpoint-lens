<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子，連一場閒聊都還沒做｜痛點 P.A.I.N.',
  'desc'  => '《非常潛力股》費雪挑股票靠的不是算財報，是出門「閒聊」——問客戶、問對手、問離職員工，把一家公司報表照不出來的真面目問出來。用痛點的眼光重讀：你那個點子，其實是你關在房間裡自己填的一份漂亮報表，最該確認的「真的有人在痛、在付錢嗎」，沒一條在試算表裡，全在你還沒去問的人身上。',
  'path'  => '/lens/common-stocks-and-uncommon-profits',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《非常潛力股》',
  'heading'   => '你那個點子，連一場閒聊都還沒做',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/common-stocks-and-uncommon-profits.html',
  'book'      => ['name' => '非常潛力股（Common Stocks and Uncommon Profits）', 'author' => 'Philip Fisher 菲利普・費雪'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '替點子做一場閒聊，再決定要不要押',
    'body'    => '費雪挑股票不靠算、靠出門問人；你那個點子最該問清楚的，是「真的有人在痛、在付錢嗎」。趁還沒辭職、沒寫半行程式，先走出去，找一個跟你沒交情、真有這個痛的人，問他現在怎麼將就、上一次為它花過多少時間和錢。',
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
    ['name' => '非常潛力股', 'path' => '/lens/common-stocks-and-uncommon-profits'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
