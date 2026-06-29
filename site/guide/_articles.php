<?php
/**
 * 創業指南(關鍵字樞紐頁)清單 —— 單一真相來源(single source of truth)。
 *
 * 「創業指南」是接住通用搜尋詞(如「如何驗證創業點子」)的 keyword-first 樞紐頁:
 * H1 就是關鍵字,內文是有料的原創長文,並大量內鏈到相關 /lens 拆書、/ask 拆問題、
 * /tool、/fieldkit、電子書 —— 站在這些深內容之上當樞紐,把搜尋權重往下分流。
 * 不是薄門口頁(doorway):每篇都要真的有料,寧缺勿濫。
 *
 * 新增一篇 = ① 在這份清單「最上面」加一筆(最新在前)
 *           ② 建 guide/{slug}.php 與 guide/_content/{slug}.html
 * 列表頁(guide/index.php)與 sitemap.php 都讀這份清單自動長,不要再手動改它們。
 *
 * 每筆欄位:slug / kicker / title(=H1 關鍵字)/ blurb / category / date /(選填)updated。
 */
return [
  [
    'slug'     => 'validate-startup-idea',
    'kicker'   => '創業指南 · 驗證點子',
    'title'    => '如何驗證創業點子',
    'blurb'    => '驗證最貴的錯,是驗錯了東西——忙著驗「做不做得出來」,卻跳過「有沒有人痛到願意付錢」。用 P.A.I.N. 之尺把驗證排出順序:先找正在痛的真名、看他已為這個痛付過什麼、用最小的東西收第一筆錢,並避開「問你會不會買」這類假驗證。',
    'category' => '創業',
    'date'     => '2026-06-30',
  ],
];
