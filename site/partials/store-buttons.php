<?php
/* 電子書通路導購按鈕(Kobo / Pubu / Google Play / 讀墨 Readmoo),各自用品牌色 + 官方標誌。
   ✅ Kobo、Pubu 已上架,鈕已接真連結(2026-06-29)。
   ⚠️ Google Play 圖書、讀墨 Readmoo 仍送審中,維持 disabled。
   ✅ 上架完成、拿到商品頁網址後,每個鈕只要兩步:
      ① 把 <button …> 換成 <a href="商品頁網址" target="_blank" rel="noopener">…</a>
      ② 移除 disabled / aria-disabled;等所有通路都開通後,再把下方「送審中」<p class="store-soon"> 刪掉。
   icon 圖:store-kobo.png(Rakuten R)、store-pubu.png(橘P)、store-google.png(Play三角)、store-readmoo.png(rm) */
?>
<div class="store-buttons" style="margin-top:26px">
  <p class="eyebrow" style="margin-bottom:12px">在這些電子書平台買得到</p>
  <div class="btn-row">
    <a href="https://www.kobo.com/tw/zh/ebook/p-a-i-n-4" target="_blank" rel="noopener" class="store-btn store-btn--kobo" aria-label="在 Kobo 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-kobo.png?v=2" alt="Kobo" width="73" height="80" loading="lazy" decoding="async"></span>
      <span>Kobo 電子書</span>
    </a>
    <a href="https://www.pubu.com.tw/ebook/677526" target="_blank" rel="noopener" class="store-btn store-btn--pubu" aria-label="在 Pubu 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-pubu.png?v=1" alt="Pubu" width="80" height="80" loading="lazy" decoding="async"></span>
      <span>Pubu 電子書</span>
    </a>
    <button type="button" class="store-btn store-btn--google" disabled aria-disabled="true" aria-label="在 Google Play 圖書購買(送審中)">
      <span class="store-btn__ico"><img src="/assets/img/store-google.png?v=1" alt="Google Play 圖書" width="75" height="80" loading="lazy" decoding="async"></span>
      <span>Google Play 圖書</span>
    </button>
    <button type="button" class="store-btn store-btn--readmoo" disabled aria-disabled="true" aria-label="在 讀墨 電子書購買(送審中)">
      <span class="store-btn__ico"><img src="/assets/img/store-readmoo.png?v=2" alt="讀墨 Readmoo" width="88" height="80" loading="lazy" decoding="async"></span>
      <span>讀墨 電子書</span>
    </button>
  </div>
  <p class="store-soon muted" style="margin-top:10px;font-size:.86rem">Google Play 圖書、讀墨 Readmoo 版本送審中,一上架就會立刻開通。</p>
</div>
