<?php /* 站台頁尾 + 作者署名 + 收尾 </body> */ ?>
<footer class="site-footer">
  <div class="wrap footer-grid">
    <div class="footer-brand">
      <span class="brand-mark">痛點</span>
      <span class="brand-pain">P·A·I·N</span>
      <p class="footer-tag"><?= e($cfg['tagline']) ?></p>
    </div>
    <nav class="footer-nav">
      <a href="/tool">點子體檢工具</a>
      <a href="/fieldkit">出門找痛(實地清單)</a>
      <a href="/eye">七天練眼</a>
      <a href="/read">免費試讀</a>
      <a href="/lens">痛點之尺·拆書</a>
      <a href="/ask">痛點之尺·拆問題</a>
      <a href="/guide">創業指南</a>
      <a href="/book">電子書</a>
      <a href="/about">關於</a>
      <a href="/contact">聯絡我們</a>
      <a href="/privacy">隱私權政策</a>
      <a href="/terms">服務條款</a>
      <a href="/refund">退費政策</a>
    </nav>
    <div class="footer-author">
      <p class="footer-by"><a href="/about"><?= e($cfg['author']) ?></a></p>
      <p class="footer-role"><?= e($cfg['author_role']) ?></p>
    </div>
  </div>
  <div class="wrap footer-fine">
    <p>© <?= date('Y') ?> <?= e($cfg['author']) ?>．本工具與書提供方法與啟發,不保證創業成功。</p>
  </div>
</footer>

<script src="/assets/js/main.js?v=2" defer></script>
</body>
</html>
