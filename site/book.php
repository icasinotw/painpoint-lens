<?php
require __DIR__ . '/_init.php';
$faqs = [
  [
    'q' => '《痛點》電子書在哪裡買?有哪些平台?',
    'a' => '在 Kobo 和讀墨 Readmoo 買得到——這兩個是台灣讀電子書最常用的平台。挑你習慣的那一家就好,買一次,之後在那家的書櫃裡都看得到。',
  ],
  [
    'q' => '多少錢?',
    'a' => '定價 NT$199。各平台會以當地幣別顯示,金額相當。',
  ],
  [
    'q' => '用手機、電腦、電子閱讀器都能讀嗎?',
    'a' => '可以。檔案是通用的 EPUB,用平台的 App(手機、平板、電腦)或 Kobo 之類的閱讀器都能開,字級、亮度、深色模式都隨你調。',
  ],
  [
    'q' => '已經有免費工具和免費試讀了,為什麼還要買整本?',
    'a' => '免費工具是那把尺的「線上速算版」,試讀是開頭一段。整本書是把判斷、看見、動手三段,用一條真實主線——一個還在賠錢的創業者——從頭帶你走一遍,還附判斷卡、濾鏡卡、動手卡三張隨身卡,把方法收進你帶得走的東西裡。不買,免費的也夠你用;想要完整的那把尺,才需要這本。',
  ],
  [
    'q' => '買了之後想退怎麼辦?',
    'a' => '電子書的退款,依你購買的「那個平台」規定辦理(各平台對數位內容有自己的條件與期限);本站不經手款項。如果檔案有毀損或打不開,也歡迎直接來信讓我知道。',
  ],
];
$page = [
  'title' => '《痛點 P.A.I.N.》電子書上市 — 在各大電子書平台買得到',
  'desc'  => '《痛點 P.A.I.N.》電子書上市了。一個還在賠錢的創業者,把四年近五百萬的教訓誠實寫成 P.A.I.N. 四問:判斷一個點子值不值得做、看出誰真的在痛、動手做到第一筆錢。在 Kobo、讀墨 Readmoo 買得到。',
  'path'  => '/book',
  'schema' => [
    [
      // 註:不放 offers/price——本站不販售,電子書於各大電子書平台販售
      '@type'       => 'Book',
      '@id'         => pain_base($cfg) . '/book#book',
      'name'        => '痛點 P.A.I.N.',
      'url'         => pain_base($cfg) . '/book',
      'author'      => ['@id' => pain_base($cfg) . '/#person'],
      'inLanguage'  => 'zh-Hant-TW',
      'bookFormat'  => 'https://schema.org/EBook',
      'description' => '不保證你成功,只用近五百萬換來的一把尺:判斷一個點子值不值得做、看出誰真的在痛、動手做到第一筆錢。全書三部、共二十八章。',
      'image'       => pain_base($cfg) . '/assets/img/cover-ebook.jpg?v=1',
    ],
    [
      '@type'      => 'FAQPage',
      '@id'        => pain_base($cfg) . '/book#faq',
      'mainEntity' => array_map(function ($f) {
        return [
          '@type'          => 'Question',
          'name'           => $f['q'],
          'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
        ];
      }, $faqs),
    ],
    pain_person($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁', 'path' => '/'],
      ['name' => '電子書', 'path' => '/book'],
    ]),
  ],
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap section">

  <div class="book-cta" style="margin-bottom:44px">
    <div class="book-cover">
      <picture>
        <source srcset="/assets/img/cover-ebook.webp?v=1" type="image/webp">
        <img src="/assets/img/cover-ebook.jpg?v=1" alt="《痛點 P.A.I.N.》電子書封面" width="1600" height="2400">
      </picture>
    </div>
    <div>
      <p class="eyebrow">電子書・上市了</p>
      <h1 class="h-display" style="font-size:2.1rem;margin-top:0">痛點 P.A.I.N.</h1>
      <p class="muted" style="margin-top:-6px">不保證你成功,只用近五百萬換來的一把尺:判斷一個點子值不值得做、看出誰真的在痛、動手做到第一筆錢。</p>
      <div style="margin:16px 0 22px"><?php require __DIR__ . '/partials/author-byline.php'; ?></div>
      <ul class="checklist">
        <li><strong>第一部・尺</strong>:端出整把 P·A·I·N,判斷一個點子到底值不值得做(帶走判斷卡)</li>
        <li><strong>第二部・眼睛</strong>:深耕 P·A,用五格濾鏡看見真痛、篩掉自己騙自己的「我猜」(帶走濾鏡卡)</li>
        <li><strong>第三部・手</strong>:深耕 I·N,沿越賭越大的五階樓梯,動手走到第一筆錢(帶走動手卡)</li>
        <li>一條真實主線——一個還在賠錢的創業者,把每個坑帶血演一遍,以及本來該怎麼做</li>
      </ul>
      <?php require __DIR__ . '/partials/store-buttons.php'; ?>
      <p class="muted" style="margin-top:14px;font-size:.9rem">定價 NT$199・全書三部、共二十八章・EPUB 格式,手機電腦都能讀</p>
    </div>
  </div>

  <div class="buy-box" style="max-width:40rem;margin:0 auto">
    <h2 style="margin-top:0">為什麼是這一本</h2>
    <ul class="checklist" style="margin-top:14px">
      <li><strong>一個讀過近千本商業書的人寫的</strong>——喵喵書評創辦人,看過整面書牆,最清楚這類書通常在哪裡讓你以為自己懂了。</li>
      <li><strong>一個還在賠錢的創業者寫的</strong>——這不是成功學。近五百萬的坑我帶血走過一遍,書裡誠實寫出每個坑、以及本來該怎麼做。</li>
      <li><strong>方法不是用講的,是公開驗的</strong>——同一把 P.A.I.N. 之尺,我已經在站上一篇一篇<a href="/lens">公開拆過幾十本經典商業書</a>。先看我怎麼用它拆別人的書,再決定要不要把它收進手裡。</li>
    </ul>
  </div>

  <div class="buy-box" style="max-width:40rem;margin:24px auto 0">
    <h2 style="margin-top:0">買之前,你可能想問</h2>
    <div class="book-faq" style="margin-top:8px">
      <?php foreach ($faqs as $f): ?>
      <details class="faq-item">
        <summary><?= e($f['q']) ?></summary>
        <p><?= e($f['a']) ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="read-funnel" style="max-width:40rem;margin:28px auto 0;text-align:center">
    <h3>還沒決定?先免費試一輪</h3>
    <p>書裡的方法,現在就能免費用。</p>
    <div class="btn-row" style="justify-content:center">
      <a class="btn btn-primary" href="/tool">免費體檢我的點子</a>
      <a class="btn btn-ghost" href="/read">免費試讀</a>
    </div>
  </div>

</main>
<style>
.book-faq .faq-item{border-top:1px solid var(--line,#e7e2d8);padding:2px 0}
.book-faq .faq-item:last-child{border-bottom:1px solid var(--line,#e7e2d8)}
.book-faq summary{cursor:pointer;list-style:none;padding:15px 28px 15px 2px;position:relative;font-weight:600;line-height:1.5}
.book-faq summary::-webkit-details-marker{display:none}
.book-faq summary::after{content:"＋";position:absolute;right:4px;top:14px;font-weight:400;color:var(--muted,#8a8275);transition:transform .2s}
.book-faq .faq-item[open] summary::after{content:"－"}
.book-faq .faq-item p{margin:0 2px 16px;color:var(--muted,#5c574e);line-height:1.75}
</style>
<?php require __DIR__ . '/partials/footer.php'; ?>
