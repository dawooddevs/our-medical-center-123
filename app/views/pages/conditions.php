<?php
/** @var array $page /conditions/ index */
Seo::set([
    'title' => $page['meta_title'] ?: $page['title'],
    'description' => $page['meta_description'] ?: $page['intro'],
    'canonical' => abs_url('conditions/'),
]);
$services = Content::conditions();
$groups = Content::CONDITION_GROUPS;
$active = isset($_GET['category'], $groups[$_GET['category']]) ? $_GET['category'] : 'all'; // same parameter the filter script updates
$items = [];
foreach ($services as $i => $s) {
    $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'url' => abs_url('conditions/' . $s['slug'] . '/'), 'name' => $s['title']];
}
Seo::addSchema(['@context' => 'https://schema.org', '@type' => 'ItemList', 'name' => 'Conditions', 'itemListElement' => $items]);
partial('inner-hero', [
    'title' => $page['title'],
    'eyebrow' => $page['eyebrow'],
    'text' => $page['intro'],
    'crumbs' => [[$page['title'], 'conditions/']],
    'showActions' => false,
]);
?>
<section class="section section--tight treatments-index" data-tindex="condition">
  <div class="container">
    <div class="filters" data-reveal>
      <label class="search">
        <?= icon('search') ?>
        <span class="sr-only">Search conditions</span>
        <input type="search" placeholder="Search by condition or symptom" data-tsearch autocomplete="off">
      </label>
      <div class="tabs tabs--wrap" role="group" aria-label="Filter by category">
        <button class="tab<?= $active === 'all' ? ' is-active' : '' ?>" data-filter="all" aria-pressed="<?= $active === 'all' ? 'true' : 'false' ?>">All <span class="tab__count"><?= count($services) ?></span></button>
        <?php foreach ($groups as $k => $c):
            $n = count(array_filter($services, fn($s) => $s['grp'] === $k)); if (!$n) continue; ?>
        <button class="tab<?= $active === $k ? ' is-active' : '' ?>" data-filter="<?= e($k) ?>" aria-pressed="<?= $active === $k ? 'true' : 'false' ?>"><?= e($c['label']) ?> <span class="tab__count"><?= $n ?></span></button>
        <?php endforeach; ?>
      </div>
    </div>
    <p class="results-count" aria-live="polite" data-tcount></p>
    <div class="tgrid" data-tgrid data-initial="<?= e($active) ?>">
      <?php foreach ($services as $s) partial('condition-card', ['c' => $s]); ?>
    </div>
    <div class="empty" data-tempty hidden>
      <span class="empty__icon"><?= icon('search') ?></span>
      <h2 class="h4">No conditions match your search</h2>
      <p>Try a different word, or book an evaluation and our team will help you find the right place to start.</p>
      <div class="btn-row btn-row--center">
        <a class="btn btn--accent" href="<?= e(url('book-appointment/')) ?>">Book an Appointment<?= icon('arrow-right') ?></a>
        <a class="btn btn--outline" href="<?= e(tel_href(setting('phone'))) ?>"><?= icon('phone') ?>Call <?= e(setting('phone')) ?></a>
      </div>
    </div>
  </div>
</section>
<section class="section section--soft section--tight">
  <div class="container">
    <div class="section-head" data-reveal>
      <div><p class="eyebrow">Our treatments</p><h2 class="h3">Explore Care by Treatment Area</h2></div>
      <a class="btn btn--outline" href="<?= e(url('treatments/')) ?>">All Treatments <?= icon('arrow-right') ?></a>
    </div>
    <div class="cat-grid">
      <?php foreach (Content::CATEGORIES as $k => $c): ?>
      <a class="cat-card" href="<?= e(url('treatments/?category=' . $k)) ?>" data-reveal>
        <span class="cat-card__icon"><?= icon($c['icon']) ?></span>
        <strong><?= e($c['label']) ?></strong>
        <small><?= e($c['blurb']) ?></small>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php partial('patient-stories'); ?>
<?php partial('cta'); ?>
