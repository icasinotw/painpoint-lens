<?php /* 作者署名 byline(提升信任度,連到 /about)。資料來源 $cfg['author']／author_role + /assets/img/author.jpg */ ?>
<a class="author-byline" href="/about" aria-label="關於作者 <?= e($cfg['author']) ?>" style="display:inline-flex;align-items:center;gap:11px;text-decoration:none;color:var(--ink)">
  <img src="/assets/img/author.jpg?v=1" alt="《痛點 P.A.I.N.》作者 <?= e($cfg['author']) ?>，<?= e($cfg['author_role']) ?>" width="48" height="48" loading="lazy" decoding="async" style="width:48px;height:48px;flex:0 0 auto;border-radius:50%;object-fit:cover;border:2px solid var(--gold);box-shadow:var(--shadow)">
  <span style="display:flex;flex-direction:column;line-height:1.3">
    <strong style="font-size:.98rem;color:var(--ink)"><?= e($cfg['author']) ?></strong>
    <span style="font-size:.85rem;color:var(--grey)"><?= e($cfg['author_role']) ?></span>
  </span>
</a>
