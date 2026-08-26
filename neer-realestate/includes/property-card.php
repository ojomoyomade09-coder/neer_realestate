<?php

declare(strict_types=1);

$listing = $listing ?? [];
?>
<article class="property-card">
  <div class="property-media">
    <img
      src="<?= e($listing['image_url'] ?? '') ?>"
      alt="<?= e($listing['title'] ?? '') ?>"
      loading="lazy"
      width="640"
      height="420"
    >
    <span class="badge"><?= ($listing['status'] ?? '') === 'sale' ? 'For Sale' : 'For Rent' ?></span>
    <?php if (($listing['visibility'] ?? 'public') === 'pending'): ?>
      <span class="badge badge--pending">Pending review</span>
    <?php endif; ?>
  </div>
  <div class="property-body">
    <p class="property-type"><?= e(ucfirst((string) ($listing['type'] ?? ''))) ?></p>
    <h2><?= e($listing['title'] ?? '') ?></h2>
    <p class="property-location"><?= e($listing['location'] ?? '') ?></p>
    <p class="property-price">
      $<?= number_format((float) ($listing['price'] ?? 0), 0) ?>
      <?= ($listing['status'] ?? '') === 'rent' ? '<span>/mo</span>' : '' ?>
    </p>
    <ul class="property-meta">
      <li><?= (int) ($listing['beds'] ?? 0) ?> Beds</li>
      <li><?= (int) ($listing['baths'] ?? 0) ?> Baths</li>
    </ul>
  </div>
</article>
