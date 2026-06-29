<?php
require __DIR__ . '/_init.php';
$page = [
  'title'      => '《痛點》讀者專屬好禮 — 領取你的購書加碼',
  'desc'       => '已經買了《痛點 P.A.I.N.》?留個 email、填一下在哪買的,我把讀者專屬好禮寄給你。',
  'path'       => '/claim',
  'body_class' => 'page-fieldkit',
  'noindex'    => true, // 買家專屬頁:不索引、不進 sitemap(避免沒買的人也來領、稀釋好禮)
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap fk-main">

  <div class="fk-intro">
    <p class="eyebrow">買了書的人專屬 · 完全免費</p>
    <h1 class="h-display"><span class="kw">買了《痛點》?</span><span class="kw"><span class="hl">來領讀者好禮</span></span></h1>
    <p class="lead">你在 Kobo、讀墨 那些平台買的書,我這邊看不到是誰買的。留個 email、順手填一下在哪買的,我把讀者專屬好禮寄給你——也好讓我知道該謝謝誰。</p>
  </div>

  <div class="fk-download" id="fkTop">
    <div class="fk-dl-main">
      <p class="fk-dl-h">讀者專屬好禮:精選拆書 15 篇</p>
      <p class="fk-dl-sub">
        我用書裡同一把 P.A.I.N. 之尺,拆過最經典的 15 本商業書——精實創業、定位、黑天鵝、致富心態……照書的 P→A→I→N 順序,整理成一份排版乾淨的 PDF(收錄全篇,五十多頁)。
      </p>
      <p class="fk-dl-fine">只給買了書的讀者 · 留 email 後寄到你信箱</p>
    </div>
    <div class="fk-dl-opt" id="fkGate">
      <p class="fk-opt-h">填一下,我把好禮寄給你 👇</p>
      <form id="fkForm" class="fk-opt-form" novalidate>
        <label class="sr-only" for="fkEmail">你的 email</label>
        <input type="email" id="fkEmail" required placeholder="you@example.com" autocomplete="email" inputmode="email">
        <label class="sr-only" for="fkPlat">在哪買的</label>
        <select id="fkPlat" class="fk-select" required aria-label="在哪個平台買的">
          <option value="" disabled selected>在哪買的?</option>
          <option value="Kobo">Kobo</option>
          <option value="讀墨 Readmoo">讀墨 Readmoo</option>
          <option value="Pubu">Pubu</option>
          <option value="Google 電子書">Google 電子書</option>
          <option value="其他">其他</option>
        </select>
        <label class="sr-only" for="fkOrder">訂單編號(選填)</label>
        <input type="text" id="fkOrder" placeholder="訂單編號(選填,幫我對得上)" autocomplete="off" maxlength="60">
        <input type="text" id="fkHp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" class="hp">
        <button type="submit" class="btn btn-primary">領取讀者好禮 →</button>
      </form>
      <p class="fk-opt-fine">我會把好禮寄到你信箱,並順帶送你痛點電子報——動手前先想清楚的方法與真實案例。訂單資訊只用來確認你是讀者、不做別的,不寄垃圾信、隨時退訂。</p>
      <p class="fk-opt-msg" id="fkMsg" aria-live="polite"></p>
    </div>
  </div>

  <div class="reading-end fk-funnel">
    <div class="read-funnel">
      <h3>還沒讀完?先把書裡那把尺,拿來量一個真的點子</h3>
      <p>書是把判斷、看見、動手講透;站上的免費工具,是那把尺的線上速算版。讀到哪、就拿手上的點子去量一次,書才真的變成你的。</p>
      <div class="btn-row" style="justify-content:center">
        <a class="btn btn-primary" href="/tool">免費做一次點子體檢</a>
        <a class="btn btn-ghost" href="/lens">看我用同一把尺拆別人的書</a>
      </div>
    </div>
  </div>

</main>

<style>
.fk-opt-form .fk-select{width:100%;font:inherit;color:inherit;padding:13px 14px;border:1px solid var(--line,#d8d2c6);border-radius:9px;background:var(--card,#fff);margin-top:9px;-webkit-appearance:none;appearance:none}
.fk-opt-form #fkOrder{width:100%;font:inherit;color:inherit;padding:13px 14px;border:1px solid var(--line,#d8d2c6);border-radius:9px;background:var(--card,#fff);margin-top:9px}
.fk-opt-form #fkPlat:invalid{color:var(--muted,#8a8275)}
</style>

<script>
(function(){
  // 跨頁共用:painUnlocked = 已留過的 email;painSentSources = 已送出過的行為(避免重複寄信,但每種行為至少送一次→標籤不漏)
  var UNLOCK = 'painUnlocked', SENT = 'painSentSources', SRC = 'claim';
  // 讀者專屬好禮(數位贈品)。換檔/加檔後把最後一欄設 true、進版 ?v=,前台就會出現下載鈕。
  // ⚠️ 這份清單要與 site/api/subscribe.php 的 send_claim_bonus() 保持同步。PDF 由 tools/build-anthology.php 生成。
  // [下載網址, 下載另存的檔名, 顯示文字, 已就緒?]
  var FILES = [
    ['/assets/dl/painpoint-anthology.pdf?v=1', '痛點-讀者精選拆書15篇.pdf', '《痛點》讀者精選拆書 15 篇(PDF)', true]
  ].filter(function(f){ return f[3] === true; });
  function esc(s){ return String(s).replace(/[&<>"']/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]; }); }
  function storedEmail(){ try { return localStorage.getItem(UNLOCK) || ''; } catch(e){ return ''; } }
  function sent(){ try { return JSON.parse(localStorage.getItem(SENT)) || []; } catch(e){ return []; } }
  function markSent(){ try { var a = sent(); if (a.indexOf(SRC)<0){ a.push(SRC); localStorage.setItem(SENT, JSON.stringify(a)); } } catch(e){} }
  function showDone(){
    var g = document.getElementById('fkGate'); if (!g) return;
    if (!FILES.length) {
      // 好禮檔案還沒就緒:歸因(標籤+名單)已完成,先確認收到、做好再寄。
      g.innerHTML =
        '<div class="fk-gate-done"><p class="fk-done-h">✓ 收到了,謝謝你買書</p>' +
        '<p class="fk-done-sub">讀者好禮正在做最後整理,弄好我第一個 email 你(順手看一下垃圾信匣)。</p></div>';
      return;
    }
    var btns = FILES.map(function(f, i){
      var cls = i === 0 ? 'btn btn-primary' : 'btn btn-ghost';
      return '<a class="' + cls + '" style="width:100%;margin-top:8px" href="' + esc(f[0]) + '" download="' + esc(f[1]) + '">↓ ' + esc(f[2]) + '</a>';
    }).join('');
    g.innerHTML =
      '<div class="fk-gate-done"><p class="fk-done-h">✓ 你的讀者好禮</p>' +
      '<p class="fk-done-sub">下載連結也寄到你信箱了(沒收到先看垃圾信匣)。直接點下面下載:</p>' +
      btns + '</div>';
  }

  // 已經領過 → 直接給(標籤先前已記過)。
  if (storedEmail() && sent().indexOf(SRC) >= 0) { showDone(); return; }

  var form = document.getElementById('fkForm');
  if (!form) return;

  // 留過 email → 幫他帶入(仍要他選平台、按一次送出 → 歸因標籤一定進 Kit)。
  var pre = storedEmail();
  if (pre) { var inp = document.getElementById('fkEmail'); if (inp) inp.value = pre; }

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var email = (document.getElementById('fkEmail').value || '').trim();
    var plat  = (document.getElementById('fkPlat').value || '').trim();
    var order = (document.getElementById('fkOrder').value || '').trim();
    var hp = (document.getElementById('fkHp') || {}).value || '';
    var msg = document.getElementById('fkMsg');
    var btn = form.querySelector('button');
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) { msg.textContent = 'email 看起來怪怪的,再確認一下?'; return; }
    if (!plat) { msg.textContent = '選一下你是在哪買的,我才對得上 😊'; return; }
    btn.disabled = true; btn.textContent = '領取中…';
    fetch('/api/subscribe', { method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({ email: email, website: hp, source: SRC, platform: plat, order: order }) })
      .then(function(r){ return r.json().catch(function(){ return { ok: r.ok }; }); })
      .then(function(d){
        if (d && d.ok) {
          try { localStorage.setItem(UNLOCK, email); } catch(e){}
          markSent();
          showDone();
        } else {
          msg.textContent = (d && d.error === 'rate') ? '太快了,稍等一下再試。' : '送出沒成功,請再試一次。';
          btn.disabled = false; btn.textContent = '領取讀者好禮 →';
        }
      })
      .catch(function(){ msg.textContent = '網路怪怪的,請再試一次。'; btn.disabled = false; btn.textContent = '領取讀者好禮 →'; });
  });
})();
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
