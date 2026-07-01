<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '「我一定要」這句話，是你腦裡最不可靠的證人：用痛點之尺重讀《欲望分子多巴胺》｜痛點 P.A.I.N.',
  'desc'  => '利伯曼把大腦拆成兩班人馬：一班只管「還沒到手的更多」，燒的是多巴胺；一班才管眼前這一刻的享受。多巴胺在你即將得到、還沒握住時燒得最旺，一到手就撤退。用痛點的眼光重讀：驗一件事值不值得投下去，衝上來搶著作證的那句「我超想做」最不能信——今晚就讓「拿到之後」的你，先上台作證。',
  'path'  => '/lens/the-molecule-of-more',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《欲望分子多巴胺》',
  'heading'   => '「我一定要」這句話，是你腦裡最不可靠的證人',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/the-molecule-of-more.html',
  'book'      => ['name' => '欲望分子多巴胺(The Molecule of More)', 'author' => 'Daniel Z. Lieberman(丹尼爾・利伯曼)、Michael E. Long(麥可・隆恩)'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那股「我一定要」，換成點子還撐得住嗎？',
    'body'    => '多巴胺會在你還沒到手時，把一件事的熱度灌到最高。把你手上最想做的那個念頭攤開來，看它扣掉那股期待之後，還剩多少真的痛、多少人正在為它花錢。',
    'primary' => ['url' => '/tool', 'label' => '免費體檢我的點子'],
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
    ['name' => '欲望分子多巴胺',       'path' => '/lens/the-molecule-of-more'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
