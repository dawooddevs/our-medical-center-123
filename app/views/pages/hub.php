<?php
/** @var array $page A section landing page that lists its sub-pages (e.g. /new-patients/). */
Seo::set([
    'title' => $page['meta_title'] ?: $page['title'],
    'description' => $page['meta_description'] ?: $page['intro'],
    'canonical' => abs_url($page['slug'] . '/'),
    'image' => $page['image'],
]);
$children = Content::childPages($page['slug']);
$icons = ['clipboard', 'credit-card', 'message-square', 'calendar-check', 'file-text', 'info'];
$faqs = Content::faqs($page['slug']);
partial('inner-hero', [
    'title' => $page['title'],
    'eyebrow' => $page['eyebrow'],
    'text' => $page['intro'],
    'crumbs' => [[$page['title'], $page['slug'] . '/']],
    'image' => $page['image'],
    'withArt' => true,
    'artIcon' => 'clipboard',
    'artVariant' => 'wellness',
]);
?>
<?php if ($children): ?>
<section class="section section--tight hub">
  <div class="container">
    <div class="hub__grid">
      <?php foreach ($children as $i => $c): ?>
      <a class="hub__card" href="<?= e(url($c['slug'] . '/')) ?>" data-reveal style="--d:<?= $i ?>">
        <span class="hub__num">0<?= $i + 1 ?></span>
        <span class="hub__icon"><?= icon($icons[$i % count($icons)]) ?></span>
        <strong><?= e($c['title']) ?></strong>
        <small><?= e(str_limit((string)$c['intro'], 130)) ?></small>
        <span class="hub__more">Read more <?= icon('arrow-right') ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php if (trim(strip_tags((string)$page['content'])) !== ''): ?>
<section class="section section--article">
  <div class="container article-layout">
    <article class="article"><div class="prose prose--lg" data-reveal><?= Html::clean($page['content']) ?></div></article>
    <aside class="sidebar">
      <div class="sidecard sidecard--primary">
        <p class="eyebrow eyebrow--light">Ready when you are</p>
        <h2 class="sidecard__title">Book Your First Visit</h2>
        <a class="btn btn--accent btn--block" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
        <a class="btn btn--glass btn--block" href="<?= e(tel_href(setting('phone'))) ?>"><?= icon('phone') ?><?= e(setting('phone')) ?></a>
      </div>
      <?php if (Content::patientForms()) partial('forms-card'); ?>
    </aside>
  </div>
</section>
<?php endif; ?>
<?php if ($faqs): ?>
<section class="section section--soft"><div class="container container--narrow" data-reveal><?php partial('faq', ['faqs' => $faqs, 'id' => 'hub-faq']); ?></div></section>
<?php endif; ?>
<?php if ((int)$page['show_cta']) partial('cta'); ?>
