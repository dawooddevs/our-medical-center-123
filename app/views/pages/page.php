<?php
/** @var array $page Generic content page (also used for drafts in preview mode). */
Seo::set([
    'title' => $page['meta_title'] ?: $page['title'],
    'description' => $page['meta_description'] ?: $page['intro'],
    'canonical' => abs_url($page['slug'] . '/'),
    'image' => $page['image'],
]);
if (in_array($page['slug'], ['thank-you', 'new-patient-thank-you'], true)) {
    Seo::$noindex = true; // form confirmation pages stay out of search results
}
// Nested pages (e.g. new-patients/what-to-expect) link back to their section
$parentSlug = str_contains($page['slug'], '/') ? explode('/', $page['slug'])[0] : '';
$parent = $parentSlug !== '' ? Content::page($parentSlug) : null;
$siblings = $parent ? Content::childPages($parentSlug) : [];
$crumbs = $parent ? [[$parent['title'], $parent['slug'] . '/'], [$page['title'], $page['slug'] . '/']] : [[$page['title'], $page['slug'] . '/']];
// FAQs assigned to this page in Dashboard → FAQs ("Shown on")
$faqs = Content::faqs($page['slug']);
partial('inner-hero', [
    'title' => $page['title'],
    'eyebrow' => $page['eyebrow'],
    'text' => $page['intro'],
    'crumbs' => $crumbs,
    'image' => $page['image'],
    'showActions' => $page['template'] !== 'legal',
]);
?>
<section class="section section--article">
  <div class="container<?= $page['template'] === 'legal' ? ' container--narrow' : ' article-layout' ?>">
    <article class="article">
      <?php if (trim(strip_tags((string)$page['content'], '<img><iframe>')) !== ''): ?>
      <div class="prose prose--lg" data-reveal><?= Html::clean($page['content']) ?></div>
      <?php endif; ?>
      <?php if ($faqs): ?>
      <div class="page-faq" data-reveal><?php partial('faq', ['faqs' => $faqs, 'id' => 'page-faq']); ?></div>
      <?php endif; ?>
    </article>
    <?php if ($page['template'] !== 'legal'): ?>
    <aside class="sidebar">
      <div class="sidecard sidecard--primary">
        <p class="eyebrow eyebrow--light">Ready when you are</p>
        <h2 class="sidecard__title">Book Your Visit</h2>
        <a class="btn btn--accent btn--block" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
        <a class="btn btn--glass btn--block" href="<?= e(tel_href(setting('phone'))) ?>"><?= icon('phone') ?><?= e(setting('phone')) ?></a>
        <a class="sidecard__link" href="<?= e(url('contact-us/')) ?>"><?= icon('message-square') ?>Questions? Contact us</a>
      </div>
      <?php if ($parent && $siblings): ?>
      <div class="sidecard">
        <h2 class="sidecard__h"><?= e($parent['title']) ?></h2>
        <ul class="sidecard__list">
          <li><a href="<?= e(url($parent['slug'] . '/')) ?>">Overview<?= icon('chevron-right') ?></a></li>
          <?php foreach ($siblings as $o): ?>
          <li><a href="<?= e(url($o['slug'] . '/')) ?>"<?= $o['slug'] === $page['slug'] ? ' aria-current="page"' : '' ?>><?= e($o['title']) ?><?= icon('chevron-right') ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
      <?php if (Content::patientForms()) partial('forms-card'); ?>
    </aside>
    <?php endif; ?>
  </div>
</section>
<?php if ((int)$page['show_cta']) partial('cta'); ?>
