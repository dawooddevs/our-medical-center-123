<?php
$phone = setting('phone');
$locs = Content::locations();
$byCat = Content::servicesByCategory();
$menuServices = fn($cat) => array_values(array_filter($byCat[$cat] ?? [], fn($s) => (int)$s['show_in_menu'] === 1));
$forms = Content::patientForms();
$formUrl = fn($f) => $f['url'];
$cur = fn($p) => rtrim($path ?? '', '/') === rtrim($p, '/') ? ' aria-current="page"' : '';
$contact = [
    ['Contact Us', 'contact-us/', 'Call, text or book online', 'message-square'],
    ['Book an Appointment', 'book-appointment/', 'Pick a date and time online', 'calendar-check'],
];
?>
<?php if ($locs): ?>
<div class="utility">
  <div class="container utility__inner">
    <ul class="utility__locs">
      <?php foreach ($locs as $l): ?>
      <li><a href="<?= e(Content::mapsDirections($l)) ?>" target="_blank" rel="noopener"><?= icon('map-pin') ?><strong><?= e($l['name']) ?>:</strong> <?= e(Content::fullAddress($l)) ?></a></li>
      <?php endforeach; ?>
    </ul>
    <div class="utility__right">
      <a href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call: <?= e($phone) ?></a>
    </div>
  </div>
</div>
<?php endif; ?>

<header class="site-header" data-header>
  <div class="container header__inner">
    <a class="brand" href="<?= e(url('')) ?>" aria-label="<?= e(setting('site_name')) ?> — Home">
      <?php partial('logo'); ?>
    </a>

    <nav class="nav" aria-label="Main navigation" data-nav>
      <ul class="nav__list">
        <li class="nav__item has-drop">
          <button class="nav__link" type="button" aria-expanded="false" aria-controls="dd-treatments">Treatments<?= icon('chevron-down', 'icon nav__chev') ?></button>
          <div class="dropdown" id="dd-treatments">
            <ul class="dropdown__list">
              <?php foreach (Content::CATEGORIES as $key => $c): $items = $menuServices($key); if (!$items) continue; ?>
              <li class="dropdown__item has-sub">
                <a class="dropdown__link" href="<?= e(url('treatments/?category=' . $key)) ?>" aria-haspopup="true"><span class="dropdown__icon"><?= icon($c['icon']) ?></span><span><strong><?= e($c['label']) ?></strong><small><?= e(plural(count($items), 'treatment', 'treatments')) ?></small></span><?= icon('chevron-right', 'icon dropdown__chev') ?></a>
                <div class="dropdown__sub">
                  <p class="dropdown__sub-title"><?= e($c['label']) ?></p>
                  <ul>
                    <?php foreach ($items as $sv):
                        $label = preg_replace('/\s*—\s*Coming Soon$/i', '', $sv['menu_label'] ?: $sv['title']); ?>
                    <li><a href="<?= e(Content::serviceUrl($sv)) ?>"<?= $cur('/treatments/' . $sv['slug'] . '/') ?>><?= e($label) ?><?php if ((int)$sv['coming_soon']): ?> <span class="tag tag--soon">Coming soon</span><?php endif; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
            <a class="dropdown__all" href="<?= e(url('treatments/')) ?>">View all treatments <?= icon('arrow-right') ?></a>
          </div>
        </li>

<?php $condGroups = Content::conditionsByGroup(); if ($condGroups): ?>
        <li class="nav__item has-drop">
          <button class="nav__link" type="button" aria-expanded="false" aria-controls="dd-conditions">Conditions<?= icon('chevron-down', 'icon nav__chev') ?></button>
          <div class="dropdown" id="dd-conditions">
            <ul class="dropdown__list">
              <?php foreach ($condGroups as $gk => $items): $g = Content::CONDITION_GROUPS[$gk]; ?>
              <li class="dropdown__item has-sub">
                <a class="dropdown__link" href="<?= e(url('conditions/?category=' . $gk)) ?>" aria-haspopup="true"><span class="dropdown__icon"><?= icon($g['icon']) ?></span><span><strong><?= e($g['label']) ?></strong><small><?= e(plural(count($items), 'condition', 'conditions')) ?></small></span><?= icon('chevron-right', 'icon dropdown__chev') ?></a>
                <div class="dropdown__sub">
                  <p class="dropdown__sub-title"><?= e($g['label']) ?></p>
                  <ul>
                    <?php foreach ($items as $cn): ?>
                    <li><a href="<?= e(Content::conditionUrl($cn)) ?>"<?= $cur('/conditions/' . $cn['slug'] . '/') ?>><?= e($cn['title']) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
            <a class="dropdown__all" href="<?= e(url('conditions/')) ?>">View all conditions <?= icon('arrow-right') ?></a>
          </div>
        </li>
