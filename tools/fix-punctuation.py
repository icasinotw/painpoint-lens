#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
fix-punctuation.py —— 喵喵書評收尾用的「半形→全形」標點清洗器

用途
----
喵喵書評 skill 產出的書評,正文寫得好,但模型常常跳過〈定稿三查〉的標點那關,
留下一堆半形逗號 , 冒號 : 分號 ; 括號 ( ) ——這正是「內行一眼看穿是 AI 寫的」洩漏點。
這支工具把中文行內的這些半形標點機械換成全形,英數/網址/數字裡的半形原樣保留,
吐出可以直接貼進 meowbooks.tw 的乾淨版本。它只動標點,不動你的字。

會自動轉(在中文語境才轉,英數/網址旁的保留)
  ,  →  ，      :  →  ：      ;  →  ；
  (  →  （      )  →  ）      !  →  ！      ?  →  ？

不會自動轉、只「提醒」(避免誤傷網址/小數/縮寫/數字)
  半形句點 .   → 疑似中文句號的會列出來請你自己看(可能該換成 。)
  ...         → 提醒可換成全形刪節號 ……
  殘留的 Markdown 符號(# * - | ``` )→ 提醒(skill 要求純文字、零 Markdown)

用法
----
  讀檔、印到螢幕:        python3 tools/fix-punctuation.py review.txt
  管線:                  pbpaste | python3 tools/fix-punctuation.py | pbcopy
  讀 stdin(貼上後 Ctrl-D):python3 tools/fix-punctuation.py
  ★ 剪貼簿一鍵(最順):    python3 tools/fix-punctuation.py -c
     先把書評複製起來 → 跑這行 → 修好的版本已在剪貼簿,直接貼。

轉換結果走 stdout(乾淨、可直接 > 存檔或 | pbcopy);
統計與提醒走 stderr(不會污染輸出),所以 pbcopy 收到的永遠只有書評本身。
冪等:對已是全形的稿子再跑一次不會壞、結果不變。
"""

import sys
import argparse
import subprocess

# 半形 → 全形 對照(只含「在中文語境就該全形」的那幾個)
CONVERT = {
    ',': '，',
    ':': '：',
    ';': '；',
    '(': '（',
    ')': '）',
    '!': '！',
    '?': '？',
}

# 名稱(報告用)
NAMES = {
    ',': '逗號', ':': '冒號', ';': '分號',
    '(': '左括號', ')': '右括號', '!': '驚嘆號', '?': '問號',
}


def _is_ascii_alnum(ch: str) -> bool:
    return bool(ch) and ch.isascii() and ch.isalnum()


def _is_protect_neighbor(ch: str) -> bool:
    """旁邊若是英數,或網址/email 會用到的 / @ . _ - ,就視為『英數語境』,保留半形。
    空字串(行首/行尾的鄰位)不算保護,以免句尾的 ? ) 等被漏掉。"""
    if not ch:
        return False
    if _is_ascii_alnum(ch):
        return True
    return ch in '/@._-'


def _is_cjk(ch: str) -> bool:
    if not ch:
        return False
    o = ord(ch)
    return (
        0x4E00 <= o <= 0x9FFF or   # CJK 統一表意
        0x3400 <= o <= 0x4DBF or   # 擴展 A
        0xF900 <= o <= 0xFAFF or   # 相容表意
        ch in '，。、；：「」『』（）【】《》—…！？'  # 全形標點也算中文語境
    )


def convert(text: str):
    """回傳 (轉換後文字, 統計 dict, 提醒 list)。"""
    out = []
    counts = {k: 0 for k in CONVERT}
    kept = 0  # 因英數語境保留的數量
    warnings = []
    lines = text.split('\n')

    for li, line in enumerate(lines, 1):
        new_line_chars = []
        n = len(line)
        for ci, ch in enumerate(line):
            prev_ch = line[ci - 1] if ci > 0 else ''
            next_ch = line[ci + 1] if ci + 1 < n else ''

            if ch in CONVERT:
                if ch == ',':
                    # 逗號只在「兩邊都是英數」時保留(千分位 21,889、a,b);
                    # 一邊是中文就是句中逗號,要轉(例:meowbooks.tw,時間 → ,後接中文)
                    protect = _is_ascii_alnum(prev_ch) and _is_ascii_alnum(next_ch)
                elif ch == '(':
                    # 左括號看右鄰、右括號看左鄰
                    protect = _is_protect_neighbor(next_ch)
                elif ch == ')':
                    protect = _is_protect_neighbor(prev_ch)
                else:
                    protect = _is_protect_neighbor(prev_ch) or _is_protect_neighbor(next_ch)

                if protect:
                    kept += 1
                    new_line_chars.append(ch)
                else:
                    counts[ch] += 1
                    new_line_chars.append(CONVERT[ch])
                continue

            new_line_chars.append(ch)

        out.append(''.join(new_line_chars))

        # ---- 只提醒、不改 ----
        _collect_warnings(line, li, warnings)

    return '\n'.join(out), {'counts': counts, 'kept': kept}, warnings


def _collect_warnings(line: str, li: int, warnings: list):
    n = len(line)

    # 1) 疑似中文句號的半形句點(不在數字/網址/縮寫/刪節號裡)
    i = 0
    while i < n:
        ch = line[i]
        if ch == '.':
            prev_ch = line[i - 1] if i > 0 else ''
            next_ch = line[i + 1] if i + 1 < n else ''
            run_dot = ch == '.' and (next_ch == '.' or prev_ch == '.')
            if not run_dot and _is_cjk(prev_ch) and (next_ch == '' or _is_cjk(next_ch)):
                warnings.append((li, '半形句點 .', f'「…{line[max(0,i-8):i+2]}」 疑似中文句號,建議改 。'))
        i += 1

    # 2) 連續半形點 → 全形刪節號
    if '...' in line:
        warnings.append((li, '半形刪節號 ...', '建議改用全形「……」'))

    # 3) Markdown 殘留(skill 要求純文字)
    stripped = line.lstrip()
    md_hits = []
    if stripped[:1] == '#':
        md_hits.append('# 標題')
    if stripped[:2] in ('- ', '* ') or (len(stripped) >= 2 and stripped[0] in '-*' and stripped[1] == ' '):
        md_hits.append('- / * 條列')
    if len(stripped) >= 3 and stripped[0].isdigit() and stripped[1:3] == '. ':
        md_hits.append('1. 數字條列')
    if '**' in line:
        md_hits.append('** 粗體')
    if '`' in line:
        md_hits.append('` 程式碼框')
    if '|' in line and line.count('|') >= 2:
        md_hits.append('| 表格')
    for h in md_hits:
        warnings.append((li, 'Markdown 殘留', f'{h} —— skill 要求純文字、零 Markdown'))


def residual_halfwidth_in_cjk(text: str):
    """轉換後再自我體檢:還有沒有夾在中文裡的半形 , : ; ( )(規則漏網的)。"""
    res = []
    targets = set(',:;()')
    lines = text.split('\n')
    for li, line in enumerate(lines, 1):
        n = len(line)
        for ci, ch in enumerate(line):
            if ch in targets:
                prev_ch = line[ci - 1] if ci > 0 else ''
                next_ch = line[ci + 1] if ci + 1 < n else ''
                if _is_protect_neighbor(prev_ch) or _is_protect_neighbor(next_ch):
                    continue
                res.append((li, ch, line[max(0, ci - 10):ci + 10]))
    return res


def _read_input(args) -> str:
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
    # stdin
    return sys.stdin.read()


def _write_output(text: str, args):
    if args.clip:
        try:
            subprocess.run(['pbcopy'], input=text, text=True, check=True)
        except Exception as e:
            sys.exit(f'寫回剪貼簿失敗(pbcopy):{e}')
    else:
        sys.stdout.write(text)


def _report(stats, warnings, residual, to_clip):
    e = sys.stderr.write
    counts = stats['counts']
    total = sum(counts.values())
    e('\n── 標點清洗報告 ──────────────────────\n')
    if total == 0:
        e('沒有要轉的半形標點(稿子可能已經是全形,或沒有中文語境的半形)。\n')
    else:
        for k, n in counts.items():
            if n:
                e(f'  {k} → {CONVERT[k]}  ({NAMES[k]})  ×{n}\n')
        e(f'  小計:轉了 {total} 處。\n')
    if stats['kept']:
        e(f'  保留(英數/網址/數字語境):{stats["kept"]} 處。\n')

    if residual:
        e(f'\n⚠️ 轉換後仍有 {len(residual)} 處夾在中文裡的半形 , : ; ( )(規則沒把握、請你眼睛看一下):\n')
        for li, ch, ctx in residual[:30]:
            e(f'    第 {li} 行 「{ch}」 …{ctx}…\n')

    if warnings:
        e(f'\n📝 提醒(沒幫你改,自己斟酌){len(warnings)} 則:\n')
        # 同類只各印幾則,避免洗版
        shown = {}
        for li, kind, msg in warnings:
            shown.setdefault(kind, 0)
            if shown[kind] < 6:
                e(f'    第 {li} 行 [{kind}] {msg}\n')
                shown[kind] += 1
        for kind, c in shown.items():
            extra = sum(1 for _, k, _ in warnings if k == kind) - c
            if extra > 0:
                e(f'    …[{kind}] 另有 {extra} 則同類,未全列。\n')

    if not residual and total >= 0:
        e('\n✅ 中文行內的 , : ; ( ) 已全部轉成全形(英數/網址內的保留)。\n')
    if to_clip:
        e('📋 修好的版本已放進剪貼簿,直接貼即可。\n')
    e('──────────────────────────────────────\n')


def main():
    p = argparse.ArgumentParser(
        description='喵喵書評收尾:把中文行內半形標點 , : ; ( ) ! ? 換成全形(英數/網址保留)。',
        formatter_class=argparse.RawDescriptionHelpFormatter,
        epilog='範例:\n'
               '  python3 tools/fix-punctuation.py review.txt > review-fixed.txt\n'
               '  pbpaste | python3 tools/fix-punctuation.py | pbcopy\n'
               '  python3 tools/fix-punctuation.py -c      # 剪貼簿進、剪貼簿出(最順)\n',
    )
    p.add_argument('file', nargs='?', help='輸入檔(省略則讀 stdin)')
    p.add_argument('-c', '--clip', action='store_true',
                   help='從剪貼簿讀、修好寫回剪貼簿(macOS pbpaste/pbcopy)')
    p.add_argument('-q', '--quiet', action='store_true', help='不印報告')
    args = p.parse_args()

    text = _read_input(args)
    if not text.strip():
        sys.exit('沒有輸入內容。把書評貼上、或給檔名、或用 -c 從剪貼簿讀。')

    fixed, stats, warnings = convert(text)
    residual = residual_halfwidth_in_cjk(fixed)

    _write_output(fixed, args)
    if not args.quiet:
        _report(stats, warnings, residual, to_clip=args.clip)


if __name__ == '__main__':
    main()
