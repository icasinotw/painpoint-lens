<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '客戶不買，你卻一直在加功能：用痛點之尺重讀《如何讓人改變想法》｜痛點 P.A.I.N.',
  'desc'  => '《如何讓人改變想法》拆穿了「資訊匱乏模型」——以為對方不接受只是因為講得不夠多。用痛點的眼光重讀：客戶遲遲不買，多半不是還沒搞懂你的產品，你該做的不是再加一個功能，是閉嘴去聽他為什麼還不要。',
  'path'  => '/lens/how-minds-change',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《如何讓人改變想法》',
  'heading'   => '客戶不買，你卻一直在加功能',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/how-minds-change.html',
  'book'      => ['name' => '如何讓人改變想法：關於信念、意見與說服的科學與藝術', 'author' => 'David McRaney（大衛・麥瑞尼）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你的客戶不買，你確認過是哪一種「不要」嗎？',
    'body'    => '別急著開下一個功能的規格。先約一個消失的客戶聊十五分鐘，把他真正卡住的地方聽出來，再回頭決定該加什麼——這才是這本書用在生意上的真正吃法。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '如何讓人改變想法', 'path' => '/lens/how-minds-change'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
