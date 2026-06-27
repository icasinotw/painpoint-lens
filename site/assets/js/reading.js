/* 免費試讀頁:字級調整 + 深色模式 + 閱讀進度條(全部記在這台裝置) */
(function () {
  'use strict';
  var SIZES = [
    { k: '小',   s: 0.9 },
    { k: '標準', s: 1.0 },
    { k: '大',   s: 1.16 },
    { k: '特大', s: 1.34 }
  ];
  var KEY_FS = 'painRead.fs', KEY_DARK = 'painRead.dark';
  var root = document.documentElement;
  var label = document.getElementById('fsLabel');

  var idx = 1;
  try { var v = parseInt(localStorage.getItem(KEY_FS), 10); if (!isNaN(v) && v >= 0 && v < SIZES.length) idx = v; } catch (e) {}

  function applyFS() {
    root.style.setProperty('--read-scale', SIZES[idx].s);
    if (label) label.textContent = SIZES[idx].k;
    try { localStorage.setItem(KEY_FS, idx); } catch (e) {}
  }
  applyFS();

  var up = document.getElementById('fsUp'), down = document.getElementById('fsDown');
  if (up) up.addEventListener('click', function () { idx = Math.min(SIZES.length - 1, idx + 1); applyFS(); });
  if (down) down.addEventListener('click', function () { idx = Math.max(0, idx - 1); applyFS(); });

  // 深色模式
  var dark = false;
  try { dark = localStorage.getItem(KEY_DARK) === '1'; } catch (e) {}
  function applyDark() {
    document.body.classList.toggle('read-dark', dark);
    var t = document.getElementById('themeToggle');
    if (t) { t.textContent = dark ? '☀' : '☾'; t.setAttribute('aria-label', dark ? '淺色模式' : '深色模式'); }
    try { localStorage.setItem(KEY_DARK, dark ? '1' : '0'); } catch (e) {}
  }
  applyDark();
  var toggle = document.getElementById('themeToggle');
  if (toggle) toggle.addEventListener('click', function () { dark = !dark; applyDark(); });

  // 閱讀進度條
  var bar = document.getElementById('readProgress');
  var article = document.querySelector('.reading');
  if (bar && article) {
    var tick = function () {
      var start = article.offsetTop, h = article.offsetHeight - window.innerHeight;
      var p = h > 0 ? (window.scrollY - start) / h : 0;
      bar.style.width = Math.max(0, Math.min(1, p)) * 100 + '%';
    };
    window.addEventListener('scroll', tick, { passive: true });
    window.addEventListener('resize', tick);
    tick();
  }
})();
