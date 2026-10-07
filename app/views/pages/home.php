<?php
Seo::set([
    'title' => setting('site_name') . ' | ' . setting('tagline'),
    'description' => setting('seo_default_description'),
    'canonical' => abs_url(''),
]);
$phone = setting('phone');
$sms = setting('sms_phone') ?: $phone;
$email = setting('email');
$heroImage = setting('hero_image');
$badges = array_slice(lines(setting('hero_badges')), 0, 3);
$providers = Content::providers();
$locations = Content::locations();
$testimonials = Content::testimonials(true);
$faqs = Content::faqs('home');
$stats = array_values(array_filter(json_list(setting('stats')), fn($st) => trim((string)($st['value'] ?? '')) !== '' && trim((string)($st['label'] ?? '')) !== ''));
$byCat = Content::servicesByCategory();
$bySlug = [];
foreach (Content::services() as $s) {
    $bySlug[$s['slug']] = $s;
}
$label = fn($s) => preg_replace('/\s*—\s*Coming Soon$/i', '', $s['menu_label'] ?: $s['title']);
$ghl = trim((string)setting('ghl_appointment_embed')) !== '';
?>

<!-- 1. Hero -->
<section class="hero<?= $heroImage ? ' hero--photo' : '' ?>" aria-labelledby="hero-title">
  <div class="hero__bg" aria-hidden="true">
    <?php if ($heroImage): ?>
    <?= img($heroImage, '', ['loading' => 'eager', 'fetchpriority' => 'high', 'class' => 'hero__img']) ?>
    <?php endif; ?>
    <span class="hero__dots"></span>
    <?php partial('mark', ['class' => 'hero__mark hero__mark--a']); ?>
    <?php partial('mark', ['class' => 'hero__mark hero__mark--b']); ?>
  </div>
  <div class="container hero__inner">
    <p class="eyebrow eyebrow--light hero__eyebrow" data-hero-in style="--d:0"><?= e(setting('tagline')) ?></p>
    <h1 class="hero__title" id="hero-title">
      <span class="hero__line" data-hero-in style="--d:1"><?= e(setting('hero_line1')) ?></span>
      <span class="hero__line hero__line--accent" data-hero-in style="--d:2"><?= e(setting('hero_line2')) ?></span>
    </h1>
    <p class="hero__copy" data-hero-in style="--d:3"><?= e(setting('hero_copy')) ?></p>
    <div class="btn-row btn-row--center" data-hero-in style="--d:4">
      <a class="btn btn--accent btn--lg" href="<?= e(url('book-appointment/')) ?>">Book an Appointment<?= icon('arrow-right') ?></a>
      <a class="btn btn--glass btn--lg" href="#treatments">Explore Treatments</a>
    </div>
    <p class="hero__call" data-hero-in style="--d:5">Or call <a href="<?= e(tel_href($phone)) ?>"><?= e($phone) ?></a></p>
    <?php if ($badges): ?>
    <ul class="hero__badges" data-hero-in style="--d:6">
      <?php foreach ($badges as $b): ?><li><?= icon('check') ?><?= e($b) ?></li><?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
  <div class="container hero__cards">
    <?php $i = 0; foreach (Content::CATEGORIES as $key => $c): if (empty($byCat[$key])) continue; ?>
    <a class="hcard" href="<?= e(url('treatments/?category=' . $key)) ?>" data-hero-in style="--d:<?= 5 + $i++ ?>">
      <span class="hcard__icon"><?= icon($c['icon']) ?></span>
      <span class="hcard__body">
        <strong><?= e($c['label']) ?></strong>
        <small><?= e(implode(' · ', array_map($label, $byCat[$key]))) ?></small>
      </span>
      <span class="hcard__arrow"><?= icon('arrow-right') ?></span>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- 2. Treatments, grouped by category -->
