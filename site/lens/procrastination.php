<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '拖著不做，是怕被打分數；你那個點子也擱著沒拿去問：用痛點之尺重讀《拖延心理學》｜痛點 P.A.I.N.',
  'desc'  => '《拖延心理學》兩位心理師博克與袁發現，拖延多半跟懶無關，而是一塊保護自我價值的擋板：不交卷，就永遠不會被打分數。用痛點之尺重讀——你那個點子遲遲不拿去問陌生人，擋的也是同一張成績單；只要沒人當面說不要，「一定有人要」就一直是真的，而它一直是真的，正因為你不讓任何人考它。',
  'path'  => '/lens/procrastination',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《拖延心理學》',
  'heading'   => '博克和袁發現，人拖著不做，多半是怕被打分數；你那個點子擱了兩年遲遲不拿去問，怕的是同一件事——只要沒人說「不要」，「一定有人要」就一直是真的',
  'published' => '2026-06-28',
  'updated'   => '2026-06-28',
  'content'   => __DIR__ . '/_content/procrastination.html',
  'book'      => ['name' => '拖延心理學（Procrastination: Why You Do It, What to Do About It Now）', 'author' => 'Jane B. Burka 珍・博克、Lenora M. Yuen 萊諾拉・袁'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '手上那個點子，「準備」了好幾年，卻一直沒拿去問人？',
    'body'    => '別再多修一個版本了。趁它還只是個念頭，連同一個真實的價格，擺到一個沒理由給你面子的陌生人面前，看他肯不肯當場掏錢——那扇你一直說「還沒準備好」的門，推開了才知道後面有沒有人。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '拖延心理學',  'path' => '/lens/procrastination'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
