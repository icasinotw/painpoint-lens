/* ============================================================
   痛點 P.A.I.N. — 點子體檢工具
   全程在瀏覽器跑,不登入、不上傳。把書裡的「點子體檢表」變成可打分的雷達圖。
   設計原則(忠於書):
   - 分數不是「會不會成功」,是「你答不答得出來」。
   - 你選到「我猜／我不知道」的那幾題 → 就是動手前要先去問清楚的事。
   ============================================================ */
(function () {
  'use strict';

  var C = { gold:'#b59410', goldInk:'#7a6309', goldSoft:'#f0e7c8',
            ink:'#1a1a1a', inkSoft:'#3a3733', grey:'#8a857c',
            line:'#e3ddd1', paper:'#faf8f4', white:'#ffffff', crimson:'#a63a2a' };

  // ---- 題庫:四軸,每軸 2 題,每個選項給分(0–100);unsure=true 代表「我猜/我不知道」 ----
  var AXES = [
    { key:'P', name:'誰在痛?', en:'People',
      note:'先鎖定一群具體的人。不是「大家」,更不能只有「你自己」。',
      weak:{ title:'誰在痛,還很模糊',
        body:'你可能把「自己的痛」當成了「市場的痛」。先去找到第二、第三個真的會痛的人——你認識、找得到、能直接問到的真人。',
        quote:'自己痛,不代表市場痛。' },
      strong:'你心裡有一群具體、找得到的人——這是最好的起點。',
      qs:[
        { id:'p1', text:'你心裡那個會痛的人,是誰?', opts:[
          { t:'大家／所有人都會用到', s:20, unsure:true },
          { t:'其實主要是我自己', s:25, unsure:true },
          { t:'一群我描述得出輪廓的人', s:65 },
          { t:'一群具體、我認識或找得到真人的人', s:100 } ]},
        { id:'p2', text:'這群人裡,你現在認識或找得到幾個真實的人?', opts:[
          { t:'0 個', s:10, unsure:true },
          { t:'1–2 個', s:45 },
          { t:'3–9 個', s:75 },
          { t:'10 個以上', s:100 } ]}
      ]},
    { key:'A', name:'痛多深?', en:'Agony',
      note:'痛到他已經在花時間、花錢去繞過了嗎?不解決會怎樣?',
      weak:{ title:'痛,可能還不夠深',
        body:'人不會為「有點煩」掏錢,只會為「已經在付代價」掏錢。去看他有沒有已經在花時間、花錢繞過這個問題。',
        quote:'不要問他會不會買,去看他已經為這個問題付出了什麼。' },
      strong:'這個痛夠頻繁、夠真——有人已經在為它付代價了。',
      qs:[
        { id:'a1', text:'他們現在怎麼忍這個問題?', opts:[
          { t:'其實沒太大感覺,忍一下就過', s:15, unsure:true },
          { t:'會抱怨,但還是照舊', s:35 },
          { t:'自己想土法繞過、花時間硬解', s:70 },
          { t:'已經在花錢找別的方法解', s:100 } ]},
        { id:'a2', text:'這個痛多常發生?', opts:[
          { t:'一年難得幾次', s:25 },
          { t:'每個月', s:55 },
          { t:'每週', s:80 },
          { t:'幾乎每天', s:100 } ]}
      ]},
    { key:'I', name:'你怎麼介入?', en:'Intervention',
      note:'重點不是功能多,是有沒有把那個最關鍵的痛變輕。',
      weak:{ title:'介入點,還不夠鋒利',
        body:'先講清楚一件事:你讓哪一個「會讓人放棄」的卡點,幾乎消失了?不是功能比別人多,是那個最關鍵的痛變輕了。',
        quote:'不是功能多,是痛變輕。' },
      strong:'你說得出一個被你變輕的關鍵的痛,而且那是你做得成的事。',
      qs:[
        { id:'i1', text:'你的解法,把哪一個「最關鍵的痛」變輕了?', opts:[
          { t:'我還說不太清楚', s:20, unsure:true },
          { t:'主要是功能比別人多', s:40 },
          { t:'我講得出一個被變輕的關鍵的痛', s:85 },
          { t:'那個痛本來讓人放棄,我讓它幾乎消失', s:100 } ]},
        { id:'i2', text:'為什麼是你?你手上已經有什麼讓你做得成?', opts:[
          { t:'還沒有,要從零開始學', s:25, unsure:true },
          { t:'有一點相關經驗', s:55 },
          { t:'有明確的技能／作品／通路', s:90 },
          { t:'有別人很難複製的優勢', s:100 } ]}
      ]},
    { key:'N', name:'數字算得過來?', en:'Numbers',
      note:'最白話的問法:進來的錢,能不能 cover 出去的錢和你的時間?',
      weak:{ title:'數字,還沒算過',
        body:'數字要一開始就想,不是最後才算。一筆訂單收多少、你的成本和時間是多少、進來的錢 cover 不 cover 得了?',
        quote:'進來的錢,能不能 cover 出去的錢和你的時間?' },
      strong:'你算得出一筆訂單收多少,也知道 cover 不 cover 得了。',
      qs:[
        { id:'n1', text:'一個客戶、一筆訂單,你大概收多少?', opts:[
          { t:'完全沒算過', s:15, unsure:true },
          { t:'心裡有個模糊範圍', s:50 },
          { t:'算得出一個具體數字', s:85 },
          { t:'算得出,而且問過真的有人願意付', s:100 } ]},
        { id:'n2', text:'你的成本＋時間,進來的錢 cover 得了嗎?', opts:[
          { t:'不知道', s:15, unsure:true },
          { t:'大概,但沒細算', s:45 },
          { t:'算過,現在 cover 不了,但我知道差多少', s:80 },
          { t:'算過,cover 得了', s:100 } ]}
      ]}
  ];

  var TOTAL_Q = AXES.reduce(function (n, a) { return n + a.qs.length; }, 0);
  var STORE = 'painCheckup.v1';
  var UNLOCK = 'painUnlocked';      // 高意圖解鎖(存 email)
  var SAVED = 'painSavedIdeas.v1';  // 儲存多個點子
  var SENT = 'painSentSources';     // 已送出過的行為 source:避免重複寄信,但每種行為至少送一次 → Kit 標籤一個都不漏

  // ---- 狀態 ----
  var answers = {}; // qid -> {s, unsure, text, optText}
  var ideaEl, axesEl, progressEl, btnReport, reportEl;
  var lastResult = null, lastIdea = '';  // 最近一次報告(給匯出/儲存/寄信用)
  var pendingAction = null;              // email 閘通過後要執行的動作
  var gateReturnFocus = null;            // 關閉 modal 後把焦點還回去

  function init() {
    ideaEl = document.getElementById('idea');
    axesEl = document.getElementById('axes');
    progressEl = document.getElementById('progress');
    btnReport = document.getElementById('seeReport');
    reportEl = document.getElementById('report');
    if (!axesEl) return;

    renderForm();
    restore();
    updateProgress();

    btnReport.addEventListener('click', showReport);
    ideaEl.addEventListener('input', persist);
    initGate();
  }

  // ============================================================
  //  高意圖 email 閘(匯出 PDF / 儲存多個點子 / 把報告寄到信箱)
  // ============================================================
  function isUnlocked() { try { return !!localStorage.getItem(UNLOCK); } catch (e) { return false; } }
  function storedEmail() { try { return localStorage.getItem(UNLOCK) || ''; } catch (e) { return ''; } }
  function sentSources() { try { return JSON.parse(localStorage.getItem(SENT)) || []; } catch (e) { return []; } }
  function markSent(s) { try { var a = sentSources(); if (a.indexOf(s) < 0) { a.push(s); localStorage.setItem(SENT, JSON.stringify(a)); } } catch (e) {} }

  // email 留過就不再開閘(優化體驗);但每一種「行為」第一次都一定會送出(必要時靜默)→ 確保它的 Kit 標籤一個都不漏。
  function requireEmail(source, cb) {
    var email = storedEmail();
    if (email) {
      if (sentSources().indexOf(source) < 0) silentSubscribe(email, source);
      cb();
      return;
    }
    pendingAction = cb;
    openGate(source);
  }

  // 用已存的 email 在背景送出這個行為(記 Kit 標籤 + 寄報告),不再彈視窗打擾。成功才記入「已送出」。
  function silentSubscribe(email, source) {
    var payload = {
      email: email, website: '', source: source,
      idea: lastIdea || '', scores: lastResult ? lastResult.scores : null,
      unsure: lastResult ? lastResult.unsure : []
    };
    fetch('/api/subscribe', { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(payload) })
      .then(function (r) { return r.json().catch(function () { return { ok: r.ok }; }); })
      .then(function (d) { if (d && d.ok) markSent(source); })
      .catch(function () {});
  }

  function openGate(source) {
    var gate = document.getElementById('emailGate');
    if (!gate) { if (pendingAction) { pendingAction(); pendingAction = null; } return; }
    gateReturnFocus = document.activeElement;
    gate.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
    var src = document.getElementById('gateSource'); if (src) src.value = source || 'tool';
    var msg = document.getElementById('gateMsg'); if (msg) msg.textContent = '';
    var em = document.getElementById('gateEmail'); if (em) setTimeout(function () { em.focus(); }, 50);
  }
  function closeGate() {
    var gate = document.getElementById('emailGate');
    if (gate) gate.setAttribute('hidden', '');
    document.body.style.overflow = '';
    if (gateReturnFocus && gateReturnFocus.focus) { try { gateReturnFocus.focus(); } catch (e) {} }
    gateReturnFocus = null;
  }

  function initGate() {
    var gate = document.getElementById('emailGate');
    if (!gate) return;
    var close = document.getElementById('gateClose');
    if (close) close.addEventListener('click', closeGate);
    gate.addEventListener('click', function (e) { if (e.target === gate) closeGate(); });
    document.addEventListener('keydown', function (e) {
      if (gate.hasAttribute('hidden')) return;
      if (e.key === 'Escape') { closeGate(); return; }
      if (e.key !== 'Tab') return;
      // 焦點鎖:Tab 不跑出 modal(排除 tabindex=-1 的蜜罐)
      var f = gate.querySelectorAll('button, [href], input:not([tabindex="-1"]), [tabindex]:not([tabindex="-1"])');
      var list = [].filter.call(f, function (el) { return el.offsetParent !== null; });
      if (!list.length) return;
      var first = list[0], last = list[list.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    });

    var form = document.getElementById('gateForm');
    if (form) form.addEventListener('submit', submitGate);
  }

  function submitGate(e) {
    e.preventDefault();
    var email = (document.getElementById('gateEmail').value || '').trim();
    var hp = (document.getElementById('gateHp') || {}).value || '';
    var source = (document.getElementById('gateSource') || {}).value || 'tool';
    var msg = document.getElementById('gateMsg');
    var btn = document.getElementById('gateSubmit');
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) { if (msg) msg.textContent = 'email 看起來怪怪的,再確認一下?'; return; }

    btn.disabled = true; btn.textContent = '送出中…';
    var payload = {
      email: email, website: hp, source: source,
      idea: lastIdea || '', scores: lastResult ? lastResult.scores : null,
      unsure: lastResult ? lastResult.unsure : []
    };
    fetch('/api/subscribe', {
      method: 'POST', headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    }).then(function (r) { return r.json().catch(function () { return { ok: r.ok }; }); })
      .then(function (d) {
        if (d && d.ok) {
          try { localStorage.setItem(UNLOCK, email); } catch (e) {}
          markSent(source);
          closeGate();
          if (pendingAction) { var cb = pendingAction; pendingAction = null; cb(); }
        } else {
          if (msg) msg.textContent = d && d.error === 'rate' ? '太快了,稍等一下再試。' : '送出沒成功,請再試一次。';
        }
      }).catch(function () { if (msg) msg.textContent = '網路怪怪的,請再試一次。'; })
      .then(function () { btn.disabled = false; btn.textContent = '解鎖並寄給我'; });
  }

  // ---- 渲染題目 ----
  function renderForm() {
    AXES.forEach(function (axis) {
      var sec = document.createElement('section');
      sec.className = 'axis';
      sec.id = 'axis-' + axis.key;

      var head = '<div class="axis-head"><div class="axis-letter">' + axis.key + '</div>' +
        '<div><div class="axis-en">' + axis.en + '</div>' +
        '<h2 class="axis-title">' + axis.name + '</h2></div></div>' +
        '<p class="axis-note">' + axis.note + '</p>';
      sec.innerHTML = head;

      axis.qs.forEach(function (q) {
        var qd = document.createElement('div');
        qd.className = 'q';
        qd.innerHTML = '<p class="q-text">' + q.text + '</p>';
        var opts = document.createElement('div');
        opts.className = 'opts';
        q.opts.forEach(function (o, idx) {
          var lab = document.createElement('label');
          lab.className = 'opt';
          lab.innerHTML = '<input type="radio" name="' + q.id + '" value="' + idx + '">' +
            '<span class="dot"></span><span class="opt-txt">' + o.t + '</span>' +
            (o.unsure ? '<span class="tag-unsure">我猜／不確定</span>' : '');
          // 綁 change(而非只綁 label click):滑鼠點擊與鍵盤方向鍵切換都能選到
          lab.querySelector('input').addEventListener('change', function () {
            select(axis.key, q, o, lab);
          });
          opts.appendChild(lab);
        });
        qd.appendChild(opts);
        sec.appendChild(qd);
      });
      axesEl.appendChild(sec);
    });
  }

  function select(axisKey, q, o, labEl) {
    // 視覺:同題只亮一個
    var siblings = labEl.parentNode.querySelectorAll('.opt');
    siblings.forEach(function (s) { s.classList.remove('sel'); });
    labEl.classList.add('sel');
    labEl.querySelector('input').checked = true;

    answers[q.id] = { axis: axisKey, s: o.s, unsure: !!o.unsure, qText: q.text, optText: o.t };
    persist();
    updateProgress();
  }

  function updateProgress() {
    var done = Object.keys(answers).length;
    progressEl.innerHTML = '已答 <b>' + done + '</b> / ' + TOTAL_Q + ' 題';
    btnReport.disabled = done < TOTAL_Q;
    btnReport.textContent = done < TOTAL_Q ? '把 ' + TOTAL_Q + ' 題答完,看報告' : '看我的體檢報告 →';
  }

  // ---- 儲存 / 還原(單一點子,存在這台裝置) ----
  function persist() {
    try {
      localStorage.setItem(STORE, JSON.stringify({
        idea: ideaEl ? ideaEl.value : '', answers: answers
      }));
    } catch (e) {}
  }
  function restore() {
    try {
      var raw = localStorage.getItem(STORE);
      if (!raw) return;
      var d = JSON.parse(raw);
      if (d.idea && ideaEl) ideaEl.value = d.idea;
      if (d.answers) {
        Object.keys(d.answers).forEach(function (qid) {
          answers[qid] = d.answers[qid];
          var optTxt = d.answers[qid].optText;
          var inputs = document.getElementsByName(qid);
          for (var i = 0; i < inputs.length; i++) {
            var lab = inputs[i].closest('.opt');
            if (lab && lab.querySelector('.opt-txt').textContent === optTxt) {
              lab.classList.add('sel'); inputs[i].checked = true;
            }
          }
        });
      }
    } catch (e) {}
  }

  // ---- 計分 ----
  function compute() {
    var scores = {}, unsure = [];
    AXES.forEach(function (axis) {
      var sum = 0, n = 0;
      axis.qs.forEach(function (q) {
        var a = answers[q.id];
        if (a) { sum += a.s; n++; if (a.unsure) unsure.push(q.text); }
      });
      scores[axis.key] = n ? Math.round(sum / n) : 0;
    });
    var vals = Object.keys(scores).map(function (k) { return scores[k]; });
    var min = Math.min.apply(null, vals);
    var minKey = Object.keys(scores).filter(function (k) { return scores[k] === min; })[0];
    var avg = Math.round(vals.reduce(function (a, b) { return a + b; }, 0) / vals.length);
    return { scores: scores, min: min, minKey: minKey, avg: avg, unsure: unsure };
  }

  // ---- 顯示報告 ----
  function showReport() {
    var r = compute();
    var idea = (ideaEl.value || '').trim();
    lastResult = r; lastIdea = idea;

    // 評語帶(誠實:強調「先去問」)
    var band, bandTxt, bandMsg;
    if (r.min < 45 || r.unsure.length >= 3) {
      band = 'stop'; bandTxt = '先別急著動手';
      bandMsg = '有些最關鍵的問題,你還答不踏實。這不代表點子不好——代表你動手、花大錢之前,該先去把下面這幾題問清楚。';
    } else if (r.min < 65 || r.unsure.length >= 1) {
      band = 'check'; bandTxt = '值得做,但有功課';
      bandMsg = '方向站得住。把下面這幾格補實,再決定要投入多少。';
    } else {
      band = 'go'; bandTxt = '四題,你都答得出來';
      bandMsg = '四個問題你都答得踏實——這把尺幫不了你更多了,剩下的要靠真的去做、去收第一筆錢來驗證。記得:這不保證成功,只代表你準備得比多數人好。';
    }

    var html = '';
    html += '<div class="report-card"><div class="report-top">';
    html += '<div class="radar-wrap"><canvas id="radar" width="380" height="380" aria-label="P.A.I.N. 雷達圖"></canvas></div>';
    html += '<div class="verdict">';
    html += '<p class="eyebrow">你的 P.A.I.N. 體檢</p>';
    if (idea) html += '<p class="idea-echo">「' + escapeHtml(idea) + '」</p>';
    html += '<span class="band ' + band + '">' + bandTxt + '</span>';
    html += '<p>' + bandMsg + '</p>';
    html += '</div></div>';

    // 四軸分數
    html += '<div class="axis-scores">';
    AXES.forEach(function (axis) {
      var weak = axis.key === r.minKey && r.min < 65;
      html += '<div class="score-pill' + (weak ? ' weak' : '') + '">' +
        '<div class="k">' + axis.key + '</div>' +
        '<div class="v">' + r.scores[axis.key] + '</div>' +
        '<div class="lbl">' + axis.name + '</div></div>';
    });
    html += '</div>';
    html += '</div>'; // report-card

    // 列印用:三個免費工具(填補商業計畫第 1 頁空白 + 導流回站;螢幕隱藏)
    html += buildPrintTools();

    // 逐軸發現(弱軸優先)
    var weakAxes = AXES.filter(function (a) { return r.scores[a.key] < 60; })
      .sort(function (a, b) { return r.scores[a.key] - r.scores[b.key]; });
    if (weakAxes.length) {
      html += '<div class="report-card"><h3>你最該先補的地方</h3><div class="findings">';
      weakAxes.forEach(function (a) {
        html += '<div class="finding"><h4>' + a.key + '｜' + a.weak.title + '</h4>' +
          '<p>' + a.weak.body + '</p>' +
          '<p class="book-quote">「' + a.weak.quote + '」</p></div>';
      });
      html += '</div></div>';
    }

    // 去問清楚清單(書的核心 payoff)
    html += '<div class="go-ask"><h3>動手前,先去問清楚這幾題</h3>';
    if (r.unsure.length) {
      html += '<ol>';
      r.unsure.forEach(function (q) { html += '<li>' + q + '</li>'; });
      html += '</ol>';
      html += '<p class="muted" style="margin:14px 0 0">這幾格,就是你下一步要去問真人、而不是自己猜的事。問清楚了,你就省下了一筆——作者當年沒能省下的學費。</p>';
    } else {
      html += '<p class="none">這次,你沒有任何一題答「我猜」。</p>' +
        '<p class="muted" style="margin:8px 0 0">很好——代表動手前該問的,你已經問過了。剩下的,交給真的去做。</p>';
    }
    html += '<div class="go-ask-cta"><p>怎麼問、去哪問、怎麼判斷他是真在痛、還是只是客氣?有一張清單帶你走出門——把上面這幾題,變成「我看到了、我問到了」。</p>' +
      '<a class="btn btn-primary go-ask-btn" href="/fieldkit"><span class="go-ask-btn-label">下載《出門找痛》,把這幾題帶出門&nbsp;→</span></a></div>';
    html += '</div>';

    // CTA(免費:下載雷達圖、重新體檢;高意圖才收 email:匯出 PDF、儲存多點子)
    html += '<div class="report-cta"><div class="btn-row">' +
      '<button class="btn btn-primary" id="exportPdf">匯出 PDF 商業計畫</button>' +
      '<button class="btn btn-gold" id="saveIdea">儲存／比較這個點子</button>' +
      '<button class="btn btn-ghost" id="dlCard">下載雷達圖</button>' +
      '<button class="btn btn-ghost" id="again">重新體檢</button>' +
      '</div>';
    if (!isUnlocked()) {
      html += '<p class="cta-note"><b>「匯出 PDF」與「儲存／比較」</b>需留一個 email 解鎖(順手把報告寄一份到你信箱);' +
        '<b>「下載雷達圖」</b>免費,直接下載。</p>';
    }
    html += '<div id="savedPanel"></div>';
    html += '<div class="upsell"><p>想懂為什麼順序是 <b>P → A → I → N</b>,而不是先想「我要怎麼做」?<br>這正是作者用四年、近五百萬冤枉路換來的一課。</p>' +
      '<a class="btn btn-primary" href="/read/pain-framework">免費讀框架總覽 →</a></div>';
    html += '</div>';

    // 列印用詳細商業計畫(螢幕隱藏,@media print 才顯示)
    html += buildPrintDetail(r, idea);

    reportEl.innerHTML = html;
    reportEl.classList.add('show');

    drawInlineRadar(r.scores);
    document.getElementById('dlCard').addEventListener('click', function () { downloadCard(r, idea); });
    document.getElementById('again').addEventListener('click', resetAll);
    document.getElementById('exportPdf').addEventListener('click', function () { requireEmail('pdf', exportPdf); });
    document.getElementById('saveIdea').addEventListener('click', function () { requireEmail('save', saveCurrentIdea); });
    renderSaved();

    reportEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  // ---- 匯出 PDF(用瀏覽器列印 → 另存 PDF;不依賴外部套件) ----
  function exportPdf() { window.print(); }

  function buildPrintTools() {
    return '<div class="pd-tools">' +
      '<p class="pdt-h">這份體檢只是起點——接著,用這三個免費工具往下走(都在 <a class="pdt-site" href="https://painpoint.tw">painpoint.tw</a>)</p>' +
      '<div class="pdt-grid">' +
      '<a class="pdt-card" href="https://painpoint.tw/eye"><b>七天練眼</b><span>還沒有點子?一天一格,養出看得見痛點的眼睛。</span><i>painpoint.tw/eye</i></a>' +
      '<a class="pdt-card" href="https://painpoint.tw/fieldkit"><b>出門找痛</b><span>帶這張清單去現場,用看的找指紋、用問的問真話。</span><i>painpoint.tw/fieldkit</i></a>' +
      '<a class="pdt-card" href="https://painpoint.tw/tool"><b>點子體檢</b><span>把現場帶回來的真資料,再體檢一次。</span><i>painpoint.tw/tool</i></a>' +
      '</div></div>';
  }

  function buildPrintDetail(r, idea) {
    var h = '<div class="print-detail">';
    h += '<h2 class="pd-title">點子體檢報告 · 商業計畫雛形</h2>';
    if (idea) h += '<p class="pd-idea">點子:' + escapeHtml(idea) + '</p>';
    AXES.forEach(function (axis) {
      h += '<div class="pd-axis"><h3>' + axis.key + '｜' + axis.name +
        ' <span class="pd-score">' + r.scores[axis.key] + '</span></h3><ul>';
      axis.qs.forEach(function (q) {
        var a = answers[q.id];
        h += '<li><span class="pd-q">' + q.text + '</span><br><span class="pd-a">→ ' +
          (a ? escapeHtml(a.optText) : '(未答)') + '</span></li>';
      });
      h += '</ul></div>';
    });
    if (r.unsure.length) {
      h += '<div class="pd-ask"><h3>動手前,先去問清楚</h3><ol>';
      r.unsure.forEach(function (q) { h += '<li>' + q + '</li>'; });
      h += '</ol></div>';
    }
    h += '<div class="pd-card"><b>P-A-I-N 隨身卡</b>' +
      '<p>P 誰在痛 → A 痛多深 → I 怎麼介入 → N 數字成不成立。' +
      '順序很重要:先確認有人痛、痛得夠深,再決定你怎麼做、划不划算。' +
      '任何一題答「我猜」,先別花大錢——那一題就是你下一步要去問清楚的事。</p></div>';
    // 書籍資訊 + 回首頁連結(隨報告一起匯出 / 列印)
    h += '<div class="pd-book">' +
      '<img class="pd-book-cover" src="/assets/img/cover.png?v=4" alt="《痛點 P.A.I.N.》書封">' +
      '<div class="pd-book-info">' +
        '<h3 class="pd-book-title">痛點 P.A.I.N.</h3>' +
        '<p class="pd-book-sub">不保證你成功,只用近五百萬換來的一把尺:判斷一個點子值不值得做、看出誰真的在痛、動手做到第一筆錢。</p>' +
        '<p class="pd-book-parts"><b>第一部・尺</b>判斷點子值不值得做　<b>第二部・眼睛</b>看見誰真的在痛　<b>第三部・手</b>動手做到第一筆錢</p>' +
        '<p class="pd-book-line">一條真實主線——一個還在賠錢的創業者,把每個坑帶血演一遍,以及本來該怎麼做。</p>' +
      '</div></div>';
    h += '<p class="pd-foot">痛點 P.A.I.N. ｜ 動手前先問:這個點子,值不值得做。<br>' +
      '<a class="pd-home" href="https://painpoint.tw/">回到 painpoint.tw — 免費體檢更多點子、免費試讀</a></p>';
    h += '</div>';
    return h;
  }

  // ---- 儲存／比較多個點子 ----
  function loadSaved() { try { return JSON.parse(localStorage.getItem(SAVED)) || []; } catch (e) { return []; } }
  function writeSaved(list) { try { localStorage.setItem(SAVED, JSON.stringify(list)); } catch (e) {} }

  function saveCurrentIdea() {
    if (!lastResult) return;
    var list = loadSaved();
    var entry = { idea: lastIdea || '(未命名點子)', scores: lastResult.scores, avg: lastResult.avg };
    // 同名覆蓋
    list = list.filter(function (x) { return x.idea !== entry.idea; });
    list.unshift(entry);
    if (list.length > 12) list = list.slice(0, 12);
    writeSaved(list);
    renderSaved(true);
  }

  function renderSaved(flash) {
    var panel = document.getElementById('savedPanel');
    if (!panel) return;
    var list = loadSaved();
    if (!list.length) { panel.innerHTML = ''; return; }
    var h = '<div class="saved-card"><h3>我儲存的點子' +
      (flash ? ' <span class="saved-flash">已儲存 ✓</span>' : '') + '</h3>' +
      '<p class="muted" style="margin:-4px 0 14px;font-size:.92rem">把幾個點子擺在一起比,雷達圖最弱的那一軸,就是各自下一步要補的功課。</p>' +
      '<table class="saved-table"><thead><tr><th>點子</th><th>P</th><th>A</th><th>I</th><th>N</th><th></th></tr></thead><tbody>';
    list.forEach(function (x, i) {
      h += '<tr><td class="si-name">' + escapeHtml(x.idea) + '</td>' +
        '<td>' + x.scores.P + '</td><td>' + x.scores.A + '</td><td>' + x.scores.I + '</td><td>' + x.scores.N + '</td>' +
        '<td><button class="si-del" data-i="' + i + '" aria-label="刪除">×</button></td></tr>';
    });
    h += '</tbody></table></div>';
    panel.innerHTML = h;
    panel.querySelectorAll('.si-del').forEach(function (b) {
      b.addEventListener('click', function () {
        var list = loadSaved(); list.splice(parseInt(b.getAttribute('data-i'), 10), 1); writeSaved(list); renderSaved();
      });
    });
  }

  function resetAll() {
    answers = {};
    if (ideaEl) ideaEl.value = '';
    document.querySelectorAll('.opt.sel').forEach(function (o) { o.classList.remove('sel'); });
    document.querySelectorAll('.opt input').forEach(function (i) { i.checked = false; });
    try { localStorage.removeItem(STORE); } catch (e) {}
    reportEl.classList.remove('show');
    reportEl.innerHTML = '';
    updateProgress();
    document.querySelector('.tool-intro').scrollIntoView({ behavior: 'smooth' });
  }

  // ============================================================
  //  雷達圖繪製
  // ============================================================
  var ORDER = ['P', 'A', 'I', 'N']; // 上、右、下、左
  var AXIS_LABEL = { P:'P 誰在痛', A:'A 痛多深', I:'I 怎麼介入', N:'N 數字' };

  function drawRadar(ctx, cx, cy, R, scores, opt) {
    opt = opt || {};
    var n = ORDER.length;
    function pt(i, frac) {
      var ang = -Math.PI / 2 + i * (2 * Math.PI / n);
      return [cx + Math.cos(ang) * R * frac, cy + Math.sin(ang) * R * frac];
    }
    // 格線環
    ctx.strokeStyle = C.line; ctx.lineWidth = 1;
    [0.25, 0.5, 0.75, 1].forEach(function (f) {
      ctx.beginPath();
      for (var i = 0; i <= n; i++) { var p = pt(i % n, f); i ? ctx.lineTo(p[0], p[1]) : ctx.moveTo(p[0], p[1]); }
      ctx.closePath(); ctx.stroke();
    });
    // 軸線
    for (var i = 0; i < n; i++) {
      var p = pt(i, 1);
      ctx.beginPath(); ctx.moveTo(cx, cy); ctx.lineTo(p[0], p[1]); ctx.stroke();
    }
    // 數據多邊形
    ctx.beginPath();
    for (var j = 0; j < n; j++) {
      var f = Math.max(0.04, scores[ORDER[j]] / 100);
      var q = pt(j, f); j ? ctx.lineTo(q[0], q[1]) : ctx.moveTo(q[0], q[1]);
    }
    ctx.closePath();
    ctx.fillStyle = 'rgba(181,148,16,.22)';
    ctx.fill();
    ctx.strokeStyle = C.gold; ctx.lineWidth = 2; ctx.stroke();
    // 數據點
    for (var k = 0; k < n; k++) {
      var f2 = Math.max(0.04, scores[ORDER[k]] / 100);
      var pp = pt(k, f2);
      ctx.beginPath(); ctx.arc(pp[0], pp[1], 4, 0, 2 * Math.PI);
      ctx.fillStyle = C.gold; ctx.fill();
      ctx.strokeStyle = C.white; ctx.lineWidth = 1.5; ctx.stroke();
    }
    // 軸標籤 + 分數
    var fs = opt.labelSize || 14;
    ctx.font = '700 ' + fs + 'px ' + "'Noto Sans TC',sans-serif";
    ctx.textAlign = 'center'; ctx.textBaseline = 'middle';
    for (var m = 0; m < n; m++) {
      var lp = pt(m, 1.0);
      var ang = -Math.PI / 2 + m * (2 * Math.PI / n);
      var ox = Math.cos(ang) * (fs + 12), oy = Math.sin(ang) * (fs + 10);
      ctx.fillStyle = C.inkSoft;
      ctx.fillText(AXIS_LABEL[ORDER[m]], lp[0] + ox, lp[1] + oy);
      // 分數字
      var sp = pt(m, Math.max(0.04, scores[ORDER[m]] / 100));
      ctx.fillStyle = C.goldInk;
      ctx.font = '900 ' + (fs - 1) + 'px ' + "'Noto Sans TC',sans-serif";
      ctx.fillText(String(scores[ORDER[m]]), sp[0], sp[1] - 14);
      ctx.font = '700 ' + fs + 'px ' + "'Noto Sans TC',sans-serif";
    }
  }

  function drawInlineRadar(scores) {
    var canvas = document.getElementById('radar');
    if (!canvas) return;
    var dpr = window.devicePixelRatio || 1;
    var size = 380;
    canvas.width = size * dpr; canvas.height = size * dpr;
    canvas.style.width = '100%'; canvas.style.maxWidth = '360px';
    var ctx = canvas.getContext('2d');
    function go() {
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      ctx.clearRect(0, 0, size, size);
      drawRadar(ctx, size / 2, size / 2, size / 2 - 52, scores, { labelSize: 14 });
    }
    if (document.fonts && document.fonts.ready) { document.fonts.ready.then(go); go(); }
    else go();
  }

  // ---- 下載分享卡(1080×1080 PNG) ----
  function downloadCard(r, idea) {
    var S = 1080;
    var cv = document.createElement('canvas');
    cv.width = S; cv.height = S;
    var ctx = cv.getContext('2d');
    var host = (window.PAIN_SITE || location.host).replace(/^https?:\/\//, '');

    function paint() {
      ctx.fillStyle = C.paper; ctx.fillRect(0, 0, S, S);
      ctx.strokeStyle = C.gold; ctx.lineWidth = 6; ctx.strokeRect(28, 28, S - 56, S - 56);
      ctx.textAlign = 'center';
      ctx.fillStyle = C.ink; ctx.font = '900 86px ' + "'Noto Sans TC',sans-serif";
      ctx.fillText('痛　點', S / 2, 150);
      ctx.fillStyle = C.goldInk; ctx.font = '700 30px ' + "'Noto Sans TC',sans-serif";
      ctx.fillText('P · A · I · N　點子體檢', S / 2, 200);
      if (idea) {
        ctx.fillStyle = C.inkSoft; ctx.font = '400 34px ' + "'Noto Serif TC',serif";
        var line = idea.length > 24 ? idea.slice(0, 23) + '…' : idea;
        ctx.fillText('「' + line + '」', S / 2, 256);
      }
      drawRadar(ctx, S / 2, 600, 235, r.scores, { labelSize: 30 });
      ctx.fillStyle = C.grey; ctx.font = '500 26px ' + "'Noto Sans TC',sans-serif";
      ctx.fillText('動手前先問:這個點子,值不值得做。', S / 2, 980);
      ctx.fillStyle = C.goldInk; ctx.font = '700 26px ' + "'Noto Sans TC',sans-serif";
      ctx.fillText(host, S / 2, 1024);
    }

    function save() {
      paint();
      var a = document.createElement('a');
      a.download = '痛點-點子體檢.png';
      a.href = cv.toDataURL('image/png');
      a.click();
    }
    // 等字型就緒再畫,避免中文用到 fallback 字體
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(save);
    else save();
  }

  function escapeHtml(s) {
    return s.replace(/[&<>"']/g, function (c) {
      return { '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;' }[c];
    });
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
