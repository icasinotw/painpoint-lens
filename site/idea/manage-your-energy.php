<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '管理你的精力,別再只顧著擠時間｜經典觀念',
  'desc'  => '你以為工作做不完是「時間不夠」,於是拚命拉長工時,結果人被榨乾、產出更差。史瓦茲與麥卡錫2007年《哈佛商業評論》經典〈Manage Your Energy, Not Your Time〉:時間擠不出更多,但精力補得回來。用台灣在地例子帶你顧好身體、情緒、心智、精神四格精力,並用「儀式」變成不費力的習慣。',
  'path'  => '/idea/manage-your-energy',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 史瓦茲與麥卡錫',
  'heading'   => '管理你的精力，別再只顧著擠時間',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/manage-your-energy.html',
  'back'      => ['url' => '/idea', 'label' => '← 全部經典觀念'],
  'root'      => ['name' => '經典觀念', 'path' => '/idea'],
  'funnel'    => [
    'title'   => '這些經典,值得你親自讀一遍',
    'body'    => '這裡把艱深的管理好文拆成好讀的版本,當你進門的橋。讀懂了觀念,更多用同一種眼光拆解的商業經典,都在拆書區等你。',
    'primary' => ['url' => '/lens', 'label' => '去看更多拆書'],
    'ghost'   => ['url' => '/idea', 'label' => '更多經典觀念'],
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_idea_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',     'path' => '/'],
    ['name' => '經典觀念',  'path' => '/idea'],
    ['name' => '管理你的精力', 'path' => '/idea/manage-your-energy'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
