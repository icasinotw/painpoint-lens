<?php
/** api 共用工具:設定載入、JSON 回應、驗證、限流、資料目錄。 */

// API 端點:錯誤一律進 log,絕不印進回應(避免污染 JSON)
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

function api_config() {
  static $c = null;
  if ($c !== null) return $c;
  $f = __DIR__ . '/config.php';
  $defaults = require __DIR__ . '/config.sample.php';
  $c = is_file($f) ? array_merge($defaults, (array) require $f) : $defaults;
  return $c;
}

function data_dir() {
  $c = api_config();
  // 建議在 config.php 把 data_dir 設成 web root 之外的絕對路徑(根治 Nginx 直接吐檔)。
  $d = !empty($c['data_dir']) ? rtrim($c['data_dir'], '/') : __DIR__ . '/_data';
  if (!is_dir($d)) @mkdir($d, 0770, true);
  return $d;
}

function json_out($data, $code = 200) {
  http_response_code($code);
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode($data, JSON_UNESCAPED_UNICODE);
  exit;
}

/** 讀取 POST 內容:支援 JSON body 與表單。 */
function read_input() {
  $raw = file_get_contents('php://input');
  if ($raw && ($j = json_decode($raw, true)) && is_array($j)) return $j;
  return $_POST;
}

function valid_email($e) {
  $e = trim((string) $e);
  return (strlen($e) <= 254 && filter_var($e, FILTER_VALIDATE_EMAIL)) ? strtolower($e) : false;
}

function client_ip() {
  return $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
}

/** 檔案式 IP 限流:同 IP 每分鐘上限。讀-改-寫整段加鎖,避免併發超限。回 true=放行。 */
function rate_ok($max) {
  $dir = data_dir() . '/rl';
  if (!is_dir($dir)) @mkdir($dir, 0770, true);
  $f = $dir . '/' . hash('sha256', client_ip()) . '.json';
  $now = time();
  $fh = @fopen($f, 'c+');
  if (!$fh) return true; // 無法寫入就不擋(best-effort)
  $ok = true;
  if (flock($fh, LOCK_EX)) {
    $raw = stream_get_contents($fh);
    $hits = $raw ? (json_decode($raw, true) ?: []) : [];
    $hits = array_values(array_filter($hits, function ($t) use ($now) { return $t > $now - 60; }));
    if (count($hits) >= $max) {
      $ok = false;
    } else {
      $hits[] = $now;
      rewind($fh); ftruncate($fh, 0); fwrite($fh, json_encode($hits));
    }
    flock($fh, LOCK_UN);
  }
  fclose($fh);
  return $ok;
}

/** 同源檢查(最佳努力):擋掉跨站自動化提交。只比對主機名(忽略連接埠)。 */
function same_origin_ok() {
  $host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
  foreach (['HTTP_ORIGIN', 'HTTP_REFERER'] as $k) {
    if (!empty($_SERVER[$k])) {
      $h = strtolower((string) parse_url($_SERVER[$k], PHP_URL_HOST));
      return $h === $host;
    }
  }
  return true; // 沒有 Origin/Referer(部分隱私設定)就不擋
}
