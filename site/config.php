<?php
/**
 * 公開站台設定(可進版控)。
 * 機密設定(Kit API key、資料庫帳密)放在 api/config.php — 不進版控,見 api/config.sample.php。
 * 部署到 Cloudways 時,把 site_url 改成正式網址即可。
 */
return [
  'site_name'   => '痛點 P.A.I.N.',
  'site_url'    => getenv('SITE_URL') ?: 'https://painpoint.tw', // 正式網址(不要結尾斜線)
  'tagline'     => '動手前先問:這個點子,值不值得做。',
  'desc'        => '一套用「痛點」這把尺檢視點子值不值得做的方法。免費的 P.A.I.N. 點子體檢工具,加上一位還在賠錢的創業者,誠實攤開四年近五百萬冤枉路換來的四個問題。',
  'author'      => '山姆(謝冠生)',
  'author_role' => '喵喵書評創辦人',
  'contact_email' => 'service@painpoint.tw', // 同網域信箱(比 gmail 更可信、防詐加分);記得在郵件服務開好這個信箱

  // 註:本站不在站上販售商品、不收款。《痛點》為電子書,於各大電子書平台販售;
  //     官網只提供免費工具、免費試讀,與「痛點電子報」的 email 名單;電子書導購到各平台。

  'newsletter_name' => '痛點電子報',
];