<section class="section tx" id="treatments" aria-labelledby="tx-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Our treatments</p>
        <h2 id="tx-title" class="h2">Care for Injury, Spine <em>and Wellness</em></h2>
        <p class="section-head__text">Non-surgical treatments in three areas of care. Not sure where to start? Book an evaluation and our team will help you decide.</p>
      </div>
      <a class="btn btn--outline" href="<?= e(url('treatments/')) ?>">All Treatments<?= icon('arrow-right') ?></a>
    </div>
    <div class="tx__grid">
      <?php $i = 0; foreach (Content::CATEGORIES as $key => $c): if (empty($byCat[$key])) continue; ?>
      <div class="tx__col tx__col--<?= e($key) ?>" data-reveal style="--d:<?= $i++ ?>">
        <a class="tx__head" href="<?= e(url('treatments/?category=' . $key)) ?>">
          <span class="tx__head-icon"><?= icon($c['icon']) ?></span>
          <span><strong><?= e($c['label']) ?></strong><small><?= e($c['blurb']) ?></small></span>
        </a>
        <ul class="tx__list">
          <?php foreach ($byCat[$key] as $s): ?>
          <li>
            <a class="trow" href="<?= e(Content::serviceUrl($s)) ?>">
              <span class="trow__icon"><?= icon(Content::serviceIcon($s)) ?></span>
              <span class="trow__body"><strong><?= e(preg_replace('/\s*—\s*Coming Soon$/i', '', $s['title'])) ?></strong><small><?= e(str_limit((string)$s['excerpt'], 90)) ?></small></span>
              <span class="trow__arrow"><?= icon('arrow-right') ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 3. Wellness spotlight -->
<?php
$spot = array_values(array_filter([
    isset($bySlug['iv-therapy']) ? [$bySlug['iv-therapy'], 'IV therapy', [
        'Fluids, vitamins and minerals given through a vein by trained clinical staff',
        'A health screening first, including your medications and vital signs',
        'Formulations chosen by your provider for your needs',
    ]] : null,
    isset($bySlug['weight-loss']) ? [$bySlug['weight-loss'], 'Medical weight loss', [
        'A program supervised by a licensed provider',
        'A plan for nutrition, activity and everyday habits',
        'Prescription medication only when appropriate and prescribed',
    ]] : null,
]));
if ($spot): ?>
<section class="section section--soft spot" aria-labelledby="spot-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">Wellness</p>
      <h2 id="spot-title" class="h2">Support for How You <em>Feel Every Day</em></h2>
      <p class="section-head__text">Alongside injury and spine care, we offer wellness services. Each starts with an evaluation, so your provider can decide what is right for you.</p>
    </div>
    <div class="spot__grid">
      <?php foreach ($spot as $i => [$s, $kicker, $points]): ?>
      <article class="spot__card spot__card--<?= $i ?>" data-reveal style="--d:<?= $i ?>">
        <span class="spot__icon"><?= icon(Content::serviceIcon($s)) ?></span>
        <p class="spot__kicker"><?= e($kicker) ?></p>
        <h3 class="spot__title"><?= e($s['title']) ?></h3>
        <p class="spot__text"><?= e($s['excerpt']) ?></p>
        <ul class="spot__points">
          <?php foreach ($points as $p): ?><li><?= icon('check') ?><?= e($p) ?></li><?php endforeach; ?>
        </ul>
        <a class="spot__link" href="<?= e(Content::serviceUrl($s)) ?>">Explore <?= e($s['menu_label'] ?: $s['title']) ?><span class="spot__arrow"><?= icon('arrow-right') ?></span></a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 4. Why choose us -->
