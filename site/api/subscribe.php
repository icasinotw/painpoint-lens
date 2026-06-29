<?php
/**
 * 高意圖訂閱端點。前端在「匯出 PDF / 儲存多個點子 / 把報告寄到信箱」時 POST 到這裡。
 * 流程:驗證 → 限流 → 存名單(DB/CSV)→ 推 Kit(貼網站標籤)→ (可選)寄歡迎信。
 * 任何外部服務失敗都不阻斷:只要存進名單就算成功。
 */
require __DIR__ . '/lib.php';
require __DIR__ . '/store.php';
require __DIR__ . '/esp.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') { header('Allow: POST'); json_out(['ok' => false, 'error' => 'method'], 405); }
if (!same_origin_ok())                              json_out(['ok' => false, 'error' => 'origin'], 403);

$cfg = api_config();
if (!rate_ok((int) ($cfg['rate_limit_per_min'] ?? 6))) json_out(['ok' => false, 'error' => 'rate'], 429);

$in = read_input();

// 蜜罐:機器人會填這個隱藏欄位 → 假裝成功,不儲存
if (!empty($in['website'])) json_out(['ok' => true, 'new' => false]);

$email = valid_email($in['email'] ?? '');
if (!$email) json_out(['ok' => false, 'error' => 'email'], 422);

$source = $in['source'] ?? 'tool';
$idea   = mb_substr(preg_replace('/[\x00-\x1F\x7F]/u', '', (string) ($in['idea'] ?? '')), 0, 120);

// /claim 歸因頁:買家填「在哪買 + 訂單編號」,把它打包進 idea 欄,讓名單看得到歸因來源(免動 schema)。
$platform = mb_substr(preg_replace('/[\x00-\x1F\x7F]/u', '', (string) ($in['platform'] ?? '')), 0, 40);
$order    = mb_substr(preg_replace('/[\x00-\x1F\x7F]/u', '', (string) ($in['order'] ?? '')), 0, 60);
if ($source === 'claim') {
  $idea = trim($platform . ($order !== '' ? '・訂單 ' . $order : ''));
  // 書中通關密語閘門:後台設了 claim_passphrase 才驗。答錯不存、不貼標籤,直接擋下(保護「已購買-痛點」純度)。
  if (!empty($cfg['claim_passphrase'])) {
    $pass = mb_substr(preg_replace('/[\x00-\x1F\x7F]/u', '', (string) ($in['pass'] ?? '')), 0, 80);
    // 容錯比對:去空白、拿掉書名號/引號、忽略大小寫(買家從書裡複製含《》「」也能過)。
    $norm = function ($s) {
      $s = preg_replace('/\s+/u', '', trim((string) $s));
      $s = str_replace(['《', '》', '「', '」', '〈', '〉', '、', '，', ',', '。', '．', '.', '・', '·'], '', $s);
      return mb_strtolower($s);
    };
    if ($norm($pass) !== $norm($cfg['claim_passphrase'])) {
      json_out(['ok' => false, 'error' => 'passphrase'], 422);
    }
  }
}
$scores = is_array($in['scores'] ?? null) ? $in['scores'] : null;
$unsure = is_array($in['unsure'] ?? null)
  ? array_slice(array_values(array_filter(array_map(
      function ($q) { return mb_substr(preg_replace('/[\x00-\x1F\x7F]/u', '', (string) $q), 0, 120); },
      $in['unsure']
    ), function ($q) { return $q !== ''; })), 0, 8)
  : [];

$res = store_subscriber($email, $source, $idea);

// 推進 Kit:每次都推。Kit 會自動去重(同 email 不會重複),所以就算這個 email 之前
// 在 Kit 被刪掉、或首次推送失敗,下次再留同一個 email 也能補回 → 避免本地名單與 Kit 不同步。
esp_push($email);

// 從工具頁「匯出 PDF」來的人,貼 tool-export 標籤:已完成完整體檢 + 高意圖,實體書上市時優先通知。
if ($source === 'pdf') {
  $tagId = esp_tag_id_for_name('tool-export');
  if ($tagId) esp_push($email, [], $tagId);
}

// 從工具頁「儲存／比較這個點子」來的人,貼 tool-save 標籤:做過體檢、且在比較多個點子 = 手上有具體點子、積極打磨中。
if ($source === 'save') {
  $tagId = esp_tag_id_for_name('工具-儲存點子');
  if ($tagId) esp_push($email, [], $tagId);
}

