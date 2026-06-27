<?php
/** 訂閱者儲存:有資料庫用資料庫(PDO),否則退而存 CSV。皆以 email 去重。 */

function db_handle() {
  static $pdo = false;
  if ($pdo !== false) return $pdo;
  $c = api_config();
  if (empty($c['db_host']) || empty($c['db_name'])) return $pdo = null;
  try {
    $pdo = new PDO(
      "mysql:host={$c['db_host']};dbname={$c['db_name']};charset=utf8mb4",
      $c['db_user'], $c['db_pass'],
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false]
    );
    $pdo->exec(
      "CREATE TABLE IF NOT EXISTS subscribers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(254) NOT NULL UNIQUE,
        source VARCHAR(64) DEFAULT NULL,
        idea VARCHAR(120) DEFAULT NULL,
        ip VARCHAR(64) DEFAULT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"
    );
  } catch (Throwable $e) {
    error_log('DB connect failed: ' . $e->getMessage());
    $pdo = null;
  }
  return $pdo;
}

/** 回傳 ['ok'=>bool, 'new'=>bool]。new=這次才第一次出現。 */
function store_subscriber($email, $source, $idea) {
  $idea = mb_substr((string) $idea, 0, 120);
  $source = preg_replace('/[^a-z0-9_\-]/i', '', (string) $source);
  $ip = client_ip();

  $pdo = db_handle();
  if ($pdo) {
    try {
      $stmt = $pdo->prepare(
        "INSERT INTO subscribers (email, source, idea, ip) VALUES (?,?,?,?)
         ON DUPLICATE KEY UPDATE source=VALUES(source), idea=VALUES(idea)"
      );
      $stmt->execute([$email, $source, $idea, $ip]);
      return ['ok' => true, 'new' => $stmt->rowCount() === 1];
    } catch (Throwable $e) {
      error_log('DB insert failed: ' . $e->getMessage());
      // 落到 CSV 備援
    }
  }

  // CSV 備援:去重 + 寫入夾在「同一把鎖」內(避免 TOCTOU 競態寫出重複列)。
  // 並對文字欄位做公式前綴中和,防止 Sam 用試算表開名單時觸發 CSV 公式注入。
  $csv_safe = function ($v) { return preg_replace('/^([=+\-@\t\r])/u', "'$1", (string) $v); };
  $f = data_dir() . '/subscribers.csv';
  $new = true;
  $fh = fopen($f, 'c+');                 // 不存在則建、可讀可寫、不截斷
  if ($fh) {
    if (flock($fh, LOCK_EX)) {
      while (($row = fgetcsv($fh, null, ',', '"', '\\')) !== false) {
        if (isset($row[0]) && strtolower($row[0]) === $email) { $new = false; break; }
      }
      if ($new) {
        fseek($fh, 0, SEEK_END);
        fputcsv($fh, [$csv_safe($email), $csv_safe($source), $csv_safe($idea), $ip, gmdate('c')], ',', '"', '\\');
      }
      flock($fh, LOCK_UN);
    }
    fclose($fh);
    @chmod($f, 0600);
  }
  return ['ok' => true, 'new' => $new];
}
