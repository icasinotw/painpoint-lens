<?php
/*
 * 組《痛點》讀者精選拆書 15 篇 → 單檔 HTML,再用 Chrome headless 印成 PDF。
 * 這份 PDF 是 /claim 歸因頁寄給買家的讀者專屬好禮。
 *
 * 重生方式(改完選書或文案後跑這兩步):
 *   php tools/build-anthology.php
 *   "/Applications/Google Chrome.app/Contents/MacOS/Google Chrome" --headless --disable-gpu \
 *     --no-pdf-header-footer --print-to-pdf="site/assets/dl/painpoint-anthology.pdf" \
 *     "file://$(pwd)/tools/_anthology.html"
 *   (換新檔後把 /claim 與 api/subscribe.php 裡 painpoint-anthology.pdf 的 ?v= 進版號)
 */
$ROOT = dirname(__DIR__);
$LENS = $ROOT . '/site/lens/_content';
$HTML_OUT = __DIR__ . '/_anthology.html';

// 五個區塊(照《痛點》P→A→I→N 骨架),每筆:slug, 中文書名, 原文名, 作者
$SECTIONS = [
  ['key'=>'序章','letter'=>'尺','title'=>'整把尺','sub'=>'先別急著動手——這三本,給你「判斷一個點子值不值得做」的全景視野。',
   'books'=>[
     ['the-lean-startup','精實創業','The Lean Startup','Eric Ries 艾瑞克・萊斯'],
     ['good-strategy-bad-strategy','好策略,壞策略','Good Strategy Bad Strategy','Richard Rumelt 理查・魯梅特'],
     ['innovators-dilemma','創新的兩難','The Innovator\'s Dilemma','Clayton Christensen 克雷頓・克里斯汀生'],
   ]],
  ['key'=>'P','letter'=>'P','title'=>'誰在痛','sub'=>'點子的第一道關:你要救的那個人,真的存在、而且真的在痛嗎?',
   'books'=>[
     ['competing-against-luck','創新的用途理論','Competing Against Luck','Clayton Christensen 克雷頓・克里斯汀生 等'],
     ['this-is-marketing','這才是行銷','This Is Marketing','Seth Godin 賽斯・高汀'],
     ['positioning','定位','Positioning','Al Ries、Jack Trout 賴茲、屈特'],
   ]],
  ['key'=>'A','letter'=>'A','title'=>'痛多深','sub'=>'痛是真的,還是你想出來的?這三本,專治「他嘴上說會買」的假需求。',
   'books'=>[
     ['nudge','推力','Nudge','Richard Thaler、Cass Sunstein 塞勒、桑思汀'],
     ['the-black-swan','黑天鵝效應','The Black Swan','Nassim Taleb 納西姆・塔雷伯'],
     ['how-to-win-friends-and-influence-people','人性的弱點','How to Win Friends and Influence People','Dale Carnegie 戴爾・卡內基'],
   ]],
  ['key'=>'I','letter'=>'I','title'=>'怎麼介入','sub'=>'確認了痛,接下來才輪到「動手」——做出真能止痛的那一手。',
   'books'=>[
     ['hooked','鉤癮效應','Hooked','Nir Eyal、Ryan Hoover 艾歐、胡佛'],
     ['the-e-myth-revisited','創業這條路','The E-Myth Revisited','Michael Gerber 麥克・葛伯'],
     ['running-lean','精實執行','Running Lean','Ash Maurya 艾許・莫瑞亞'],
   ]],
  ['key'=>'N','letter'=>'N','title'=>'數字','sub'=>'最後一關:把這件事走到第一筆錢,並讀懂數字背後的人性。',
   'books'=>[
     ['the-psychology-of-money','致富心態','The Psychology of Money','Morgan Housel 摩根・豪瑟'],
     ['contagious','瘋潮行銷','Contagious','Jonah Berger 約拿・博格'],
     ['built-to-last','基業長青','Built to Last','Jim Collins、Jerry Porras 柯林斯、薄樂斯'],
   ]],
];

function esc($s){ return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }

const SITE = 'https://painpoint.tw';

