<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'P.A.I.N. 框架：判斷點子值不值得做的四個問題｜痛點 P.A.I.N.',
  'desc'  => 'P.A.I.N. = 誰在痛(People)、痛多深(Agony)、你怎麼介入(Intervention)、數字成不成立(Numbers)。四個動手前該問的問題，以及為什麼順序是 P→A→I→N、做反了會賠錢。免費讀。',
  'path'  => '/read/pain-framework',
  'type'  => 'article',
];
$reading = [
  'kicker'  => '免費試讀 · 框架總覽',
  'heading' => 'P.A.I.N.:檢查一個點子值不值得做的四個問題',
  'updated' => '2026-06-23',
  'content' => __DIR__ . '/_content/pain-framework.html',
  'prev'    => ['url' => '/read/ch01', 'label' => '第一章 挑到爛書的那些夜晚'],
  'next'    => null,
];
$page['schema'] = [
  pain_read_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁', 'path' => '/'],
    ['name' => '免費試讀', 'path' => '/read'],
    ['name' => 'P.A.I.N. 框架總覽', 'path' => '/read/pain-framework'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
