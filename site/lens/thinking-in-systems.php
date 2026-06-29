<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '真正的槓桿，不在你最好推的那一格：用痛點之尺重讀《系統思考》｜痛點 P.A.I.N.',
  'desc'  => '梅多斯在《系統思考》裡排了一張槓桿表，把「改數字、調參數」放在全表最沒用的一格。用痛點的眼光重讀：你那個熬了半年的點子，最高的槓桿從來不在售價與文案，而在最上游那一格——外頭到底有沒有一個真人，正為這件事痛到睡不著。',
  'path'  => '/lens/thinking-in-systems',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《系統思考》',
  'heading'   => '真正的槓桿，不在你最好推的那一格',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/thinking-in-systems.html',
  'book'      => ['name' => '系統思考(Thinking in Systems)', 'author' => 'Donella H. Meadows（唐內拉・梅多斯）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個熬了半年的東西，槓桿推對地方了嗎？',
    'body'    => '《系統思考》教你認出一個系統最有力的施力點在哪；痛點這把尺，幫你把那個施力點對準最上游的一題——外面到底有沒有人，正為這件事痛著。',
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
    ['name' => '系統思考',  'path' => '/lens/thinking-in-systems'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
