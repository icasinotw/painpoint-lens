# 痛點 P.A.I.N. — 網站

行銷／工具站,部署在 **Cloudways**(Apache + PHP)。輕量自建:靜態 HTML + 少量 PHP,核心互動工具是純前端 JS。

## 策略(四種收益,互不打架)
- **免費試讀**(前言 + 1–2 章 + P.A.I.N. 總覽)→ 餵 SEO、建立權威、給人嚐味道。
- **免費工具**(點子體檢 P.A.I.N. 雷達圖)→ 當磁鐵,不擋入口、可分享。
- **高意圖才收 email**(儲存多個點子 / 匯出 PDF / 報告寄信箱)→ Kit (ConvertKit) 名單(自動貼網站標籤分群)→ 電子報 → 未來 offer。
- **電子書**(《痛點》於各大電子書平台販售)→ 官網不在站上收款,只用 email 名單在電子書上市時通知,並導流到平台購買。

## 目錄
```
site/
  config.php           公開設定(站名、網址)— 部署時改 site_url
  _init.php            載入設定 + 小工具函式(每頁先 require)
  index.php            首頁(hero + 《痛點》全書精華:五大區塊可展開卡)
  tool.php             點子體檢工具頁
  404.php
  partials/            head / header / footer 共用片段
  assets/
    css/style.css      設計系統(對齊書封:紙白底、墨黑、金 #B59410)
    js/main.js         導覽列開合
    js/tool.js         P.A.I.N. 體檢引擎 + 雷達圖 + 分享卡(全前端,不上傳)
    img/               favicon、cover.png
  .htaccess            乾淨網址、快取、gzip、安全標頭
  robots.txt
  router.php           ★ 本機開發用(模擬 .htaccess);正式環境用 Apache,不會用到
```

## 本機預覽
```bash
cd site
php -S 127.0.0.1:8080 router.php
# 開 http://127.0.0.1:8080
```

## 部署到 Cloudways(摘要,完整流程見後續)
1. 在 Cloudways 建一個 **PHP** App(不是 WordPress)。
2. 把 `site/` 內容上傳到 App 的 `public_html/`(SFTP 或 git)。
3. 複製 `api/config.sample.php` → `api/config.php`,填 Kit API key + 標籤 ID、(可選)DB、寄件信箱。
4. 改 `config.php` 的 `site_url`、`contact_email` 為正式值;`robots.txt` 同步換網址。
5. 確認 Apache 有開 `mod_rewrite`(Cloudways 預設有),`.htaccess` 生效。
6. 上線後在 `.htaccess` 打開「強制 https」那段(或用 Cloudways 後台一鍵)。

## 上線資安檢查表(Seg3 收 email 後務必做)
- [ ] **名單資料移出 web root**:`api/config.php` 設 `data_dir` 為 public_html 之外的絕對路徑(如 Cloudways private_html)。否則 Nginx 可能直接吐出 `subscribers.csv`(內含 email/IP)。
- [ ] 部署後實測 `curl -i https://網址/api/_data/subscribers.csv` 與 `/api/config.php` 必回 **403/404**,不是檔案內容。
- [ ] (可選) Kit 帳號開啟 **double opt-in**;目前為單階段訂閱(API 直接貼標籤入名單),站上已有蜜罐 + IP 限流擋機器人。
- [ ] `from_email` 用同網域信箱並設好 SPF/DKIM(寄件信譽 + 防詐)。

## 重建試讀頁(改了章節 .md 後)
```bash
node site/build/gen-reading.mjs   # 需要 pandoc;會剝掉內部 <!-- 註記 -->、產生 read/_content/*.html
```

## 進度
- ✅ Seg1:骨架 + 設計系統 + 首頁 + 免費 P.A.I.N. 體檢工具(雷達圖、分享卡)
- ✅ Seg2:免費試讀(前言/第1章/P.A.I.N. 框架總覽)— 手機優先大字、可調字級(小/標準/大/特大)+ 深色模式 + 閱讀進度條 + 文末導購 + sitemap.xml;內容由 chapters/*.md 經 gen-reading.mjs 產生(0 內部標記)
- ✅ Seg3:高意圖 email 收集(**Kit (ConvertKit)**,自動貼網站標籤分群)+ 匯出 PDF 商業計畫(列印)+ 儲存/比較多點子 + 隱私權頁;`api/` 後端(驗證/蜜罐/限流/同源),已過對抗式安全審查(CSV 注入中和、寄信只 on-new、資料可移出 web root、focus trap)
- ✅ /book:改為「電子書即將上市,留 email 通知上市」(官網不在站上收款、不串金流;上市後導流到各大電子書平台;舊藍新金流/下載串接已整批移除)
- ✅ 部署上 Cloudways(一鍵 deploy.sh)
- ✅ 首頁改版:《痛點》全書精華,五大區塊 Gamma 風格可展開卡

> 官網定位:免費工具 ＋ 免費試讀 ＋ 收 email;《痛點》以電子書於各大電子書平台販售,站上不收款,導流到平台購買。
