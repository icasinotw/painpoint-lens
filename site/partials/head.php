<?php
/* 共用 <head> + 開 <body>。頁面在 require 它之前要先設好 $page;這裡補上預設值與 canonical。 */
$page = array_merge([
  'title'      => $cfg['site_name'],
  'desc'       => $cfg['desc'],
  'path'       => '/',
  'og_image'   => '/assets/img/og-brand.jpg?v=1', // 站台預設橫式品牌分享圖;頁面可覆寫
  'og_w'       => 1200,  // 預設分享圖尺寸(橫式 1200×630);頁面用別張圖時覆寫
  'og_h'       => 630,
  'body_class' => '',
  'type'       => 'website',
], $page ?? []);

/* /lens 拆書:<title> 一律由「已去公式的 heading + 書名」自動組,蓋掉各篇硬寫的
   「…用痛點之尺重讀《X》｜痛點 P.A.I.N.」公式——實測 33/35 篇 <title> 撞同一句型,
   SERP 一列出來像同一台機器產的系列(H1 早已去公式,<title> 卻沒跟上)。
   只作用在 /lens/ 文章頁;$reading 由文章頁在 require 本檔前設好。各篇硬寫的 title 仍留著當保險。 */
if (isset($reading['heading'], $reading['book']['name'])
    && strncmp($page['path'] ?? '', '/lens/', 6) === 0) {
  // 書名只取「主書名」,切掉副標與英文名(：（(—─ 之後),免得 <title> 過長被 SERP 截斷。
  $short_book = trim(preg_split('/[：（(:—─]/u', $reading['book']['name'])[0]);
  $page['title'] = $reading['heading'] . '｜《' . $short_book . '》拆書・痛點 P.A.I.N.';
}

$page['canonical'] = rtrim($cfg['site_url'], '/') . $page['path'];
?>
<!doctype html>
<html lang="zh-Hant-TW">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P9GY931B32"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-P9GY931B32');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($page['title']) ?></title>
<meta name="description" content="<?= e($page['desc']) ?>">
<link rel="canonical" href="<?= e($page['canonical']) ?>">
<?php if (!empty($page['noindex'])): ?>
<meta name="robots" content="noindex,follow">
<?php endif; ?>

<!-- Open Graph / 分享卡 -->
<meta property="og:type" content="<?= e($page['type']) ?>">
<meta property="og:title" content="<?= e($page['title']) ?>">
<meta property="og:description" content="<?= e($page['desc']) ?>">
<meta property="og:url" content="<?= e($page['canonical']) ?>">
<meta property="og:site_name" content="<?= e($cfg['site_name']) ?>">
<meta property="og:locale" content="zh_TW">
<?php if (!empty($page['og_image'])): ?>
<meta property="og:image" content="<?= e(rtrim($cfg['site_url'],'/') . $page['og_image']) ?>">
<meta property="og:image:width" content="<?= e($page['og_w']) ?>">
<meta property="og:image:height" content="<?= e($page['og_h']) ?>">
<meta name="twitter:card" content="summary_large_image">
<?php endif; ?>

<?php /* JSON-LD 結構化資料:頁面把節點陣列放進 $page['schema'],這裡包成 @graph 一次輸出 */ ?>
<?php if (!empty($page['schema'])): ?>
<script type="application/ld+json"><?= json_encode(['@context' => 'https://schema.org', '@graph' => array_values($page['schema'])], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) ?></script>
<?php endif; ?>

<link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">

<!-- 字型:標題思源黑體、長文思源宋體。非阻塞載入(preload + media=print/onload swap),
     避免又大又跨來源的 CJK 字型 CSS 擋住首屏 → 改善 LCP/INP(尤其手機);display=swap 先用系統字再換上。 -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700;900&family=Noto+Serif+TC:wght@400;600;700&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700;900&family=Noto+Serif+TC:wght@400;600;700&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;500;700;900&family=Noto+Serif+TC:wght@400;600;700&display=swap"></noscript>

<link rel="stylesheet" href="/assets/css/style.css?v=42">
</head>
<body class="<?= e($page['body_class']) ?>">
