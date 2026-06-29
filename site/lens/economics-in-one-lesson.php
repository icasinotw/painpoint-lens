<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '你沒做成的那件事，才是點子真正的成本｜痛點 P.A.I.N.',
  'desc'  => '赫茲利特在《一課經濟學》把整門學問擰成一句:不只看立即、看得見、對一群人的好處,還要看長遠、看不見、對所有人的代價——玻璃打破了,沒人記得那套沒做成的西裝。用痛點之尺重讀:你替點子算的帳,只記了看得見的那半;看不見的那半,是燒掉的時間,和始終沒人真的掏的錢。',
  'path'  => '/lens/economics-in-one-lesson',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《一課經濟學》',
  'heading'   => '你沒做成的那件事，才是點子真正的成本',
  'published' => '2026-06-29',
  'updated'   => '2026-06-29',
  'content'   => __DIR__ . '/_content/economics-in-one-lesson.html',
  'book'      => ['name' => '一課經濟學', 'author' => 'Henry Hazlitt 亨利・赫茲利特'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你那半張看不見的帳，攤開了嗎？',
    'body'    => '赫茲利特要你看穿別人政策裡看不見的代價;你那個點子最看不見的一欄,是有沒有人真的為這個痛掏過錢。趁還沒砸下整年時間之前,先走出去,把那一欄一筆一筆撿回來。',
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
    ['name' => '一課經濟學', 'path' => '/lens/economics-in-one-lesson'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
