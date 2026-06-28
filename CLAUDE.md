# painpoint-lens — /lens 拆書雲端寫作規則(公開 repo)

> 這個 repo 是 painpoint.tw 的網站原始碼 + 「/lens 拆書」出版引擎。GitHub Actions 在雲端跑 Claude 寫拆書、過品質閘門、部署上線。
> 書稿與商業策略**不在這裡**(在另一個私有 repo)。本檔只放「把一本商業書寫成 /lens 拆書」需要的規則。寫作方法論細節見兩支 skill。

## 進版 / 部署:本機手動改動「沒問題就自動進版上線」授權

山姆在本機請我做的任何網站改動(像調 `/start`、改 partial、修文案),**機械閘門全部通過後就直接自動 commit + push,不必再每次問他確認**;**push 後立刻在本機跑 `bash deploy.sh` 即時部署上線**(SSH 金鑰免密碼、`BatchMode` 非互動,`rsync` 不帶 `--delete`),不必等主機 `git-deploy` 那 5 分鐘——山姆明講要「不等待」(2026-06-28 定)。(deploy.sh 含主機座標、已被 `.gitignore` 擋下不進公開 repo;主機 `git-deploy` 仍會在 push 後自動同步,當作 deploy.sh 跑不動時的後援。)

**「沒問題」= 動到什麼就真的驗什麼、全過,才准 push:**
- 動到 `.php` → `php -l` 該檔(或全 site)無誤 + 本機 `php -S localhost:<port> site/router.php` render 受影響路由無壞。
- 動到 `/lens` 或 `/ask` 正文(`_content/*.html`)→ 額外實跑 `tools/fix-punctuation.py`、`tools/count-contrast.py`、`tools/count-cta.py`,全部過(/lens 拆書再跑 `tools/count-title.py {slug}` 驗標題 ≤32 字、無「；」)。
- **任一閘門沒過 → 停下、不准 push,先修到過或回報山姆**(凌駕本授權,等同觸發鏈最高鐵則)。

**進版規矩(照舊):** 只 `git add` 相關檔(絕不 `git add -A`,別把 `.claude/`、`AGENTS.md`、`docs/` 等無關檔掃進去)、繁中 commit 訊息 + `Co-Authored-By: Claude` trailer、`git pull --rebase origin main` 後 `git push origin main`。push 後跑 `bash deploy.sh` 即時部署,完成後回報 commit hash 與「已即時上線」(必要時順手 curl `https://painpoint.tw/…` 驗一眼)。

## 觸發鏈(雲端工作流 .github/workflows/write-review.yml 會跑)

一句「請撰寫《X》書評」進來 → 一路跑到底,中途不分段問:

1. **喵喵書評寫到定稿** —— 照 [`skills/meowbooks-book-review/SKILL.md`](skills/meowbooks-book-review/SKILL.md):P.A.I.N. 審書尺、聲音 DNA、反 AI 味清單、〈定稿三查〉(實跑工具)。
2. **自動轉成 painpoint 拆書** —— 照 [`skills/painpoint-lens/SKILL.md`](skills/painpoint-lens/SKILL.md):先做適配檢查(A/B/C 模式),輸出兩檔 + 建 `site/lens/_articles.d/{slug}.php` 碎片,實跑 `fix-punctuation.py` / `count-contrast.py` / `count-cta.py` / `count-title.py` / `php -l` / 本機 render。
3. **commit(雲端鏈自己不 push)** —— 只 `git add` 相關檔(絕不 `git add -A`),繁中 commit 訊息 + `Co-Authored-By: Claude` trailer;**commit 完就停、不要 push、不要 `git pull --rebase`**。push 由 CI 步驟在機械閘門全過「之後」才做 rebase-retry(壞稿永不進 main、雙帳號平行寫也不互撞、第三方 recommend 同推也收斂);部署同樣由 CI 後續步驟自動接手(**雲端 CI runner 沒有山姆的 SSH 金鑰,故這條雲端鏈不跑 deploy.sh / rsync / ssh**;本機互動式 session 則照上面「進版 / 部署」那節,push 後直接跑 `bash deploy.sh` 即時上線)。

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
3. **新建一個碎片檔 `site/lens/_articles.d/{slug}.php`**(只 `return` 該篇一筆:slug/kicker/title/blurb/category/date,kicker 固定「拆解《書名》」;最新自動排在前)——列表頁與 sitemap 由 `_articles.php`(已是 loader)讀 base + 所有碎片自動長。**絕不要編輯 `_articles.php`(loader)或 `_articles-base.php`(凍結的歷史 208 筆)——那會讓兩個帳號平行寫書撞同一檔、掉書。** `category` 寫「主／次」,主分類一律從受控清單挑(策略/創新/行銷/管理/領導/行為/創業/理財/生產力/敘事/其他),別亂開新詞。
4. **內鏈硬上限**:整篇最多 1 個 `/tool`(能 0 就 0、結尾段不放、行為/理財/生產力/領導/敘事/管理那類「改變你自己」的書預設 0)、最多 1 個 `/book`(多數篇 0);絕不把整句做成連結、同段不並排 /tool 與 /book。
5. 書況一律「電子書已上市」,絕不寫即將上市/實體書/留 email 通知。

**`/lens` 設計憲法(任何篇數都要守):** 1) 任何規模都頁面乾淨好讀好找。 2) 全程符合 Google SEO 與 E-E-A-T。 3) 內鏈節制(見上)。 4) 高品質、絕不與 meowbooks 重複。 5) 不硬塞 P.A.I.N.(見適配檢查)。

