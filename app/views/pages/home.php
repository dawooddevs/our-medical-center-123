<?php
Seo::set([
    'title' => setting('site_name') . ' | ' . setting('tagline'),
    'description' => setting('seo_default_description'),
    'canonical' => abs_url(''),
]);
$phone = setting('phone');
$heroImage = setting('hero_image');
$badges = array_slice(lines(setting('hero_badges')), 0, 3);
$stats = array_values(array_filter(json_list(setting('stats')), fn($st) => trim((string)($st['value'] ?? '')) !== '' && trim((string)($st['label'] ?? '')) !== ''));
$providers = Content::providers();
$locations = Content::locations();
$testimonials = Content::testimonials(true);
$faqs = Content::faqs('home');
$svc = fn($slug) => url('treatments/' . $slug . '/');
$bySlug = [];
foreach (Content::services() as $s) {
    $bySlug[$s['slug']] = $s;
}
?>

<!-- 1. Hero (photo panel: Settings → Homepage → Hero photo, or upload home-hero.jpg) -->
<section class="hero">
  <div class="hero__bg" aria-hidden="true">
    <span class="hero__blob hero__blob--1"></span>
    <span class="hero__blob hero__blob--2"></span>
    <span class="hero__blob hero__blob--3"></span>
    <span class="hero__grid"></span>
  </div>
  <div class="container hero__inner">
    <div class="hero__content">
      <p class="eyebrow hero__eyebrow" data-hero-in style="--d:0"><span class="pulse-dot"></span><?= e(setting('tagline')) ?></p>
      <h1 class="hero__title">
        <span class="hero__line"><span data-hero-in style="--d:1"><?= e(setting('hero_line1')) ?></span></span>
        <span class="hero__line hero__line--accent"><span data-hero-in style="--d:2"><?= e(setting('hero_line2')) ?></span></span>
      </h1>
      <p class="hero__copy" data-hero-in style="--d:3"><?= e(setting('hero_copy')) ?></p>
      <div class="btn-row" data-hero-in style="--d:4">
        <a class="btn btn--accent btn--lg" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
        <a class="btn btn--outline btn--lg" href="#explorer-title">Explore Treatments</a>
      </div>
      <a class="hero__call" href="<?= e(tel_href($phone)) ?>" data-hero-in style="--d:5"><span class="hero__call-icon"><?= icon('phone') ?></span><span>Or call <strong><?= e($phone) ?></strong></span></a>
      <ul class="hero__badges" data-hero-in style="--d:6">
        <?php foreach ($badges as $b): ?><li><?= icon('check-circle') ?><?= e($b) ?></li><?php endforeach; ?>
      </ul>
    </div>
    <div class="hero__visual" data-hero-in style="--d:2">
      <div class="hero__panel<?= $heroImage ? ' hero__panel--photo' : '' ?>">
        <?php if ($heroImage): ?>
          <?= img($heroImage, 'Patient care at ' . setting('site_short_name'), ['loading' => 'eager', 'fetchpriority' => 'high', 'class' => 'hero__img']) ?>
        <?php else: ?>
          <div class="hero__rings" aria-hidden="true"><span></span><span></span><span></span></div>
          <?php partial('spine'); ?>
        <?php endif; ?>
      </div>
      <a class="float-chip float-chip--1" href="<?= e($svc('sports-injuries-and-physical-fitness')) ?>"><span><?= icon('dumbbell') ?></span>Sports Injuries</a>
      <a class="float-chip float-chip--2" href="<?= e($svc('chiropractic-care')) ?>"><span><?= icon('spine') ?></span>Chiropractic Care</a>
      <a class="float-chip float-chip--3" href="<?= e($svc('iv-therapy')) ?>"><span><?= icon('droplet') ?></span>IV Therapy</a>
      <a class="float-chip float-chip--4" href="<?= e($svc('weight-loss')) ?>"><span><?= icon('target') ?></span>Medical Weight Loss</a>
      <div class="hero__card">
        <span class="hero__card-icon"><?= icon('calendar-check') ?></span>
        <span><strong>Book online</strong><small>Pick a time that works for you</small></span>
      </div>
    </div>
  </div>
</section>