<section class="section why" aria-labelledby="why-title">
  <div class="container why__layout">
    <div class="why__intro" data-reveal>
      <p class="eyebrow">Why choose us</p>
      <h2 id="why-title" class="h2">Care That Starts <em>With You</em></h2>
      <p>Every plan starts with listening. We take time to understand what you are feeling, what you want to get back to, and what fits your life.</p>
      <a class="btn btn--dark" href="<?= e(url('book-appointment/')) ?>">Book an Appointment<?= icon('arrow-right') ?></a>
      <?php if (setting('about_image')): ?>
      <div class="why__photo"><?= img(setting('about_image'), 'Care at ' . setting('site_short_name')) ?></div>
      <?php endif; ?>
    </div>
    <div class="why__grid">
      <?php foreach ([
          ['Non-surgical options first', 'We look at conservative, non-surgical care first whenever it is right for you.', 'shield-check'],
          ['A plan made for you', 'Your plan is based on your evaluation, your goals and your daily routine.', 'target'],
          ['Injury, spine and wellness', 'Care for getting over an injury, easing back and neck pain, and feeling well day to day.', 'heart-pulse'],
          ['Easy to book', 'Choose a time online, or call or text our team and we will help you get scheduled.', 'calendar-check'],
      ] as $i => [$t, $d, $ic]): ?>
      <article class="why__card" data-reveal style="--d:<?= $i ?>">
        <span class="why__icon"><?= icon($ic) ?></span>
        <h3><?= e($t) ?></h3>
        <p><?= e($d) ?></p>
      </article>
      <?php endforeach; ?>
      <?php if ($stats): ?>
      <dl class="why__stats" data-reveal>
        <?php foreach (array_slice($stats, 0, 4) as $st): ?>
        <div><dt><?= e($st['label']) ?></dt><dd><?= e($st['value']) ?><?= e($st['suffix'] ?? '') ?></dd></div>
        <?php endforeach; ?>
      </dl>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- 5. How it works -->
<section class="section steps" aria-labelledby="steps-title">
  <?php partial('mark', ['class' => 'steps__mark']); ?>
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow eyebrow--light">How it works</p>
      <h2 id="steps-title" class="h2">Four Simple Steps <em>to Getting Started</em></h2>
    </div>
    <ol class="steps__list" data-steps>
      <li class="steps__line" aria-hidden="true"><span data-steps-fill></span></li>
      <?php foreach ([
          ['Book your visit', 'Pick a time online, or call or text our team.', 'calendar-check'],
          ['First visit and evaluation', 'We review your health history, examine you and talk about your goals.', 'clipboard'],
          ['Your personalized plan', 'Your provider explains the options and builds a plan around you.', 'route'],
          ['Ongoing support', 'Follow-up visits, home exercises and guidance as you progress.', 'heart-pulse'],
      ] as $i => [$t, $d, $ic]): ?>
      <li class="step" data-reveal style="--d:<?= $i ?>">
        <span class="step__num"><span class="sr-only">Step </span><?= $i + 1 ?></span>
        <span class="step__icon"><?= icon($ic) ?></span>
        <h3><?= e($t) ?></h3>
        <p><?= e($d) ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- 6. Injury care -->
<?php
$injury = array_values(array_filter([
    ['car-accident-injury-treatment', 'Car accident injuries', 'Care after a collision, including whiplash and neck or back pain.'],
    ['sports-injuries-and-physical-fitness', 'Sports injuries', 'Recovery, movement and a safe return to activity.'],
    ['spinal-decompression-therapy', 'Spinal decompression', 'Gentle, non-surgical care for disc-related back and neck pain.'],
], fn($r) => isset($bySlug[$r[0]])));
if ($injury): ?>
<section class="section injury" aria-labelledby="injury-title">
  <div class="container injury__inner">
    <div class="injury__content" data-reveal>
      <p class="eyebrow">Injury care</p>
      <h2 id="injury-title" class="h2">Hurt in an Accident or <em>Playing Sports?</em></h2>
      <p class="lead">Some injuries may not cause symptoms right away. An evaluation can help you understand what is going on and where to start.</p>
      <div class="btn-row">
        <a class="btn btn--dark" href="<?= e(url('book-appointment/')) ?>">Book an Evaluation<?= icon('arrow-right') ?></a>
        <a class="btn btn--outline" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call <?= e($phone) ?></a>
      </div>
    </div>
    <div class="injury__cards">
      <?php foreach ($injury as $i => [$slug, $t, $d]): $s = $bySlug[$slug]; ?>
      <a class="icard" href="<?= e(Content::serviceUrl($s)) ?>" data-reveal style="--d:<?= $i ?>">
        <span class="icard__icon"><?= icon(Content::serviceIcon($s)) ?></span>
        <span class="icard__text"><strong><?= e($t) ?></strong><small><?= e($d) ?></small></span>
        <span class="icard__arrow"><?= icon('arrow-right') ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Provider team (shown once providers are added in the dashboard) -->
