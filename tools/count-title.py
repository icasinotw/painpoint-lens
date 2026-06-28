#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
count-title.py —— /lens 拆書「標題長度」硬閘門(給雲端 CI 與本機驗證共用)。

為什麼有這支工具
----------------
拆書標題的房格是「短促一句鉤子」(skill 範例:「最危險的黑天鵝,住在你自己的試算表裡」)。
但「短」原本只是 skill 裡的文字叮嚀,沒有任何機械閘門擋——2026-06-28 那批生成漂移,
把本該放 blurb 的「作者說 X;你的盲點 Y」整段壓進標題(最長 125 字),四道既有閘門
(php -l / count-contrast / count-cta / render)沒有一道看標題長度,於是長標一路上線。
這支就是補上的那道尺:標題太長 / 塞了兩段就擋下部署,逼回短版。

它檢查一篇的三個標題欄位(同一句、三處應一致)
  ① 卡片大標   site/lens/_articles.php 裡該 slug 的 'title'
  ② 頁面 heading site/lens/{slug}.php 的 'heading'(餵 <title>)
  ③ 內文 <h1>   site/lens/_content/{slug}.html 的 <h1>

規則(任一條沒過 → exit 1、擋部署)
  - 每個欄位長度 ≤ 32 字(漢字計)。
  - 標題裡不准出現全形分號「；」——那是「把兩段塞進一句」的指紋
    (實測:全站短標 0 篇用 ；,長標幾乎篇篇用 ；。要兩個節拍請用「，」或破折號,
     或把第二段移回 blurb,別塞進標題)。

用法
----
  單篇(CI 用):  python3 tools/count-title.py <slug>
                 python3 tools/count-title.py site/lens/_content/{slug}.html
  全站稽核:      python3 tools/count-title.py --all
過 → exit 0;不過 → 印出問題、exit 1。
"""
import sys
import re
import os
import glob

LIMIT = 32
BAN = '；'
LENS = os.path.join(os.path.dirname(os.path.dirname(os.path.abspath(__file__))), 'site', 'lens')


def _entry_title(block):
    """從一段 ['slug'=>..,'title'=>..,..] 文字裡抽出 (slug, title);抽不到回 None。"""
    ms = re.search(r"'slug'\s*=>\s*'([^']+)'", block)
    mt = re.search(r"'title'\s*=>\s*'(.*?)'\s*,", block, re.S)
    return (ms.group(1), mt.group(1)) if ms and mt else None


def card_titles():
    """回傳 {slug: title}。

    2026-06-29 碎片化後 _articles.php 變成 loader(不再是大陣列),卡片資料散在:
      ① _articles-base.php —— 凍結的歷史段(一個大陣列,逐 entry block 解析);
      ② _articles.d/*.php  —— 每篇新拆書一個碎片(整檔一筆 return [...])。
    兩處都讀,碎片覆蓋同 slug 的 base(理論上不會重號)。只讀 loader 會抓不到任何
    碎片的卡片標題,害每篇新拆書都卡在「卡片大標找不到」——這支工具的本意是擋長標,
    不是擋碎片化。
    """
    out = {}
    base = os.path.join(LENS, '_articles-base.php')
    if os.path.exists(base):
        txt = open(base, encoding='utf-8').read()
        for b in re.findall(r"\[\s*'slug'.*?\],", txt, re.S):
            got = _entry_title(b)
            if got:
                out[got[0]] = got[1]
    for frag in sorted(glob.glob(os.path.join(LENS, '_articles.d', '*.php'))):
        try:
            got = _entry_title(open(frag, encoding='utf-8').read())
        except OSError:
            continue
        if got:
            out[got[0]] = got[1]
    return out


def heading_of(slug):
    p = os.path.join(LENS, f'{slug}.php')
    if not os.path.exists(p):
        return None
    m = re.search(r"'heading'\s*=>\s*'(.*?)'\s*,", open(p, encoding='utf-8').read(), re.S)
    return m.group(1) if m else None


def h1_of(slug):
    p = os.path.join(LENS, '_content', f'{slug}.html')
    if not os.path.exists(p):
        return None
    m = re.search(r"<h1[^>]*>(.*?)</h1>", open(p, encoding='utf-8').read(), re.S)
    return m.group(1) if m else None


def check(slug, cards):
    """回傳 (ok, [問題字串]) 並印出該 slug 三欄位狀態。"""
    fields = [
        ('卡片大標', cards.get(slug)),
        ('頁面 heading', heading_of(slug)),
        ('內文 <h1>', h1_of(slug)),
    ]
    problems = []
    print(f"{slug}")
    for name, val in fields:
        if val is None:
            print(f"  {name}: (找不到)")
            problems.append(f"{name} 找不到")
            continue
        n = len(val)
        flags = []
        if n > LIMIT:
            flags.append(f"超長 {n}>{LIMIT}")
        if BAN in val:
            flags.append("含「；」(塞了兩段)")
        mark = '✗ ' + '、'.join(flags) if flags else '✓'
        print(f"  {name}({n:>3}字)：{mark}  「{val}」")
        for f in flags:
            problems.append(f"{name} {f}")
    return (not problems), problems


def main():
    args = sys.argv[1:]
    cards = card_titles()

    if args and args[0] == '--all':
        bad = []
        for slug in cards:
            ok, probs = check(slug, cards)
            if not ok:
                bad.append(slug)
            print()
        print("──────────────────────────────────────")
        if bad:
            print(f"⚠️ 未過:{len(bad)} 篇標題超標 → {'、'.join(bad)}")
            return 1
        print(f"✅ 全站 {len(cards)} 篇標題都 ≤{LIMIT} 字、無「；」。")
        return 0

    if not args:
        print("用法:count-title.py <slug> | <_content/{slug}.html> | --all")
        return 2

    arg = args[0]
    slug = re.sub(r'\.html$', '', os.path.basename(arg)) if arg.endswith('.html') else arg
    ok, probs = check(slug, cards)
    print("──────────────────────────────────────")
    if ok:
        print(f"✅ 過——三處標題都 ≤{LIMIT} 字、無「；」。")
        return 0
    print("⚠️ 未過:" + "、".join(probs))
    print("→ 標題回短版(單句鉤子、≤32 字、別用「；」);第二段請移回 blurb。見 painpoint-lens skill〈標題〉。")
    return 1


if __name__ == '__main__':
    sys.exit(main())
