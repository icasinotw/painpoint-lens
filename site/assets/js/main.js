/* 共用前端:行動版選單開合 */
(function () {
  var toggle = document.querySelector('.nav-toggle');
  var links = document.querySelector('.nav-links');
  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var open = links.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    links.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        links.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  /* 首頁全書精華:手風琴卡展開/收合 */
  var accs = document.querySelectorAll('.ess-wrap .acc');
  [].forEach.call(accs, function (acc) {
    var head = acc.querySelector('.acc-head');
    if (!head) return;
    head.addEventListener('click', function () {
      var open = acc.classList.toggle('open');
      head.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });

  /* 對外連結一律另開視窗(站內連結不動) */
  var host = window.location.hostname;
  [].forEach.call(document.querySelectorAll('a[href]'), function (a) {
    var href = a.getAttribute('href') || '';
    // 只處理帶協定的絕對網址(http/https/協定相對 //),且主機不是本站
    if (!/^(https?:)?\/\//i.test(href)) return;
    if (a.hostname === host) return;
    a.setAttribute('target', '_blank');
    var rel = (a.getAttribute('rel') || '').split(/\s+/).filter(Boolean);
    if (rel.indexOf('noopener') === -1) rel.push('noopener');
    if (rel.indexOf('noreferrer') === -1) rel.push('noreferrer');
    a.setAttribute('rel', rel.join(' '));
  });

  /* 區塊捲入動畫 */
  var ups = document.querySelectorAll('.reveal-up');
  if (ups.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (es) {
      es.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -6% 0px' });
    [].forEach.call(ups, function (u) { io.observe(u); });
  } else {
    [].forEach.call(ups, function (u) { u.classList.add('in'); });
  }
})();
