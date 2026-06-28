<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '市場早就一堆人在做了，我還該進場嗎？紅海裡怎麼找到自己的縫｜痛點之尺',
  'desc'  => '搜出滿頁對手，先別關視窗。紅海代表「有人肯花錢」已經被驗證過了——真正要判斷的是兩件事:這條街客人夠不夠分、客人一邊付錢一邊在罵什麼。那句抱怨,就是別人沒解乾淨、留給你的縫。一套走進紅海的判斷法。',
  'path'  => '/ask/crowded-market',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 紅海',
  'heading'   => '想做的東西，早就一堆人在做了——我還該擠進去嗎？',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/crowded-market.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '擠不擠得進這條街，先讓尺幫你量一遍那道縫',
    'body'    => '免費的點子體檢，會帶你照 P.A.I.N. 一格一格——尤其逼你回答紅海裡最關鍵的那題:你要解的那句抱怨,別人是不是真的還沒解掉、又養不養得活再多一家。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/empty-market', 'label' => '一個「沒人在做」的點子，該興奮，還是該逃？'],
  'next'      => ['url' => '/ask/fake-demand', 'label' => '二十幾個人都說「我會買」，上線那天一張單都沒進'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',   'path' => '/'],
    ['name' => '拆問題',  'path' => '/ask'],
    ['name' => '紅海',    'path' => '/ask/crowded-market'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
