<?php
require __DIR__ . '/_init.php';
header('Content-Type: application/xml; charset=utf-8');
$base = rtrim($cfg['site_url'], '/');
// [路徑, 最後更新日(可選)]。
// 已移除 <priority> 與 <changefreq>:Google 明說兩者都忽略,留著只是雜訊。
// 真正有用的是 <lastmod>,但必須誠實——別為了裝新鮮整批亂蓋,否則 Google 會不信任整份 sitemap。
$urls = [
  ['/',                    '2026-06-23'],
  ['/tool',                '2026-06-23'],
  ['/fieldkit',            '2026-06-25'],
  ['/eye',                 '2026-06-25'],
  ['/book',                '2026-06-23'],
  ['/read',                '2026-06-23'],
  ['/read/preface',        '2026-06-23'],
  ['/read/ch01',           '2026-06-23'],
  ['/read/pain-framework', '2026-06-23'],
  ['/lens',                '2026-06-25'],
  ['/about',               '2026-06-23'],
  ['/contact',             null],
  ['/privacy',             null],
  ['/terms',               null],
  ['/refund',              null],
];
// 拆書文章:從單一清單自動納入(新增文章不必手改 sitemap)。
// lastmod 取 updated(真的改版才填)否則 date。
$lensArticles = require __DIR__ . '/lens/_articles.php';
foreach ($lensArticles as $a) {
  $urls[] = ['/lens/' . $a['slug'], $a['updated'] ?? $a['date']];
}
// 可發佈的分類主題頁(滿門檻篇數 + 有手寫 intro 才進 sitemap;薄分類維持純前端頁籤、不進)。
// lastmod 取該分類最新文章日期。
foreach (pain_lens_eligible_cats($lensArticles) as $cat => $c) {
  $dates = [];
  foreach ($lensArticles as $a) {
    if (pain_primary_cat($a['category']) === $cat) $dates[] = $a['updated'] ?? $a['date'];
  }
  rsort($dates);
  $urls[] = ['/lens/c/' . $c['slug'], $dates[0] ?? null];
}
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ($urls as [$path, $lastmod]) {
  echo "  <url>\n";
  echo "    <loc>{$base}" . e($path) . "</loc>\n";
  if ($lastmod) echo "    <lastmod>{$lastmod}</lastmod>\n";
  echo "  </url>\n";
}
echo "</urlset>\n";
