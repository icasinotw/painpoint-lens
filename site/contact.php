<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '聯絡我們｜痛點 P.A.I.N.',
  'desc'  => '對工具、免費試讀、《痛點》電子書或任何內容有問題,寫信給痛點 P.A.I.N.。內含防詐提醒。',
  'path'  => '/contact',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap-read" style="padding-block:48px 64px">
  <p class="eyebrow">聯絡我們</p>
  <h1 class="h-display" style="font-size:2rem">有問題,直接寫信給我</h1>
  <div style="margin:18px 0 6px"><?php require __DIR__ . '/partials/author-byline.php'; ?></div>
  <div class="reading" style="font-size:1.05rem;line-height:1.95;padding-block:8px">
    <p>對免費工具、免費試讀、《痛點》電子書,或書裡的內容有任何想法——都歡迎來信。</p>
    <p><strong>Email：</strong><a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a><br>
    <strong>回覆時間：</strong>通常 1–2 個工作日內回覆。</p>
    <p><strong>作者：</strong><?= e($cfg['author']) ?>（<?= e($cfg['author_role']) ?>）。你可以在 <a href="https://meowbooks.tw/user/@sambooks" target="_blank" rel="noopener">meowbooks.tw/user/@sambooks</a> 查證我的存在。</p>

    <div class="reading" style="background:var(--gold-soft);border-radius:14px;padding:18px 22px;margin-top:24px;font-size:1rem;line-height:1.85">
      <h2 style="margin-top:0;font-size:1.15rem">⚠️ 防詐提醒</h2>
      <p style="margin:0">本站<strong>不會在站上跟你收款</strong>,也<strong>不會</strong>用簡訊、LINE 或私訊要你「點連結退款」「重新付款」「升級 VIP」。《痛點》電子書請到正式上架的電子書平台購買。若收到可疑訊息,別點連結,先寫信跟我們確認,或撥打反詐騙專線 <strong>165</strong>。</p>
    </div>

    <p style="margin-top:26px">想先試試看?<a href="/tool">免費體檢一個你的點子 →</a></p>
  </div>
  <p style="margin-top:30px"><a class="btn btn-ghost" href="/">← 回首頁</a></p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
