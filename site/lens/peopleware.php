<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你救專案的每一招，可能都在掏空團隊：用痛點之尺重讀《Peopleware》｜痛點 P.A.I.N.',
  'desc'  => '狄馬克與李斯特的《Peopleware》主張腦力專案的成敗多半不在技術、在人。用痛點的眼光重讀：催進度、加班、換工具，常常是對著錯的痛處踩油門——真正的手煞車，是被切碎的專注、被逼走的人。先把「人不好帶」換成一個算得出來的數字。',
  'path'  => '/lens/peopleware',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《Peopleware》',
  'heading'   => '你救專案的每一招，可能都在掏空團隊',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/peopleware.html',
  'book'      => ['name' => 'Peopleware：腦力密集產業的人才管理之道', 'author' => '湯姆・狄馬克、提姆・李斯特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '挑一件你嘴上「還好」的事，先算給自己看',
    'body'    => '《Peopleware》逼主管把「流動率」攤成一筆嚇人的帳；痛點這把尺，只逼你把任何一句含混的「最近不太順」，換成一個你用手指就能算的數字。',
    'primary' => ['url' => '/lens', 'label' => '← 看更多拆書'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',         'path' => '/'],
    ['name' => '痛點之尺',      'path' => '/lens'],
    ['name' => 'Peopleware',  'path' => '/lens/peopleware'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
