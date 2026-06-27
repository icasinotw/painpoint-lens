# painpoint-lens

[painpoint.tw](https://painpoint.tw) 的網站原始碼 + 「/lens 拆書」雲端出版引擎。

## 這是什麼

- **公開 repo** —— 因為網站本來就是公開的線上站台,所以 GitHub Actions 對它免費無上限(用來在雲端寫拆書並部署)。
- **流程**:Telegram bot → 主機 webhook → `repository_dispatch (write-review)` → 本 repo 的 Actions 跑 Claude(用訂閱 token)寫拆書 → 三道品質閘門(`php -l` / `count-contrast` / render)→ rsync 部署到 Cloudways → 回報 `/lens/{slug}` 網址。

## 安全

- 機密(Telegram bot token、Cloudways 部署金鑰、Claude OAuth token 等)**只放 GitHub Actions secrets,絕不進版控**。版控內的設定範本見 [`site/api/config.sample.php`](site/api/config.sample.php);真正的值在主機 `private_html` 與 Actions secrets。
- 觸發工作流需要寫入權限或 dispatch PAT,外人無法觸發 → secrets 不會外洩。

## 不在這個 repo 的東西

《痛點》書稿與商業策略放在另一個**私有** repo,與本公開 repo 完全分離。
