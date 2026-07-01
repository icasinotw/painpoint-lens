<?php
/* 電子書通路導購按鈕,2 欄排列,排序:Kobo → 讀墨 Readmoo → Pubu → Google,各自用品牌色 + 官方標誌。
   ✅ Kobo、Pubu、讀墨 Readmoo 已上架,鈕已接真連結(讀墨 2026-07-01 接上)。
   ⚠️ Google 仍送審中,維持 disabled。
   ✅ 上架完成、拿到商品頁網址後,每個鈕只要一步:
      把 <button …> 換成 <a href="商品頁網址" target="_blank" rel="noopener">…</a> 並移除 disabled / aria-disabled。
      ★ 同時更新下方「陸續上架中」那句(.store-soon):把已上架的平台名拿掉;全上架了就整句刪除。
   icon 圖:store-kobo.png(Rakuten R)、store-readmoo.png(rm)、store-pubu.png(橘P)、store-google.png(Play三角) */
?>
<div class="store-buttons" style="margin-top:26px">
  <p class="eyebrow" style="margin-bottom:12px">在這些電子書平台買得到</p>
  <div class="btn-row">
    <a href="https://www.kobo.com/tw/zh/ebook/p-a-i-n-4" target="_blank" rel="noopener" class="store-btn store-btn--kobo" aria-label="在 Kobo 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-kobo.png?v=2" alt="Kobo" width="73" height="80" loading="lazy" decoding="async"></span>
      <span>Kobo 電子書</span>
    </a>
    <a href="https://readmoo.com/book/210484076000101" target="_blank" rel="noopener" class="store-btn store-btn--readmoo" aria-label="在 讀墨 Readmoo 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-readmoo.png?v=2" alt="讀墨 Readmoo" width="88" height="80" loading="lazy" decoding="async"></span>
      <span>讀墨 電子書</span>
    </a>
    <a href="https://www.pubu.com.tw/ebook/677526" target="_blank" rel="noopener" class="store-btn store-btn--pubu" aria-label="在 Pubu 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-pubu.png?v=1" alt="Pubu" width="80" height="80" loading="lazy" decoding="async"></span>
      <span>Pubu 電子書</span>
    </a>
    <button type="button" class="store-btn store-btn--google" disabled aria-disabled="true" aria-label="在 Google 電子書購買(送審中)">
      <span class="store-btn__ico"><img src="/assets/img/store-google.png?v=1" alt="Google 電子書" width="75" height="80" loading="lazy" decoding="async"></span>
      <span>Google 電子書</span>
    </button>
  </div>
  <p class="store-soon" style="margin:12px 0 0;font-size:.85rem;color:var(--muted,#8a8275)">Google 電子書 陸續上架中</p>
</div>
