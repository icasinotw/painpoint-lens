<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '退費政策｜痛點 P.A.I.N.',
  'desc'  => '痛點 P.A.I.N. 退費與退換貨政策:本站不在站上收款,免費工具與試讀免費;《痛點》電子書於各大電子書平台購買,退款依該平台規定;email 名單隨時可退訂。',
  'path'  => '/refund',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap-read" style="padding-block:48px 64px">
  <p class="eyebrow">退費政策</p>
  <h1 class="h-display" style="font-size:2rem">退費與退換貨</h1>
  <div class="reading" style="font-size:1.05rem;line-height:1.95;padding-block:8px">
    <p>寫得白話、不玩文字遊戲。最後更新:2026 年 6 月 23 日。</p>

    <h2>一、本站不在站上收款</h2>
    <p>本站的「點子體檢」工具與免費試讀章節<strong>完全免費</strong>,沒有付費機制,也不會在站上跟你收任何錢。</p>

    <h2>二、《痛點》電子書</h2>
    <p>《痛點 P.A.I.N.》為<strong>電子書</strong>,於 Kobo、讀墨 Readmoo 等電子書平台販售。電子書的付款與退款,請依你購買的<strong>該平台退款規定</strong>辦理(各平台對數位內容多有自己的退款條件與期限);本站不經手款項,無法代為退款。若檔案有毀損或無法開啟,也歡迎來信讓我知道。</p>

    <h2>三、email 名單與電子報</h2>
    <p>你留下的 email(電子報、新書消息)<strong>隨時可退訂</strong>:每封信底部都有一鍵退訂,或寫信給我們要求刪除。</p>

    <h2>四、有問題找我</h2>
    <p>任何問題,寫信到 <a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a>,通常 1–2 個工作日內回覆。</p>

    <p style="margin-top:24px" class="muted">想先確認合不合你胃口,可以先<a href="/read">免費試讀</a>,或<a href="/contact">聯絡我們</a>。</p>
  </div>
  <p style="margin-top:30px"><a class="btn btn-ghost" href="/">← 回首頁</a></p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