**CTA 北極星(凌駕導購):** 所有 CTA 的關鍵是讓讀者在站上停留更久——多用工具、一篇接一篇看拆書;書的導購輕輕一句、適度就好,別當每頁硬 CTA。每多讀一篇拆書,買書的種子已自然埋下;過度導購反而毀掉拆書的價值感。

## 收尾工具(雲端 CI 會驗,務必實跑)

- `python3 tools/fix-punctuation.py` —— 正文全形化(剪貼簿:`pbpaste | python3 tools/fix-punctuation.py | pbcopy`)。
- `python3 tools/count-contrast.py site/lens/_content/{slug}.html` —— 反差句/結尾/撞句閘門,沒過不部署。
- `python3 tools/count-cta.py site/lens/_content/{slug}.html` —— /tool、/book 各 ≤1、結尾不導工具,過量不部署。
- `python3 tools/count-title.py {slug}`(或 `--all` 全站稽核)—— 標題長度閘門:卡片 `title`／`heading`／`<h1>` 三處同一句、各 ≤32 字、不准含全形分號「；」,超長或塞兩段不部署(防 2026-06-28 那批「作者說 X;你的盲點 Y」整段壓進標題、最長 125 字的漂移重演)。
- `php -l`(全 site)+ 本機 `php -S localhost:8080 site/router.php` render 測 `/lens/{slug}`。

## 規則:推薦商業書(recommend-books 工作流用)

由 `.github/workflows/recommend-books.yml` 觸發(Telegram 打「請推薦我10本經典商業書」/手動 Run)。鐵則:

1. **只推有繁體中文版、且現在還買得到的書** —— 必須是台灣出版社出過繁中譯本、在售;只有簡體版/沒繁中版/繁中版絕版的一律不推。
2. **逐本用 WebSearch 查證**(博客來/誠品/金石堂/讀冊)有繁中版在售再放進清單,別憑記憶猜、別編造書名或出版社。
3. **避開已推薦過的書** —— 挑之前先讀帳本 [`data/recommended-books.md`](data/recommended-books.md)(唯一真實來源),不可重複(各批、各批備選、已寫書評、絕版別推、同梯沒選入,全算推過);挑完把新批 append 進帳本、commit/push。
4. 注意簡體書名陷阱:用繁中正式書名(《鞋狗》→《跑出全世界的人》、《上癮》→《鉤癮效應》)。
5. **輸出給山姆的清單一律用簡式一行格式**,一本一行:`「書名」，作者 :「作者名字」`(書名與作者名各用「」夾、中間全形逗號;作者給中文譯名,必要時中英對照如「John Doerr 約翰・杜爾」)。不要表格、不要原書名/出版社欄、不要開場白或客套。

## 規則:喵喵書評站內群發信(拆書摘要)= 讀 /lens 原文 → 產出忠於原文的群發稿

**用途:** 把某篇 painpoint `/lens` 拆書,濃縮成一封「喵喵書評站內群發信」的摘要稿,當那篇拆書的「預告片」,把喵喵讀者導去 painpoint 讀全文(順帶軟性沉澱新書候補名單)。

**觸發條件(任一,沒附帶其他明確指示時直接做、不要問):**
- 「《X》群發信」/「《X》喵喵群發」/「《X》拆書摘要(群發用)」/「幫我寫《X》的喵喵群發摘要」等變體。
- 剛寫完或轉完《X》的 `/lens` 拆書,接著說「出個群發信」「來一封群發」之類。

**流程:**
1. **先對到文章、再讀全文(鐵則)**:從書名找到 slug(對照 `site/lens/_articles.php` 與 `site/lens/_content/{slug}.html`,slug = 英文書名 kebab-case,例《給予》→ `give-and-take`),**一定要把 `site/lens/_content/{slug}.html` 整篇讀過**。摘要只能從實際內容萃取,不准憑記憶亂寫。
2. **最高鐵則:摘要必須忠於該 `/lens` 文章,絕不可文不對題。** 讀者點連結進去要看到摘要承諾的東西。主旨與鉤子必須是文章真的在講的點;不可加入文章沒有的觀點/案例/數字/引文;是「濃縮 + 設懸念」非另寫一篇,**不要整段照抄原句**。
3. **對齊喵喵後台「群發站內信」表單(Sender 固定「山姆Sam」、標題、內容)。每次給「標題」「內容」兩塊讓山姆各自複製:**
   - **【標題】(必填、永不可省)**:一個「主推」+ 一個「備選」,都是 curiosity hook、且都是文章真有的點。
   - **【內容】**:喵喵口吻、第一人稱、純文字、全形。結構 = 開場(在拆哪本書、「拆書 ≠ 書評」;第一封要、之後可省)→ 摘要重點(忠於原文、留懸念)→ 連結 `https://painpoint.tw/lens/{slug}` →(結尾)輕帶一句《痛點 P.A.I.N.》電子書已上市 + `https://painpoint.tw/book`。
   - **署名**:後台 Sender 已顯示「山姆Sam」,內文不必再署名,結尾輕收尾(如「下次見。」)即可;真要署名一律 `山姆(Sam)`。
4. **全形收尾**:正文實跑 `python3 tools/fix-punctuation.py`(`pbpaste | python3 tools/fix-punctuation.py | pbcopy`),URL 維持半形。

> 一句話:這是該篇 `/lens` 拆書的「預告片」——忠實濃縮、設鉤子、結尾輕帶新書,把喵喵讀者導去 painpoint 讀全文。
