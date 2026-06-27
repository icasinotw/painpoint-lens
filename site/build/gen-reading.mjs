// 把選定章節(markdown)轉成乾淨 HTML 片段,供 read/*.php include。
// 鐵則:剝掉所有 <!-- 內部註記 -->(讀者潔淨);用 pandoc 轉檔。
// 用法: node site/build/gen-reading.mjs
import { readFileSync, writeFileSync, mkdirSync } from 'node:fs';
import { execSync } from 'node:child_process';
import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = dirname(fileURLToPath(import.meta.url));
const SITE = resolve(__dirname, '..');
const ROOT = resolve(__dirname, '../..');
const OUT = resolve(SITE, 'read/_content');
mkdirSync(OUT, { recursive: true });

const PAGES = [
  { slug: 'preface',        src: resolve(ROOT, 'chapters/00-前言.md') },
  { slug: 'ch01',           src: resolve(ROOT, 'chapters/01-挑到爛書的那些夜晚.md') },
  { slug: 'pain-framework', src: resolve(SITE, 'read/_src/pain-framework.md') },
];

let bad = 0;
for (const p of PAGES) {
  let md = readFileSync(p.src, 'utf8');
  // 剝掉所有 HTML 註記(含多行)= 內部寫作筆記
  md = md.replace(/<!--[\s\S]*?-->/g, '').replace(/\n{3,}/g, '\n\n').trim();

  const html = execSync('pandoc -f markdown+raw_html-tex_math_dollars --wrap=none -t html5', {
    input: md, maxBuffer: 1024 * 1024 * 8,
  }).toString().trim();

  // 潔淨檢查:輸出不該殘留任何內部標記
  for (const marker of ['<!--', '待 Sam', '待Sam', '草稿', 'TODO', '聲音範本', 'outline']) {
    if (html.includes(marker)) { console.error(`✗ ${p.slug} 殘留內部標記: ${marker}`); bad++; }
  }

  writeFileSync(resolve(OUT, `${p.slug}.html`), html + '\n');
  console.log(`✓ ${p.slug}.html  (${html.length} bytes)`);
}
console.log(bad ? `\n⚠ 有 ${bad} 處內部標記殘留,請檢查` : '\n全部乾淨,無內部標記殘留。');
process.exit(bad ? 1 : 0);