// 免費下載型(出門找痛 / 七天練眼):貼專屬下載標籤 + 用 Resend 寄「下載連結」,不寄體檢報告。
if ($source === 'fieldkit' || $source === 'eye') {
  $tagId = esp_tag_id_for_name($source === 'eye' ? '七天練眼-下載' : '出門找痛-下載');
  if ($tagId) esp_push($email, [], $tagId);
  send_download_link($email, $source, $cfg);
} elseif ($source === 'slides') {
  // 私密簡報下載頁(/slides):貼專屬下載標籤 + 用 Resend 寄「3 份下載連結」,不寄體檢報告。
  $tagId = esp_tag_id_for_name('簡報-下載');
  if ($tagId) esp_push($email, [], $tagId);
  send_slides_link($email, $cfg);
} elseif ($source === 'lens-newsletter') {
  // 從 /lens 拆書文末「訂閱拆書電子報」來的人:只貼標籤、不寄體檢報告(他沒做體檢、沒有 $scores)。
  // 歡迎信與每週電子報交給 Kit(群發)處理。
  $tagId = esp_tag_id_for_name('拆書電子報-訂閱');
  if ($tagId) esp_push($email, [], $tagId);
} elseif ($source === 'claim') {
  // /claim 讀者歸因頁:買家回來領讀者專屬好禮 → 貼「已購買-痛點」標籤(歸因 + 名單核心),寄好禮。
  $tagId = esp_tag_id_for_name('已購買-痛點');
  if ($tagId) esp_push($email, [], $tagId);
  send_claim_bonus($email, $cfg);
} else {
  // 其餘(工具體檢 / lp / book-notify):每次提交都寄體檢報告,內容是他剛做完的這份結果。
  // 透過 Resend(已驗證網域)寄出 → 通過 SPF/DKIM/DMARC、進收件匣。
  send_report($email, $idea, $scores, $unsure, $cfg);
}

json_out(['ok' => true, 'new' => $res['new']]);


