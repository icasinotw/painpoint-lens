<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '看對太早，和看錯，長得一模一樣：用痛點之尺拆《華爾街刺蝟投資客》｜痛點 P.A.I.N.',
  'desc'  => '畢格斯在華爾街看了一輩子人下注，發現一件殘忍的事：賠錢的那幾個月裡，「看對只是太早」和「根本看錯」的人，長得一模一樣。用痛點的眼光重讀：你那個發光的點子也一樣，信心不是證據——先寫好一句認錯條件，再去問市場買不買帳。',
  'path'  => '/lens/hedgehogging',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《華爾街刺蝟投資客》',
  'heading'   => '看對太早，和看錯，長得一模一樣',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/hedgehogging.html',
  'book'      => ['name' => '華爾街刺蝟投資客（Hedgehogging）', 'author' => 'Barton Biggs 巴頓・畢格斯'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你愛的是那個故事，還是市場真的要它？',
    'body'    => '畢格斯看過太多聰明人，把「我好愛這個劇本」當成「市場會買這個劇本」，撐到積蓄見底才肯認錯。同一個坑，你手上那個發光的點子也可能正在往裡掉——先寫下一句你事後賴不掉的「認錯條件」，再讓外面那些要掏錢的人，替它投一票。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',                 'path' => '/'],
    ['name' => '痛點之尺',              'path' => '/lens'],
    ['name' => '華爾街刺蝟投資客',        'path' => '/lens/hedgehogging'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
