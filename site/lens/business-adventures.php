<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '福特做足市場調查，還是造出沒人要的車：用痛點之尺重讀《商業冒險》｜痛點 P.A.I.N.',
  'desc'  => '比爾蓋茲最愛的《商業冒險》裡，福特 Edsel 做足市場調查卻慘敗。用痛點的眼光重讀這個故事、對照全錄影印機：問過人不等於驗證過需求，真正算數的是有人肯為你的東西付出會痛的代價。附一個這禮拜就能做的需求驗證動作。',
  'path'  => '/lens/business-adventures',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《商業冒險》',
  'heading'   => '福特做足市場調查，還是造出沒人要的車',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/business-adventures.html',
  'book'      => ['name' => '商業冒險：華爾街的12個經典故事', 'author' => '約翰・布魯克斯（John Brooks）'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那個點子收到的，是好話還是訂金？',
    'body'    => '福特問遍了所有人喜不喜歡，還是造出一台沒人要的車。先別急著動手，回頭確認一件事：除了嘴上那句「我會買」，有沒有人真的肯為它付出一點會痛的代價？',
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
    ['name' => '商業冒險',  'path' => '/lens/business-adventures'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