<?php endif; ?>
<?php $npHub = Content::page('new-patients'); $npPages = $npHub ? Content::childPages('new-patients') : []; if ($npHub): ?>
        <li class="nav__item has-drop">
          <button class="nav__link" type="button" aria-expanded="false" aria-controls="dd-new-patients">New Patients<?= icon('chevron-down', 'icon nav__chev') ?></button>
          <div class="dropdown" id="dd-new-patients">
            <ul class="dropdown__list">
              <li><a class="dropdown__link" href="<?= e(url('new-patients/')) ?>"<?= $cur('/new-patients/') ?>><span class="dropdown__icon"><?= icon('user') ?></span><span><strong><?= e($npHub['title']) ?></strong><small>Start here before your first visit</small></span></a></li>
              <?php foreach ($npPages as $i => $np): ?>
              <li><a class="dropdown__link" href="<?= e(url($np['slug'] . '/')) ?>"<?= $cur('/' . $np['slug'] . '/') ?>><span class="dropdown__icon"><?= icon(['clipboard', 'credit-card', 'message-square'][$i % 3]) ?></span><span><strong><?= e($np['title']) ?></strong><small><?= e(str_limit((string)$np['intro'], 46)) ?></small></span></a></li>
              <?php endforeach; ?>
              <?php foreach ($forms as $f): ?>
              <li><a class="dropdown__link" href="<?= e($formUrl($f)) ?>" target="_blank" rel="noopener"><span class="dropdown__icon"><?= icon('download') ?></span><span><strong><?= e($f['label']) ?></strong><small>PDF download</small></span></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
<?php endif; ?>
<?php if (Content::page('blog')): ?>
        <li class="nav__item"><a class="nav__link" href="<?= e(url('blog/')) ?>"<?= str_starts_with($path ?? '', '/blog/') ? ' aria-current="page"' : '' ?>>Blog</a></li>
<?php endif; ?>
        <li class="nav__item has-drop">
          <button class="nav__link" type="button" aria-expanded="false" aria-controls="dd-contact">Contact<?= icon('chevron-down', 'icon nav__chev') ?></button>
          <div class="dropdown dropdown--right" id="dd-contact">
            <ul class="dropdown__list">
              <?php foreach ($contact as [$label, $href, $desc, $ic]): ?>
              <li><a class="dropdown__link" href="<?= e(url($href)) ?>"<?= $cur('/' . $href) ?>><span class="dropdown__icon"><?= icon($ic) ?></span><span><strong><?= e($label) ?></strong><small><?= e($desc) ?></small></span></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
      </ul>
    </nav>

    <div class="header__actions">
      <a class="header__phone" href="<?= e(tel_href($phone)) ?>" aria-label="Call or text <?= e($phone) ?>">
        <span class="header__phone-icon"><?= icon('phone') ?></span>
        <span class="header__phone-text"><small>Call / Text</small><strong><?= e($phone) ?></strong></span>
      </a>
      <a class="btn btn--accent header__cta" href="<?= e(url('book-appointment/')) ?>">Book Appointment</a>
      <button class="menu-toggle" type="button" aria-controls="mobile-nav" aria-expanded="false" data-menu-open>
        <?= icon('menu') ?><span class="sr-only">Open menu</span>
      </button>
    </div>
  </div>
</header>

<?php partial('mobile-nav', ['forms' => $forms, 'formUrl' => $formUrl, 'byCat' => $byCat, 'contact' => $contact]); ?>
