<?php

declare(strict_types=1);

function render_simple_page(string $slug, string $title, string $heading, string $copy): void
{
    $currentPage = $slug;
    $pageTitle = $title;
    $bodyClass = 'page-simple';

    require __DIR__ . '/header.php';
    ?>
    <main class="simple-page">
      <h1><?= e($heading) ?></h1>
      <p><?= e($copy) ?></p>
    </main>
    <?php
    require __DIR__ . '/footer.php';
}
