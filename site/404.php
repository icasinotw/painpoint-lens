<?php
http_response_code(404);
require __DIR__ . '/_init.php';
$page = ['title' => '找不到頁面｜痛點 P.A.I.N.', 'desc' => '', 'path' => '/404'];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
?>
<main class="wrap section center" style="min-height:50vh">
  <p class="eyebrow">404</p>
  <h1 class="h-display">這一頁,不在這裡。</h1>
  <p class="lead">也許它還沒寫,也許它搬家了。不如先去做件有用的事 —</p>
  <p><a class="btn btn-primary" href="/tool">免費體檢我的點子 →</a></p>
  <p class="btn-row" style="justify-content:center;flex-wrap:wrap;margin-top:20px">
    <a class="btn btn-ghost" href="/lens">看拆書</a>
    <a class="btn btn-ghost" href="/ask">看拆問題</a>
    <a class="btn btn-ghost" href="/idea">看經典觀念</a>
  </p>
</main>
<?php require __DIR__ . '/partials/footer.php'; ?>
