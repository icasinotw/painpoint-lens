<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '先給你一個美到不忍心查的數字：用痛點之尺拆《經濟殺手的告白》｜痛點 P.A.I.N.',
  'desc'  => '柏金斯當過「經濟殺手」，工作是替開發中國家算出一份灌了水的成長預測，漂亮到沒人肯低頭查，一份預測就把整個國家綁進二十年還不完的債。用痛點的眼光重讀約翰・柏金斯這本告白：灌水永遠藏在一個沒人追問的假設裡，最貴的代價都被悄悄挪到「以後」；下次那份讓你越算越興奮的試算表，先去搖它最上游那根柱子。',
  'path'  => '/lens/confessions-of-an-economic-hit-man',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《經濟殺手的告白》',
  'heading'   => '先給你一個美到不忍心查的數字',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/confessions-of-an-economic-hit-man.html',
  'book'      => ['name' => '經濟殺手的告白（Confessions of an Economic Hit Man）', 'author' => 'John Perkins 約翰・柏金斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手邊那份試算表，柱子搖得動嗎',
    'body'    => '柏金斯讓你看見，一份沒人追問的預測，能綁住一整個國家；換到你自己的點子上，同一份漂亮試算表，值得你在簽字前先搖一搖它最上游那根柱子。花五分鐘免費體檢一個點子，看出你最沒把握的那一格。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',          'path' => '/'],
    ['name' => '痛點之尺',       'path' => '/lens'],
    ['name' => '經濟殺手的告白',  'path' => '/lens/confessions-of-an-economic-hit-man'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
