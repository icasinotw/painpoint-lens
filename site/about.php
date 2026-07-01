<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '關於痛點 P.A.I.N.｜作者山姆（謝冠生）・喵喵書評創辦人',
  'desc'  => '痛點 P.A.I.N. 是誰做的、為什麼做。作者山姆(謝冠生),喵喵書評創辦人——一個還在賠錢、把方法誠實攤開的創業者。',
  'path'  => '/about',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁', 'path' => '/'],
      ['name' => '關於', 'path' => '/about'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap-read" style="padding-block:48px 64px">
  <p class="eyebrow">關於</p>
  <h1 class="h-display" style="font-size:2rem">這個站是誰做的、為什麼做</h1>

  <div class="author-card" style="display:flex;align-items:center;gap:18px;margin:20px 0 28px;padding:16px 18px;background:var(--paper-2);border:1px solid var(--line);border-radius:var(--radius)">
    <img src="/assets/img/author.jpg?v=1" alt="痛點 P.A.I.N. 作者 山姆(謝冠生),喵喵書評創辦人"
         width="96" height="96" loading="lazy" decoding="async"
         style="width:96px;height:96px;flex:0 0 auto;border-radius:50%;object-fit:cover;border:2.5px solid var(--gold);box-shadow:var(--shadow)">
    <div>
      <strong style="display:block;font-size:1.06rem;color:var(--ink)"><?= e($cfg['author']) ?></strong>
      <span class="muted" style="font-size:.94rem"><?= e($cfg['author_role']) ?></span>
    </div>
  </div>

  <div class="reading" style="font-size:1.05rem;line-height:1.95;padding-block:8px">
    <p><strong>痛點 P.A.I.N.</strong> 是一本書,也是一個免費工具。它要回答一個問題:你手上那個技能或興趣,值不值得拿來創業?</p>

    <h2>作者</h2>
    <p><strong><?= e($cfg['author']) ?></strong>，<?= e($cfg['author_role']) ?>。</p>
    <p>創業十五年,我讀了快一千本商業書;然後親手創了「喵喵書評」——一個幫人挑好書、避開爛書的平台。結果書裡第一章就警告「千萬別犯」的錯,我幾乎一個不漏全踩了一遍,四年燒掉近五百萬。</p>
    <p>我不是站在山頂上跟你揮手的成功者。寫下這段話的此刻,喵喵書評還在虧錢。正因為我還在現場、傷口還沒結痂,我講的每一個坑都是真的——這也是這本書唯一抄不走的東西。</p>

    <h2>你可以查證我是真的存在的人</h2>
    <p>我的個人頁在這裡:<a href="https://meowbooks.tw/user/@sambooks" target="_blank" rel="noopener">meowbooks.tw/user/@sambooks</a>。有任何問題,寫信給我:<a href="mailto:<?= e($cfg['contact_email']) ?>"><?= e($cfg['contact_email']) ?></a>。</p>
    <p>也可以在這些地方找到我:<a href="https://www.instagram.com/meowbookstw" target="_blank" rel="me noopener">Instagram</a>、<a href="https://www.facebook.com/meowbooks.tw" target="_blank" rel="me noopener">Facebook</a>、<a href="https://www.linkedin.com/in/sam-seo/" target="_blank" rel="me noopener">LinkedIn</a>。</p>

    <h2>我給你什麼、不給你什麼</h2>
    <p>我給你的是<strong>一套可以反覆使用的方法 + 新的眼光</strong>,讓你開始認真審視「我手上的東西,哪一個值得拿來創業」。</p>
    <p>我<strong>不</strong>給你保證成功的公式——那種東西不存在,誰跟你說有,你要小心。這個站、這本書、這個工具,提供的是方法與啟發,不是成功保證。</p>

    <p style="margin-top:26px">想先試試看?<a href="/tool">免費體檢一個你的點子 →</a></p>
  </div>
  <p style="margin-top:30px"><a class="btn btn-ghost" href="/">← 回首頁</a></p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
