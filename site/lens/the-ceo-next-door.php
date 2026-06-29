<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '把人送上 CEO 的，常是不起眼的本事：用痛點之尺重讀《CEO基因》｜痛點 P.A.I.N.',
  'desc'  => '波特羅與鮑威爾用一萬七千多份高階主管評估、追蹤兩千六百位領導者，拆穿招聘現場最愛的迷思：名校、自信、氣場，跟誰真的做得好幾乎連不上線。真正把人送上 CEO 椅子的，是四個練得出來的無聊本事——決策快、把人攏住、無聊地說到做到、趁早變。用痛點的眼光重讀：你心裡那張「成功者長相」，跟一個沒驗證就讓你掏錢的漂亮故事，是同一個陷阱。',
  'path'  => '/lens/the-ceo-next-door',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《CEO基因》',
  'heading'   => '把人送上 CEO 的，常是不起眼的本事',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/the-ceo-next-door.html',
  'book'      => ['name' => 'CEO基因', 'author' => 'Elena L. Botelho 艾琳娜・波特羅、Kim R. Powell 金・鮑威爾'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你追隨、提拔、想成為的那種人，選對了嗎？',
    'body'    => '拿一張紙寫下你心裡「成功的領導者該長什麼樣」，逐條問：這一條我有證據它真的會讓人把事情做好，還是只是看起來像？把戲服劃掉，剩下的才值得你練。',
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
    ['name' => 'CEO基因',  'path' => '/lens/the-ceo-next-door'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
