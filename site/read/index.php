<?php
require __DIR__ . '/../_init.php';
$page = [
  'title' => '免費試讀｜痛點 P.A.I.N. — 前言、第一章與框架總覽',
  'desc'  => '《痛點》免費試讀:前言、第一章「挑到爛書的那些夜晚」,以及 P.A.I.N. 框架總覽。不留 email、不擋入口,手機也好讀(可調字級)。讀完覺得有用,再談那本電子書。',
  'path'  => '/read',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁', 'path' => '/'],
      ['name' => '免費試讀', 'path' => '/read'],
    ]),
  ],
];
require __DIR__ . '/../partials/head.php';
require __DIR__ . '/../partials/header.php';
?>
<main class="wrap section">
  <div class="section-head">
    <p class="eyebrow">免費試讀</p>
    <h1 class="h-display">先嚐一口，再決定要不要整本</h1>
    <p class="muted">不留 email、不擋入口，手機也好讀（右上角可放大字級）。讀完覺得有用，再談那本完整的。</p>
  </div>

  <div class="read-list">
    <a class="read-item" href="/read/preface">
      <span class="ri-kicker">前言</span>
      <h3>我讀了快一千本商業書，卻犯了書裡第一章就警告的錯</h3>
      <p>一個還在賠錢的創業者，為什麼有資格寫這本書。</p>
    </a>
    <a class="read-item" href="/read/ch01">
      <span class="ri-kicker">第一章</span>
      <h3>挑到爛書的那些夜晚</h3>
      <p>痛點不是一種心情，是一筆算得出來的代價。但「我痛」只證明了一件事。</p>
    </a>
    <a class="read-item" href="/read/pain-framework">
      <span class="ri-kicker">框架總覽</span>
      <h3>P.A.I.N.：檢查一個點子值不值得做的四個問題</h3>
      <p>誰在痛、痛多深、你怎麼介入、數字成不成立——以及為什麼順序很重要。</p>
    </a>

    <div class="read-item read-locked">
      <span class="ri-kicker">完整版收錄</span>
      <h3>全書三部・共二十八章（＋兩篇結語）</h3>
      <p>第一部「尺」——從「台灣居然沒人做這個」的藍海錯覺，到二十萬換不到一百個人、喵幣買來的繁榮、站在懸崖邊的抉擇；第二部「眼睛」學會看見誰是真的在痛；第三部「手」動手走到第一筆錢。</p>
      <p style="margin-top:12px"><a class="btn btn-primary btn-sm" href="/book">看《痛點》電子書 →</a></p>
    </div>
  </div>

  <p class="center" style="margin-top:36px">
    <a class="btn btn-ghost" href="/tool">或者，先免費體檢一個自己的點子 →</a>
  </p>
</main>
<?php require __DIR__ . '/../partials/footer.php'; ?>
