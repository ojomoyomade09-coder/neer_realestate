<?php

declare(strict_types=1);

$title = $heroTitle ?? 'NEER';
$subtitle = $heroSubtitle ?? '';
?>
<section class="page-hero">
  <div class="page-hero-inner">
    <h1><?= e($title) ?></h1>
    <?php if ($subtitle !== ''): ?>
      <p><?= e($subtitle) ?></p>
    <?php endif; ?>
  </div>
</section>
