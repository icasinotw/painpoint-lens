<?php
/**
 * 把訂閱者推送到 Kit (ConvertKit) v3 API,並貼上指定標籤。
 * 端點 POST /v3/tags/{tag_id}/subscribe 會「建立訂閱者 + 貼標籤」一次完成(同 email 會自動去重)。
 * 標籤用來分群:
 *   - 不帶 $tagId → 用 config 的 kit_tag_id(電子報/全體名單)。
 *   - 帶 $tagId   → 貼指定標籤(用於名單分群)。
 * 最佳努力:失敗只記 log,不阻斷主流程。一般推送只用 api_key(api_secret 留給管理操作)。
 */

function esp_push($email, $fields = [], $tagId = null) {
  $c   = api_config();
  $key = $c['kit_api_key'] ?? '';
  $tag = ($tagId !== null && $tagId !== '') ? $tagId : ($c['kit_tag_id'] ?? '');
  if (!$key || !$tag) return false; // 沒設定就跳過(只存本地名單)

  $payload = ['api_key' => $key, 'email' => $email];
  if (!empty($fields)) $payload['fields'] = $fields;

  $ch = curl_init('https://api.convertkit.com/v3/tags/' . rawurlencode($tag) . '/subscribe');
  curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 8,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($res === false || $code >= 300) {
    error_log('Kit push failed (' . $code . '): ' . curl_error($ch) . ' ' . substr((string) $res, 0, 300));
    return false;
  }
  return true;
}

/** Kit API GET → 解碼後陣列;失敗回 null(最佳努力)。 */
function kit_api_get($url) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => ['Accept: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 8,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($res === false || $code >= 300) { error_log('Kit GET failed (' . $code . '): ' . substr((string) $res, 0, 300)); return null; }
  $j = json_decode((string) $res, true);
  return is_array($j) ? $j : null;
}

/** Kit API POST(JSON body)→ 解碼後陣列;失敗回 null(最佳努力)。 */
function kit_api_post_json($url, array $payload) {
  $ch = curl_init($url);
  curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
    CURLOPT_HTTPHEADER => ['Content-Type: application/json', 'Accept: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 8,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($res === false || $code >= 300) { error_log('Kit POST failed (' . $code . '): ' . substr((string) $res, 0, 300)); return null; }
  $j = json_decode((string) $res, true);
  return is_array($j) ? $j : null;
}

/**
 * 由「標籤名稱」取得 Kit 標籤 ID;Kit 裡沒有就「自動建立」。結果快取到 data_dir/kit-tags.json,
 * 之後同名直接讀快取(不再打 API)。這支讓「每本書一個標籤」全自動:呼叫端只給名稱,
 * 永遠不需要任何人去 Kit 後台查或手填數字 ID。任何失敗回 null(呼叫端略過、不阻斷主流程)。
 */
function esp_tag_id_for_name($name) {
  $name = trim((string) $name);
  if ($name === '') return null;

  $c   = api_config();
  $key = $c['kit_api_key'] ?? '';
  if (!$key) return null;

  // 1) 本地快取(最快路徑)
  $cacheFile = data_dir() . '/kit-tags.json';
  $cache = is_file($cacheFile) ? (json_decode((string) file_get_contents($cacheFile), true) ?: []) : [];
  if (!empty($cache[$name])) return (string) $cache[$name];

  // 2) 查 Kit 既有標籤,同名直接用(避免重複建立)
  $id   = null;
  $list = kit_api_get('https://api.convertkit.com/v3/tags?api_key=' . rawurlencode($key));
  if (is_array($list) && !empty($list['tags'])) {
    foreach ($list['tags'] as $t) {
      if (isset($t['name'], $t['id']) && trim((string) $t['name']) === $name) { $id = (string) $t['id']; break; }
    }
  }

  // 3) 還是沒有 → 自動建立一個
  if ($id === null) {
    $created = kit_api_post_json('https://api.convertkit.com/v3/tags', ['api_key' => $key, 'tag' => ['name' => $name]]);
    if (isset($created['id'])) $id = (string) $created['id'];
  }
  if ($id === null) { error_log('Kit tag resolve failed: ' . $name); return null; }

  // 4) 寫回快取(最佳努力;伺服器上 data_dir 可寫)
  $cache[$name] = $id;
  @file_put_contents($cacheFile, json_encode($cache, JSON_UNESCAPED_UNICODE), LOCK_EX);
  return $id;
}
