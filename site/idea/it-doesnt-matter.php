<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => 'IT 不再是關鍵?卡爾這篇爭議經典在講什麼｜經典觀念',
  'desc'  => 'IT 還是公司贏過對手的理由嗎?科技作家尼可拉斯・卡爾2003年在《哈佛商業評論》的爭議名文〈IT Doesn\'t Matter〉,用鐵路與電力當類比,主張資訊科技一旦人人買得到就商品化、退成基本盤,真正稀缺、抄不走的東西才有策略價值。用最白話的方式帶你抓住重點。',
  'path'  => '/idea/it-doesnt-matter',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '經典觀念 · 尼可拉斯・卡爾',
  'heading'   => 'IT 不再是關鍵？卡爾這篇爭議經典在講什麼',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/it-doesnt-matter.html',
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
    ['name' => 'IT 不再是關鍵', 'path' => '/idea/it-doesnt-matter'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
