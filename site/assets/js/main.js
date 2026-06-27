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
