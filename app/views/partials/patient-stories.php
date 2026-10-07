<?php
/**
 * "What Our Patients Say?" — any patient videos defined in Content::VIDEOS plus the testimonial
 * slider. Hidden until the practice supplies real videos or testimonials.
 */
$videos = Content::videoList(array_keys(Content::VIDEOS));
$items = Content::testimonials(true);
if (!$videos && !$items) return;
?>
<section class="section section--soft" aria-labelledby="stories-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Patient testimonials</p>
        <h2 id="stories-title" class="h2">What Our <em>Patients Say</em></h2>
        <p class="section-head__text">See how our patient-oriented approach has helped people deal with pain and lead pain-free lives.</p>
      </div>
    </div>
    <?php if ($videos): ?>
    <div class="vgrid vgrid--<?= count($videos) ?>">
      <?php foreach ($videos as $i => $v): ?><div data-reveal style="--d:<?= $i ?>"><?php partial('video', ['v' => $v]); ?></div><?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($items): ?><div class="stories__quotes" data-reveal><?php partial('testimonials', ['items' => $items]); ?></div><?php endif; ?>
  </div>
</section>
