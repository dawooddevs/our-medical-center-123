<?php
/** @var array $page /book-appointment/ */
Seo::set([
    'title' => $page['meta_title'] ?: $page['title'],
    'description' => $page['meta_description'] ?: $page['intro'],
    'canonical' => abs_url('book-appointment/'),
]);
$phone = setting('phone');
$sms = setting('sms_phone') ?: $phone;
$ghl = trim((string)setting('ghl_appointment_embed')) !== '';
partial('inner-hero', [
    'title' => $page['title'],
    'eyebrow' => $page['eyebrow'],
    'text' => $page['intro'],
    'crumbs' => [[$page['title'], 'book-appointment/']],
    'showActions' => false,
]);
?>
<section class="section section--tight" id="form">
  <div class="container appt">
    <div class="appt__form card card--form" data-reveal>
      <div class="card__head">
        <span class="card__icon"><?= icon('calendar-check') ?></span>
        <div>
          <h2 class="h4"><?= $ghl ? 'Book Your Appointment' : 'Request Your Appointment' ?></h2>
          <p><?= $ghl ? 'Pick a date and time, then add your details.' : 'Takes about a minute. We\'ll call or text to confirm.' ?></p>
        </div>
      </div>
      <?php partial('form', ['type' => 'appointment']); ?>
      <?php if (setting('cta_small_print')): ?><p class="fine"><?= icon('info') ?><?= e(setting('cta_small_print')) ?></p><?php endif; ?>
    </div>
    <aside class="appt__side">
      <a class="side-action side-action--accent" href="<?= e(tel_href($phone)) ?>" data-reveal>
        <span class="side-action__icon"><?= icon('phone') ?></span>
        <span><strong>Prefer to talk?</strong><small>Call <?= e($phone) ?></small></span><?= icon('arrow-right') ?>
      </a>
      <a class="side-action" href="<?= e(sms_href($sms)) ?>" data-text-us data-reveal>
        <span class="side-action__icon"><?= icon('message') ?></span>
        <span><strong>Text Us</strong><small>Send a text to <?= e($sms) ?></small></span><?= icon('arrow-right') ?>
      </a>
      <?php if ($locs = Content::locations()): ?>
      <div class="sidecard" data-reveal>
        <h2 class="sidecard__h">Locations</h2>
        <ul class="sidecard__locs">
          <?php foreach ($locs as $l): ?>
          <li><a href="<?= e(Content::mapsDirections($l)) ?>" target="_blank" rel="noopener"><?= icon('map-pin') ?><span><strong><?= e($l['name']) ?></strong><small><?= e(Content::fullAddress($l)) ?></small></span></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
    </aside>
  </div>
</section>

<?php if ($groups = Content::formGroups()): ?>
<section class="section" id="patient-forms" aria-labelledby="forms-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">Patient forms</p>
      <h2 id="forms-title" class="h2">Download Your <em>Forms</em></h2>
      <p class="lead">Save time at check-in by downloading and completing your forms before your visit. All forms open as PDFs.</p>
    </div>
    <div class="fgroups">
      <?php foreach (array_values($groups) as $i => $g): ?>
      <article class="fgroup" data-reveal style="--d:<?= $i ?>">
        <span class="fgroup__icon"><?= icon($g['icon']) ?></span>
        <h3 class="fgroup__title"><?= e($g['title']) ?></h3>
        <p class="fgroup__text"><?= e($g['text']) ?></p>
        <div class="fgroup__btns">
          <?php foreach ($g['items'] as $f): $lang = str_contains($f['label'], 'Spanish') ? 'Spanish' : 'English'; ?>
          <a class="btn <?= $lang === 'English' ? '' : 'btn--outline' ?>" href="<?= e($f['url']) ?>" target="_blank" rel="noopener" aria-label="Download <?= e($f['label']) ?> (PDF)"><?= icon('download') ?><?= $lang === 'English' ? 'English' : 'Español' ?></a>
          <?php endforeach; ?>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php if (trim(strip_tags((string)$page['content'])) !== ''): ?>
<section class="section section--tight"><div class="container container--narrow prose prose--lg"><?= Html::clean($page['content']) ?></div></section>
<?php endif; ?>
