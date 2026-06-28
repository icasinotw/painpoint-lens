<?php
/**
 * 拆書分類主題頁 —— 單一動態引擎(資料驅動,不必每個分類各建一支檔)。
 *
 * 路由:/lens/c/{slug} → 本檔(.htaccess 內部 rewrite 成 ?cat={slug};本機 router.php 同樣處理)。
 * 「可不可發佈」全交給 _init.php 的 pain_lens_*():某主分類滿 PAIN_LENS_CAT_MIN 篇、
 * 且在 _categories.php 有手寫 intro,才在這裡渲染;否則一律 404(不存在的薄頁不該被索引)。
 * → 未來任何分類滿篇數,只要回 _categories.php 補一段 intro,這頁就自動長出來,不必動本檔。
 */
require __DIR__ . '/../../_init.php';
$articles = require __DIR__ . '/../_articles.php';

$slug = isset($_GET['cat']) ? preg_replace('/[^a-z0-9-]/', '', (string)$_GET['cat']) : '';
if ($slug === '') { header('Location: /lens', true, 301); exit; }   // /lens/c 本身不設頁,導回總表

$conf = pain_lens_cat_by_slug($slug, $articles);
if (!$conf) {                                                       // 分類不存在 / 還不可發佈 → 這頁本來就不存在
  http_response_code(404);
  require __DIR__ . '/../../404.php';
  return;
}

$catName = $conf['cat'];
$path    = '/lens/c/' . $slug;
// 篩出這個主分類的文章(沿用 _articles.php 既有順序:最新在前)
$inCat   = array_values(array_filter($articles, fn($a) => pain_primary_cat($a['category']) === $catName));

$page = [
  'title'  => $conf['title'] . '｜痛點之尺・拆書',
  'desc'   => $conf['desc'],
  'path'   => $path,
  'type'   => 'website',
  'schema' => [
    pain_person($cfg),
    pain_website($cfg),
    pain_breadcrumb($cfg, [
      ['name' => '首頁',   'path' => '/'],
      ['name' => '痛點之尺', 'path' => '/lens'],
      ['name' => $catName, 'path' => $path],
    ]),
    pain_lens_collectionpage($cfg, $conf['title'], $path, $inCat),
  ],
];
require __DIR__ . '/../../partials/head.php';
require __DIR__ . '/../../partials/header.php';
?>
<main class="wrap section">
  <nav class="reading-crumb" aria-label="麵包屑" style="max-width:var(--readw);margin:0 auto 16px">
    <a href="/">首頁</a><span aria-hidden="true">›</span><a href="/lens">痛點之尺</a><span aria-hidden="true">›</span><span class="rc-here"><?= e($catName) ?></span>
  </nav>
  <div class="section-head">
    <p class="eyebrow">痛點之尺 · 分類</p>
    <h1 class="h-display"><?= e($conf['title']) ?></h1>
  </div>

  <div class="lens-cat-intro">
<?= $conf['intro'] /* 山姆親寫的 HTML 導言 */ ?>
  </div>

  <div class="read-list lens-grid">
    <?php foreach ($inCat as $a): $cat = pain_primary_cat($a['category']); ?>
    <a class="read-item" href="/lens/<?= e($a['slug']) ?>">
      <div class="ri-top">
        <span class="ri-kicker"><?= e($a['kicker']) ?></span>
        <span class="lens-cat-badge"><?= e($cat) ?></span>
      </div>
      <h3><?= e($a['title']) ?></h3>
      <p><?= e($a['blurb']) ?></p>
    </a>
    <?php endforeach; ?>
  </div>

  <?php if ($catName === '理財'): /* YMYL:理財分類頁自動帶投資免責，與每篇理財文章一致(零逐篇手工) */ ?>
  <p class="lens-cat-ymyl">這是一系列讀書拆解與個人觀點，不是投資建議。作者是書評人、不是理財顧問；文中提到的數字以原書為準，投資有風險、過去績效不代表未來，請自行查證、量力而為。</p>
  <?php endif; ?>

  <div class="btn-row" style="justify-content:center;margin-top:40px">
    <a class="btn btn-primary" href="/tool">先免費體檢一個自己的點子</a>
    <a class="btn btn-ghost" href="/lens">← 看全部拆書</a>
  </div>
</main>
<?php require __DIR__ . '/../../partials/footer.php'; ?>
