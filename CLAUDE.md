# painpoint-lens — /lens 拆書雲端寫作規則(公開 repo)

> 這個 repo 是 painpoint.tw 的網站原始碼 + 「/lens 拆書」出版引擎。GitHub Actions 在雲端跑 Claude 寫拆書、過品質閘門、部署上線。
> 書稿與商業策略**不在這裡**(在另一個私有 repo)。本檔只放「把一本商業書寫成 /lens 拆書」需要的規則。寫作方法論細節見兩支 skill。

## 觸發鏈(雲端工作流 .github/workflows/write-review.yml 會跑)

一句「請撰寫《X》書評」進來 → 一路跑到底,中途不分段問:

1. **喵喵書評寫到定稿** —— 照 [`skills/meowbooks-book-review/SKILL.md`](skills/meowbooks-book-review/SKILL.md):P.A.I.N. 審書尺、聲音 DNA、反 AI 味清單、〈定稿三查〉(實跑工具)。
2. **自動轉成 painpoint 拆書** —— 照 [`skills/painpoint-lens/SKILL.md`](skills/painpoint-lens/SKILL.md):先做適配檢查(A/B/C 模式),輸出兩檔 + 補 `site/lens/_articles.php`,實跑 `fix-punctuation.py` / `count-contrast.py` / `count-cta.py` / `php -l` / 本機 render。
3. **commit + push** —— 只 `git add` 相關檔(絕不 `git add -A`),繁中 commit 訊息 + `Co-Authored-By: Claude` trailer;`git pull --rebase` 後 `git push origin main`。部署由 CI 後續步驟自動接手(這個環境沒有、也不要執行 deploy.sh / rsync / ssh)。

**最高鐵則:全自動不准讓任一篇品質下降。**
- 當兩道各自全神貫注的 pass 寫:書評收乾淨,才開始寫拆書。
- 兩篇的機械閘門全部真的跑、一個都不跳。
- 拆書是換角度重組的獨家文,不是書評的改寫(不同開場、不同結構、不照搬原句)——否則與 meowbooks 重複內容,兩邊都被 Google 打。
- 自審沒過就不准往下走:反差句超標 / 半形殘留 / 撞句 / `php -l` 不過 / render 壞 → 先修到過,過了才准 commit。

## 書評(meowbooks)定稿要點

以 `meowbooks-book-review` skill 當尺:
- **P.A.I.N. 審書尺**:這本書解誰的痛、痛多深、方法真能把痛變輕、讀完能不能換成第一筆改變。
- **聲音 DNA**:短句重擊、數字變感受、我講故事/你收教訓、【打比方】、破折號補刀、不說教金句、全形標點。
- **〈反 AI 味自檢清單〉**:逐條跑過,把 AI 味壓到最低(最高鐵則)。
- **〈定稿三查〉要『真的做』、不是在心裡做**(雲端跑得了工具,就一定要實跑):
  - **反差句**:把全篇「否定一個、抬高另一個」的對立句逐句編號數出來,實跑 `python3 tools/count-contrast.py`,超過 2 句砍到剩 1～2 句最有重量的(悖論型書上限 1、結尾不得用「不是 X,是 Y」收)。
  - **撞句**:〈撞句黑名單〉逐句機械比對,盯死開場第一句、「帶得走」段開頭、結尾收束句。
  - **標點**:實跑 `python3 tools/fix-punctuation.py` 把中文行內半形標點全形化,並抓殘留半形句點與 Markdown 符號。
- **輸出契約**:純正文、零 Markdown、全形標點、署名正確、文末只附「評分＋分類」給後台。第一個字就是書評正文,沒有開場白。

## 轉成 painpoint /lens 拆書

以 `painpoint-lens` skill 當尺。**為什麼不是複製貼上:** meowbooks 那篇是「書評」(判決、誰該買、給星),painpoint 這篇是「拆書」(拿 P.A.I.N. 之尺一格一格戳這本書);不同開場、不同結構、不照搬原句,且拿掉評分/分類三行與判決收尾。

**動筆前必做『適配檢查』(P.A.I.N. 是鏡頭不是模具):**
- 書在講「幫客戶解決痛」(創業/行銷/商業模式/策略)→ 模式 A 走完整四格。
- 書只沾到一兩格 → 模式 B 鬆綁、只深寫那一兩格。
- 書在講「改變你自己/大腦/管錢/管組織」(原子習慣、推力那類)→ 模式 C 不套四格,改用《痛點》世界觀另長角度。
- **寧可只接一個點寫深寫真,不硬填四格填出假。**

**輸出:**
1. 兩個檔到 `site/lens/`:`{slug}.php`(頁面,slug = 英文書名 kebab-case)+ `_content/{slug}.html`(正文)。
2. 文末頁尾由 `partials/reading.php` 自動合成,別自己組;`.php` 的 funnel 只寫 title + 一句不提買書的 body、不設 ghost、prev/next 設 null。
3. **在 `site/lens/_articles.php` 最上面加一筆**(slug/kicker/title/blurb/category/date,最新在前)——列表頁與 sitemap 都讀這份自動長。`category` 寫「主／次」,主分類一律從受控清單挑(策略/創新/行銷/管理/領導/行為/創業/理財/生產力/敘事/其他),別亂開新詞。
4. **內鏈硬上限**:整篇最多 1 個 `/tool`(能 0 就 0、結尾段不放、行為/理財/生產力/領導/敘事/管理那類「改變你自己」的書預設 0)、最多 1 個 `/book`(多數篇 0);絕不把整句做成連結、同段不並排 /tool 與 /book。
5. 書況一律「電子書已上市」,絕不寫即將上市/實體書/留 email 通知。

**`/lens` 設計憲法(任何篇數都要守):** 1) 任何規模都頁面乾淨好讀好找。 2) 全程符合 Google SEO 與 E-E-A-T。 3) 內鏈節制(見上)。 4) 高品質、絕不與 meowbooks 重複。 5) 不硬塞 P.A.I.N.(見適配檢查)。

**CTA 北極星(凌駕導購):** 所有 CTA 的關鍵是讓讀者在站上停留更久——多用工具、一篇接一篇看拆書;書的導購輕輕一句、適度就好,別當每頁硬 CTA。每多讀一篇拆書,買書的種子已自然埋下;過度導購反而毀掉拆書的價值感。

## 收尾工具(雲端 CI 會驗,務必實跑)

- `python3 tools/fix-punctuation.py` —— 正文全形化(剪貼簿:`pbpaste | python3 tools/fix-punctuation.py | pbcopy`)。
- `python3 tools/count-contrast.py site/lens/_content/{slug}.html` —— 反差句/結尾/撞句閘門,沒過不部署。
- `python3 tools/count-cta.py site/lens/_content/{slug}.html` —— /tool、/book 各 ≤1、結尾不導工具,過量不部署。
- `php -l`(全 site)+ 本機 `php -S localhost:8080 site/router.php` render 測 `/lens/{slug}`。
