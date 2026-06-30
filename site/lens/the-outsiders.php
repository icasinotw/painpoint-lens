<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '公司賺的每一塊錢，擺去哪才見真章：用痛點之尺重讀《非典型經營者的成功法則》｜痛點 P.A.I.N.',
  'desc'  => '《非典型經營者的成功法則》挑八個沉默的執行長，只追一件事：賺到的每一塊錢後來擺去了哪。用痛點之尺重讀資本配置——資源永遠不夠，下一塊錢、下一個鐘頭該往最值的地方放，而不是往最像樣的地方放。',
  'path'  => '/lens/the-outsiders',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《非典型經營者的成功法則》',
  'heading'   => '公司賺的每一塊錢，擺去哪才見真章',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/the-outsiders.html',
  'book'      => ['name' => '非典型經營者的成功法則', 'author' => 'William Thorndike 威廉・索恩戴克'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你手上的下一塊錢，擺對地方了嗎？',
    'body'    => '索恩戴克那八個經營者，整輩子只把一句話問到變反射：這筆錢，擺哪最值。把這把尺縮到你自己身上，先從一筆固定支出、一段固定時間問起。',
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
    ['name' => '非典型經營者的成功法則', 'path' => '/lens/the-outsiders'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