<!-- 2. Treatments (photo per treatment: upload <slug>.jpg, e.g. iv-therapy.jpg) -->
<section class="section explorer" aria-labelledby="explorer-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Our treatments</p>
        <h2 id="explorer-title" class="h2">Find the Right <em>Treatment for You</em></h2>
        <p class="section-head__text">Non-surgical care for injuries, back and neck pain, recovery and everyday wellness.</p>
      </div>
      <a class="btn btn--outline" href="<?= e(url('treatments/')) ?>">Explore All Treatments <?= icon('arrow-right') ?></a>
    </div>
    <div class="tabs" role="tablist" aria-label="Treatment categories" data-explorer-tabs data-api="<?= e(url('api/treatments')) ?>" data-all="<?= e(url('treatments/')) ?>">
      <button class="tab is-active" role="tab" aria-selected="true" data-filter="featured">All Treatments</button>
      <?php foreach (Content::CATEGORIES as $k => $c): ?>
      <button class="tab" role="tab" aria-selected="false" data-filter="<?= e($k) ?>"><?= e($c['short']) ?></button>
      <?php endforeach; ?>
    </div>
    <?php $exItems = Content::explorerServices('featured'); ?>
    <div class="tgrid" data-explorer-grid data-total="<?= count($exItems) ?>" aria-live="polite">
      <?php foreach (array_slice($exItems, 0, 6) as $s) partial('service-card', ['s' => $s]); ?>
    </div>
    <div class="explorer__more"<?= count($exItems) > 6 ? '' : ' hidden' ?> data-explorer-more-wrap>
      <a class="btn btn--outline btn--lg" href="<?= e(url('treatments/')) ?>" data-explorer-more data-next="6">Show More <?= icon('chevron-down') ?></a>
    </div>
  </div>
</section>

