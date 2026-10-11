<?php
/** @var array $condition */
$c = $condition;
$grp = Content::CONDITION_GROUPS[$c['grp']] ?? ['label' => 'Conditions', 'icon' => 'activity'];
$symptoms = lines($c['symptoms']);
$faqs = json_list($c['faqs']);
$treatments = Content::servicesBySlugs(csv_list($c['treatments']));
$phone = setting('phone');
$artVariant = ['spine' => 'spine', 'joints' => 'injury', 'metabolic' => 'wellness'][$c['grp']] ?? 'medical';
$has = fn($html) => trim(strip_tags((string)$html)) !== '';

Seo::set([
    'title' => $c['meta_title'] ?: $c['title'],
    'description' => $c['meta_description'] ?: $c['excerpt'],
    'canonical' => abs_url('conditions/' . $c['slug'] . '/'),
    'image' => $c['image'],
]);
Seo::addSchema([
    '@context' => 'https://schema.org',
    '@type' => 'MedicalWebPage',
    'name' => $c['title'],
    'url' => abs_url('conditions/' . $c['slug'] . '/'),
    'description' => strip_tags((string)$c['excerpt']),
    'about' => ['@type' => 'MedicalCondition', 'name' => $c['title']],
    'publisher' => ['@id' => abs_url('') . '#organization'],
]);

$sections = array_filter([
    'overview' => $has($c['overview']) ? 'Understanding ' . $c['title'] : null,
    'symptoms' => $symptoms ? 'Common Symptoms' : null,
    'causes' => $has($c['causes']) ? 'Common Causes' : null,
    'approach' => $has($c['approach']) ? 'How We Evaluate and Treat It' : null,
    'treatments' => $treatments ? 'Treatments That May Help' : null,
    'urgent' => $has($c['when_to_seek']) ? 'When to Seek Urgent Care' : null,
    'faq' => $faqs ? 'Frequently Asked Questions' : null,
]);

partial('inner-hero', [
    'title' => $c['title'],
    'eyebrow' => $grp['label'],
    'text' => $c['hero_text'] ?: $c['excerpt'],
    'crumbs' => [['Conditions', 'conditions/'], [$c['title'], 'conditions/' . $c['slug'] . '/']],
    'image' => $c['image'],
    'withArt' => true,
    'artIcon' => $c['icon'] ?: $grp['icon'],
    'artVariant' => $artVariant,
]);
?>
<section class="section section--article">
  <div class="container article-layout">
    <article class="article">
      <?php if (count($sections) > 2): ?>
      <nav class="toc" aria-label="On this page">
        <?php foreach ($sections as $id => $label): ?><a href="#<?= e($id) ?>"><?= e($label) ?></a><?php endforeach; ?>
      </nav>
      <?php endif; ?>

      <?php if (isset($sections['overview'])): ?>
      <section id="overview" class="article__section" data-reveal>
        <h2><?= e($sections['overview']) ?></h2>
        <div class="prose"><?= Html::clean($c['overview']) ?></div>
      </section>
      <?php endif; ?>

      <?php if ($symptoms): ?>
      <section id="symptoms" class="article__section" data-reveal>
        <h2>Common Symptoms</h2>
        <ul class="cond-grid">
          <?php foreach ($symptoms as $sy): ?><li><?= icon('check-circle') ?><?= e($sy) ?></li><?php endforeach; ?>
        </ul>
      </section>
      <?php endif; ?>

      <?php if (isset($sections['causes'])): ?>
      <section id="causes" class="article__section" data-reveal>
        <h2>Common Causes</h2>
        <div class="prose"><?= Html::clean($c['causes']) ?></div>
      </section>
      <?php endif; ?>

      <?php if (isset($sections['approach'])): ?>
      <section id="approach" class="article__section" data-reveal>
        <h2>How We Evaluate and Treat It</h2>
        <div class="expect">
          <span class="expect__icon"><?= icon('clipboard') ?></span>
          <div class="prose"><?= Html::clean($c['approach']) ?></div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ($treatments): ?>
      <section id="treatments" class="article__section" data-reveal>
        <h2>Treatments That May Help</h2>
        <p class="article__lead">Which option fits depends on your evaluation. These are the treatments our team may discuss with you.</p>
        <div class="tlinks">
          <?php foreach ($treatments as $t): ?>
          <a class="icard" href="<?= e(Content::serviceUrl($t)) ?>">
            <span class="icard__icon"><?= icon(Content::serviceIcon($t)) ?></span>
            <span class="icard__text"><strong><?= e($t['title']) ?></strong><small><?= e(str_limit((string)$t['excerpt'], 110)) ?></small></span>
            <span class="icard__arrow"><?= icon('arrow-up-right') ?></span>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
      <?php endif; ?>

      <?php if (isset($sections['urgent'])): ?>
      <section id="urgent" class="article__section" data-reveal>
        <h2>When to Seek Urgent Care</h2>
        <div class="callout callout--warn">
          <span class="callout__icon"><?= icon('info') ?></span>
          <div class="prose"><?= Html::clean($c['when_to_seek']) ?></div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ($faqs): ?>
      <section id="faq" class="article__section" data-reveal>
        <h2>Frequently Asked Questions</h2>
        <?php partial('faq', ['faqs' => $faqs, 'id' => 'cond-faq']); ?>
      </section>
      <?php endif; ?>
      <p class="disclaimer"><?= icon('info') ?>This page is general information, not a diagnosis. Your care is based on your own evaluation.</p>
    </article>

    <aside class="sidebar">
      <div class="sidecard sidecard--primary">
        <p class="eyebrow eyebrow--light">Get evaluated</p>
        <h2 class="sidecard__title">Talk to Our Team About <?= e($c['title']) ?></h2>
        <p class="sidecard__text">An evaluation helps find what is behind your symptoms and which options make sense for you.</p>
        <a class="btn btn--accent btn--block" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
        <a class="btn btn--glass btn--block" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?><?= e($phone) ?></a>
      </div>
      <div class="sidecard">
        <h2 class="sidecard__h"><?= e($grp['label']) ?></h2>
        <ul class="sidecard__list">
          <?php foreach (Content::conditionsByGroup()[$c['grp']] ?? [] as $o): ?>
          <li><a href="<?= e(Content::conditionUrl($o)) ?>"<?= $o['slug'] === $c['slug'] ? ' aria-current="page"' : '' ?>><?= e($o['title']) ?><?= icon('chevron-right') ?></a></li>
          <?php endforeach; ?>
        </ul>
        <a class="sidecard__more" href="<?= e(url('conditions/')) ?>">All conditions <?= icon('arrow-right') ?></a>
      </div>
    </aside>
  </div>
</section>

<?php partial('cta', ['headline' => 'Find Out What Is Behind Your Symptoms']); ?>
