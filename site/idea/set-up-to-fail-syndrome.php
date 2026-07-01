<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '主管越盯,部屬越差,這個惡性循環怎麼破｜經典觀念',
  'desc'  => '店員被主管盯到越來越縮,最後真的變差。他一開始就不行,還是被盯成這樣?曼佐尼與巴索1998年《哈佛商業評論》經典〈The Set-Up-to-Fail Syndrome〉:主管把人歸為「較弱」就多盯少信,部屬感到不被信任而退縮,反倒印證了主管的看法。帶你看懂這個自我實現的惡性循環,以及怎麼剎住它。',
  'path'  => '/idea/set-up-to-fail-syndrome',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 曼佐尼與巴索',
  'heading'   => '主管越盯，部屬越差，這個惡性循環怎麼破',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/set-up-to-fail-syndrome.html',
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
    ['name' => '注定失敗症候群', 'path' => '/idea/set-up-to-fail-syndrome'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
