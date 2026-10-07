<?php
$phone = setting('phone');
$sms = setting('sms_phone') ?: $phone;
$locs = Content::locations();
$social = array_filter([
    'facebook' => setting('social_facebook'),
    'x-social' => setting('social_x'),
    'instagram' => setting('social_instagram'),
]);
$socialLabels = ['facebook' => 'Facebook', 'x-social' => 'X (Twitter)', 'instagram' => 'Instagram'];
?>
<footer class="footer">
  <?php partial('mark', ['class' => 'footer__mark']); ?>
  <div class="container">
    <div class="footer__top">
      <div class="footer__brand">
        <a class="brand brand--light" href="<?= e(url('')) ?>"><?php partial('logo', ['light' => true]); ?></a>
        <p><?= e(setting('brand_description')) ?></p>
        <?php if ($social): ?>
        <ul class="footer__social">
          <?php foreach ($social as $k => $href): ?>
          <li><a href="<?= e($href) ?>" target="_blank" rel="noopener" aria-label="<?= e($socialLabels[$k]) ?>"><?= icon($k) ?></a></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="footer__book">
        <p class="footer__book-title">Ready when you are</p>
        <a class="btn btn--accent" href="<?= e(url('book-appointment/')) ?>">Book an Appointment<?= icon('arrow-right') ?></a>
        <a class="footer__phone" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?><span><small>Call or text</small><?= e($phone) ?></span></a>
      </div>
    </div>
    <div class="footer__grid">
      <div>
        <h2 class="footer__title">Treatments</h2>
        <ul class="footer__links">
          <?php foreach (Content::CATEGORIES as $k => $c): ?>
          <li><a href="<?= e(url('treatments/?category=' . $k)) ?>"><?= e($c['label']) ?></a></li>
          <?php endforeach; ?>
          <li><a class="footer__more" href="<?= e(url('treatments/')) ?>">All treatments <?= icon('arrow-right') ?></a></li>
        </ul>
      </div>
      <div>
        <h2 class="footer__title">Patients</h2>
        <ul class="footer__links">
          <li><a href="<?= e(url('book-appointment/')) ?>">Book Appointment</a></li>
          <?php if (Content::patientForms()): ?><li><a href="<?= e(url('book-appointment/#patient-forms')) ?>">Patient Forms</a></li><?php endif; ?>
          <li><a href="<?= e(url('contact-us/')) ?>">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <h2 class="footer__title"><?= $locs ? 'Locations' : 'Get in touch' ?></h2>
        <ul class="footer__links footer__locs">
          <?php foreach ($locs as $l): ?>
          <li>
            <strong><?= e($l['name']) ?></strong>
            <a href="<?= e(Content::mapsDirections($l)) ?>" target="_blank" rel="noopener"><?= e($l['address']) ?><br><?= e($l['city'] . ', ' . $l['state'] . ' ' . $l['zip']) ?></a>
          </li>
          <?php endforeach; ?>
          <li><a href="<?= e(tel_href($phone)) ?>">Call <?= e($phone) ?></a></li>
          <li><a href="<?= e(sms_href($sms)) ?>">Text <?= e($sms) ?></a></li>
          <?php if (setting('email')): ?><li><a href="mailto:<?= e(setting('email')) ?>"><?= e(setting('email')) ?></a></li><?php endif; ?>
        </ul>
      </div>
    </div>
    <div class="footer__bar">
      <p>&copy; <?= date('Y') ?> <?= e(setting('site_name')) ?>. All rights reserved.</p>
      <ul>
        <li><a href="<?= e(url('privacy-policy/')) ?>">Privacy Policy</a></li>
        <li><a href="<?= e(url('terms-and-conditions/')) ?>">Terms &amp; Conditions</a></li>
        <li><a href="<?= e(url('medical-disclaimer/')) ?>">Medical Disclaimer</a></li>
        <li><a href="<?= e(url('sitemap/')) ?>">Sitemap</a></li>
        <?php if (setting('cookie_notice') === '1'): ?><li><button type="button" class="linklike" data-cookie-reset>Cookie settings</button></li><?php endif; ?>
      </ul>
    </div>
  </div>
</footer>
