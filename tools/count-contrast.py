#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
count-contrast.py —— 喵喵書評/painpoint 拆書定稿用的「反差句 + 結尾閘門 + 跨篇撞句」機械偵測器

為什麼有這支工具
----------------
實測(2026-06-25 隔離實驗)發現:反差句「砍到 1–2 句」這條,靠模型『心裡數』一定失效——
Max 單篇寫成會「申報砍到 2 句、實際 7–8 句」(declares-without-doing);連獨立 LLM 後處理
pass 都會自報砍 2、複查實為 7。**唯一靠得住的是一支真的會數的工具 + 跟改寫者分開的眼睛。**
這支就是那把尺:它不替你砍(語意判斷留給你),它把全篇命中反差骨架的句子逐句標出來、把結尾那句
單獨拎出來問是非題、把幾個已知的跨篇換皮指紋抓出來,讓你照 skill 規則逐句裁 kept/cut。

它抓什麼
--------
1) 反差句家族(否定一個、抬高另一個):不是X是Y / 是X不是Y / 不在X在Y / X卻沒/不Y /
   與其X不如Y / 其實只是(縮放reframe) / A跟B是兩回事 / 能X不能Y / 表面…骨子 / 變的只是…(抬升框)。
   〈high〉=骨架抓死、幾乎確定;〈med〉=疑似,要你眼睛確認(純主體對照、忠實轉述書中概念不算)。
2) 結尾布林閘門:把正文最後一句拎出來,問「它是不是反差骨架?」——是 → 強制改寫成畫面/動作收。
3) 跨篇撞句黑名單(換皮指紋):「我得…」鉸鏈、「兩種人先別買·第一種…第二種」判決框、
   「這是打比方。…你身邊大概也有…的人」免責語、「半個書架 / 逃不出兩種」beat 指紋。

它不做語意裁決——候選清單交給你,逐句標 kept/cut。**沒跑這支、沒附這份清單 = 這篇未定稿。**

用法
----
  讀檔:                  python3 tools/count-contrast.py review.txt
  管線:                  pbpaste | python3 tools/count-contrast.py
  剪貼簿一鍵:            python3 tools/count-contrast.py -c
  悖論型書(上限改 1):    python3 tools/count-contrast.py review.txt --paradox

