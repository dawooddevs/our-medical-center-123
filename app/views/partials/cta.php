<?php $phone = setting('phone'); ?>
<section class="section section--cta" aria-label="Book an appointment">
  <?php partial('mark', ['class' => 'cta__mark']); ?>
  <div class="container cta" data-reveal>
    <div class="cta__content">
      <p class="eyebrow">Book an appointment</p>
      <h2 class="cta__title"><?= e($headline ?? setting('cta_headline')) ?></h2>
      <p class="cta__text"><?= e($copy ?? setting('cta_copy')) ?></p>
      <?php if (setting('cta_small_print')): ?><p class="cta__small"><?= e(setting('cta_small_print')) ?></p><?php endif; ?>
    </div>
    <div class="cta__actions">
      <a class="btn btn--dark btn--lg" href="<?= e(url('book-appointment/')) ?>"><?= e($button ?? 'Book an Appointment') ?><?= icon('arrow-right') ?></a>
      <a class="cta__phone" href="<?= e(tel_href($phone)) ?>"><span class="cta__phone-icon"><?= icon('phone') ?></span><span><small>Or call or text</small><strong><?= e($phone) ?></strong></span></a>
    </div>
  </div>
</section>
