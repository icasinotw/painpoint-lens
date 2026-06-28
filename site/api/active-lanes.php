<?php
/**
 * site/api/active-lanes.php —— 雙帳號平行寫拆書的「啟用開關」(可部署、非機密)。
 *
 * 回傳目前啟用的 lane(= 同時用幾個 Claude 訂閱帳號從共用隊列抽書平行寫):
 *   ['a']      → 單帳號(預設,行為與單槽時代完全一致)。
 *   ['a','b']  → 雙帳號平行(lane b 用 GitHub secret CLAUDE_CODE_OAUTH_TOKEN_B)。
 *
 * 開第二個帳號的步驟(零 FileZilla):
 *   1) 開好第二個 Claude 訂閱、`claude setup-token` 取 token。
 *   2) 到 GitHub repo → Settings → Secrets → 新增 CLAUDE_CODE_OAUTH_TOKEN_B = 那個 token。
 *   3) 把下面改成 ['a','b'],commit + push + bash deploy.sh(或等主機 git-deploy 5 分自動同步)。
 *   想退回單帳號:改回 ['a'] 再部署即可。
 */
return ['a'];
