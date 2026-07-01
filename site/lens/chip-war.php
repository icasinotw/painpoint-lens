<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '整條晶片鏈的錢，最後流到換不掉的那一環：用痛點之尺重讀《晶片戰爭》｜痛點 P.A.I.N.',
  'desc'  => '克里斯・米勒《晶片戰爭》表面在講半導體的地緣角力，骨子裡是一堂關於「非你不可」的生意課。用痛點的眼光重讀：真正的籌碼不在你做得多好，而在整條供應鏈少了你會不會當場停擺——你是那條鏈上換得掉的一環嗎？',
  'path'  => '/lens/chip-war',
  'type'  => 'article',
];
$reading = [
  'kicker'    => '痛點之尺 · 拆解《晶片戰爭》',
  'heading'   => '整條晶片鏈的錢，最後流到換不掉的那一環',
  'published' => '2026-07-01',
  'updated'   => '2026-07-01',
  'content'   => __DIR__ . '/_content/chip-war.html',
  'book'      => ['name' => '晶片戰爭', 'author' => 'Chris Miller 克里斯・米勒'],
  'back'      => ['url' => '/lens', 'label' => '← 全部拆書'],
  'root'      => ['name' => '痛點之尺', 'path' => '/lens'],
  'funnel'    => [
    'title'   => '你在那條鏈上，是換得掉的那一環嗎？',
    'body'    => '《晶片戰爭》講的是晶片，量的卻是每個人都逃不掉的問題——少了你，對方要花多久才能把你換掉。痛點這把尺，幫你把這件事算清楚。',
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
    ['name' => '晶片戰爭',  'path' => '/lens/chip-war'],
  ]),
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/reading.php';
require __DIR__ . '/../partials/footer.php';
