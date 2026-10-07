<?php
Seo::set([
    'title' => setting('site_name') . ' | ' . setting('tagline'),
    'description' => setting('seo_default_description'),
    'canonical' => abs_url(''),
]);
$phone = setting('phone');
$heroImage = setting('hero_image');
$badges = lines(setting('hero_badges'));
$stats = json_list(setting('stats'));
$providers = Content::providers();
$locations = Content::locations();
$testimonials = Content::testimonials(true);
$faqs = Content::faqs('home');
$svc = fn($slug) => url('treatments/' . $slug . '/');
?>

<!-- 3. Hero -->
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
        <a class="btn btn--outline btn--lg" href="<?= e(url('treatments/')) ?>">Explore Treatments</a>
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
      <a class="float-chip float-chip--3" href="<?= e($svc('regenerative-medicine')) ?>"><span><?= icon('flask') ?></span>Regenerative Medicine</a>
      <a class="float-chip float-chip--4" href="<?= e($svc('spinal-decompression-therapy')) ?>"><span><?= icon('move') ?></span>Spinal Decompression</a>
      <div class="hero__card">
        <span class="hero__card-icon"><?= icon('calendar-check') ?></span>
        <span><strong>Book online</strong><small>Pick a time that works for you</small></span>
      </div>
    </div>
  </div>
</section>

<!-- 5. About / integrated care -->
<section class="section about-home" aria-labelledby="about-title">
  <div class="container split">
    <div class="split__media about-home__media">
      <div class="about-home__photo" data-reveal="mask">
        <?php if (setting('about_image')): ?>
        <?= img(setting('about_image'), 'The ' . setting('site_short_name') . ' care team') ?>
        <?php else: ?>
        <?php partial('art', ['icon' => 'heart-pulse', 'variant' => 'wellness', 'label' => 'Whole-person care', 'large' => true]); ?>
        <?php endif; ?>
      </div>
      <?php if ($stats): ?>
      <div class="about-stats" aria-label="Experience">
        <?php foreach ($stats as $i => $st): ?>
        <div class="about-stat about-stat--<?= $i % 3 ?>" data-reveal style="--d:<?= $i ?>">
          <p class="about-stat__num"><span data-count="<?= (int)$st['value'] ?>"><?= (int)$st['value'] ?></span><?= e($st['suffix'] ?? '') ?></p>
          <p class="about-stat__label"><?= e($st['label']) ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    <div class="split__content" data-reveal>
      <p class="eyebrow">Whole-person care</p>
      <h2 id="about-title" class="h2">Care for Pain, Recovery <em>and Everyday Wellness</em></h2>
      <p class="lead">Two people with the same symptom rarely need the same plan.</p>
      <p>We start with a careful evaluation, then build a non-surgical plan around your goals, whether that is recovering from an injury, easing back or neck pain, or feeling your best with wellness services such as IV therapy and medically supervised weight loss.</p>
      <a class="btn btn--dark" href="<?= e(url('treatments/')) ?>">Explore Our Treatments <?= icon('arrow-right') ?></a>
    </div>
  </div>
</section>

<!-- 7. Treatment explorer -->
<section class="section explorer" aria-labelledby="explorer-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Our treatments</p>
        <h2 id="explorer-title" class="h2">Find the Right <em>Treatment for You</em></h2>
      </div>
      <a class="btn btn--outline" href="<?= e(url('treatments/')) ?>">Explore All Treatments <?= icon('arrow-right') ?></a>
    </div>
    <div class="tabs" role="tablist" aria-label="Treatment categories" data-explorer-tabs data-api="<?= e(url('api/treatments')) ?>" data-all="<?= e(url('treatments/')) ?>">
      <button class="tab is-active" role="tab" aria-selected="true" data-filter="featured">Featured</button>
      <?php foreach (Content::CATEGORIES as $k => $c): ?>
      <button class="tab" role="tab" aria-selected="false" data-filter="<?= e($k) ?>"><?= e($c['short']) ?></button>
      <?php endforeach; ?>
    </div>
    <?php $exItems = Content::explorerServices('featured'); ?>
    <div class="tgrid" data-explorer-grid data-total="<?= count($exItems) ?>" aria-live="polite">
      <?php foreach (array_slice($exItems, 0, 3) as $s) partial('service-card', ['s' => $s]); ?>
    </div>
    <div class="explorer__more"<?= count($exItems) > 3 ? '' : ' hidden' ?> data-explorer-more-wrap>
      <a class="btn btn--outline btn--lg" href="<?= e(url('treatments/')) ?>" data-explorer-more data-next="3">Show More <?= icon('chevron-down') ?></a>
    </div>
  </div>
</section>

<!-- 8. Where does it hurt? -->
<section class="section section--soft hurt" aria-labelledby="hurt-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">Where does it hurt?</p>
      <h2 id="hurt-title" class="h2">Start With <em>Where You Feel It</em></h2>
      <p class="section-head__text">Choose an area to see treatments our team may recommend after an evaluation.</p>
    </div>
    <div data-reveal><?php partial('bodymap'); ?></div>
  </div>
