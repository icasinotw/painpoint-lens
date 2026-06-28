<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '從這裡開始｜第一次來痛點 P.A.I.N.,我幫你指路',
  'desc'  => '第一次來不知道從哪開始?一頁幫你指路:還沒有點子,先用七天練眼養眼力;已經有點子,順著出門找痛 → 點子體檢 → 拆書 → 試讀走一遍。全部免費、不登入、不上傳。',
  'path'  => '/start',
  'schema' => [
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',     'path' => '/'],
      ['name' => '從這裡開始', 'path' => '/start'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap section">

  <div class="section-head">
    <p class="eyebrow">從這裡開始</p>
    <h1 class="h-display" style="font-size:clamp(1.9rem,4.5vw,2.6rem)">第一次來?三十秒,我幫你指路</h1>
    <p class="lead" style="margin-inline:auto;max-width:44ch">先問自己一句:你手上,有沒有一個想拿來創業的點子?有或沒有,下面各有一條路——每一步都連到站上現成的免費頁面,不登入、不上傳。</p>
  </div>

  <!-- 分岔 ① 還沒有點子 -->
  <div class="section-head" style="margin:0 auto 22px">
    <p class="eyebrow">還在找,沒有點子</p>
    <h2 class="h-display" style="font-size:1.45rem;margin:0">先養一雙看得見痛點的眼睛</h2>
  </div>
  <div class="read-list">
    <a class="read-item" href="/eye">
      <span class="ri-kicker">先練眼</span>
      <h3>七天練眼</h3>
      <p>好點子多半在路上撞見,不是在房間裡想出來。一天一格、零門檻,七天養出一雙會「看」的眼睛。撞見了,再回來走下面那條路。</p>
    </a>
  </div>

  <!-- 分岔 ② 已經有點子 -->
  <div class="section-head" style="margin:56px auto 22px">
    <p class="eyebrow">有了,但還沒驗證</p>
    <h2 class="h-display" style="font-size:1.45rem;margin:0">動手兩步,把「我猜」磨成「我確定」</h2>
  </div>
  <div class="read-list">
    <a class="read-item" href="/fieldkit">
      <span class="ri-kicker">第 1 步</span>
      <h3>出門找痛</h3>
      <p>先別動手。帶一張清單出門,確認真有一群人在為這事付代價——不是只有你自己痛。</p>
    </a>
    <a class="read-item" href="/tool">
      <span class="ri-kicker">第 2 步</span>
      <h3>點子體檢</h3>
      <p>把現場帶回來的真資料,30 秒跑一張雷達圖,看你的點子最弱在 P、A、I、N 哪一格。</p>
    </a>
  </div>

  <!-- 想更深(延伸,不編號) -->
  <div class="section-head" style="margin:44px auto 16px">
    <p class="eyebrow">想更深(延伸)</p>
    <h2 class="h-display" style="font-size:1.18rem;margin:0">看這把尺怎麼用,或讀整套方法</h2>
  </div>
  <div class="read-list">
    <a class="read-item" href="/lens">
      <span class="ri-kicker">看範例</span>
      <h3>痛點之尺・拆書</h3>
      <p>想看這把尺實際怎麼用?挑幾篇,看它怎麼一格一格拆你聽過的經典商業書。</p>
    </a>
    <a class="read-item" href="/read">
      <span class="ri-kicker">讀整套</span>
      <h3>免費試讀</h3>
      <p>想要整套方法,先免費讀前言和第一章——不留 email、不擋入口,手機也好讀。</p>
    </a>
  </div>

  <p class="center" style="margin-top:18px;font-size:.96rem"><a href="/book">想要完整版隨身帶 →</a></p>

  <p class="center muted" style="margin-top:40px;max-width:40ch;margin-inline:auto">核心就這幾步,全部免費。先動一步,比在房間裡想一個月有用。</p>

</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
