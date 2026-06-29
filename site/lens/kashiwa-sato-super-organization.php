<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《佐藤可士和的超整理術》｜痛點 P.A.I.N.',
  'desc'  => '佐藤可士和把整理分成空間、資訊、思考三層，最頂層是把客戶的委託逼成一句話、挖出問題的本質，像醫生問診。用痛點的眼光重讀：整理只讓你的點子變清楚、沒讓它變對——你打磨得發亮的那句話，門外有沒有一個真人正為它困擾到肯付錢？',
  'path'  => '/lens/kashiwa-sato-super-organization',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《佐藤可士和的超整理術》',
  'heading'   => '他像醫生一樣問診，但病人得先自己上門',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/kashiwa-sato-super-organization.html',
  'book'      => ['name' => '佐藤可士和的超整理術（佐藤可士和の超整理術）', 'author' => '佐藤可士和'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你整理得最清楚的那個點子，門外有人在等嗎',
    'body'    => '把一團模糊整理成一句乾淨的話，能讓你看清自己在想什麼，卻量不出外面有沒有人正為這件事困擾；下次把那句話打磨到發亮之前，先帶它去找一個真人，看他會不會接話。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                  'path' => '/'],
    ['name' => '痛點之尺',               'path' => '/lens'],
    ['name' => '佐藤可士和的超整理術',     'path' => '/lens/kashiwa-sato-super-organization'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
