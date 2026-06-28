<?php
/**
 * site/lens/_articles.php —— 拆書文章清單「loader」(單一真相來源的讀取入口)。
 *
 * 為什麼是 loader 而不再是一份大陣列(2026-06-29 碎片化):
 *   原本每寫一篇拆書,就往這份大陣列「最上面」prepend 一筆。當兩個 Claude 帳號平行寫書時,
 *   兩條 lane 會同時改這同一份檔 → git rebase 必衝突、rsync 還會整檔覆蓋掉另一篇 → 掉書。
 *   改法:① 歷史 208 筆凍結在 _articles-base.php(永不再動,維持原順序);
 *         ② 每篇新拆書各自新建一個碎片 _articles.d/{slug}.php(只回傳該篇一筆)。
 *   兩條 lane 只各碰自己的碎片檔(disjoint)→ 永遠不會衝突、不會蓋到對方。
 *
 * ★ 新增一篇拆書 = 建 _articles.d/{slug}.php(回傳一筆陣列)+ 建 {slug}.php 與 _content/{slug}.html。
 *   絕對不要再編輯這支 loader,也不要動 _articles-base.php(動了就讓平行寫書又撞同一檔、碎片化全失效)。
 *
 * 順序(與碎片化前完全一致):碎片(新)永遠排在最前、彼此依 seq 降冪 → date 降冪 → slug 升冪;
 *   base 的 208 筆接在後面、原封維持原陣列順序。碎片可選填整數 'seq'(越大越前);不填就靠 date/slug 排,
 *   兩條 lane 同時各寫一篇也不會撞號(各自獨立檔,撞號頂多影響兩篇相對順序、不掉檔、不衝突)。
 *
 * 壞碎片免疫(硬性):rsync / 主機 git-deploy 同步到一半時,glob 可能掃到「還沒寫完」的碎片檔。
 *   每片都包 try/catch,任一碎片 parse error 或欄位不齊就「跳過該片」,
 *   絕不讓整份清單炸掉而害 /lens 全站 500(已實測 PHP 的 include ParseError 可被 \Throwable 接住)。
 *
 * 讀取者(index.php / sitemap.php / c/index.php / partials/reading.php)完全不必改:
 *   require 這支後拿到的陣列形狀一模一樣。每筆欄位:slug / kicker / title / blurb / category / date(+選填 updated / seq)。
 */

// 整段包進 IIFE(立即執行閉包):所有區域變數鎖在閉包內,絕不外洩到 require 這支的呼叫者作用域。
// (require/include 會在呼叫者的變數範圍內執行;若在頂層用 $base/$dir 等變數,會蓋掉 sitemap.php 等檔同名變數。
//  原本的純 `return [...]` 不含變數所以沒這問題,改成 loader 後必須自我隔離。)
return (static function () {
    $dir = __DIR__;

    // base:凍結的歷史清單(維持原始陣列順序,當作最舊的一段)
    try {
        $base = include $dir . '/_articles-base.php';
    } catch (\Throwable $e) {
        $base = [];
    }
    if (!is_array($base)) $base = [];

    // 碎片:每篇一檔。壞碎片免疫——任一片 parse error / 形狀不合都只跳過該片,不影響其餘與 base。
    $frags = [];
    foreach (glob($dir . '/_articles.d/*.php') ?: [] as $f) {
        try {
            $row = include $f;
        } catch (\Throwable $e) {
            continue;   // 跳過壞片(例:rsync 寫到一半、語法錯)
        }
        if (is_array($row)
            && isset($row['slug'], $row['title'], $row['date'])
            && is_string($row['slug']) && $row['slug'] !== '') {
            $frags[] = $row;
        }
    }

    // 碎片排序:seq 降(沒填視為 0)→ date 降 → slug 升。穩定、可重現、跨 lane 無撞號疑慮。
    usort($frags, function ($a, $b) {
        $sa = (int)($a['seq'] ?? 0);
        $sb = (int)($b['seq'] ?? 0);
        if ($sa !== $sb) return $sb <=> $sa;
        $da = (string)($a['date'] ?? '');
        $db = (string)($b['date'] ?? '');
        if ($da !== $db) return strcmp($db, $da);
        return strcmp((string)$a['slug'], (string)$b['slug']);
    });

    // 碎片(新)在前、base(舊)在後 —— 與碎片化前「往最上面 prepend」的呈現順序一致。
    return array_merge($frags, $base);
})();
