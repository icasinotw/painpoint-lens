<?php
/* 電子書通路導購按鈕(Kobo / 讀墨 Readmoo),各自用品牌色 + 官方 favicon。
   ✅ Kobo 已上架,鈕已接真連結(2026-06-29)。⚠️ 讀墨 Readmoo 仍送審中,維持 disabled。
   ✅ 上架完成、拿到商品頁網址後,每個鈕只要兩步:
      ① 把 <button …> 換成 <a href="商品頁網址" target="_blank" rel="noopener">…</a>
      ② 移除 disabled / aria-disabled;等所有通路都開通後,再把下方「連結整理中」<p class="store-soon"> 刪掉。
   icon 圖:/assets/img/store-kobo.png(Rakuten R)、/assets/img/store-readmoo.png(rm) */
?>
<div class="store-buttons" style="margin-top:26px">
  <p class="eyebrow" style="margin-bottom:12px">在這些電子書平台買得到</p>
  <div class="btn-row">
    <a href="https://www.kobo.com/tw/zh/ebook/p-a-i-n-4" target="_blank" rel="noopener" class="store-btn store-btn--kobo" aria-label="在 Kobo 購買《痛點》電子書">
      <span class="store-btn__ico"><img src="/assets/img/store-kobo.png?v=2" alt="Kobo" width="73" height="80" loading="lazy" decoding="async"></span>
      <span>Kobo 電子書</span>
    </a>
    <button type="button" class="store-btn store-btn--readmoo" disabled aria-disabled="true" aria-label="在 讀墨 電子書購買(連結整理中)">
      <span class="store-btn__ico"><img src="/assets/img/store-readmoo.png?v=2" alt="讀墨 Readmoo" width="88" height="80" loading="lazy" decoding="async"></span>
      <span>讀墨 電子書</span>
    </button>
  </div>
  <p class="store-soon muted" style="margin-top:10px;font-size:.86rem">讀墨 Readmoo 版本送審中,一上架就會立刻開通。</p>
</div>