<!-- 3. Wellness spotlight (photos come from the IV Therapy and Weight Loss treatment images) -->
<?php
$spot = array_values(array_filter([
    isset($bySlug['iv-therapy']) ? [$bySlug['iv-therapy'], [
        'Fluids, vitamins and minerals given through a vein by trained clinical staff',
        'A health screening first, including your medications and vital signs',
        'A formulation chosen by your provider',
    ]] : null,
    isset($bySlug['weight-loss']) ? [$bySlug['weight-loss'], [
        'A program supervised by a licensed provider',
        'Support for nutrition, activity and everyday habits',
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
      <?php foreach ($spot as $i => [$s, $points]): ?>
      <article class="spot__card" data-reveal style="--d:<?= $i ?>">
        <a class="spot__media" href="<?= e(Content::serviceUrl($s)) ?>" tabindex="-1" aria-hidden="true">
          <?php if ($s['image']): ?>
          <?= img($s['image'], '', ['sizes' => '(min-width: 900px) 45vw, 92vw']) ?>
          <?php else: ?>
          <?php partial('art', ['icon' => Content::serviceIcon($s), 'variant' => 'wellness', 'large' => true]); ?>
          <?php endif; ?>
          <span class="spot__badge"><?= icon(Content::serviceIcon($s)) ?></span>
        </a>
        <div class="spot__body">
          <h3 class="spot__title"><?= e($s['title']) ?></h3>
          <p class="spot__text"><?= e($s['excerpt']) ?></p>
          <ul class="spot__points">
            <?php foreach ($points as $p): ?><li><?= icon('check') ?><?= e($p) ?></li><?php endforeach; ?>
          </ul>
          <a class="btn btn--dark" href="<?= e(Content::serviceUrl($s)) ?>">Explore <?= e($s['menu_label'] ?: $s['title']) ?> <?= icon('arrow-right') ?></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 4. Why choose us (photo: Settings → Homepage → Why choose us photo, or upload home-about.jpg) -->
<section class="section about-home why" aria-labelledby="why-title">
  <div class="container">
    <div class="split">
      <div class="split__media about-home__media">
        <div class="about-home__photo" data-reveal="mask">
          <?php if (setting('about_image')): ?>
          <?= img(setting('about_image'), 'Care at ' . setting('site_short_name')) ?>
          <?php else: ?>
          <?php partial('art', ['icon' => 'heart-pulse', 'variant' => 'wellness', 'label' => 'Whole-person care', 'large' => true]); ?>
          <?php endif; ?>
        </div>
        <?php if ($stats): ?>
        <div class="about-stats" aria-label="Experience">
          <?php foreach (array_slice($stats, 0, 3) as $i => $st): ?>
          <div class="about-stat about-stat--<?= $i % 3 ?>" data-reveal style="--d:<?= $i ?>">
            <p class="about-stat__num"><?= e($st['value']) ?><?= e($st['suffix'] ?? '') ?></p>
            <p class="about-stat__label"><?= e($st['label']) ?></p>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="split__content" data-reveal>
        <p class="eyebrow">Why choose us</p>
        <h2 id="why-title" class="h2">Care That Starts <em>With You</em></h2>
        <p class="lead">Two people with the same symptom rarely need the same plan.</p>
        <p>We take time to understand what you are feeling, what you want to get back to and what fits your life. Then we build a plan around you, whether that is recovering from an injury, easing back or neck pain, or feeling your best day to day.</p>
        <a class="btn btn--dark" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
      </div>
    </div>
    <div class="why__grid">
      <?php foreach ([
          ['Non-Surgical First', 'We look at conservative, non-surgical care first whenever it is right for you.', 'shield-check'],
          ['A Plan Made for You', 'Your plan is based on your evaluation, your goals and your daily routine.', 'target'],
          ['Injury, Spine and Wellness', 'Care for getting over an injury, easing back and neck pain, and feeling well day to day.', 'heart-pulse'],
          ['Easy to Book', 'Choose a time online, or call or text our team and we will help you get scheduled.', 'calendar-check'],
      ] as $i => [$t, $d, $ic]): ?>
      <article class="why__card why__card--<?= $i ?>" data-reveal style="--d:<?= $i ?>">
        <span class="why__icon"><?= icon($ic) ?></span>
        <h3><?= e($t) ?></h3>
        <p><?= e($d) ?></p>
        <span class="why__num" aria-hidden="true">0<?= $i + 1 ?></span>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 5. How it works -->
<section class="section section--soft steps" aria-labelledby="steps-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">How it works</p>
      <h2 id="steps-title" class="h2">Your Path to <em>Feeling Better</em></h2>
    </div>
    <ol class="steps__list" data-steps>
      <li class="steps__line" aria-hidden="true"><span data-steps-fill></span></li>
      <?php foreach ([
          ['Book Your Visit', 'Choose a time online, or call or text our team.', 'calendar-check'],
          ['First Visit and Evaluation', 'We review your health history, examine you and talk about your goals.', 'clipboard'],
          ['Your Personalized Plan', 'Your provider explains the options and builds a plan around you.', 'heart-pulse'],
          ['Ongoing Support', 'Follow-up visits, home exercises and guidance as you progress.', 'route'],
      ] as $i => [$t, $d, $ic]): ?>
      <li class="step" data-reveal style="--d:<?= $i ?>">
        <span class="step__num"><?= icon($ic) ?><em><?= $i + 1 ?></em></span>
        <h3><?= e($t) ?></h3>
        <p><?= e($d) ?></p>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>

<!-- 6. Injury care (photo: Settings → Homepage → Injury care photo, or upload home-injury.jpg) -->
<?php
$injury = array_values(array_filter([
    ['car-accident-injury-treatment', 'Car Accident Injuries', 'Care after a collision, including whiplash and neck or back pain.'],
    ['sports-injuries-and-physical-fitness', 'Sports Injuries', 'Recovery, movement and a safe return to activity.'],
    ['spinal-decompression-therapy', 'Spinal Decompression', 'Gentle, non-surgical care for disc-related back and neck pain.'],
], fn($r) => isset($bySlug[$r[0]])));
if ($injury): ?>
<section class="section injury" aria-labelledby="injury-title">
  <div class="container injury__inner">
    <div class="injury__media" data-reveal="mask">
      <?php if (setting('injury_image')): ?>
      <?= img(setting('injury_image'), '') ?>
      <?php else: ?>
      <?php partial('art', ['icon' => 'activity', 'variant' => 'injury', 'label' => 'Injury care', 'large' => true]); ?>
      <?php endif; ?>
    </div>
    <div class="injury__content" data-reveal>
      <p class="eyebrow">Accident &amp; injury care</p>
      <h2 id="injury-title" class="h2">Hurt in an Accident or <em>Playing Sports?</em></h2>
      <p class="lead">Some injuries may not cause symptoms right away. An evaluation can help you understand what is going on and where to start.</p>
      <div class="injury__cards">
        <?php foreach ($injury as $i => [$slug, $t, $d]): $s = $bySlug[$slug]; ?>
        <a class="icard" href="<?= e(Content::serviceUrl($s)) ?>">
          <span class="icard__icon"><?= icon(Content::serviceIcon($s)) ?></span>
          <span class="icard__text"><strong><?= e($t) ?></strong><small><?= e($d) ?></small></span>
          <span class="icard__arrow"><?= icon('arrow-up-right') ?></span>
        </a>
        <?php endforeach; ?>
      </div>
      <div class="btn-row">
        <a class="btn btn--accent" href="<?= e(url('book-appointment/')) ?>">Book an Evaluation <?= icon('arrow-right') ?></a>
        <a class="btn btn--outline" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call <?= e($phone) ?></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Providers (shown once added in the dashboard) -->
<?php if ($providers): ?>
<section class="section providers-home" aria-labelledby="team-title">
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

<!-- Locations (shown once added) -->
<?php if ($locations): ?>
<section class="section section--soft" aria-labelledby="loc-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Locations</p>
        <h2 id="loc-title" class="h2">Visit <em>Our Office</em></h2>
      </div>
    </div>
    <div class="lgrid">
      <?php foreach ($locations as $i => $l): ?>
      <div data-reveal style="--d:<?= $i ?>"><?php partial('location-card', ['l' => $l]); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Testimonials (shown once published) -->
<?php if ($testimonials): ?>
<section class="section testimonials" aria-labelledby="t-title">
  <div class="container tshow">
    <div class="tshow__media" data-reveal>
      <div class="tshow__photo">
        <?php if (setting('testimonials_image')): ?>
        <?= img(setting('testimonials_image'), 'A patient with a ' . setting('site_short_name') . ' provider') ?>
        <?php else: ?>
        <?php partial('art', ['icon' => 'heart-pulse', 'variant' => 'spine', 'label' => 'Patient stories', 'large' => true]); ?>
        <?php endif; ?>
      </div>
      <?php if ($first = $stats[0] ?? null): ?>
      <div class="tshow__badge">
        <p class="tshow__badge-num"><span data-count="<?= (int)$first['value'] ?>"><?= (int)$first['value'] ?></span><sup><?= e($first['suffix'] ?? '') ?></sup></p>
        <p class="tshow__badge-label"><?= e($first['label']) ?></p>
      </div>
      <?php endif; ?>
      <span class="tshow__quote-mark" aria-hidden="true"><?= icon('quote') ?></span>
    </div>
    <div class="tshow__content" data-reveal style="--d:1">
      <p class="eyebrow">Patient stories</p>
      <h2 id="t-title" class="h2">What Our <em>Patients Say</em></h2>
      <div class="tshow__stars" aria-hidden="true"><?= str_repeat(icon('star'), 5) ?></div>
      <?php if ($testimonials): ?>
      <div class="tshow__card" data-tshow aria-roledescription="carousel" aria-label="Patient testimonials">
        <div class="tshow__slides" aria-live="polite">
          <?php foreach ($testimonials as $i => $t): ?>
          <figure class="tshow__slide<?= $i === 0 ? ' is-active' : '' ?>" role="group" aria-roledescription="slide" aria-label="<?= $i + 1 ?> of <?= count($testimonials) ?>"<?= $i === 0 ? '' : ' hidden' ?>>
            <blockquote class="tshow__text"><p>“<?= e(preg_replace('/^[\s"“”]+|[\s"“”]+$/u', '', (string)$t['content'])) ?>”</p></blockquote>
            <figcaption class="tshow__by"><?= e(mb_strtoupper($t['name'])) ?><?php if ($t['label'] && $t['label'] !== 'Patient'): ?><small><?= e($t['label']) ?></small><?php endif; ?></figcaption>
          </figure>
          <?php endforeach; ?>
        </div>
        <div class="tshow__nav">
          <span class="tshow__count"><span data-tshow-current>1</span> / <?= count($testimonials) ?></span>
          <button type="button" class="tshow__btn" data-tshow-prev aria-label="Previous testimonial"><?= icon('arrow-left') ?></button>
          <button type="button" class="tshow__btn" data-tshow-next aria-label="Next testimonial"><?= icon('arrow-right') ?></button>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 7. Booking (GoHighLevel form) -->
<section class="section book" id="book" aria-labelledby="book-title">
  <div class="book__glow" aria-hidden="true"></div>
  <div class="container book__grid">
    <div class="book__info" data-reveal>
      <p class="eyebrow eyebrow--light">Book your visit</p>
      <h2 id="book-title" class="h2 book__title">Pick a Time <em>That Suits You</em></h2>
      <p class="book__lead">Book online in a few steps. If you would rather talk it through, call or text our team and we will help you find a time.</p>
      <?php $sms = setting('sms_phone') ?: $phone; $email = setting('email'); $hoursRows = Content::hoursTable($locations); ?>
      <div class="book__panels">
        <div class="book__panel">
          <p class="book__panel-title"><?= icon('message-square') ?>Get in touch</p>
          <a class="book__row" href="<?= e(tel_href($phone)) ?>"><span class="book__row-icon"><?= icon('phone') ?></span><span class="book__row-text"><small>Call us</small><strong><?= e($phone) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
          <a class="book__row" href="<?= e(sms_href($sms)) ?>"><span class="book__row-icon"><?= icon('message') ?></span><span class="book__row-text"><small>Text us</small><strong><?= e($sms) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
          <?php if ($email): ?>
          <a class="book__row" href="mailto:<?= e($email) ?>"><span class="book__row-icon"><?= icon('mail') ?></span><span class="book__row-text"><small>Email</small><strong><?= str_replace(['@', '-'], ['<wbr>@', '&#8209;'], e($email)) ?></strong></span><?= icon('arrow-right', 'icon book__row-arrow') ?></a>
          <?php endif; ?>
        </div>
        <?php if ($locations): ?>
        <div class="book__panel">
          <p class="book__panel-title"><?= icon('map-pin') ?>Our offices</p>
          <div class="book__offices">
            <?php foreach ($locations as $l): ?>
            <a class="book__office" href="<?= e(Content::mapsDirections($l)) ?>" target="_blank" rel="noopener">
              <span class="book__office-head"><span class="book__row-icon"><?= icon('building') ?></span><span class="book__office-name"><?= e($l['name']) ?></span></span>
              <span class="book__office-addr"><?= e($l['address']) ?></span>
              <span class="book__office-city"><?= e($l['city'] . ', ' . $l['state'] . ' ' . $l['zip']) ?></span>
              <span class="book__office-link">Get directions <?= icon('arrow-up-right') ?></span>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php if ($locations): ?>
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
      <h3 class="book__subhead">Why book with us</h3>
      <ul class="book__benefits">
        <?php foreach (['A careful evaluation first', 'A plan built around your goals', 'Non-surgical treatment options', 'Easy online scheduling', 'Call or text with questions', 'Injury, spine and wellness care'] as $b): ?>
        <li><span class="book__benefit-icon"><?= icon('check') ?></span><?= e($b) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="book__form" data-reveal style="--d:1">
      <div class="book__form-head">
        <span class="book__form-icon"><?= icon('calendar-check') ?></span>
        <?php $ghl = trim((string)setting('ghl_appointment_embed')) !== ''; ?>
        <div>
          <h3><?= $ghl ? 'Book your appointment' : 'Enter your details' ?></h3>
          <p><?= $ghl ? 'Pick a date and time, then add your details. We\'ll confirm by phone or text.' : 'Takes about a minute. We\'ll call or text to confirm.' ?></p>
        </div>
      </div>
      <?php partial('form', ['type' => 'appointment']); ?>
    </div>
  </div>
</section>

<!-- 8. FAQ (shown once homepage FAQs are published) -->
<?php if ($faqs): ?>
<section class="section faq-section" aria-labelledby="faq-title">
  <div class="container faq-layout">
    <div class="faq-layout__intro" data-reveal>
      <p class="eyebrow">FAQ</p>
      <h2 id="faq-title" class="h2">Questions? <em>We Can Help.</em></h2>
      <p>Can't find what you're looking for? Our team is happy to help.</p>
      <div class="btn-row">
        <a class="btn btn--dark" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call <?= e($phone) ?></a>
        <a class="btn btn--outline" href="<?= e(sms_href(setting('sms_phone') ?: $phone)) ?>"><?= icon('message') ?>Text Our Team</a>
      </div>
    </div>
    <div data-reveal><?php partial('faq', ['faqs' => $faqs, 'id' => 'home-faq']); ?></div>
  </div>
</section>
<?php endif; ?>

<!-- 9. Closing call to action -->
<?php partial('cta'); ?>
