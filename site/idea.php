<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '你有一個創業點子 — 動手前，先確認它值不值得做｜痛點 P.A.I.N.',
  'desc'  => '用「痛點」這把尺，30 秒看出你的創業點子最弱在哪。免費 P.A.I.N. 點子體檢工具 + 動手前該問的四個問題，一個還在賠錢的創業者用近五百萬學費換來的方法，免費送你。',
  'path'  => '/idea',
  'body_class' => 'page-lp',
  'noindex' => true,   // 廣告專用,不進 SEO 索引
];
require __DIR__ . '/partials/head.php';
?>
<header class="lp-top">
  <a class="brand" href="/idea"><span class="brand-mark">痛點</span><span class="brand-pain">P·A·I·N</span></a>
</header>

<main class="lp-wrap">

  <p class="eyebrow center">寫給「有點子、還沒動手」的你</p>
  <h1 class="lp-h1">你有一個讓你睡不著的創業點子。<br>動手、花錢之前——先確認它<span class="hl">值不值得做</span>。</h1>
  <p class="lp-sub">用「痛點」這把尺，30 秒看出你的點子最弱在哪。這套方法，是我用四年、<b>近五百萬學費</b>換來的。免費送你——先別像我一樣付這筆錢。</p>

  <div class="lp-card" id="lpCapture">
    <p class="lp-card-h">留個 email，免費領取 👇</p>
    <ul class="lp-gets">
      <li><b>P.A.I.N. 點子體檢工具</b>：回答幾題，得到一張你點子的雷達圖，直接點出最弱的一軸</li>
      <li><b>動手前先問的四個問題</b>＋一張隨身卡，套到任何點子上</li>
      <li>不定期收到我用<b>真實創業（還在賠錢）</b>換來的教訓——不是成功學</li>
    </ul>
    <form id="lpForm" class="lp-form" novalidate>
      <label class="sr-only" for="lpEmail">你的 email</label>
      <input type="email" id="lpEmail" required placeholder="you@example.com" autocomplete="email" inputmode="email">
      <input type="text" id="lpHp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" class="hp">
      <button type="submit" class="btn btn-primary btn-lg">免費領取 →</button>
    </form>
    <p class="lp-trust">免費 · 不寄垃圾信 · 隨時退訂 · 你的點子不會上傳</p>
    <p class="lp-msg" id="lpMsg" aria-live="polite"></p>
  </div>

  <div class="lp-author">
    <p class="lp-quote">「我讀了快一千本商業書，卻把書裡第一章就警告的錯，一個不漏，全踩了一遍。」</p>
    <p class="lp-by"><b><?= e($cfg['author']) ?></b>，<?= e($cfg['author_role']) ?>。一個還在賠錢、把每個坑誠實攤開的創業者。</p>
  </div>

</main>

<footer class="lp-foot">
  <p>© <?= date('Y') ?> <?= e($cfg['author']) ?>．本工具與書提供方法與啟發，不保證創業成功。</p>
  <p><a href="/privacy">隱私權政策</a> · <a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a></p>
</footer>

<script>
(function(){
  var form = document.getElementById('lpForm');
  if (!form) return;
  form.addEventListener('submit', function(e){
    e.preventDefault();
    var email = (document.getElementById('lpEmail').value || '').trim();
    var hp = (document.getElementById('lpHp') || {}).value || '';
    var msg = document.getElementById('lpMsg');
    var btn = form.querySelector('button');
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) { msg.textContent = 'email 看起來怪怪的，再確認一下?'; return; }
    btn.disabled = true; btn.textContent = '送出中…';
    fetch('/api/subscribe', { method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({ email: email, website: hp, source: 'lp' }) })
      .then(function(r){ return r.json().catch(function(){ return { ok: r.ok }; }); })
      .then(function(d){
        if (d && d.ok) {
          document.getElementById('lpCapture').innerHTML =
            '<div class="lp-done"><p class="lp-done-h">✓ 收到了，你已經加入！</p>' +
            '<p>現在就免費體檢一個你的點子——30 秒看出它哪一塊最弱；也可以先讀「動手前該問的四個問題」：</p>' +
            '<div class="lp-done-cta"><a class="btn btn-primary btn-lg" href="/tool">免費體檢我的點子 →</a>' +
            '<a class="btn btn-ghost" href="/read/pain-framework">讀那四個問題的框架</a></div></div>';
        } else {
          msg.textContent = (d && d.error === 'rate') ? '太快了，稍等一下再試。' : '送出沒成功，請再試一次。';
          btn.disabled = false; btn.textContent = '免費領取 →';
        }
      })
      .catch(function(){ msg.textContent = '網路怪怪的，請再試一次。'; btn.disabled = false; btn.textContent = '免費領取 →'; });
  });
})();
</script>
</body>
</html>
