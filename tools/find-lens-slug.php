<?php
/**
 * tools/find-lens-slug.php
 * 用「中文書名」反查 /lens 文章 slug —— 給 write-review 工作流〈寫書前先查、已上線就跳過〉用。
 *
 * 背景:看門狗會把「寫成功、上線成功、只是回報那通掉了」的書丟回隊列重寫(實測踩過)。
 *      開寫前先拿書名對到 slug、再確認線上頁面真的在,就能跳過整篇沒必要的重寫。
 *
 * 用法:php tools/find-lens-slug.php "資本主義沒告訴你的23件事" [path/to/_articles.php]
 *   對到 → 印出 slug(單行)、exit 0
 *   對不到 → 不印任何東西、exit 0(呼叫端就照原本流程正常重寫,安全退場)
 *
 * 對應規則:_articles.php 每筆 kicker 固定是「拆解《書名》」,書名包在《》裡,是最可靠的鍵
 *          (title 不一定含書名)。為避免「把 A 書誤判成已上線的 B 書」這種危險偽陽性,
 *          只認【書名號完整夾住的精準相等/字面】:
 *            ① kicker 的《》內容 === 書名;② 退一步認任一欄位出現「《書名》」字面。
 *          寧可對不到(頂多照舊重寫一次,無害)也不要對錯(把沒上線的書當成已上線而跳過)。
 *          ——「到底有沒有真的上線」由呼叫端再用 HTTP 200 確認,本工具只負責「書名→slug」。
 */

$book = isset($argv[1]) ? trim((string)$argv[1]) : '';
$path = isset($argv[2]) ? (string)$argv[2] : (__DIR__ . '/../site/lens/_articles.php');
if ($book === '' || !is_file($path)) { exit(0); }

$arr = include $path;
if (!is_array($arr)) { exit(0); }

// ① 精準:kicker 的《》內容 === 書名
foreach ($arr as $a) {
    if (!is_array($a) || empty($a['slug'])) continue;
    if (preg_match('/《([^》]+)》/u', (string)($a['kicker'] ?? ''), $m)
        && trim($m[1]) === $book) {
        echo $a['slug'];
        exit(0);
    }
}

// ② 退一步:任一欄位出現「《書名》」完整字面(仍要求被書名號夾住,避免子字串誤判)
$needle = '《' . $book . '》';
foreach ($arr as $a) {
    if (!is_array($a) || empty($a['slug'])) continue;
    foreach (['kicker', 'title', 'blurb'] as $f) {
        if (mb_strpos((string)($a[$f] ?? ''), $needle) !== false) {
            echo $a['slug'];
            exit(0);
        }
    }
}

exit(0);
