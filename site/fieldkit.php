<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '出門找痛｜把「我猜」換成「我看到了」的實地觀察與訪談清單(免費下載)',
  'desc'  => '有了點子,下一步是走出門。一份結合《痛點》P.A.I.N. 與 The Mom Test、顧客探索方法的實地觀察與訪談清單:教你用看的找出真痛點、用問的問出痛多深。免費下載、印出來帶去現場手寫。',
  'path'  => '/fieldkit',
  'body_class' => 'page-fieldkit',
  'schema' => [
    [
      '@type'       => 'HowTo',
      '@id'         => rtrim($cfg['site_url'],'/') . '/fieldkit#howto',
      'name'        => '出門找痛:走出門找出真實痛點的實地觀察與訪談清單',
      'description' => '用《痛點》P.A.I.N. 之尺,結合 The Mom Test 與顧客探索方法,走出門確認「有沒有人真的在痛、痛多深」的一張清單。',
      'inLanguage'  => 'zh-Hant-TW',
      'author'      => ['@id' => rtrim($cfg['site_url'],'/') . '/#person'],
      'totalTime'   => 'P1D',
      'step' => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => '用眼睛看,找指紋', 'text' => '看他用什麼爛方法、土法在硬撐——看他做了什麼,別只聽他說什麼。養越久、付的代價越不成比例,痛越深。'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => '照著腳本問過去', 'text' => '全程閉嘴、不先講你的點子;只問「上次怎麼處理、花了多少時間和錢」,別問「你會不會用」。'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => '當場圈綠紅燈', 'text' => '拼了爛方法又花過錢是綠燈;只在嘴上抱怨、或一味誇你點子好是紅燈。讚美是愚人金,先打叉。'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => '跑滿五個再收斂', 'text' => '一個對象一張,跑滿五個互不相識的陌生人。同一枚指紋出現三次以上,才像一群人的痛。'],
      ],
    ],
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',     'path' => '/'],
      ['name' => '出門找痛',  'path' => '/fieldkit'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap fk-main">

  <div class="fk-intro">
    <p class="eyebrow">免費下載 · 印出來帶出門 · 不登入、不上傳</p>
    <h1 class="h-display"><span class="kw">有了點子,</span><span class="kw">下一步不是動手——</span><span class="kw">是<span class="hl">走出門</span></span></h1>
    <p class="lead">點子體檢叫你「去問清楚」,這份《出門找痛》就是那雙鞋——一張紙、任何場景通用,帶你走出門用眼睛找指紋、用過去問真話,把每一格「我猜」換成「我看到了、我問到了」。</p>
  </div>

  <div class="fk-download" id="fkTop">
    <div class="fk-dl-main">
      <p class="fk-dl-h">《出門找痛》實地觀察與訪談清單</p>
      <p class="fk-dl-sub">含一張可手寫的空白清單(帶出門就這張)、三張填好的範本、科學方法對照表。A4、印出來就能用。</p>
      <p class="fk-dl-fine">完全免費 · 你訪談到的內容只寫在你自己的紙上,不會上傳</p>
    </div>
    <div class="fk-dl-opt" id="fkGate">
      <p class="fk-opt-h">留個 email,免費把清單寄給你 👇</p>
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
    <?php readfile(__DIR__ . '/_content/fieldkit.html'); ?>
  </article>

  <div class="fk-eye-cross">
    <p><strong>還沒有點子,只想先練眼力?</strong>先別急著找人訪談。用《七天練眼》——一天一格、零門檻,先把一雙「看得見痛點」的眼睛養出來,再回來帶這張清單出門。</p>
    <a class="btn btn-ghost" href="/eye">去看《七天練眼》→</a>
  </div>

  <div class="reading-end fk-funnel">
    <div class="read-funnel">
      <h3>把現場帶回來的真資料,回去重算一次</h3>
      <p>這張清單只負責收證據;要不要動手、賺不賺得回來,回到室內用點子體檢那把尺量。想懂為什麼順序是 P → A → I → N,《痛點》整本書講的就是這件事。</p>
      <div class="btn-row" style="justify-content:center">
        <a class="btn btn-primary" href="/tool">回去做一次點子體檢</a>
        <a class="btn btn-ghost" href="/book">看《痛點》電子書</a>
      </div>
    </div>
  </div>

</main>

<script>
(function(){
  // 跨頁共用:painUnlocked = 已留過的 email;painSentSources = 已送出過的行為(避免重複寄信,但每種行為至少送一次→標籤不漏)
  var UNLOCK = 'painUnlocked', SENT = 'painSentSources', SRC = 'fieldkit';
  var DL = '/assets/dl/painpoint-fieldkit.pdf?v=2', DLNAME = '出門找痛・實地觀察與訪談清單.pdf';
  function storedEmail(){ try { return localStorage.getItem(UNLOCK) || ''; } catch(e){ return ''; } }
  function sent(){ try { return JSON.parse(localStorage.getItem(SENT)) || []; } catch(e){ return []; } }
  function markSent(){ try { var a = sent(); if (a.indexOf(SRC)<0){ a.push(SRC); localStorage.setItem(SENT, JSON.stringify(a)); } } catch(e){} }
  function showDone(){
    var g = document.getElementById('fkGate'); if (!g) return;
    g.innerHTML =
      '<div class="fk-gate-done"><p class="fk-done-h">✓ 你的《出門找痛》PDF</p>' +
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
