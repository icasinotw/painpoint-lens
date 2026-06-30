<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '用痛點之尺拆《關於工作的9大謊言》｜痛點 P.A.I.N.',
  'desc'  => '白金漢翻開 ADP 的全球資料，把九件「天經地義」的工作信念一條條丟進真實世界重驗——它們全是會議室裡演得很順、卻沒人拿真實的人查過的漂亮劇本。用痛點的眼光重讀：你公司那套最像常識的制度，手上有沒有任何一個真人、一件真事，證明它真的讓誰做得更好？',
  'path'  => '/lens/nine-lies-about-work',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '拆解《關於工作的9大謊言》',
  'heading'   => '公司裡最像常識的那些事，最沒人查過',
  'published' => '2026-06-30',
  'updated'   => '2026-06-30',
  'content'   => __DIR__ . '/_content/nine-lies-about-work.html',
  'book'      => ['name' => '關於工作的9大謊言（Nine Lies About Work）', 'author' => 'Marcus Buckingham 馬克斯・白金漢、Ashley Goodall 艾希利・古德'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '那套最像常識的制度，你替它驗過貨嗎',
    'body'    => '聽起來天經地義的做法，最容易被整套照搬、卻沒人查過真實的人到底買不買單；先去找三個每天被它管的真人，再決定要不要繼續信它。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',           'path' => '/'],
    ['name' => '痛點之尺',        'path' => '/lens'],
    ['name' => '關於工作的9大謊言', 'path' => '/lens/nine-lies-about-work'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
