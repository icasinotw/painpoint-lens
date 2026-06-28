<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '假需求是什麼？二十幾個人說「我會買」，上線卻一張單都沒進｜痛點之尺',
  'desc'  => '每個人都說「很棒我會買」，上線卻沒人買——問題出在你問錯了問題。別問客戶會不會買，去看他已經為這個問題付出了什麼。一張「真痛 vs 客套」對照表，加上「你是不是在問錯的人」自查，幫你在訪談裡聽出真需求。',
  'path'  => '/ask/fake-demand',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺・拆問題 · 假需求',
  'heading'   => '二十幾個人都說「我會買」，上線那天一張單都沒進',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/fake-demand.html',
  'back'      => ['url' => '/ask', 'label' => '← 全部拆問題'],
  'root'      => ['name' => '拆問題', 'path' => '/ask'],
  'funnel'    => [
    'title'   => '與其再問十個人「會不會買」，不如出門找一個正在痛的人',
    'body'    => '下一場訪談前，把該帶的觀察與訪談清單帶上——《出門找痛》工具箱免費，照著走，就不會又在咖啡桌上收一整本客套。',
    'primary' => ['url' => '/fieldkit', 'label' => '打開《出門找痛》工具箱'],
    'ghost'   => ['url' => '/lens', 'label' => '看更多拆書'],
  ],
  'prev'      => ['url' => '/ask/empty-market', 'label' => '一個「沒人在做」的點子，該興奮，還是該逃？'],
  'next'      => ['url' => '/ask/not-for-everyone', 'label' => '我的東西「人人都用得到」，為什麼反而沒人真的買單？'],
];
$page['schema'] = [
  pain_ask_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',   'path' => '/'],
    ['name' => '拆問題',  'path' => '/ask'],
    ['name' => '假需求',  'path' => '/ask/fake-demand'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
