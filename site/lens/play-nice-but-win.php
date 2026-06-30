<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你那句「我很確定」，敢不敢標出價錢：用痛點之尺拆《享受挑戰，贏得漂亮》｜痛點 P.A.I.N.',
  'desc'  => '戴爾為了一個「長線才會贏」的篤定，花兩百多億美元把上市公司買回變成私人公司，還跟狙擊手伊坎對撕到底——他把一個飄在心裡的信念，硬標成一張算得出來的帳單。用痛點的眼光拆《享受挑戰，贏得漂亮》：你那些「我很確定」，敢為哪一個寫下真正願意賠的數字?標不出代價的篤定，跟一個你愛聽的故事，分不出來。',
  'path'  => '/lens/play-nice-but-win',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《享受挑戰，贏得漂亮》',
  'heading'   => '你那句「我很確定」，敢不敢標出價錢',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/play-nice-but-win.html',
  'book'      => ['name' => '享受挑戰，贏得漂亮（Play Nice But Win）', 'author' => 'Michael Dell 麥可・戴爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個「我很確定」，標得出價錢嗎',
    'body'    => '挑一個你心裡喊得最大聲的「我很確定」，寫下你真正願意為它賠掉的數字——多少錢、多少個月、放掉手上哪個東西;再寫下你手上有哪些真實證據撐著它。標不出代價、又拿不出證據的，多半只是一個你捨不得醒來的夢。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',              'path' => '/'],
    ['name' => '痛點之尺',           'path' => '/lens'],
    ['name' => '享受挑戰，贏得漂亮',   'path' => '/lens/play-nice-but-win'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
