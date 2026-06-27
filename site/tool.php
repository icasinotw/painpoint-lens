<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '點子體檢工具｜痛點 P.A.I.N.(免費・30 秒雷達圖)',
  'desc'  => '免費、不登入。用 P.A.I.N.(誰在痛、痛多深、怎麼介入、數字成不成立)四個問題,幫你的創業點子做一次 30 秒體檢,產出一張雷達圖,並告訴你動手前該先去問清楚哪幾件事。',
  'path'  => '/tool',
  'body_class' => 'page-tool',
  'og_image' => '/assets/img/og-tool.jpg?v=1', // 工具專屬橫式分享圖
  'og_w' => 1200,
  'og_h' => 630,
  'schema' => [
    [
      '@type'               => 'WebApplication',
      '@id'                 => rtrim($cfg['site_url'],'/') . '/tool#app',
      'name'                => 'P.A.I.N. 點子體檢工具',
      'url'                 => rtrim($cfg['site_url'],'/') . '/tool',
      'applicationCategory' => 'BusinessApplication',
      'operatingSystem'     => 'Web',
      'inLanguage'          => 'zh-Hant-TW',
      'description'         => '免費、不登入、不上傳的創業點子體檢工具:用 P.A.I.N. 四問打分,產出雷達圖,並點出動手前該先問清楚的事。',
      'creator'             => ['@id' => rtrim($cfg['site_url'],'/') . '/#person'],
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'TWD'],
    ],
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁', 'path' => '/'],
      ['name' => '點子體檢工具', 'path' => '/tool'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap tool-main">

  <div class="tool-intro">
    <p class="eyebrow">免費．不登入．不上傳</p>
    <h1>幫你的點子,做一次 P.A.I.N. 體檢</h1>
    <p class="lead">花 30 秒,誠實回答四組問題。我會幫你畫出一張雷達圖,並告訴你——動手、花錢之前,該先去問清楚的是哪幾件事。</p>
  </div>

  <div class="idea-box">
    <label for="idea">我要體檢的點子是:</label>
    <input type="text" id="idea" maxlength="60" placeholder="例如:幫上班族配好每週便當" autocomplete="off">
    <p class="hint">一句話就好。沒想清楚也沒關係,先寫個方向,下面的題目會逼出更多。</p>
  </div>

  <div id="axes"><!-- 題組由 tool.js 產生 --></div>

  <section id="report" class="report" aria-live="polite"><!-- 報告由 tool.js 產生 --></section>

  <p class="disclaimer">這把尺只幫你看清「該不該現在動手、該先問什麼」,不保證創業成功——世上沒有那種公式。它幫你省下的,是冤枉路。</p>

  <div class="tool-actions">
    <div class="inner">
      <span class="progress" id="progress">已答 <b>0</b> / 8 題</span>
      <button class="btn btn-primary" id="seeReport" disabled>把 8 題答完,看報告</button>
    </div>
  </div>

</main>

<!-- 高意圖 email 閘(匯出 PDF / 儲存多點子 / 寄報告時才出現) -->
<div class="modal-backdrop" id="emailGate" hidden>
  <div class="modal" role="dialog" aria-modal="true" aria-labelledby="gateTitle">
    <button class="modal-x" id="gateClose" type="button" aria-label="關閉">×</button>
    <p class="eyebrow">把這份體檢帶著走</p>
    <h2 id="gateTitle">留個 email,解鎖進階功能</h2>
    <p class="muted">輸入 email,就能<b>匯出 PDF 商業計畫</b>、<b>儲存並比較多個點子</b>,我也會把這份體檢結果<b>寄一份到你信箱</b>。順帶收到痛點電子報——動手前先想清楚的方法與真實案例。不寄垃圾信,隨時退訂。</p>
    <form id="gateForm" novalidate>
      <label class="sr-only" for="gateEmail">你的 email</label>
      <input type="email" id="gateEmail" required placeholder="you@example.com" autocomplete="email" inputmode="email">
      <input type="hidden" id="gateSource" value="tool">
      <input type="text" id="gateHp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" class="hp">
      <button class="btn btn-primary" type="submit" id="gateSubmit">解鎖並寄給我</button>
      <p class="gate-msg" id="gateMsg" aria-live="polite"></p>
      <p class="gate-fine">送出即表示同意我們依<a href="/privacy" target="_blank" rel="noopener">隱私權政策</a>使用你的 email。</p>
    </form>
  </div>
</div>

<script>window.PAIN_SITE = <?= json_encode(preg_replace('#^https?://#', '', $cfg['site_url'])) ?>;</script>
<script src="/assets/js/tool.js?v=11" defer></script>
<?php require __DIR__ . '/partials/footer.php'; ?>