/** 把這次體檢結果寄給使用者(經 Resend)。沒設 resend_api_key 或 from_email 就略過、不阻斷。 */
function send_report($email, $idea, $scores, $unsure, $cfg) {
  if (empty($cfg['resend_api_key']) || empty($cfg['from_email'])) return;
  $site = require __DIR__ . '/../config.php';
  $url  = rtrim($site['site_url'], '/');
  $map  = ['P' => '誰在痛', 'A' => '痛多深', 'I' => '怎麼介入', 'N' => '數字'];

  // 結論帶(與工具畫面同一套門檻)
  $scVals = ($scores && is_array($scores)) ? array_values($scores) : [0];
  $min = min($scVals);
  $unsureCount = count($unsure);
  if ($min < 45 || $unsureCount >= 3) {
    $band = '先別急著動手';
    $bandNote = '有些最關鍵的問題,你還答不踏實。這不代表點子不好——代表你動手、花大錢之前,該先去把下面這幾題問清楚。';
  } elseif ($min < 65 || $unsureCount >= 1) {
    $band = '值得做,但有功課';
    $bandNote = '方向站得住。把下面這幾格補實,再決定要投入多少。';
  } else {
    $band = '四題,你都答得出來';
    $bandNote = '四個問題你都答得踏實——剩下的要靠真的去做、去收第一筆錢來驗證。';
  }
  $esc = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); };

  // ---- 純文字版(備援) ----
  $lines = [];
  if ($idea) { $lines[] = "你體檢的點子:「{$idea}」"; $lines[] = ''; }
  if ($scores) {
    $lines[] = '── P.A.I.N. 四軸分數 ──';
    foreach (['P', 'A', 'I', 'N'] as $k) if (isset($scores[$k])) $lines[] = "  {$k} {$map[$k]}:  " . (int) $scores[$k];
    $lines[] = '';
  }
  $lines[] = "體檢結論:【{$band}】";
  $lines[] = $bandNote;
  $lines[] = '';
  if ($unsure) {
    $lines[] = '── 動手前,先去問清楚這幾題 ──';
    foreach ($unsure as $i => $q) $lines[] = ($i + 1) . '. ' . $q;
    $lines[] = '(這幾格,就是你下一步要去問真人、而不是自己猜的事。)';
    $lines[] = '';
  }
  $lines[] = '──';
  $lines[] = "回到工具再體檢一個點子:{$url}/tool";
  $lines[] = "P.A.I.N. 框架總覽(免費試讀):{$url}/read/pain-framework";
  $lines[] = '';
  $lines[] = '—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者';
  $text = implode("\n", $lines);

  // ---- HTML 版 ----
  $h = '<div style="font-family:-apple-system,BlinkMacSystemFont,\'Noto Sans TC\',sans-serif;color:#1a1a1a;line-height:1.75;font-size:15px;max-width:560px;margin:0;text-align:left">';
  if ($idea) $h .= '<p style="margin:0 0 18px">你體檢的點子:<b>「' . $esc($idea) . '」</b></p>';
  if ($scores) {
    $h .= '<table style="border-collapse:collapse;margin:0 0 20px">';
    foreach (['P', 'A', 'I', 'N'] as $k) {
      if (!isset($scores[$k])) continue;
      $h .= '<tr>'
        . '<td style="padding:3px 14px 3px 0;color:#7a6309;font-weight:700">' . $k . '</td>'
        . '<td style="padding:3px 14px 3px 0;color:#3a3733">' . $map[$k] . '</td>'
        . '<td style="padding:3px 0;font-weight:700;font-size:17px">' . (int) $scores[$k] . '</td>'
        . '</tr>';
    }
    $h .= '</table>';
  }
  $h .= '<p style="margin:0 0 6px;font-size:17px"><b>體檢結論:【' . $esc($band) . '】</b></p>';
  $h .= '<p style="margin:0 0 22px;color:#3a3733">' . $esc($bandNote) . '</p>';
  if ($unsure) {
    $h .= '<p style="margin:0 0 6px;font-weight:700">動手前,先去問清楚這幾題</p><ol style="margin:0 0 8px;padding-left:22px">';
    foreach ($unsure as $q) $h .= '<li style="margin:4px 0">' . $esc($q) . '</li>';
    $h .= '</ol><p style="margin:0 0 24px;color:#8a857c;font-size:13.5px">這幾格,就是你下一步要去問真人、而不是自己猜的事。</p>';
  }
  $h .= '<hr style="border:0;border-top:1px solid #e3ddd1;margin:0 0 18px">';
  $h .= '<p style="margin:0 0 4px"><a href="' . $esc($url) . '/tool" style="color:#b59410">回到工具再體檢一個點子 →</a></p>';
  $h .= '<p style="margin:0 0 18px"><a href="' . $esc($url) . '/read/pain-framework" style="color:#b59410">P.A.I.N. 框架總覽(免費試讀)→</a></p>';
  $h .= '<p style="margin:0;color:#8a857c">—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者</p>';
  $h .= '</div>';

  $subject = $idea ? "「{$idea}」的 P.A.I.N. 體檢報告" : '你的 P.A.I.N. 點子體檢報告';
  $from = $cfg['from_name'] ? ($cfg['from_name'] . ' <' . $cfg['from_email'] . '>') : $cfg['from_email'];

  resend_send($cfg['resend_api_key'], $from, $email, $subject, $h, $text);
}

