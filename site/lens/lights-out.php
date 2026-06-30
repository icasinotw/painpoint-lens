<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '一家把體溫計焐到正常的公司，是怎麼燒到解體的：用痛點之尺重讀《奇異衰敗學》｜痛點 P.A.I.N.',
  'desc'  => '兩位《華爾街日報》記者還原奇異（GE）從全球市值第一到被踢出道瓊指數的解體史。用痛點之尺重讀《奇異衰敗學》：他們最厲害的本事，是把每季數字焐到漂亮——久到連自己都偵測不到公司正在發燒，你那個一直說「還好」的數字呢？',
  'path'  => '/lens/lights-out',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《奇異衰敗學》',
  'heading'   => '一家把體溫計焐到正常的公司，是怎麼燒到解體的',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/lights-out.html',
  'book'      => ['name' => '奇異衰敗學：百年企業為何從頂峰到解體？（Lights Out）', 'author' => 'Thomas Gryta 湯瑪斯・格利塔、Ted Mann 泰德・曼'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上那個一直說「還好」的數字，敢把焐著它的手拿開嗎？',
    'body'    => '挑一個你已經對它說了好一陣子「還好、沒事、下一季就補回來」的數字或現況，這禮拜別再焐它——把手拿開，看它真正的讀數一眼，哪怕燙手。',
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
    ['name' => '奇異衰敗學', 'path' => '/lens/lights-out'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
