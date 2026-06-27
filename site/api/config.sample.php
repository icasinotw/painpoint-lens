<?php
/**
 * 機密設定範本。實際部署時複製成 api/config.php 並填值(api/config.php 不進版控)。
 * 沒有 api/config.php 也能跑:名單會退而存進 api/_data/subscribers.csv,Kit 推送略過。
 */
return [
  // Kit (ConvertKit) 名單。新訂閱者會被建立並貼上指定標籤(每個網站用不同標籤分群)。
  'kit_api_key'    => '',   // Kit > Settings > Advanced > API:API Key
  'kit_api_secret' => '',   // 建立標籤等管理操作才需要;一般推送只用 api_key
  'kit_tag_id'     => '',   // 這個網站對應的標籤 ID(例:painpoint)

  // 資料庫(Cloudways 會給)。留空 = 用 CSV 檔備援儲存。
  'db_host' => '',
  'db_name' => '',
  'db_user' => '',
  'db_pass' => '',

  // 寄信(體檢報告)。改用 Resend 寄信服務:Cloudways 內建 mail() 在 painpoint.tw 的
  // SPF/DMARC 下一定被當垃圾信,所以報告改由 Resend 用「已驗證網域」寄出(進收件匣)。
  // 填好 Resend API key、並在 Resend 驗證 painpoint.tw 網域(DNS 加幾筆記錄)後即生效;
  // 留空則不寄報告、其餘流程(收名單、貼標籤)仍正常。
  'from_email'      => 'service@painpoint.tw',
  'from_name'       => '痛點 P.A.I.N.',
  'resend_api_key'  => '',   // Resend > API Keys 產生的金鑰(re_...);留空則略過寄報告

  // 安全
  'rate_limit_per_min' => 6,         // 同一 IP 每分鐘最多幾次訂閱請求
  // 名單/限流資料夾。強烈建議設成「web root 之外」的絕對路徑(如 Cloudways 的 private_html),
  // 這樣 subscribers.csv 永遠不會被 Nginx/Apache 當靜態檔吐出。留空則退回 api/_data(靠 .htaccess 保護)。
  'data_dir' => '',                  // 例:'/home/master/applications/xxxx/private_html/painpoint-data'
];