// 把 _content 的 <h1> 拿掉(章名改由我們的書卡呈現),其餘原樣保留。
function body_of($file){
  $html = file_get_contents($file);
  $html = preg_replace('#<h1[^>]*>.*?</h1>#su', '', $html, 1);
  // 拿掉 h2 的 id(PDF 不需要錨點)
  $html = preg_replace('#(<h2)\s+id="[^"]*"#i', '$1', $html);
  // 把站內相對連結改成絕對網址 —— PDF 裡 href="/x" 會被當成 file:///x 而失效。
  $html = preg_replace('#href="/#', 'href="' . SITE . '/', $html);
  return trim($html);
}

ob_start();
?><!doctype html>
<html lang="zh-Hant"><head><meta charset="utf-8">
<title>《痛點》讀者精選拆書 15 篇</title>
<style>
  @page { size: A4; margin: 20mm 17mm 18mm; }
  * { box-sizing: border-box; }
  html { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
  body{
    font-family:"PingFang TC","Heiti TC","Hiragino Sans GB","Microsoft JhengHei",sans-serif;
    color:#23201b; line-height:1.95; font-size:11.2pt; margin:0;
    letter-spacing:.01em;
  }
  p{ margin:0 0 1.05em; text-align:justify; }
  strong{ color:#0f0d0a; font-weight:700; }
  a{ color:#9a7a0c; text-decoration:none; border-bottom:1px solid #d9c47a; }
  h2{ font-size:14.5pt; line-height:1.5; margin:1.9em 0 .7em; color:#1a1814;
      border-left:4px solid #c8a32e; padding-left:.6em; }
  .gold{ color:#b59410; }

  /* ---- 封面 ---- */
  .cover{ height:253mm; display:flex; flex-direction:column; justify-content:center;
    text-align:center; page-break-after:always; }
  .cover .ey{ letter-spacing:.32em; color:#b59410; font-size:10.5pt; font-weight:700; margin-bottom:30px; }
  .cover h1{ font-size:33pt; line-height:1.32; margin:0 0 8px; color:#171511; font-weight:800; letter-spacing:.02em; }
  .cover .pain{ font-size:15pt; letter-spacing:.5em; color:#b59410; font-weight:700; margin:26px 0 0; }
  .cover .sub{ color:#5c574e; font-size:12.5pt; margin:34px auto 0; max-width:30em; line-height:1.9; }
  .cover .by{ margin-top:60px; color:#3a3733; font-size:11pt; }
  .cover .by b{ color:#171511; }
  .cover .rule{ width:48px; height:3px; background:#c8a32e; margin:30px auto; border:0; }

  /* ---- 導讀 ---- */
  .intro{ page-break-after:always; }
  .intro h2{ border:0; padding:0; font-size:18pt; line-height:1.45; margin:0 0 1.1em; color:#171511; }
  .intro .lead{ font-size:12pt; color:#3a3733; }
  .intro h3{ font-size:12.5pt; color:#b59410; margin:1.7em 0 .5em; letter-spacing:.02em; }
  .intro .kicker{ letter-spacing:.28em; color:#b59410; font-size:9.5pt; font-weight:700; }
  .oneliner{ margin-top:1.8em; padding:16px 20px; background:#faf6ea; border-left:4px solid #c8a32e;
    font-size:11.5pt; color:#3a3120; }

  /* ---- 目錄 ---- */
  .toc{ page-break-after:always; }
  .toc h2{ border:0; padding:0; font-size:17pt; margin:0 0 1.1em; color:#171511; }
  .toc .sec{ margin:1.25em 0 .4em; font-weight:800; color:#b59410; font-size:11.5pt; letter-spacing:.04em; }
  .toc ol{ margin:0; padding-left:0; list-style:none; counter-reset:none; }
  .toc li{ padding:5px 0; border-bottom:1px dotted #e0d9c8; display:flex; gap:.6em; }
  .toc li .n{ color:#b59410; font-weight:700; min-width:1.6em; }
  .toc li .bk{ font-weight:700; color:#23201b; }
  .toc li .hd{ color:#7a7468; font-size:9.8pt; }

  /* ---- 區塊分隔頁 ---- */
  .divider{ page-break-before:always; height:240mm; display:flex; flex-direction:column;
    justify-content:center; text-align:center; }
  .divider .lt{ font-size:88pt; font-weight:800; color:#eadfbf; line-height:1; }
  .divider .ti{ font-size:24pt; font-weight:800; color:#171511; margin:6px 0 0; letter-spacing:.06em; }
  .divider .key{ letter-spacing:.3em; color:#b59410; font-weight:700; margin-top:18px; font-size:11pt; }
  .divider .sub{ color:#5c574e; max-width:26em; margin:24px auto 0; font-size:11.5pt; line-height:1.9; }

  /* ---- 每篇 ---- */
  .article{ page-break-before:always; }
  .bookcard{ border-bottom:2px solid #1a1814; padding-bottom:14px; margin-bottom:26px; }
  .bookcard .tag{ display:inline-block; background:#1a1814; color:#f3ecda; font-size:8.6pt;
    letter-spacing:.14em; font-weight:700; padding:3px 11px; border-radius:3px; }
  .bookcard .bk{ font-size:21pt; font-weight:800; color:#171511; margin:13px 0 2px; line-height:1.3; }
  .bookcard .or{ color:#8a8275; font-size:10pt; font-style:italic; }
  .bookcard .au{ color:#5c574e; font-size:10pt; margin-top:3px; }
  .article .lead-h{ font-size:15pt; font-weight:800; color:#b59410; line-height:1.5; margin:0 0 1.1em; }

  /* ---- 結語 ---- */
  .outro{ page-break-before:always; }
  .outro h2{ border:0; padding:0; font-size:17pt; color:#171511; }
</style>
</head><body>

<!-- 封面 -->
<section class="cover">
  <div class="ey">買了《痛點 P.A.I.N.》的讀者・專屬</div>
  <h1>用同一把尺<br>拆遍 15 本經典</h1>
  <div class="pain">P · A · I · N</div>
  <hr class="rule">
  <p class="sub">你手上有了那把尺。這裡是我用同一把尺,拆過最經典的 15 本商業書——照書的 P → A → I → N 順序,排給你。</p>
  <div class="by">——&nbsp;<b>山姆(謝冠生)</b>・喵喵書評創辦人、《痛點 P.A.I.N.》作者</div>
</section>

<!-- 導讀 -->
<section class="intro">
  <div class="kicker">導讀・先讀這頁</div>
  <h2>這 15 本,不是排行榜,是一條線</h2>
  <p class="lead">我讀過近千本商業書。這 15 本,每一本單獨拿出來都是公認的經典,夠你讀很久。可當我把它們放到同一把尺底下,看見的卻是同一件事——</p>
  <p class="lead"><strong>再厲害的方法,都救不了一個沒人要的東西。</strong></p>
  <p>精實創業、定位、黑天鵝、致富心態……它們講的題目天差地遠,但這把尺一照,全指向同一個你最容易跳過的起點:先確認真的有人在痛。這份精選,就是用 15 種角度,把這句話講了 15 遍。</p>

  <h3>為什麼這樣排</h3>
  <p>照《痛點》的 P → A → I → N。序章三本,先給你「整把尺」的視野;接著四格各三本——<strong>P 誰在痛、A 痛多深、I 怎麼介入、N 數字</strong>——剛好對上你判斷一個點子時,會依序踩到的四個坑。你讀書讀到哪一部,就翻到這裡對應那一格:書是尺,這裡是這把尺拆遍經典的實戰示範。</p>

  <h3>讀完,你會帶走三件事</h3>
  <p>① 你會看出,那些你以為很不一樣的經典,其實在偷偷指向同一件事;<br>
     ② 你會多 15 個「別人怎麼栽」的真實切片,下次輪到你判斷,腦袋裡有畫面、不是空想;<br>
     ③ 最重要的——你會更熟練地用那把尺。看別人怎麼用,你自己用起來才順手。</p>

  <h3>怎麼讀(別一次讀完)</h3>
  <p>挑你現在最卡的那一格:不知道有沒有人要?翻 P。不確定痛不痛、會不會付錢?翻 A。讀的時候,手邊放一個你正在想的點子,讀一段、就拿它來量一下。空有感覺沒用,量過才算數。</p>

  <div class="oneliner">一句話:這不是 15 篇書摘,是同一把尺,在 15 本經典上各劃一刀。劃完,你會更相信、也更會用——你已經拿在手裡的那把尺。</div>
</section>

<!-- 目錄 -->
<section class="toc">
  <h2>目錄</h2>
<?php $i=0; foreach($SECTIONS as $sec){ ?>
  <div class="sec"><?= esc($sec['key']==='序章'?'序章・整把尺':$sec['key'].'・'.$sec['title']) ?></div>
  <ol>
<?php foreach($sec['books'] as $b){ $i++;
      $h=body_of("$LENS/{$b[0]}.html"); // 取第一段不需要;取 heading 從原 h1
      $raw=file_get_contents("$LENS/{$b[0]}.html");
      preg_match('#<h1[^>]*>(.*?)</h1>#su',$raw,$hm); $head=trim(strip_tags($hm[1]??'')); ?>
    <li><span class="n"><?= $i ?></span><span><span class="bk">《<?= esc($b[1]) ?>》</span><br><span class="hd"><?= esc($head) ?></span></span></li>
<?php } ?>
  </ol>
<?php } ?>
</section>

<?php
// 各區塊 + 各篇
foreach($SECTIONS as $sec){ ?>
<section class="divider">
  <div class="lt"><?= esc($sec['letter']) ?></div>
  <div class="ti"><?= esc($sec['title']) ?></div>
  <div class="key"><?= esc($sec['key']==='序章'?'序章':$sec['key'].' AXIS') ?></div>
  <div class="sub"><?= esc($sec['sub']) ?></div>
</section>
<?php foreach($sec['books'] as $b){
   $raw=file_get_contents("$LENS/{$b[0]}.html");
   preg_match('#<h1[^>]*>(.*?)</h1>#su',$raw,$hm); $head=trim($hm[1]??'');
   $body=body_of("$LENS/{$b[0]}.html");
   $tag = $sec['key']==='序章' ? '序章・整把尺' : ($sec['key'].'・'.$sec['title']);
?>
<article class="article">
  <div class="bookcard">
    <span class="tag"><?= esc($tag) ?></span>
    <div class="bk">《<?= esc($b[1]) ?>》</div>
    <div class="or"><?= esc($b[2]) ?></div>
    <div class="au"><?= esc($b[3]) ?></div>
  </div>
  <p class="lead-h"><?= $head ?></p>
  <?= $body ?>
</article>
<?php }} ?>

<!-- 結語 -->
<section class="outro">
  <h2>劃完這 15 刀,換你了</h2>
  <p>看別人怎麼用這把尺,是為了讓你自己用得順。現在,挑一個你心裡正在想的點子,把它放上桌——</p>
  <p>用那把尺,從最會要你命的那一格開始量:<strong>真的有人在痛嗎?痛到會付錢嗎?</strong>站上有一個免費的點子體檢工具,五分鐘陪你量一輪,告訴你最弱、最該先補的是哪一格 → <a href="https://painpoint.tw/tool">painpoint.tw/tool</a>。</p>
  <p>還想看更多?同一把尺,我在站上一篇一篇公開拆過三百多本經典商業書,這 15 篇只是其中最精的一小撮 → <a href="https://painpoint.tw/lens">painpoint.tw/lens</a>。</p>
  <p style="margin-top:2.2em;color:#5c574e">謝謝你買《痛點》。願這把尺,替你擋下那個本來會讓你賠掉幾年、幾百萬的點子。</p>
  <p style="color:#171511"><strong>——&nbsp;山姆(謝冠生)</strong></p>
</section>

</body></html>
<?php
$out = ob_get_clean();
file_put_contents($HTML_OUT, $out);
echo "HTML written: ".strlen($out)." bytes → ".$HTML_OUT."\n";
echo "下一步:用上面註解的 Chrome headless 指令印成 site/assets/dl/painpoint-anthology.pdf\n";