/** 寄「免費下載連結」給留 email 的人(出門找痛 / 七天練眼)。經 Resend;沒設定就略過、不阻斷。 */
function send_download_link($email, $source, $cfg) {
  if (empty($cfg['resend_api_key']) || empty($cfg['from_email'])) return;
  $site  = require __DIR__ . '/../config.php';
  $url   = rtrim($site['site_url'], '/');
  $isEye = ($source === 'eye');
  $title = $isEye ? '七天練眼' : '出門找痛';
  $file  = $isEye ? '/assets/dl/painpoint-seven-day-eye.pdf?v=2' : '/assets/dl/painpoint-fieldkit.pdf?v=2';
  $page  = $isEye ? '/eye' : '/fieldkit';
  $intro = $isEye
    ? '這是你的《七天練眼》練習表。印一張貼在桌邊,一天一格、連續七天,把一雙看得見痛點的眼睛養出來。'
    : '這是你的《出門找痛》實地觀察與訪談清單。印出來帶出門,一個對象一張,用看的找指紋、用過去問真話。';
  $dl   = $url . $file;
  $esc  = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); };

  // ---- 純文字版(備援) ----
  $text = implode("\n", [
    "《{$title}》— 你的下載連結",
    '',
    $intro,
    '',
    "下載 PDF:{$dl}",
    "(若連結沒反應,複製貼到瀏覽器即可)",
    '',
    "線上看完整說明與三張填好的範本:{$url}{$page}",
    '',
    '——',
    '把現場帶回來的真資料,回去重做一次點子體檢:' . $url . '/tool',
    '想懂為什麼順序是 P → A → I → N(免費試讀):' . $url . '/read/pain-framework',
    '',
    '—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者',
  ]);

  // ---- HTML 版 ----
  $h  = '<div style="font-family:-apple-system,BlinkMacSystemFont,\'Noto Sans TC\',sans-serif;color:#1a1a1a;line-height:1.75;font-size:15px;max-width:560px;margin:0;text-align:left">';
  $h .= '<p style="margin:0 0 16px;font-size:17px"><b>《' . $esc($title) . '》— 你的下載連結</b></p>';
  $h .= '<p style="margin:0 0 22px;color:#3a3733">' . $esc($intro) . '</p>';
  $h .= '<p style="margin:0 0 22px"><a href="' . $esc($dl) . '" style="display:inline-block;background:#b59410;color:#fff;text-decoration:none;font-weight:700;padding:12px 22px;border-radius:8px">下載 PDF →</a></p>';
  $h .= '<p style="margin:0 0 22px;color:#3a3733">想線上看完整說明與三張填好的範本:<a href="' . $esc($url . $page) . '" style="color:#b59410">' . $esc($url . $page) . '</a></p>';
  $h .= '<hr style="border:0;border-top:1px solid #e3ddd1;margin:0 0 18px">';
  $h .= '<p style="margin:0 0 4px"><a href="' . $esc($url) . '/tool" style="color:#b59410">回去重做一次點子體檢 →</a></p>';
  $h .= '<p style="margin:0 0 18px"><a href="' . $esc($url) . '/read/pain-framework" style="color:#b59410">為什麼順序是 P → A → I → N(免費試讀)→</a></p>';
  $h .= '<p style="margin:0;color:#8a857c">—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者</p>';
  $h .= '</div>';

  $subject = "你的《{$title}》下載連結";
  $from = $cfg['from_name'] ? ($cfg['from_name'] . ' <' . $cfg['from_email'] . '>') : $cfg['from_email'];
  resend_send($cfg['resend_api_key'], $from, $email, $subject, $h, $text);
}

