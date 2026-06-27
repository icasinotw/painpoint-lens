<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '隱私權政策｜痛點 P.A.I.N.',
  'desc'  => '痛點 P.A.I.N. 如何蒐集、使用與保護你的個人資料(email、瀏覽與使用紀錄):本站不在站上收款、不蒐集付款資料,email 名單隨時可退訂。',
  'path'  => '/privacy',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap-read" style="padding-block:48px 64px">
  <p class="eyebrow">隱私權政策</p>
  <h1 class="h-display" style="font-size:2rem">我們怎麼處理你的資料</h1>
  <div class="reading" style="font-size:1.05rem;line-height:1.95;padding-block:8px">
    <p>這份政策說明「痛點 P.A.I.N.」(本網站)如何蒐集、使用與保護你的個人資料。我們盡量只收必要的、誠實地用它。最後更新:2026 年 6 月 23 日。</p>

    <h2>一、我們蒐集什麼</h2>
    <p><strong>你主動提供的 email：</strong>當你為了匯出 PDF、儲存多個點子或把報告寄到信箱而留下 email 時,我們會記錄它。<br>
    <strong>少量技術資料：</strong>送出表單時的 IP 位址(僅用於防止濫用與流量限制)與時間。<br>
    <strong>不蒐集的：</strong>你在「點子體檢」工具裡填的點子內容與答案,<strong>只存在你自己這台裝置的瀏覽器</strong>(localStorage),不會上傳到我們的伺服器,除非你按下「儲存/寄送」並同意留下 email——即使如此,我們也只會儲存你的 email 與(若你選擇)一行點子摘要,不會儲存你全部的作答。</p>

    <h2>二、我們用來做什麼</h2>
    <p>寄送你要求的體檢結果;寄送「痛點電子報」(動手前先想清楚的方法與真實案例);以及偶爾分享《痛點》電子書的消息與更新。僅此而已。我們<strong>不會販售或出租</strong>你的個資給第三方。</p>

    <h2>三、第三方服務</h2>
    <p><strong>Kit（ConvertKit）：</strong>我們用它管理名單與寄送電子報;你的 email 會儲存在 Kit,它有自己的隱私政策。</p>
    <p><strong>Google Analytics：</strong>我們使用 Google 提供的網站流量分析服務,了解哪些頁面較多人看、訪客從哪裡來,用來改善內容。它會透過 Cookie 蒐集<strong>匿名化</strong>的使用與裝置資料,這些資料由 Google 處理、適用 Google 的隱私權政策。你可以安裝 Google 官方的「Google Analytics（分析）停用瀏覽器外掛程式」來停止被統計。</p>
    <p><strong>付款資料：</strong>本站不在站上收款,也不蒐集你的信用卡或付款資料(電子書的付款在你購買的電子書平台完成,與本站分開)。</p>
    <p><strong>跨境傳輸：</strong>Kit 與 Google 的伺服器位於國外,因此你提供的資料可能被傳輸至我國境外處理與儲存。</p>

    <h2>四、你的權利</h2>
    <p>依《個人資料保護法》,你可以隨時查詢、請求閱覽、補充更正、或要求刪除你的個資。每封電子報底部都有<strong>一鍵退訂</strong>;要刪除資料或行使其他權利,寫信給我們即可:<a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a>。</p>

    <h2>五、資料保存與安全</h2>
    <p>我們以合理的技術與管理措施保護你的資料,並只在達成上述目的所需的期間內保存。你退訂或要求刪除後,我們會在合理時間內移除。</p>

    <h2>六、Cookie 與本機儲存</h2>
    <p>本站用到兩種:(1) 瀏覽器的 <strong>localStorage</strong>——記住你的閱讀字級、體檢進度與儲存的點子,只留在你的裝置上、不會上傳;(2) <strong>Google Analytics 的分析型 Cookie</strong>——用於匿名統計網站流量(見第三條)。本站<strong>未使用</strong>第三方廣告或再行銷追蹤。</p>

    <h2>七、聯絡我們</h2>
    <p>對這份政策有任何疑問,或想行使你的權利,請聯絡:<br>
    <?= e($cfg['author']) ?>(<?= e($cfg['author_role']) ?>)<br>
    <a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a></p>
  </div>
  <p style="margin-top:30px"><a class="btn btn-ghost" href="/">← 回首頁</a></p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
