<?php
require __DIR__ . '/_init.php';
$page = [
  'title'      => '下載《痛點》簡報與 P.A.I.N. 隨身卡',
  'desc'       => '留個 email,免費下載《痛點》簡報與 P.A.I.N. 隨身卡(列印版＋手機版)。',
  'path'       => '/slides',
  'body_class' => 'page-fieldkit',
  'noindex'    => true, // 私密分享頁:不給搜尋引擎索引、不連到任何地方、不進 sitemap
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap fk-main">

  <div class="fk-intro">
    <p class="eyebrow">填個 email · 免費下載 · 共 3 份</p>
    <h1 class="h-display"><span class="kw">下載這場的</span><span class="kw"><span class="hl">《痛點》簡報</span></span><span class="kw">與 P.A.I.N. 隨身卡</span></h1>
    <p class="lead">留個 email,我把簡報和那張 P.A.I.N. 隨身卡一起寄給你——一張帶在身邊,動手前先把四個問題問過一遍。</p>
  </div>

  <div class="fk-download" id="fkTop">
    <div class="fk-dl-main">
      <p class="fk-dl-h">這次的下載包(3 份)</p>
      <p class="fk-dl-sub">
        ① 《痛點》簡報全文 PDF<br>
        ② P.A.I.N. 隨身卡・列印版(印出來隨身帶)<br>
        ③ P.A.I.N. 隨身卡・手機版(存進手機隨時翻)
      </p>
      <p class="fk-dl-fine">完全免費 · 留 email 後三份一次給你,也會寄到你信箱</p>
    </div>
    <div class="fk-dl-opt" id="fkGate">
      <p class="fk-opt-h">留個 email,免費把這 3 份寄給你 👇</p>
      <form id="fkForm" class="fk-opt-form" novalidate>
        <label class="sr-only" for="fkEmail">你的 email</label>
        <input type="email" id="fkEmail" required placeholder="you@example.com" autocomplete="email" inputmode="email">
        <input type="text" id="fkHp" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" class="hp">
        <button type="submit" class="btn btn-primary">免費領取 PDF →</button>
      </form>
      <p class="fk-opt-fine">我會把下載連結寄到你信箱,並順帶送你痛點電子報——動手前先想清楚的方法與真實案例。不寄垃圾信,隨時退訂。</p>
      <p class="fk-opt-msg" id="fkMsg" aria-live="polite"></p>
    </div>
  </div>

  <div class="reading-end fk-funnel">
    <div class="read-funnel">
      <h3>把隨身卡上的四個問題,真的拿來量一個點子</h3>
      <p>隨身卡是縮影,真正動手是把 P → A → I → N 一格一格量過你手上的點子。想自己跑一次,站上有免費的點子體檢工具;想讀整套方法,也能先免費試讀。</p>
      <div class="btn-row" style="justify-content:center">
        <a class="btn btn-primary" href="/tool">免費做一次點子體檢</a>
        <a class="btn btn-ghost" href="/read">免費試讀《痛點》</a>
      </div>
    </div>
  </div>

</main>

<script>
(function(){
  // 跨頁共用:painUnlocked = 已留過的 email;painSentSources = 已送出過的行為(避免重複寄信,但每種行為至少送一次→標籤不漏)
  var UNLOCK = 'painUnlocked', SENT = 'painSentSources', SRC = 'slides';
  // 這頁的下載包(3 份):[網址, 下載另存的檔名, 顯示文字]
  var FILES = [
    ['/assets/dl/painpoint-deck.pdf?v=1',             '痛點簡報.pdf',                '《痛點》簡報全文'],
    ['/assets/dl/painpoint-pain-card.pdf?v=1',        '痛點-PAIN-隨身卡.pdf',         'P.A.I.N. 隨身卡・列印版'],
    ['/assets/dl/painpoint-pain-card-mobile.pdf?v=1', '痛點-PAIN-隨身卡-手機版.pdf',  'P.A.I.N. 隨身卡・手機版']
  ];
  function esc(s){ return String(s).replace(/[&<>"']/g, function(c){ return {'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[c]; }); }
  function storedEmail(){ try { return localStorage.getItem(UNLOCK) || ''; } catch(e){ return ''; } }
  function sent(){ try { return JSON.parse(localStorage.getItem(SENT)) || []; } catch(e){ return []; } }
  function markSent(){ try { var a = sent(); if (a.indexOf(SRC)<0){ a.push(SRC); localStorage.setItem(SENT, JSON.stringify(a)); } } catch(e){} }
  function showDone(){
    var g = document.getElementById('fkGate'); if (!g) return;
    var btns = FILES.map(function(f, i){
      var cls = i === 0 ? 'btn btn-primary' : 'btn btn-ghost';
      return '<a class="' + cls + '" style="width:100%;margin-top:8px" href="' + esc(f[0]) + '" download="' + esc(f[1]) + '">↓ ' + esc(f[2]) + '</a>';
    }).join('');
    g.innerHTML =
      '<div class="fk-gate-done"><p class="fk-done-h">✓ 你的下載包(3 份)</p>' +
      '<p class="fk-done-sub">下載連結也寄到你信箱了(沒收到先看垃圾信匣)。直接點下面下載:</p>' +
      btns + '</div>';
  }

  // 已經領過 → 直接給下載,連 email 都不用碰(標籤先前已記過)。
  if (storedEmail() && sent().indexOf(SRC) >= 0) { showDone(); return; }

  var form = document.getElementById('fkForm');
  if (!form) return;

  // 留過 email 但還沒領過這份 → 幫他帶入 email,按一下就好(那一下會送出 → 行為標籤一定進 Kit)。
  var pre = storedEmail();
  if (pre) { var inp = document.getElementById('fkEmail'); if (inp) inp.value = pre; }

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var email = (document.getElementById('fkEmail').value || '').trim();
    var hp = (document.getElementById('fkHp') || {}).value || '';
    var msg = document.getElementById('fkMsg');
    var btn = form.querySelector('button');
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) { msg.textContent = 'email 看起來怪怪的,再確認一下?'; return; }
    btn.disabled = true; btn.textContent = '領取中…';
    fetch('/api/subscribe', { method:'POST', headers:{'Content-Type':'application/json'},
      body: JSON.stringify({ email: email, website: hp, source: SRC }) })
      .then(function(r){ return r.json().catch(function(){ return { ok: r.ok }; }); })
      .then(function(d){
        if (d && d.ok) {
          try { localStorage.setItem(UNLOCK, email); } catch(e){}
          markSent();
          showDone();
        } else {
          msg.textContent = (d && d.error === 'rate') ? '太快了,稍等一下再試。' : '送出沒成功,請再試一次。';
          btn.disabled = false; btn.textContent = '免費領取 PDF →';
        }
      })
      .catch(function(){ msg.textContent = '網路怪怪的,請再試一次。'; btn.disabled = false; btn.textContent = '免費領取 PDF →'; });
  });
})();
</script>
<?php require __DIR__ . '/partials/footer.php'; ?>
