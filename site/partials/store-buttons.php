<?php
/* 電子書通路導購按鈕,排序:Kobo → 讀墨 Readmoo → Google Play → Pubu,各自用品牌色 + 官方標誌。
   ✅ Kobo、Pubu 已上架,鈕已接真連結(2026-06-29)。
   ⚠️ 讀墨 Readmoo、Google Play 仍送審中,維持 disabled。
   ✅ 上架完成、拿到商品頁網址後,每個鈕只要一步:
      把 <button …> 換成 <a href="商品頁網址" target="_blank" rel="noopener">…</a> 並移除 disabled / aria-disabled。
   icon 圖:store-kobo.png(Rakuten R)、store-readmoo.png(rm)、store-google.png(Play三角)、store-pubu.png(橘P) */
?>
<div class="store-buttons" style="margin-top:26px">
  <p class="eyebrow" style="margin-bottom:12px">在這些電子書平台買得到</p>
  <div class="btn-row">
    <a href="https://www.kobo.com/tw/zh/ebook/p-a-i-n-4" target="_blank" rel="noopener" class="store-btn store-btn--kobo" aria-label="在 Kobo 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-kobo.png?v=2" alt="Kobo" width="73" height="80" loading="lazy" decoding="async"></span>
      <span>Kobo 電子書</span>
    </a>
    <button type="button" class="store-btn store-btn--readmoo" disabled aria-disabled="true" aria-label="在 讀墨 電子書購買(送審中)">
      <span class="store-btn__ico"><img src="/assets/img/store-readmoo.png?v=2" alt="讀墨 Readmoo" width="88" height="80" loading="lazy" decoding="async"></span>
      <span>讀墨 電子書</span>
    </button>
    <button type="button" class="store-btn store-btn--google" disabled aria-disabled="true" aria-label="在 Google Play 電子書購買(送審中)">
      <span class="store-btn__ico"><img src="/assets/img/store-google.png?v=1" alt="Google Play 電子書" width="75" height="80" loading="lazy" decoding="async"></span>
      <span>Google Play 電子書</span>
    </button>
    <a href="https://www.pubu.com.tw/ebook/677526" target="_blank" rel="noopener" class="store-btn store-btn--pubu" aria-label="在 Pubu 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-pubu.png?v=1" alt="Pubu" width="80" height="80" loading="lazy" decoding="async"></span>
      <span>Pubu 電子書</span>
    </a>
  </div>
</div>
