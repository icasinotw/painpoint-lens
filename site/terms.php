<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '服務條款｜痛點 P.A.I.N.',
  'desc'  => '痛點 P.A.I.N. 免費工具、免費試讀與《痛點》電子書的使用條款:使用範圍、智慧財產權與免責。',
  'path'  => '/terms',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap-read" style="padding-block:48px 64px">
  <p class="eyebrow">服務條款</p>
  <h1 class="h-display" style="font-size:2rem">服務條款</h1>
  <div class="reading" style="font-size:1.05rem;line-height:1.95;padding-block:8px">
    <p>歡迎使用痛點 P.A.I.N.（本網站）。當你使用本站工具、免費試讀,或留下 email,即表示同意以下條款。最後更新:2026 年 6 月 23 日。</p>

    <h2>一、本站提供什麼</h2>
    <p>本站提供<strong>免費的「點子體檢」工具</strong>與<strong>免費試讀章節</strong>,供你自由使用與閱讀;以及一份你可自由訂閱、隨時退訂的 email 名單(痛點電子報與新書消息)。<strong>本站不在站上販售商品、不在站上收款。</strong></p>

    <h2>二、《痛點》電子書</h2>
    <p>《痛點 P.A.I.N.》為<strong>電子書</strong>,於各大電子書平台販售。電子書的下單、付款與退款,均依你購買的<strong>該平台規定</strong>辦理,本站不經手款項。</p>

    <h2>三、智慧財產權</h2>
    <p>本站工具、免費試讀章節與《痛點》書籍之內容,其著作權與相關智慧財產權均屬作者所有。免費內容供你個人閱讀與使用,除非另行書面同意,<strong>請勿</strong>轉售、出租、散布、公開上傳、或以任何形式重製給第三人。</p>

    <h2>四、免責聲明</h2>
    <p>本書與工具提供的是<strong>方法、觀念與啟發,不保證任何創業成果或特定收益</strong>。每個人的情況不同,實際結果取決於你自己的執行與市場。書中案例與工具結果僅供參考,不構成投資、法律或財務建議。</p>

    <h2>五、退費與退換貨</h2>
    <p>本站不直接收款;電子書的退款依購買平台規定辦理,另見<a href="/refund">退費政策</a>。</p>

    <h2>六、條款修訂與準據法</h2>
    <p>本站得隨時更新本條款,更新後以網站公告版本為準。本條款以中華民國法律為準據法;如有爭議,雙方同意以台灣台北地方法院為第一審管轄法院。</p>

    <h2>七、聯絡</h2>
    <p>對條款有疑問,請來信 <a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a>。</p>
  </div>
  <p style="margin-top:30px"><a class="btn btn-ghost" href="/">← 回首頁</a></p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
