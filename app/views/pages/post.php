<?php
/** @var array $post */
$p = $post;
$date = $p['published_at'] ?: $p['created_at'];
$minutes = Content::readingTime($p['content']);
$related = Content::servicesBySlugs(csv_list($p['related']));
$more = array_slice(array_values(array_filter(Content::posts(4), fn($o) => $o['slug'] !== $p['slug'])), 0, 3);
$phone = setting('phone');
$url = abs_url('blog/' . $p['slug'] . '/');

Seo::$type = 'article';
Seo::set([
    'title' => $p['meta_title'] ?: $p['title'],
    'description' => $p['meta_description'] ?: $p['excerpt'],
    'canonical' => $url,
    'image' => $p['image'],
]);
Seo::addSchema(array_filter([
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => $p['title'],
    'description' => strip_tags((string)$p['excerpt']),
    'url' => $url,
    'mainEntityOfPage' => $url,
    'datePublished' => date('c', strtotime((string)$date)),
    'dateModified' => date('c', strtotime((string)($p['updated_at'] ?: $date))),
    'image' => $p['image'] ? abs_url($p['image']) : null,
    'author' => ['@type' => 'Organization', 'name' => setting('site_name')],
    'publisher' => ['@id' => abs_url('') . '#organization'],
]));
Seo::$breadcrumbs = [['Home', ''], ['Blog', 'blog/'], [$p['title'], 'blog/' . $p['slug'] . '/']];
?>
<section class="ihero phero-post">
  <div class="ihero__bg" aria-hidden="true"><span></span><span></span></div>
  <div class="container container--post ihero__inner">
    <div class="ihero__content" data-reveal>
      <nav class="crumbs" aria-label="Breadcrumb">
        <ol>
          <li><a href="<?= e(url('')) ?>">Home</a></li>
          <li><?= icon('chevron-right') ?><a href="<?= e(url('blog/')) ?>">Blog</a></li>
          <li><?= icon('chevron-right') ?><span aria-current="page"><?= e(str_limit($p['title'], 48)) ?></span></li>
        </ol>
      </nav>
      <?php if ($p['topic']): ?><p class="eyebrow"><?= e($p['topic']) ?></p><?php endif; ?>
      <h1 class="ihero__title post__title"><?= e($p['title']) ?></h1>
      <p class="post__meta">
        <span><?= icon('calendar') ?><time datetime="<?= e(date('Y-m-d', strtotime((string)$date))) ?>"><?= e(date('F j, Y', strtotime((string)$date))) ?></time></span>
        <span><?= icon('clock') ?><?= $minutes ?> min read</span>
        <span><?= icon('users') ?>By the <?= e(setting('site_short_name')) ?> team</span>
      </p>
    </div>
  </div>
</section>

<section class="section section--article post">
  <div class="container article-layout">
    <article class="article">
      <figure class="post__figure" data-reveal="mask">
        <?php if ($p['image']): ?>
        <?= img($p['image'], $p['title'], ['loading' => 'eager', 'fetchpriority' => 'high', 'sizes' => '(min-width: 1024px) 760px, 92vw']) ?>
        <?php else: ?>
        <?php partial('art', ['icon' => 'file-text', 'variant' => 'wellness', 'label' => $p['topic'] ?: 'Health insights', 'large' => true]); ?>
        <?php endif; ?>
      </figure>
      <?php if ($p['excerpt']): ?><p class="lead post__lead"><?= e($p['excerpt']) ?></p><?php endif; ?>
      <div class="prose prose--lg post__body"><?= Html::clean($p['content']) ?></div>
      <p class="disclaimer"><?= icon('info') ?>This article is general information, not medical advice. Talk to a provider about your own situation.</p>
    </article>

    <aside class="sidebar">
      <div class="sidecard sidecard--primary">
        <p class="eyebrow eyebrow--light">Have a question?</p>
        <h2 class="sidecard__title">Talk With Our Team</h2>
        <p class="sidecard__text">Book a visit and we will look at what is going on for you.</p>
        <a class="btn btn--accent btn--block" href="<?= e(url('book-appointment/')) ?>">Book an Appointment <?= icon('arrow-right') ?></a>
        <a class="btn btn--glass btn--block" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?><?= e($phone) ?></a>
      </div>
      <?php if ($related): ?>
      <div class="sidecard">
        <h2 class="sidecard__h">Related treatments</h2>
        <ul class="sidecard__list">
          <?php foreach ($related as $r): ?><li><a href="<?= e(Content::serviceUrl($r)) ?>"><?= e($r['menu_label'] ?: $r['title']) ?><?= icon('chevron-right') ?></a></li><?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>
    </aside>
  </div>
</section>

<?php if ($more): ?>
<section class="section section--soft section--tight">
  <div class="container">
    <div class="section-head" data-reveal>
      <div><p class="eyebrow">Keep reading</p><h2 class="h3">More From Our Blog</h2></div>
      <a class="btn btn--outline" href="<?= e(url('blog/')) ?>">All Articles <?= icon('arrow-right') ?></a>
    </div>
    <div class="blog-grid">
      <?php foreach ($more as $i => $o): ?><div data-reveal style="--d:<?= $i ?>"><?php partial('post-card', ['p' => $o]); ?></div><?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php partial('cta'); ?>
