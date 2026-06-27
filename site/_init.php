<?php
/**
 * 每一頁最上面先 require 這支(它載入設定 + 小工具函式),
 * 之後頁面才設定 $page,最後由 partials/head.php 補上預設值與 canonical。
 * 資源連結一律用 root-absolute(/assets/...),子目錄頁面也不必算相對路徑
 * (Cloudways 每個 app 都掛在網域根目錄,這樣最單純)。
 */
$cfg = require __DIR__ . '/config.php';

if (!function_exists('e')) {
  function e($s) { return htmlspecialchars((string)($s ?? ''), ENT_QUOTES, 'UTF-8'); }
}

/* ---- JSON-LD 結構化資料的共用節點(由各頁的 $page['schema'] 組成 @graph) ---- */
if (!function_exists('pain_base')) {
  function pain_base($cfg) { return rtrim($cfg['site_url'], '/'); }

  // 作者本人(Person)。用穩定 @id,讓同頁其他節點(Book/Article)以 @id 引用。
  function pain_person($cfg) {
    $base = pain_base($cfg);
    return [
      '@type'         => 'Person',
      '@id'           => $base . '/#person',
      'name'          => $cfg['author'],
      'alternateName' => '山姆',
      'jobTitle'      => $cfg['author_role'],
      'description'   => '還在賠錢的創業者,把四年近五百萬的教訓寫成 P.A.I.N. 四問。',
      'url'           => $base . '/about',
      'image'         => $base . '/assets/img/author.jpg?v=1', // 作者頭像:撐 Person 實體與 E-E-A-T 作者權威(全站署名同一張)
      'sameAs'        => ['https://meowbooks.tw/user/@sambooks'],
    ];
  }

  // 整個網站(WebSite),發行人指向作者。
  function pain_website($cfg) {
    $base = pain_base($cfg);
    return [
      '@type'       => 'WebSite',
      '@id'         => $base . '/#website',
      'name'        => $cfg['site_name'],
      'url'         => $base . '/',
      'inLanguage'  => 'zh-Hant-TW',
      'description' => $cfg['desc'],
      'publisher'   => ['@id' => $base . '/#person'],
    ];
  }

  // 試讀文章(Article),作者/發行人指向同頁的 Person。
  function pain_read_article($cfg, $page, $reading) {
    $base = pain_base($cfg);
    return [
      '@type'            => 'Article',
      'headline'         => $reading['heading'] ?? $page['title'],
      'description'      => $page['desc'],
      'inLanguage'       => 'zh-Hant-TW',
      'author'           => ['@id' => $base . '/#person'],
      'publisher'        => ['@id' => $base . '/#person'],
      'datePublished'    => '2026-06-20',
      'dateModified'     => $reading['updated'] ?? '2026-06-20',
      'mainEntityOfPage' => $base . $page['path'],
      'image'            => $base . '/assets/img/cover-ebook.jpg?v=1',
      'isPartOf'         => ['@type' => 'Book', 'name' => '痛點 P.A.I.N.'],
    ];
  }

  // 拆書文章(Article):用 P.A.I.N. 之尺拆解某一本商業書。about/isBasedOn 指向被拆的書。
  function pain_lens_article($cfg, $page, $lens) {
    $base = pain_base($cfg);
    $node = [
      '@type'            => 'Article',
      'headline'         => $lens['heading'] ?? $page['title'],
      'description'      => $page['desc'],
      'inLanguage'       => 'zh-Hant-TW',
      'author'           => ['@id' => $base . '/#person'],
      'publisher'        => ['@id' => $base . '/#person'],
      'datePublished'    => $lens['published'] ?? '2026-06-24',
      'dateModified'     => $lens['updated'] ?? ($lens['published'] ?? '2026-06-24'),
      'mainEntityOfPage' => $base . $page['path'],
      'image'            => $base . ($page['og_image'] ?? '/assets/img/og-brand.jpg?v=1'),
    ];
    if (!empty($lens['book'])) {
      $book = ['@type' => 'Book', 'name' => $lens['book']['name'] ?? ''];
      if (!empty($lens['book']['author'])) $book['author'] = ['@type' => 'Person', 'name' => $lens['book']['author']];
      if (!empty($lens['book']['isbn']))   $book['isbn']   = $lens['book']['isbn'];
      $node['about']     = $book;
      $node['isBasedOn'] = $book;
    }
    return $node;
  }

  // 拆書列表頁的 ItemList(SEO:讓搜尋引擎看見整個拆書系列、抓到每篇)。
  function pain_lens_itemlist($cfg, $articles) {
    $base = pain_base($cfg);
    $items = [];
    foreach ($articles as $i => $a) {
      $items[] = [
        '@type'    => 'ListItem',
        'position' => $i + 1,
        'url'      => $base . '/lens/' . $a['slug'],
        'name'     => $a['title'],
      ];
    }
    return ['@type' => 'ItemList', 'name' => '痛點之尺・拆書', 'itemListElement' => $items];
  }

  // 主分類 = category 取「／」(或半形 /)前半;次分類忽略,一篇只歸一個主分類。
  function pain_primary_cat($cat) {
    $parts = preg_split('#[／/]#u', (string)$cat);
    return trim($parts[0]);
  }

  // 麵包屑。$trail = [['name'=>..,'path'=>..], ...](最後一項通常是當前頁)。
  function pain_breadcrumb($cfg, $trail) {
    $base = pain_base($cfg);
    $items = [];
    foreach ($trail as $i => $t) {
      $items[] = [
        '@type'    => 'ListItem',
        'position' => $i + 1,
        'name'     => $t['name'],
        'item'     => $base . $t['path'],
      ];
    }
    return ['@type' => 'BreadcrumbList', 'itemListElement' => $items];
  }

  /* ---- 拆書分類主題頁(/lens/c/{slug})的資料驅動引擎 ---- */

  // 門檻:某主分類要長出自己的主題頁,須同時 ① 文章數 ≥ 這個數 ② 在 _categories.php 有手寫 intro。
  if (!defined('PAIN_LENS_CAT_MIN')) define('PAIN_LENS_CAT_MIN', 5);

  // /lens 文末「停留優先」頁尾引擎:工具(/tool)主鈕只在「手上有點子要驗」那幾類書、且每 N 篇才出一次。
  // 調大=更克制、調小=更常出;這是全站工具曝光濃度的唯一旋鈕(reading.php 讀它)。
  if (!defined('PAIN_FOOTER_TOOL_EVERY')) define('PAIN_FOOTER_TOOL_EVERY', 7);

  // 分類設定清單(_categories.php),載一次快取。
  function pain_lens_categories() {
    static $cats = null;
    if ($cats === null) $cats = require __DIR__ . '/lens/_categories.php';
    return $cats;
  }

  // 各主分類目前的文章數。
  function pain_lens_cat_counts($articles) {
    $counts = [];
    foreach ($articles as $a) {
      $c = pain_primary_cat($a['category']);
      $counts[$c] = ($counts[$c] ?? 0) + 1;
    }
    return $counts;
  }

  // 「可發佈」的分類:中文名 => 設定(slug/title/desc/intro)+ count。
  // 同時滿足「篇數達標 + 有手寫 intro」才算 —— 這就是「滿 N 篇自動開頁、但缺 intro 不開薄頁」的機制。
  function pain_lens_eligible_cats($articles) {
    $cfgCats = pain_lens_categories();
    $counts  = pain_lens_cat_counts($articles);
    $out = [];
    foreach ($cfgCats as $cat => $c) {
      if (empty($c['slug'])) continue;
      if (trim((string)($c['intro'] ?? '')) === '') continue;      // 沒寫 intro = 不發佈(防薄頁)
      if (($counts[$cat] ?? 0) < PAIN_LENS_CAT_MIN) continue;       // 篇數不足 = 不發佈
      $out[$cat] = $c + ['count' => $counts[$cat]];
    }
    return $out;
  }

  // 某中文主分類若可發佈,回傳其設定(含 slug);否則 null。
  function pain_lens_cat_config($cat, $articles) {
    $elig = pain_lens_eligible_cats($articles);
    return $elig[$cat] ?? null;
  }

  // 由英文 slug 反查可發佈分類;回傳 ['cat'=>中文名, ...設定] 或 null。供 /lens/c/{slug} 引擎。
  function pain_lens_cat_by_slug($slug, $articles) {
    foreach (pain_lens_eligible_cats($articles) as $cat => $c) {
      if (($c['slug'] ?? null) === $slug) return ['cat' => $cat] + $c;
    }
    return null;
  }

  // 已達門檻篇數、卻還沒寫 intro 的分類(中文名 => 篇數):提醒「補一段導言就能開頁」。
  function pain_lens_pending_cats($articles) {
    $cfgCats = pain_lens_categories();
    $counts  = pain_lens_cat_counts($articles);
    $out = [];
    foreach ($counts as $cat => $n) {
      if ($n < PAIN_LENS_CAT_MIN) continue;
      $has = isset($cfgCats[$cat]) && trim((string)($cfgCats[$cat]['intro'] ?? '')) !== '';
      if (!$has) $out[$cat] = $n;
    }
    return $out;
  }

  // 分類主題頁的 CollectionPage(內含 ItemList):撐 topical authority。$articles 為已篩選的該類文章。
  function pain_lens_collectionpage($cfg, $name, $path, $articles) {
    $base = pain_base($cfg);
    $items = [];
    $i = 0;
    foreach ($articles as $a) {
      $items[] = ['@type' => 'ListItem', 'position' => ++$i, 'url' => $base . '/lens/' . $a['slug'], 'name' => $a['title']];
    }
    return [
      '@type'      => 'CollectionPage',
      'name'       => $name,
      'url'        => $base . $path,
      'isPartOf'   => ['@id' => $base . '/#website'],
      'mainEntity' => ['@type' => 'ItemList', 'itemListElement' => $items],
    ];
  }
}
