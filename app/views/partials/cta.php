<?php $phone = setting('phone'); ?>
<section class="section section--cta">
  <div class="container">
    <div class="cta" data-reveal>
      <div class="cta__bg" aria-hidden="true"><span></span><span></span><span></span></div>
      <div class="cta__content">
        <p class="eyebrow eyebrow--light">Book an appointment</p>
        <h2 class="cta__title"><?= e($headline ?? setting('cta_headline')) ?></h2>
        <p class="cta__text"><?= e($copy ?? setting('cta_copy')) ?></p>
        <div class="btn-row">
          <a class="btn btn--accent btn--lg" href="<?= e(url('book-appointment/')) ?>"><?= e($button ?? 'Book an Appointment') ?> <?= icon('arrow-right') ?></a>
          <a class="btn btn--glass btn--lg" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call <?= e($phone) ?></a>
        </div>
        <?php if (setting('cta_small_print')): ?><p class="cta__small"><?= e(setting('cta_small_print')) ?></p><?php endif; ?>
      </div>
    </div>
  </div>
</section>
