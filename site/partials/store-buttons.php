<?php
/* 電子書通路導購按鈕(Kobo / 讀墨 Readmoo),各自用品牌色 + 官方 favicon。
   ⚠️ 真連結還沒到(Kobo 審核中、讀墨送審中):按鈕暫為 disabled,點不下去。
   ✅ 上架完成、拿到商品頁網址後,每個鈕只要兩步:
      ① 把 <button …> 換成 <a href="商品頁網址" target="_blank" rel="noopener">…</a>
      ② 移除 disabled / aria-disabled,並把下方那行「連結整理中」<p class="store-soon"> 刪掉。
   icon 圖:/assets/img/store-kobo.png(Rakuten R)、/assets/img/store-readmoo.png(rm) */
?>
<div class="store-buttons" style="margin-top:26px">
  <p class="eyebrow" style="margin-bottom:12px">在這些電子書平台買得到</p>
  <div class="btn-row">
    <button type="button" class="store-btn store-btn--kobo" disabled aria-disabled="true" aria-label="在 Kobo 電子書購買(連結整理中)">
      <span class="store-btn__ico"><img src="/assets/img/store-kobo.png?v=2" alt="Kobo" width="73" height="80" loading="lazy" decoding="async"></span>
      <span>Kobo 電子書</span>
    </button>
    <button type="button" class="store-btn store-btn--readmoo" disabled aria-disabled="true" aria-label="在 讀墨 電子書購買(連結整理中)">
      <span class="store-btn__ico"><img src="/assets/img/store-readmoo.png?v=2" alt="讀墨 Readmoo" width="88" height="80" loading="lazy" decoding="async"></span>
      <span>讀墨 電子書</span>
    </button>
  </div>
  <p class="store-soon muted" style="margin-top:10px;font-size:.86rem">購買連結整理中,通路一上架就會立刻開通。</p>
</div>