<?php if ($providers): ?>
<section class="section section--soft providers-home" aria-labelledby="team-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Our providers</p>
        <h2 id="team-title" class="h2">Meet the Team <em>Behind Your Care</em></h2>
      </div>
    </div>
    <div class="pgrid" data-more-group>
      <?php foreach ($providers as $i => $p): ?>
      <div<?= $i < 3 ? ' data-reveal style="--d:' . $i . '"' : ' class="is-more" hidden' ?>><?php partial('provider-card', ['p' => $p]); ?></div>
      <?php endforeach; ?>
    </div>
    <?php if (count($providers) > 3): ?>
    <div class="explorer__more" data-more-wrap>
      <a class="btn btn--outline btn--lg" href="#team-title" data-more-btn>Show More <?= icon('chevron-down') ?></a>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- Testimonials (shown once published testimonials exist) -->
<?php if ($testimonials): ?>
<section class="section testimonials" aria-labelledby="t-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">Patient stories</p>
      <h2 id="t-title" class="h2">What Our <em>Patients Say</em></h2>
    </div>
    <div class="tshow<?= setting('testimonials_image') ? ' tshow--photo' : '' ?>">
    <?php if (setting('testimonials_image')): ?>
    <div class="tshow__photo" data-reveal><?= img(setting('testimonials_image'), '') ?></div>
    <?php endif; ?>
    <div class="tshow__card" data-tshow aria-roledescription="carousel" aria-label="Patient testimonials" data-reveal>
      <span class="tshow__quote-mark" aria-hidden="true"><?= icon('quote') ?></span>
      <div class="tshow__slides" aria-live="polite">
        <?php foreach ($testimonials as $i => $t): ?>
        <figure class="tshow__slide<?= $i === 0 ? ' is-active' : '' ?>" role="group" aria-roledescription="slide" aria-label="<?= $i + 1 ?> of <?= count($testimonials) ?>"<?= $i === 0 ? '' : ' hidden' ?>>
          <blockquote class="tshow__text"><p>“<?= e(preg_replace('/^[\s"“”]+|[\s"“”]+$/u', '', (string)$t['content'])) ?>”</p></blockquote>
          <figcaption class="tshow__by"><?= e($t['name']) ?><?php if ($t['label'] && $t['label'] !== 'Patient'): ?><small><?= e($t['label']) ?></small><?php endif; ?></figcaption>
        </figure>
        <?php endforeach; ?>
      </div>
      <div class="tshow__nav">
        <span class="tshow__count"><span data-tshow-current>1</span> / <?= count($testimonials) ?></span>
        <button type="button" class="tshow__btn" data-tshow-prev aria-label="Previous testimonial"><?= icon('arrow-left') ?></button>
        <button type="button" class="tshow__btn" data-tshow-next aria-label="Next testimonial"><?= icon('arrow-right') ?></button>
      </div>
    </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 7. Booking -->
