# 雲端寫書評(手機觸發、不用開 Mac)— 設定一次就好

這個 repo 有一支 GitHub Actions:[`.github/workflows/write-review.yml`](workflows/write-review.yml)。
設定好之後,你**在手機上打一個書名**,GitHub 的雲端就會跑完整條鏈(照 `CLAUDE.md` 總則):

> 喵喵書評定稿 → painpoint 拆書 → 自審(fix-punctuation / count-contrast / php -l / 本機 render)
> → commit + push → 三道機械閘門都過了才部署到 Cloudways → 回報 `/lens/{slug}` 網址。

跑的是**你現有的 Claude 訂閱**,你的 Mac 完全不用開。

---

## 一、設兩個 Secret(只做一次)

到 GitHub:**這個 repo → Settings → Secrets and variables → Actions → New repository secret**,加兩個:

### 1) `CLAUDE_CODE_OAUTH_TOKEN` —— 用你的 Claude 訂閱跑
在你自己的終端機跑一次:

```bash
claude setup-token
```

照畫面登入,它會吐一條 token(一年效期、走你 Max 額度,不另外按 token 付 API 費)。
把那條 token 整段複製 → 貼進這個 secret。

### 2) `CLOUDWAYS_SSH_KEY` —— 部署到主機用
這把私鑰**你自己貼**(我不會去讀你的私鑰)。在你的終端機:

```bash
cat ~/.ssh/cloudways-painpoint
```

把輸出**整段**(含開頭 `-----BEGIN ...` 與結尾 `-----END ...` 兩行)複製 → 貼進這個 secret。

> 這就是 `deploy.sh` 在用的同一把專用部署金鑰,公鑰早就授權在 Cloudways 了,**不必再去後台貼一次**。
> 想撤銷:到主機 `authorized_keys` 把那把對應的行刪掉即可。

---

## 二、手機怎麼觸發

1. 手機開 **GitHub App**(或瀏覽器開 github.com 進這個 repo)。
2. 進 **Actions** 分頁 → 左邊點 **「撰寫書評 → 上線 painpoint /lens」**。
3. 右上 **Run workflow** → 在「書名」欄打 `原子習慣`(不用加《》)→ **Run**。
4. 點進那次 run 看進度。跑完:
   - **上線網址**會出現在 run 的 **Summary**(`https://painpoint.tw/lens/{slug}`)。
   - **喵喵書評定稿**在 run 的 **Artifacts**(`meowbooks-review`)可下載,貼到 meowbooks 用。

> 註:`workflow_dispatch` 的手動觸發,有些版本的 GitHub **App** 介面不一定看得到輸入框;
> 看不到就改用**手機瀏覽器**開 github.com(桌面版介面)跑,一定有。

---

## 三、跑起來會發生什麼 / 你最在意的品質

- 寫作是**同一個模型、照同一份 `CLAUDE.md` + 兩支 skill**,品質帶跟你本機一致。
- 三道**機械閘門設成 CI 硬性檢查,沒過就讓這次失敗、不部署**,並在 run 裡標紅原因:
  1. `php -l` 全站語法
  2. `count-contrast.py` 反差句 / 結尾 / 撞句(出現「未過」就擋下)
  3. 本機 render 測 `/lens/{slug}` 真的開得起來
- 等於把你那條「自審沒過不准部署」從「靠記得跑」升級成「程式強制擋」。壞的不會上線。
- 這條鏈**只**把 painpoint 拆書推上線;**不會**自動貼 meowbooks(書評定稿給你當 Artifacts 自己貼)。

---

## 四、第一次跑可能要補的兩件事(若報錯才處理)

- **若報「需要安裝 Claude GitHub App」**:到 <https://github.com/apps/claude> 把它裝到這個 repo(一次性)。
- **若報「unknown model」**:編輯 workflow,把 `claude_args` 裡的 `--model claude-opus-4-8` 那行刪掉,讓它用預設模型。

---

## 五、之後想要「Telegram 打字觸發」(第二階段)

workflow 已經預留 `repository_dispatch`(事件名 `write-review`)。第二階段只要加一個
**免費、永遠在線的 Cloudflare Worker**:收你 Telegram bot 的訊息 → 驗證是你本人 → 打 GitHub API:

```
POST https://api.github.com/repos/icasinotw/pain-point-book/dispatches
{ "event_type": "write-review", "client_payload": { "book_name": "原子習慣" } }
```

就能「Telegram 打書名 → 雲端跑 → 把 `/lens` 網址回傳 Telegram」。要做時跟我說,我把 Worker 寫好。
