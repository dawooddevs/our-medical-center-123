<?php
Seo::set(['title' => 'Page not found', 'noindex' => true]);
$phone = setting('phone');
$links = [
    ['Home', '', 'home', 'Start again from the homepage'],
    ['All treatments', 'treatments/', 'activity', 'Injury, spine and wellness care'],
    ['Book an appointment', 'book-appointment/', 'calendar-check', 'Choose a date and time online'],
    ['Contact us', 'contact-us/', 'message-square', 'Call, text or send a message'],
];
?>
<section class="ihero notfound">
  <?php partial('mark', ['class' => 'ihero__mark']); ?>
  <div class="container ihero__inner">
    <div class="ihero__content" data-hero-in>
      <p class="eyebrow eyebrow--light">Error 404</p>
      <h1 class="ihero__title">We Couldn't Find That Page</h1>
      <p class="ihero__text">The page may have moved or the link may be out of date. These links can help you find what you need, or call our team on <a class="notfound__phone" href="<?= e(tel_href($phone)) ?>"><?= e($phone) ?></a>.</p>
    </div>
  </div>
</section>
<section class="section section--tight">
  <div class="container">
    <ul class="notfound__links">
      <?php foreach ($links as $i => [$label, $href, $ic, $desc]): ?>
      <li data-reveal style="--d:<?= $i ?>"><a class="side-action" href="<?= e(url($href)) ?>"><span class="side-action__icon"><?= icon($ic) ?></span><span><strong><?= e($label) ?></strong><small><?= e($desc) ?></small></span><?= icon('arrow-right') ?></a></li>
      <?php endforeach; ?>
      <li data-reveal style="--d:4"><a class="side-action side-action--accent" href="<?= e(tel_href($phone)) ?>"><span class="side-action__icon"><?= icon('phone') ?></span><span><strong>Call <?= e($phone) ?></strong><small>Our team can point you in the right direction</small></span><?= icon('arrow-right') ?></a></li>
    </ul>
  </div>
</section>