/** 寄「《痛點》簡報 + P.A.I.N. 隨身卡」3 份下載連結(/slides 頁)。經 Resend;沒設定就略過、不阻斷。 */
function send_slides_link($email, $cfg) {
  if (empty($cfg['resend_api_key']) || empty($cfg['from_email'])) return;
  $site = require __DIR__ . '/../config.php';
  $url  = rtrim($site['site_url'], '/');
  $esc  = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); };

  // [下載網址, 顯示名稱]
  $files = [
    [$url . '/assets/dl/painpoint-deck.pdf?v=2',             '《痛點》簡報全文'],
    [$url . '/assets/dl/painpoint-pain-card.pdf?v=1',        'P.A.I.N. 隨身卡・列印版'],
    [$url . '/assets/dl/painpoint-pain-card-mobile.pdf?v=1', 'P.A.I.N. 隨身卡・手機版'],
  ];
  $intro = '這是你的下載包:《痛點》簡報,加上那張 P.A.I.N. 隨身卡(列印版＋手機版)。卡片印一張帶在身邊,動手前先把四個問題問過一遍。';

  // ---- 純文字版(備援) ----
  $lines = ['《痛點》簡報與 P.A.I.N. 隨身卡 — 你的下載連結', '', $intro, ''];
  foreach ($files as $f) { $lines[] = $f[1] . ':' . $f[0]; }
  $lines[] = '(若連結沒反應,複製貼到瀏覽器即可)';
  $lines[] = '';
  $lines[] = '──';
  $lines[] = '想把卡片上的四個問題拿來量一個點子,做一次免費點子體檢:' . $url . '/tool';
  $lines[] = '想讀整套方法(免費試讀):' . $url . '/read';
  $lines[] = '';
  $lines[] = '—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者';
  $text = implode("\n", $lines);

  // ---- HTML 版 ----
  $h  = '<div style="font-family:-apple-system,BlinkMacSystemFont,\'Noto Sans TC\',sans-serif;color:#1a1a1a;line-height:1.75;font-size:15px;max-width:560px;margin:0;text-align:left">';
  $h .= '<p style="margin:0 0 16px;font-size:17px"><b>《痛點》簡報與 P.A.I.N. 隨身卡 — 你的下載連結</b></p>';
  $h .= '<p style="margin:0 0 22px;color:#3a3733">' . $esc($intro) . '</p>';
  foreach ($files as $f) {
    $h .= '<p style="margin:0 0 12px"><a href="' . $esc($f[0]) . '" style="display:inline-block;background:#b59410;color:#fff;text-decoration:none;font-weight:700;padding:11px 20px;border-radius:8px">↓ ' . $esc($f[1]) . '</a></p>';
  }
  $h .= '<hr style="border:0;border-top:1px solid #e3ddd1;margin:18px 0 18px">';
  $h .= '<p style="margin:0 0 4px"><a href="' . $esc($url) . '/tool" style="color:#b59410">把四個問題拿來量一個點子(免費點子體檢)→</a></p>';
  $h .= '<p style="margin:0 0 18px"><a href="' . $esc($url) . '/read" style="color:#b59410">讀整套方法(免費試讀)→</a></p>';
  $h .= '<p style="margin:0;color:#8a857c">—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者</p>';
  $h .= '</div>';

  $from = $cfg['from_name'] ? ($cfg['from_name'] . ' <' . $cfg['from_email'] . '>') : $cfg['from_email'];
  resend_send($cfg['resend_api_key'], $from, $email, '你的《痛點》簡報與 P.A.I.N. 隨身卡下載連結', $h, $text);
}

/**
 * 寄「讀者專屬好禮」給買書回來歸因的人(/claim 頁)。經 Resend;沒設定就略過、不阻斷。
 * 好禮檔案做好放進 /assets/dl/ 後,把對應那筆的最後一欄改成 true,信裡就會出現下載連結;
 * 在那之前(全部 false)寄的是「收到了、好禮整理中」確認信——歸因(標籤+名單)此刻已完成。
 * ⚠️ 這份清單要與 site/claim.php 前台的 FILES 保持同步。
 */
