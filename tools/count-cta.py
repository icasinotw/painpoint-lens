#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
/lens 拆書內文 CTA 硬閘門(給雲端 CI 與本機驗證共用)。

規則(對齊 CTA 北極星:拆書是內容價值、不是導購):
  - 整篇內文最多 1 個 <a href="/tool">
  - 整篇內文最多 1 個 <a href="/book">
  - 結尾段(最後一個 <p>)不准放 /tool 連結(消滅「最後一段=導工具」收尾指紋)

用法:python3 tools/count-cta.py site/lens/_content/{slug}.html
過 → exit 0;不過 → 印出問題、exit 1(CI 用它擋部署)。
"""
import sys
import re

MAX_TOOL = 1
MAX_BOOK = 1

def main():
    if len(sys.argv) < 2:
        print("用法:count-cta.py <_content/{slug}.html>")
        return 2
    path = sys.argv[1]
    try:
        html = open(path, encoding="utf-8").read()
    except OSError as e:
        print(f"讀不到檔案:{e}")
        return 2

    tool = len(re.findall(r'href="/tool"', html))
    book = len(re.findall(r'href="/book"', html))
    paras = re.findall(r"<p\b[^>]*>.*?</p>", html, re.S)
    last_tool = bool(paras) and ('href="/tool"' in paras[-1])

    print(f"{path}")
    print(f"  /tool 連結 = {tool}(上限 {MAX_TOOL}) | /book 連結 = {book}(上限 {MAX_BOOK}) | 結尾段帶 /tool = {'是' if last_tool else '否'}")

    problems = []
    if tool > MAX_TOOL:
        problems.append(f"/tool 連結 {tool} 個 > 上限 {MAX_TOOL}")
    if book > MAX_BOOK:
        problems.append(f"/book 連結 {book} 個 > 上限 {MAX_BOOK}")
    if last_tool:
        problems.append("結尾段(最後一個 <p>)放了 /tool 連結 → 收尾導購指紋,結尾要用畫面/動作收")

    if problems:
        print("  ❌ CTA 閘門未過:")
        for p in problems:
            print(f"     - {p}")
        return 1
    print("  ✅ CTA 閘門通過")
    return 0

if __name__ == "__main__":
    sys.exit(main())
