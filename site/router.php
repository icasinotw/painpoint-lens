<?php
/**
 * 本機開發用路由器(模擬 .htaccess 的乾淨網址)。
 * 用法: php -S localhost:8080 router.php
 * 正式環境靠 Apache + .htaccess,不會用到這支。
 */
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

// sitemap.xml → sitemap.php(對應 .htaccess 的 rewrite)
if ($uri === '/sitemap.xml') {
    require __DIR__ . '/sitemap.php';
    return true;
}
// 拆書分類主題頁:/lens/c/behavior → lens/c/index.php?cat=behavior(動態單一引擎,對應 .htaccess rewrite)
if (preg_match('#^/lens/c/([a-z0-9-]+)$#', $uri, $m)) {
    $_GET['cat'] = $m[1];
    require __DIR__ . '/lens/c/index.php';
    return true;
}
// 實體檔(css/js/png/svg…)直接交給內建伺服器
if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}
// 乾淨網址 → 對應 .php
$clean = rtrim($uri, '/');
if ($clean !== '' && file_exists(__DIR__ . $clean . '.php')) {
    require __DIR__ . $clean . '.php';
    return true;
}
// 目錄首頁 /read → read/index.php
if ($clean !== '' && is_dir(__DIR__ . $clean) && file_exists(__DIR__ . $clean . '/index.php')) {
    require __DIR__ . $clean . '/index.php';
    return true;
}
// 首頁
if ($uri === '/' || $uri === '') {
    require __DIR__ . '/index.php';
    return true;
}
// 其餘 → 404
http_response_code(404);
require __DIR__ . '/404.php';
return true;
