<?php
require __DIR__ . '/_init.php';
$page = [
  'title' => '痛點 P.A.I.N.｜動手前先問:這個點子,值不值得做',
  'desc'  => $cfg['desc'],
  'path'  => '/',
  'schema' => [ pain_website($cfg), pain_person($cfg) ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main>

  <!-- HERO -->
  <section class="hero wrap">
    <p class="wordmark">痛　點</p>
    <p class="pain-line">P · A · I · N</p>
    <h1>你已經有一技之長或一個熱愛的興趣。<br>下一個問題是:它,值不值得拿來創業?</h1>
    <p class="sub">用「痛點」這把尺,一步步檢視你手上的點子——從看見痛、驗證痛,到收到第一筆錢。</p>
    <div class="btn-row" style="justify-content:center">
      <a class="btn btn-primary btn-lg" href="/tool">免費體檢我的點子 →</a>
      <a class="btn btn-ghost btn-lg" href="/read">先讀一章免費試讀</a>
    </div>
    <p class="center" style="margin-top:14px"><a class="hero-start" href="/start">第一次來?三十秒,我幫你指路 →</a></p>
    <p class="honest">作者是一個還在賠錢的創業者。四年,近五百萬,換來這四個問題——<b>先免費送你。</b></p>
  </section>

  <!-- 這也是一本書:電子書 showcase(對齊 /book 的完整呈現) -->
  <section class="wrap home-book">
    <div class="book-cta">
      <a class="book-cover" href="/book" aria-label="《痛點 P.A.I.N.》電子書上市了,看介紹">
        <picture>
          <source srcset="/assets/img/cover-ebook.webp?v=1" type="image/webp">
          <img src="/assets/img/cover-ebook.jpg?v=1" alt="《痛點 P.A.I.N.》電子書封面" width="1600" height="2400" loading="lazy" decoding="async">
        </picture>
      </a>
      <div>
        <p class="eyebrow">電子書・上市了</p>
        <h2 class="h-display" style="font-size:2rem;margin:.1em 0 .45em">痛點 P.A.I.N.</h2>
        <p class="muted" style="margin-top:0">不保證你成功,只用近五百萬換來的一把尺:判斷一個點子值不值得做、看出誰真的在痛、動手做到第一筆錢。</p>
        <div style="margin:16px 0 22px"><?php require __DIR__ . '/partials/author-byline.php'; ?></div>
        <ul class="checklist">
          <li><strong>第一部・尺</strong>:端出整把 P·A·I·N,判斷一個點子到底值不值得做(帶走判斷卡)</li>
          <li><strong>第二部・眼睛</strong>:深耕 P·A,用五格濾鏡看見真痛、篩掉自己騙自己的「我猜」(帶走濾鏡卡)</li>
          <li><strong>第三部・手</strong>:深耕 I·N,沿越賭越大的五階樓梯,動手走到第一筆錢(帶走動手卡)</li>
          <li>一條真實主線——一個還在賠錢的創業者,把每個坑帶血演一遍,以及本來該怎麼做</li>
        </ul>
        <?php require __DIR__ . '/partials/store-buttons.php'; ?>
      </div>
    </div>
  </section>

  <!-- 三個免費工具:沿著《痛點》的順序,把點子推近真實創業 -->
  <section class="wrap home-tools">
    <div class="section-head">
      <p class="eyebrow">三個免費工具</p>
      <h2 class="h-display">從還沒有點子,到走出門驗證</h2>
      <p class="muted">不登入、不上傳。沿著《痛點》的順序——先看見痛、再驗證痛、再判斷值不值得做。</p>
    </div>
    <div class="home-tool-grid">
      <a class="home-tool-card" href="/eye">
        <span class="htc-step">還沒有點子</span>
        <h3>七天練眼</h3>
        <p>一天一格,在日常生活裡養出一雙看得見痛點的眼睛。</p>
        <span class="htc-go">開始練眼 →</span>
      </a>
      <a class="home-tool-card" href="/fieldkit">
        <span class="htc-step">有了點子,走出門</span>
        <h3>出門找痛</h3>
        <p>帶這張清單去現場——用看的找指紋、用問的問真話,把「我猜」換成「我看到了」。</p>
        <span class="htc-go">免費下載清單 →</span>
      </a>
      <a class="home-tool-card" href="/tool">
        <span class="htc-step">回室內判斷</span>
        <h3>點子體檢</h3>
        <p>把現場帶回來的真資料,做一次 30 秒體檢,一張雷達圖看點子最弱在哪。</p>
        <span class="htc-go">免費體檢 →</span>
      </a>
    </div>
  </section>

  <!-- 全書精華:五大區塊・Gamma 風格可展開卡(自動產生,內容來源 build/痛點-精華.md) -->
  <?php require __DIR__ . '/partials/home-essence.php'; ?>

</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
