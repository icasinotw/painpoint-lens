<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '戰略腦轉得再快，也算不出你沒去問的那個答案：用痛點之尺重讀《策略思考》｜痛點 P.A.I.N.',
  'desc'  => '御立尚資把策略高手的 insight 拆成兩台可練的引擎：試錯的速度，加上換角度的鏡頭。用痛點的眼光重讀：引擎不管燃料——再快的戰略腦，若只在你腦子裡空轉，也只會又快又漂亮地算出一個沒人要的答案。真正的回轉數，得轉在真人面前。',
  'path'  => '/lens/training-the-strategy-brain',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《策略思考》',
  'heading'   => '戰略腦轉得再快，也算不出你沒去問的那個答案',
  'published' => '2026-07-02',
  'updated'   => '2026-07-02',
  'content'   => __DIR__ . '/_content/training-the-strategy-brain.html',
  'book'      => ['name' => '策略思考：建立自我獨特的insight（戦略「脳」を鍛える）', 'author' => '御立尚資 Takashi Mitachi'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '把「走出去撞三個真人」這個動作，用在你的點子上',
    'body'    => '御立教你把戰略腦練得又快又獨特；痛點這把尺，把同一台引擎接上另一個電源——別再對著腦內那個漂亮的讀法反覆推演，先走到真人面前，看他們實際上怎麼解這個問題。',
  ],
  'prev'      => null,
  'next'      => null,
];
$page['schema'] = [
  pain_lens_article($cfg, $page, $reading),
  pain_person($cfg),
  pain_breadcrumb($cfg, [
    ['name' => '首頁',       'path' => '/'],
    ['name' => '痛點之尺',    'path' => '/lens'],
    ['name' => '策略思考',    'path' => '/lens/training-the-strategy-brain'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
