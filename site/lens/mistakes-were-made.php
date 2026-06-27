<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你抱著點子站上金字塔頂，每替它辯護一次，就往「絕不會錯」的牆角滑下一階｜痛點 P.A.I.N.',
  'desc'  => '塔芙瑞斯與亞隆森《錯不在我？》拆穿人腦死不認錯的那套程序：自我辯護。用痛點之尺重讀——你越投入的點子越拆不得，因為一句「沒人要」會撞碎「我這麼聰明怎會錯」；趁還站在選擇金字塔頂端，自己花五分鐘，去問一個會老實打槍你的陌生人。',
  'path'  => '/lens/mistakes-were-made',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《錯不在我？》',
  'heading'   => '你抱著點子站上金字塔頂，每替它辯護一次，就往「絕不會錯」的牆角滑下一階',
  'published' => '2026-06-27',
  'updated'   => '2026-06-27',
  'content'   => __DIR__ . '/_content/mistakes-were-made.html',
  'book'      => ['name' => '錯不在我？（Mistakes Were Made (But Not by Me)）', 'author' => 'Carol Tavris 卡蘿・塔芙瑞斯、Elliot Aronson 艾略特・亞隆森'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那句「一定有人要」，現在站在金字塔的第幾階了？',
    'body'    => '塔芙瑞斯和亞隆森讓你看懂，人腦為什麼寧可滑到牆角，也不肯認一句「我錯了」；而你手裡最捨不得認錯的那個信念，多半就叫「一定有人要」。P.A.I.N. 體檢工具不跟你講大道理，它花你五分鐘，把這句信念推去撞一下現實：替它點名三個真人、問它收過幾塊錢——趁你還在金字塔頂，側個身就能回頭的時候。',
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
    ['name' => '錯不在我？',  'path' => '/lens/mistakes-were-made'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
