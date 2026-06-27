<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '七天練眼｜還沒有點子?先養出一雙看得見痛點的眼睛(免費下載)',
  'desc'  => '還沒有創業點子也沒關係。一天一格、零門檻的七天練眼練習:在日常生活裡找出「有人用爛方法硬撐」的畫面,七天後養出一雙自動看見痛點的眼睛。結合《痛點》與田野觀察法,免費下載。',
  'path'  => '/eye',
  'body_class' => 'page-fieldkit',
  'schema' => [
    [
      '@type'       => 'HowTo',
      '@id'         => rtrim($cfg['site_url'],'/') . '/eye#howto',
      'name'        => '七天練眼:養出一雙看得見痛點的眼睛',
      'description' => '一天一格、連續七天,在日常生活裡找出「有人用爛方法硬撐」的畫面,只記三欄,週末圈出痛最深的一格,當作第一個值得驗證的真痛點。',
      'inLanguage'  => 'zh-Hant-TW',
      'author'      => ['@id' => rtrim($cfg['site_url'],'/') . '/#person'],
      'totalTime'   => 'P7D',
      'step' => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => '每天找一個畫面', 'text' => '一天找一個「有人默默拼了爛方法硬撐」的畫面——不是找抱怨的人,是找沒人喊卻在將就的人。'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => '只記三欄', 'text' => '我看到的土法、它在解什麼麻煩、這個人為它付出了什麼(時間／錢／放棄了什麼)。只寫親眼看到的動作。'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => '週末圈一個', 'text' => '回頭看七張畫面,圈出代價大到不成比例的那一個——它就是你第一個值得帶出門驗證的真痛點。'],
      ],
    ],
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',     'path' => '/'],
      ['name' => '七天練眼',  'path' => '/eye'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap fk-main">

  <div class="fk-intro">
    <p class="eyebrow">免費下載 · 一天一格 · 還沒有點子也能開始</p>
    <h1 class="h-display"><span class="kw">還沒有點子?</span><span class="kw">先養出一雙</span><span class="kw"><span class="hl">看得見痛點</span>的眼睛</span></h1>
    <p class="lead">好點子多半在路上撞見,很少在房間裡憑空想出來。這七天你哪裡都不用去——照常上班、買早餐、滑手機,只是把一雙會「看」的眼睛慢慢開機。</p>
  </div>

  <div class="fk-download" id="fkTop">
    <div class="fk-dl-main">
      <p class="fk-dl-h">《七天練眼》練習表</p>
      <p class="fk-dl-sub">一頁七格、一天一欄。印一張貼在桌邊或夾進記事本,七天就好。</p>
      <p class="fk-dl-fine">完全免費 · 你寫的內容只在你自己的紙上</p>
    </div>
    <div class="fk-dl-opt" id="fkGate">
      <p class="fk-opt-h">留個 email,免費把練習表寄給你 👇</p>
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

  <article class="reading wrap-read fk-body">
    <?php readfile(__DIR__ . '/_content/eye.html'); ?>
  </article>

  <div class="fk-eye-cross">
    <p><strong>七格填滿、圈出那一個了?</strong>那就是你第一個值得驗證的真痛點。下一步,帶《出門找痛》出門,真的去看、去問那群人——確認這個痛不只你一個人看得到。</p>
    <a class="btn btn-ghost" href="/fieldkit">去看《出門找痛》→</a>
  </div>

  <div class="reading-end fk-funnel">
    <div class="read-funnel">
      <h3>養出眼睛,只是入口</h3>
      <p>看得見痛點之後,真正難的是判斷一個痛值不值得做、怎麼一路做到第一筆錢。那把尺背後的整套想法,就是《痛點》這本書。</p>
      <div class="btn-row" style="justify-content:center">
        <a class="btn btn-primary" href="/read">免費試讀《痛點》</a>
        <a class="btn btn-ghost" href="/tool">先免費體檢一個點子</a>
      </div>
    </div>
  </div>

</main>

<script>
(function(){
  // 跨頁共用:painUnlocked = 已留過的 email;painSentSources = 已送出過的行為(避免重複寄信,但每種行為至少送一次→標籤不漏)
  var UNLOCK = 'painUnlocked', SENT = 'painSentSources', SRC = 'eye';
  var DL = '/assets/dl/painpoint-seven-day-eye.pdf?v=2', DLNAME = '七天練眼・看見痛點的練習.pdf';
  function storedEmail(){ try { return localStorage.getItem(UNLOCK) || ''; } catch(e){ return ''; } }
  function sent(){ try { return JSON.parse(localStorage.getItem(SENT)) || []; } catch(e){ return []; } }
  function markSent(){ try { var a = sent(); if (a.indexOf(SRC)<0){ a.push(SRC); localStorage.setItem(SENT, JSON.stringify(a)); } } catch(e){} }
  function showDone(){
    var g = document.getElementById('fkGate'); if (!g) return;
    g.innerHTML =
      '<div class="fk-gate-done"><p class="fk-done-h">✓ 你的《七天練眼》PDF</p>' +
      '<p class="fk-done-sub">下載連結已寄到你信箱(沒收到先看垃圾信匣)。也可以直接下載:</p>' +
      '<a class="btn btn-primary" href="' + DL + '" download="' + DLNAME + '">直接下載 PDF →</a></div>';
  }

  // 已經領過這份 → 直接給下載,連 email 都不用碰(標籤先前已記過)。
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
