<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那個點子的「身價」，是一張只有你在估價的紙：用痛點之尺重讀《貨幣崛起》｜痛點 P.A.I.N.',
  'desc'  => '《貨幣崛起》裡，約翰・羅把一片沼澤炒成全法國最貴的公司，泡沫在有人拿紙兌現金子那一刻崩掉。用痛點之尺重讀弗格森這本金融史——你那個點子的「身價」，也是一張只有你自己在估價、還沒有任何陌生人掏錢兌現過的紙。',
  'path'  => '/lens/the-ascent-of-money',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《貨幣崛起》',
  'heading'   => '你那個點子的天價，沒人拿真錢兌現過',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/the-ascent-of-money.html',
  'book'      => ['name' => '貨幣崛起：金融資本如何改變世界歷史及其未來之路(The Ascent of Money)', 'author' => 'Niall Ferguson 尼爾・弗格森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，心裡估的那個「身價」，敢不敢拿去兌一次現？',
    'body'    => '弗格森說泡沫垮，是因為相信跑到了現金前面太遠；你那個點子也一樣，先讓一個陌生人在真要掏錢的時刻，替那個身價兌一次現，看底下到底有沒有金子。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '貨幣崛起',    'path' => '/lens/the-ascent-of-money'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
