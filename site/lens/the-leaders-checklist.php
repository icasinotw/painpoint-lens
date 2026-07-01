<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '領導最危險的敵人，是你當下的自我感覺：用痛點之尺重讀《頂尖領導者的行動清單》｜痛點 P.A.I.N.',
  'desc'  => '尤辛要領導者隨身帶一張清單，飛行員起飛、醫生下刀前都得照表念，越高壓越不能靠記性。用痛點的眼光重讀《頂尖領導者的行動清單》：這張清單真正擋的，是你在關鍵那一刻對自己那份「我搞得定」的漂亮感覺——正是那份感覺，讓你當場漏掉早就會的基本動作。',
  'path'  => '/lens/the-leaders-checklist',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《頂尖領導者的行動清單》',
  'heading'   => '領導最危險的敵人，是你當下的自我感覺',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-leaders-checklist.html',
  'book'      => ['name' => '頂尖領導者的行動清單（The Leader\'s Checklist）', 'author' => 'Michael Useem 麥克・尤辛'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你最篤定的那一刻，最容易當場漏掉東西',
    'body'    => '尤辛要的不是你多學幾種本事，是防你在關鍵時刻被「我搞得定」的感覺帶著走；先看看你手上那個一犯就出大事的時刻，你都在哪一格摔跤。',
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
    ['name' => '頂尖領導者的行動清單', 'path' => '/lens/the-leaders-checklist'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