報告走 stdout。會自動切掉文末「評分/分類」與「這次主要寫/審/修了什麼」那段(只驗正文)。
"""

import sys
import re
import argparse
import subprocess

# ── 反差句家族(name, 信心, regex) ──────────────────────────────
# 〈high〉骨架抓死;〈med〉疑似、要人工確認(純主體對照/因果遞進/忠實轉述不算)
CONTRAST = [
    ("不是X，是Y",       "high", re.compile(r"不是[^。！？\n]{1,30}?[，,][^。！？\n]{0,8}?是")),
    ("是X，不是Y",       "high", re.compile(r"是[^。！？\n]{1,30}?[，,][^。！？\n]{0,4}?不是")),
    ("不在X，(就/是)在Y", "high", re.compile(r"不在[^。！？\n]{1,28}?[，,][^。！？\n]{0,6}?在")),
    ("與其X不如Y",       "high", re.compile(r"與其[^。！？\n]{1,30}?不如")),
    ("A跟B是兩回事",      "high", re.compile(r"(?:跟|和|與)[^。！？\n]{1,18}?是(?:兩回事|兩本帳|兩碼事)")),
    ("表面…骨子/實際",    "high", re.compile(r"表面上?[^。！？\n]{1,22}?(?:骨子|實際上?|其實|底下|私下)")),
    ("X卻沒/不Y",        "med",  re.compile(r"(?:教你|給你|讓你|幫你|帶你|給了你)[^。！？\n]{1,30}?(?:卻|但)?(?:沒能|沒|不能|不)(?:教|給|證|告訴|管|帶|擋|問|讓)")),
    ("卻沒能/不(對照)",   "med",  re.compile(r"[，,][^。！？\n]{0,6}?卻(?:沒能|沒|不能|不會|不)[^。！？\n]{1,18}")),
    ("能X不能/卻不Y",     "med",  re.compile(r"(?<!可)能[^。！？\n]{1,18}?[，,]?(?:不能|卻不|但不|沒辦法|做不到)")),
    ("其實只是(縮放)",     "med",  re.compile(r"其實(?:只是|不過是)")),
    ("變的只是(抬升框)",   "med",  re.compile(r"(?:變的|改變的|不同的|剩下的)(?:只|就)?(?:是|有)|唯一(?:變|不同|改變)")),
]

# ── 跨篇撞句黑名單(換皮指紋,2026-06-25 新增) ───────────────────
BLACKLIST = [
    ("「我得…」鉸鏈",            re.compile(r"我得(?:替它|說|告訴你|誠實|先|挑明|講白|畫一條線|幫你|提醒你)")),
    ("判決框·兩種人先別買",      re.compile(r"兩種人[，,]?[^。！？\n]{0,10}(?:先別|別急|別買|勸你?先別|我會勸)")),
    ("判決框·第一種…第二種",     re.compile(r"第一種[\s\S]{0,200}?第二種")),
    ("打比方免責語·你身邊大概也有", re.compile(r"這是打比方[。，][^」』）)\n]{0,25}?你身邊(?:大概|一定|多半)?也?(?:有|見過|遇過|遇)")),
    ("beat指紋·半個書架/逃不出兩種", re.compile(r"(?:疊[起得]|讀過)[^。！？\n]{0,12}半個?書架|半個?書架高?|逃不出兩種")),
]

# ── 結尾閘門用:結尾句是否反差骨架(含縮放/主被動 reframe) ──────────
ENDING_PATTERNS = [name_re for name_re in CONTRAST] + [
    ("主被動reframe(他…而你…)", "med", re.compile(r"(?:他|它|林區|作者)[^。！？\n]{2,30}?[，,]而你(?:是|只)")),
]


def strip_trailer(text: str) -> str:
    """切掉文末『評分/分類』與『這次主要寫/審/修了什麼』那段——只驗正文。"""
    cut = len(text)
    for marker in ['【評分】', '【分類】', '※以上', '這次主要寫', '這次主要寫／審', '這次主要寫/審', '這次主要寫、審']:
        i = text.find(marker)
        if i != -1:
            cut = min(cut, i)
    return text[:cut].rstrip()


def line_of(text: str, idx: int) -> int:
    return text.count('\n', 0, idx) + 1


def snippet(text: str, start: int, end: int) -> str:
    s = max(0, start - 6)
    e = min(len(text), end + 6)
    return ('…' if s > 0 else '') + text[s:e].replace('\n', '⏎') + ('…' if e < len(text) else '')


def find_contrast(text: str):
    """回傳去重後的反差句候選 [(line, conf, name, matched, start)],依出現順序。"""
    hits = []
    seen = []  # 已記錄的起點,用來去重(同位置不同 pattern 只算一次)
    for name, conf, rx in CONTRAST:
        for m in rx.finditer(text):
            st = m.start()
            if any(abs(st - s) < 6 for s in seen):
                continue
            seen.append(st)
            hits.append((line_of(text, st), conf, name, m.group(0), st))
    hits.sort(key=lambda h: h[4])
    return hits


def last_sentences(body: str, n: int = 2) -> str:
    """結尾收束句:取正文最後 n 句(收束的修辭重心常落在倒數第二句)。"""
    parts = [p for p in re.split(r'(?<=[。！？])', body.strip()) if p.strip()]
    return ''.join(parts[-n:]).strip() if parts else ''


def ending_is_contrast(sent: str):
    for name, conf, rx in ENDING_PATTERNS:
        if rx.search(sent):
            return True, name
    return False, ''


def find_blacklist(text: str):
    hits = []
    for name, rx in BLACKLIST:
        m = rx.search(text)
        if m:
            hits.append((line_of(text, m.start()), name, m.group(0)[:30].replace('\n', '⏎')))
    return hits


def read_input(args) -> str:
    if args.clip:
        try:
            return subprocess.run(['pbpaste'], capture_output=True, text=True, check=True).stdout
        except Exception as e:
            sys.exit(f'讀剪貼簿失敗(pbpaste):{e}')
    if args.file:
        try:
            with open(args.file, encoding='utf-8') as f:
                return f.read()
        except OSError as e:
            sys.exit(f'讀檔失敗:{e}')
    return sys.stdin.read()


def main():
    p = argparse.ArgumentParser(
        description='反差句 + 結尾閘門 + 跨篇撞句的機械偵測(定稿三查的「反差句」那關,別再靠心裡數)。',
        formatter_class=argparse.RawDescriptionHelpFormatter,
        epilog='範例:\n'
               '  python3 tools/count-contrast.py review.txt\n'
               '  pbpaste | python3 tools/count-contrast.py\n'
               '  python3 tools/count-contrast.py -c            # 從剪貼簿讀\n'
               '  python3 tools/count-contrast.py r.txt --paradox  # 悖論型書,上限 1\n')
    p.add_argument('file', nargs='?', help='輸入檔(省略則讀 stdin)')
    p.add_argument('-c', '--clip', action='store_true', help='從剪貼簿讀(macOS pbpaste)')
    p.add_argument('--paradox', action='store_true', help='悖論型書:反差句上限改為 1')
    args = p.parse_args()

    raw = read_input(args)
    if not raw.strip():
        sys.exit('沒有輸入內容。把書評貼上、或給檔名、或用 -c 從剪貼簿讀。')

    body = strip_trailer(raw.replace('\r', ''))
    limit = 1 if args.paradox else 2

    contrast = find_contrast(body)
    end_sent = last_sentences(body, 2)
    end_bad, end_name = ending_is_contrast(end_sent)
    blacklist = find_blacklist(body)

    w = sys.stdout.write
    w('\n══════════ 反差句偵測（上限 %d 句%s） ══════════\n' % (limit, '・悖論型' if args.paradox else ''))
    if contrast:
        for i, (ln, conf, name, matched, _) in enumerate(contrast, 1):
            tag = '🔴' if conf == 'high' else '🟡'
            w('[%2d] L%-3d %s〈%s〉%s\n       「%s」\n       ▢ kept   ▢ cut → 改寫成場景/因果:____________\n'
              % (i, ln, tag, name, '' , matched.strip()))
        n = len(contrast)
        if n > limit:
            w('\n  小計：候選 %d 句  →  ⚠️ 超標 %d 句。砍到剩 ≤%d（最重的留,結尾那句優先砍）。\n' % (n, n - limit, limit))
        else:
            w('\n  小計：候選 %d 句  →  ✅ 在上限 %d 內（仍逐句確認是否真反差）。\n' % (n, limit))
    else:
        w('  ✅ 沒抓到反差骨架候選。\n')
    w('  （🔴=骨架抓死,🟡=疑似要你確認;純主體對照「主動的人…被動的人…」、因果遞進「你越…就越…」、忠實轉述書中概念都不算。逐句裁 kept/cut——沒這份清單＝未定稿。）\n')
    w('  ⚠️ 這只是「機械下限」——沒有字面骨架的『語意反差』(例:把你當白痴…把你當教授…第三種／他全職…而你下班)抓不到,務必自己再眼掃一遍補進清單。\n')

    w('\n══════════ 結尾布林閘門 ══════════\n')
    w('  結尾句：「%s」\n' % (end_sent[:80] + ('…' if len(end_sent) > 80 else '')))
    if end_bad:
        w('  ⚠️ 是反差骨架（命中:%s）→ 全書硬閘門:無條件改寫成「畫面或動作」收,改完再跑一次直到「否」。\n' % end_name)
    else:
        w('  ✅ 否——不是反差骨架收（仍確認是不是工整對仗金句）。\n')

    w('\n══════════ 跨篇撞句黑名單（換皮指紋） ══════════\n')
    if blacklist:
        for ln, name, frag in blacklist:
            w('  [!] L%-3d %s  「%s…」\n' % (ln, name, frag))
        w('  → 命中＝整站每篇都這樣寫的換皮指紋,改寫掉(判決形態/鉸鏈/免責語/beat 表達每篇要不同)。\n')
    else:
        w('  ✅ 沒命中已知的跨篇換皮指紋。\n')

    over = len(contrast) > limit
    w('\n──────────────────────────────────────\n')
    w('結論:%s\n' % (
        '⚠️ 未過——' + '、'.join(
            ([f'反差句超標({len(contrast)}>{limit})'] if over else []) +
            (['結尾是反差骨架'] if end_bad else []) +
            ([f'撞句黑名單 {len(blacklist)} 句'] if blacklist else [])
        ) + ',照上面逐句改完再定稿。'
        if (over or end_bad or blacklist)
        else '✅ 反差句在上限內、結尾非反差骨架、無已知撞句指紋(語意仍請眼睛複查一遍)。'))
    w('──────────────────────────────────────\n')


if __name__ == '__main__':
    main()