</section>

<!-- 9. Why choose -->
<section class="section why" aria-labelledby="why-title">
  <div class="container">
    <div class="section-head" data-reveal>
      <div>
        <p class="eyebrow">Why choose us</p>
        <h2 id="why-title" class="h2">Care That Puts <em>You First</em></h2>
      </div>
    </div>
    <div class="why__grid">
      <?php foreach ([
          ['Non-Surgical First', 'We focus on conservative, non-surgical options whenever they are appropriate for you.', 'shield-check'],
          ['A Plan Built for You', 'Your care plan is based on your evaluation, your goals and your daily life.', 'target'],
          ['Recovery and Wellness', 'From injury recovery to IV therapy and weight loss support, care for how you want to feel.', 'heart-pulse'],
          ['Easy Online Booking', 'Pick a time that works for you online, or call or text our team.', 'calendar-check'],
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

<!-- 11. How treatment works -->
<section class="section steps" aria-labelledby="steps-title">
  <div class="container">
    <div class="section-head section-head--center" data-reveal>
      <p class="eyebrow">How it works</p>
      <h2 id="steps-title" class="h2">Your Path to <em>Feeling Better</em></h2>
    </div>
    <ol class="steps__list" data-steps>
      <li class="steps__line" aria-hidden="true"><span data-steps-fill></span></li>
      <?php foreach ([
          ['Book Your Visit', 'Choose a time online, or call or text our team.', 'calendar-check'],
          ['Your First Visit', 'Health history, a thorough evaluation and a conversation about your goals.', 'clipboard'],
          ['Personalized Care', 'Treatment built around your condition, symptoms and goals.', 'heart-pulse'],
          ['Ongoing Support', 'Rehab, exercises, stretches, lifestyle guidance or maintenance care where appropriate.', 'route'],
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

<!-- 12. Accident & injury care -->
<section class="section section--soft injury" aria-labelledby="injury-title">
  <div class="container injury__inner">
    <div class="injury__content" data-reveal>
      <p class="eyebrow">Accident &amp; injury care</p>
      <h2 id="injury-title" class="h2">Hurt in an <em>Accident?</em></h2>
      <p class="lead">Get evaluated promptly and start a coordinated recovery plan.</p>
      <div class="btn-row">
        <a class="btn btn--dark" href="<?= e(url('treatments/?category=injury')) ?>">Explore Injury Care <?= icon('arrow-right') ?></a>
        <a class="btn btn--accent" href="<?= e(url('book-appointment/')) ?>">Book Appointment</a>
      </div>
    </div>
    <div class="injury__cards">
      <?php foreach ([
          ['Car Accident', 'Treatment after an automobile injury.', 'car-accident-injury-treatment', 'car'],
          ['Sports Injury', 'Recovery, function and return to activity.', 'sports-injuries-and-physical-fitness', 'dumbbell'],
          ['Spinal Decompression', 'Relief for disc-related back and neck pain.', 'spinal-decompression-therapy', 'move'],
      ] as $i => [$t, $d, $slug, $ic]): ?>
      <a class="icard" href="<?= e($svc($slug)) ?>" data-reveal style="--d:<?= $i ?>">
        <span class="icard__icon"><?= icon($ic) ?></span>
        <span class="icard__text"><strong><?= e($t) ?></strong><small><?= e($d) ?></small></span>
        <span class="icard__arrow"><?= icon('arrow-up-right') ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 13. Provider team -->
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

<!-- 14. Locations -->
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

<!-- 15. Testimonials -->
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
      <p class="eyebrow">Patient testimonials</p>
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

<!-- 15b. Book a visit (contact details + appointment form) -->
<section class="section book" id="book" aria-labelledby="book-title">
  <div class="book__glow" aria-hidden="true"></div>
  <div class="container book__grid">
    <div class="book__info" data-reveal>
      <p class="eyebrow eyebrow--light">Book your visit</p>
      <h2 id="book-title" class="h2 book__title">Pick a Time <em>That Works for You</em></h2>
      <p class="book__lead">Book online in a few steps, or call or text our team and we will help you get scheduled.</p>
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
        <?php foreach (['A careful evaluation of what you are facing', 'A plan built around your goals', 'Non-surgical treatment options', 'Easy online scheduling', 'Questions answered by phone or text', 'Injury, spine and wellness care'] as $b): ?>
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

<!-- 16. FAQ -->
<?php if ($faqs): ?>
<section class="section faq-section" aria-labelledby="faq-title">
  <div class="container faq-layout">
    <div class="faq-layout__intro" data-reveal>
      <p class="eyebrow">FAQ</p>
      <h2 id="faq-title" class="h2">Questions? <em>We're Here to Help.</em></h2>
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

<!-- 17. Appointment CTA -->
<?php partial('cta'); ?>