function send_claim_bonus($email, $cfg) {
  if (empty($cfg['resend_api_key']) || empty($cfg['from_email'])) return;
  $site = require __DIR__ . '/../config.php';
  $url  = rtrim($site['site_url'], '/');
  $esc  = function ($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); };

  // [下載網址, 顯示名稱, 已就緒?]。PDF 由 tools/build-anthology.php 生成;換檔後進版 ?v=、並同步 site/claim.php 的 FILES。
  $all = [
    [$url . '/assets/dl/painpoint-anthology.pdf?v=2', '《痛點》讀者精選拆書 15 篇(PDF)', true],
  ];
  $files = array_values(array_filter($all, function ($f) { return $f[2] === true; }));
  $from  = $cfg['from_name'] ? ($cfg['from_name'] . ' <' . $cfg['from_email'] . '>') : $cfg['from_email'];

  // 好禮檔案還沒就緒 → 寄確認信(歸因已成,先安撫、之後再補)。
  if (!$files) {
    $text = implode("\n", [
      '收到了,謝謝你買《痛點》。',
      '',
      '讀者專屬好禮(燒掉五百萬完整時間軸、P.A.I.N. 體檢工作表)正在做最後整理,弄好我第一個 email 你。',
      '',
      '──',
      '在等的這段,先把書裡那把尺拿來量一個真的點子:' . $url . '/tool',
      '看我用同一把尺拆別人的書:' . $url . '/lens',
      '',
      '—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者',
    ]);
    $h  = '<div style="font-family:-apple-system,BlinkMacSystemFont,\'Noto Sans TC\',sans-serif;color:#1a1a1a;line-height:1.75;font-size:15px;max-width:560px;margin:0;text-align:left">';
    $h .= '<p style="margin:0 0 16px;font-size:17px"><b>收到了,謝謝你買《痛點》</b></p>';
    $h .= '<p style="margin:0 0 22px;color:#3a3733">讀者專屬好禮(燒掉五百萬完整時間軸、P.A.I.N. 體檢工作表)正在做最後整理,弄好我第一個 email 你。</p>';
    $h .= '<hr style="border:0;border-top:1px solid #e3ddd1;margin:0 0 18px">';
    $h .= '<p style="margin:0 0 4px"><a href="' . $esc($url) . '/tool" style="color:#b59410">先把那把尺拿來量一個真的點子 →</a></p>';
    $h .= '<p style="margin:0 0 18px"><a href="' . $esc($url) . '/lens" style="color:#b59410">看我用同一把尺拆別人的書 →</a></p>';
    $h .= '<p style="margin:0;color:#8a857c">—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者</p>';
    $h .= '</div>';
    resend_send($cfg['resend_api_key'], $from, $email, '收到了,謝謝你買《痛點》(讀者好禮整理中)', $h, $text);
    return;
  }

  // 好禮已就緒 → 寄下載連結。
  $intro = '謝謝你買《痛點》。這是讀者專屬好禮——我用書裡同一把 P.A.I.N. 之尺,拆過最經典的 15 本商業書(精實創業、定位、黑天鵝、致富心態……),照書的 P→A→I→N 順序整理成一份 PDF。挑你現在最卡的那一格先讀。';
  $lines = ['你的《痛點》讀者好禮 — 下載連結', '', $intro, ''];
  foreach ($files as $f) { $lines[] = $f[1] . ':' . $f[0]; }
  $lines[] = '(若連結沒反應,複製貼到瀏覽器即可)';
  $lines[] = '';
  $lines[] = '──';
  $lines[] = '讀的時候,手邊放一個你正在想的點子,讀一段、就量一下:' . $url . '/tool';
  $lines[] = '想看更多?同一把尺,我在站上拆過三百多本:' . $url . '/lens';
  $lines[] = '';
  $lines[] = '—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者';
  $text = implode("\n", $lines);

  $h  = '<div style="font-family:-apple-system,BlinkMacSystemFont,\'Noto Sans TC\',sans-serif;color:#1a1a1a;line-height:1.75;font-size:15px;max-width:560px;margin:0;text-align:left">';
  $h .= '<p style="margin:0 0 16px;font-size:17px"><b>你的《痛點》讀者好禮</b></p>';
  $h .= '<p style="margin:0 0 22px;color:#3a3733">' . $esc($intro) . '</p>';
  foreach ($files as $f) {
    $h .= '<p style="margin:0 0 12px"><a href="' . $esc($f[0]) . '" style="display:inline-block;background:#b59410;color:#fff;text-decoration:none;font-weight:700;padding:11px 20px;border-radius:8px">↓ ' . $esc($f[1]) . '</a></p>';
  }
  $h .= '<hr style="border:0;border-top:1px solid #e3ddd1;margin:18px 0 18px">';
  $h .= '<p style="margin:0 0 4px"><a href="' . $esc($url) . '/tool" style="color:#b59410">手邊放一個點子,讀一段就量一下 →</a></p>';
  $h .= '<p style="margin:0 0 18px"><a href="' . $esc($url) . '/lens" style="color:#b59410">同一把尺,我拆過三百多本 →</a></p>';
  $h .= '<p style="margin:0;color:#8a857c">—— 山姆(謝冠生)・《痛點 P.A.I.N.》作者</p>';
  $h .= '</div>';

  resend_send($cfg['resend_api_key'], $from, $email, '你的《痛點》讀者專屬好禮(下載連結)', $h, $text);
}

/** 經 Resend HTTPS API 寄一封信。最佳努力:失敗只記 log,不阻斷主流程。 */
function resend_send($apiKey, $from, $to, $subject, $html, $text) {
  $payload = ['from' => $from, 'to' => [$to], 'subject' => $subject, 'html' => $html];
  if ($text !== '') $payload['text'] = $text;

  $ch = curl_init('https://api.resend.com/emails');
  curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_UNICODE),
    CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $apiKey, 'Content-Type: application/json', 'Accept: application/json'],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 8,
  ]);
  $res  = curl_exec($ch);
  $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  if ($res === false || $code >= 300) {
    error_log('Resend send failed (' . $code . '): ' . curl_error($ch) . ' ' . substr((string) $res, 0, 300));
    return false;
  }
  return true;
}
