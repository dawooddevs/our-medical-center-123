<?php
/** @var array $page /blog/ index */
$per = 9;
$total = Content::postCount();
$pages = max(1, (int)ceil($total / $per));
$current = min($pages, max(1, (int)($_GET['page'] ?? 1)));
$posts = Content::posts($per, ($current - 1) * $per);
Seo::set([
    'title' => ($page['meta_title'] ?: $page['title']) . ($current > 1 ? ' (Page ' . $current . ')' : ''),
    'description' => $page['meta_description'] ?: $page['intro'],
    'canonical' => abs_url('blog/' . ($current > 1 ? '?page=' . $current : '')),
]);
Seo::addSchema([
    '@context' => 'https://schema.org',
    '@type' => 'Blog',
    'name' => setting('site_name') . ' Blog',
    'url' => abs_url('blog/'),
    'blogPost' => array_map(fn($p) => ['@type' => 'BlogPosting', 'headline' => $p['title'], 'url' => abs_url('blog/' . $p['slug'] . '/'), 'datePublished' => date('c', strtotime((string)($p['published_at'] ?: $p['created_at'])))], $posts),
]);
partial('inner-hero', [
    'title' => $page['title'],
    'eyebrow' => $page['eyebrow'],
    'text' => $page['intro'],
    'crumbs' => [[$page['title'], 'blog/']],
    'showActions' => false,
]);
$lead = $current === 1 ? array_shift($posts) : null;
?>
<section class="section section--tight blog-index">
  <div class="container">
    <?php if (!$lead && !$posts): ?>
    <div class="empty">
      <span class="empty__icon"><?= icon('file-text') ?></span>
      <h2 class="h4">Articles are on the way</h2>
      <p>Check back soon, or call our team with any questions.</p>
    </div>
    <?php endif; ?>
    <?php if ($lead): ?>
    <div class="blog-lead" data-reveal><?php partial('post-card', ['p' => $lead, 'large' => true]); ?></div>
    <?php endif; ?>
    <?php if ($posts): ?>
    <div class="blog-grid">
      <?php foreach ($posts as $i => $p): ?><div data-reveal style="--d:<?= $i % 3 ?>"><?php partial('post-card', ['p' => $p]); ?></div><?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($pages > 1): ?>
    <nav class="pager" aria-label="Blog pages">
      <?php if ($current > 1): ?><a class="btn btn--outline" href="<?= e(url('blog/' . ($current > 2 ? '?page=' . ($current - 1) : ''))) ?>"><?= icon('arrow-left') ?>Newer articles</a><?php endif; ?>
      <span class="pager__info">Page <?= $current ?> of <?= $pages ?></span>
      <?php if ($current < $pages): ?><a class="btn btn--outline" href="<?= e(url('blog/?page=' . ($current + 1))) ?>">Older articles <?= icon('arrow-right') ?></a><?php endif; ?>
    </nav>
    <?php endif; ?>
  </div>
</section>
<?php if ((int)$page['show_cta']) partial('cta'); ?>