<section class="section book" id="book" aria-labelledby="book-title">
  <div class="container book__grid">
    <div class="book__info" data-reveal>
      <p class="eyebrow">Book your visit</p>
      <h2 id="book-title" class="h2">Pick a Time <em>That Suits You</em></h2>
      <p class="book__lead">Book online in a few steps. If you would rather talk it through, call or text our team and we will help you find a time.</p>
      <div class="book__panel">
        <a class="book__row" href="<?= e(tel_href($phone)) ?>"><span class="book__row-icon"><?= icon('phone') ?></span><span class="book__row-text"><small>Call us</small><strong><?= e($phone) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
        <a class="book__row" href="<?= e(sms_href($sms)) ?>"><span class="book__row-icon"><?= icon('message') ?></span><span class="book__row-text"><small>Text us</small><strong><?= e($sms) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
        <?php if ($email): ?>
        <a class="book__row" href="mailto:<?= e($email) ?>"><span class="book__row-icon"><?= icon('mail') ?></span><span class="book__row-text"><small>Email</small><strong><?= str_replace(['@', '-'], ['<wbr>@', '&#8209;'], e($email)) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
        <?php endif; ?>
      </div>
      <?php if ($locations): $hoursRows = Content::hoursTable($locations); ?>
      <div class="book__panel">
        <p class="book__panel-title"><?= icon('map-pin') ?>Our <?= count($locations) > 1 ? 'offices' : 'office' ?></p>
        <div class="book__offices">
          <?php foreach ($locations as $l): ?>
          <a class="book__office" href="<?= e(Content::mapsDirections($l)) ?>" target="_blank" rel="noopener">
            <span class="book__office-name"><?= e($l['name']) ?></span>
            <span class="book__office-addr"><?= e($l['address']) ?></span>
            <span class="book__office-city"><?= e($l['city'] . ', ' . $l['state'] . ' ' . $l['zip']) ?></span>
            <span class="book__office-link">Get directions <?= icon('arrow-up-right') ?></span>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="book__panel book__panel--hours">
        <p class="book__panel-title"><?= icon('clock') ?>Office hours</p>
        <?php if ($hoursRows): ?>
        <table class="book__table">
          <thead><tr><th scope="col"><span class="sr-only">Days</span></th><?php foreach ($locations as $l): ?><th scope="col"><?= e($l['name']) ?></th><?php endforeach; ?></tr></thead>
          <tbody>
            <?php foreach ($hoursRows as $r): ?>
            <tr data-iso-days="<?= e(implode(',', $r['iso'])) ?>">
              <th scope="row"><?= e($r['days']) ?><span class="book__today">Today</span></th>
              <?php foreach ($locations as $l): $t = $r['times'][$l['slug']] ?? null; ?>
              <td<?= $t ? '' : ' class="is-closed"' ?>><?= e($t ?? 'Closed') ?></td>
              <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?php else: ?>
        <div class="book__hours-list">
          <?php foreach ($locations as $l): ?>
          <dl><dt><?= e($l['name']) ?></dt><?php foreach (Content::hours($l) as $h): ?><dd><span><?= e($h['days']) ?></span><span><?= e($h['time']) ?></span></dd><?php endforeach; ?></dl>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="book__form" data-reveal style="--d:1">
      <div class="book__form-head">
        <span class="book__form-icon"><?= icon('calendar-check') ?></span>
        <div>
          <h3><?= $ghl ? 'Book your appointment' : 'Request an appointment' ?></h3>
          <p><?= $ghl ? 'Choose a date and time, then add your details.' : 'It takes about a minute. We will call or text to confirm.' ?></p>
        </div>
      </div>
      <?php partial('form', ['type' => 'appointment']); ?>
    </div>
  </div>
</section>

<!-- 8. FAQ (shown once homepage FAQs are published in the dashboard) -->
<?php if ($faqs): ?>
<section class="section faq-section" aria-labelledby="faq-title">
  <div class="container faq-layout">
    <div class="faq-layout__intro" data-reveal>
      <p class="eyebrow">FAQ</p>
      <h2 id="faq-title" class="h2">Questions? <em>We Can Help.</em></h2>
      <p>Can't find your answer here? Call or text our team.</p>
      <div class="btn-row">
        <a class="btn btn--dark" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call <?= e($phone) ?></a>
        <a class="btn btn--outline" href="<?= e(sms_href($sms)) ?>"><?= icon('message') ?>Text Our Team</a>
      </div>
    </div>
    <div data-reveal><?php partial('faq', ['faqs' => $faqs, 'id' => 'home-faq']); ?></div>
  </div>
</section>
<?php endif; ?>

<!-- 9. Closing call to action -->
<?php partial('cta'); ?>
