<?php
/** @var array $p blog post row */
$date = $p['published_at'] ?: $p['created_at'];
$large = !empty($large);
?>
<article class="pcard-blog<?= $large ? ' pcard-blog--lg' : '' ?>">
  <a class="pcard-blog__link" href="<?= e(Content::postUrl($p)) ?>">
    <div class="pcard-blog__media">
      <?php if ($p['image']): ?>
        <?= img($p['image'], $p['title'], ['sizes' => $large ? '(min-width: 1024px) 55vw, 92vw' : '(min-width: 1024px) 30vw, 92vw']) ?>
      <?php else: ?>
        <?php partial('art', ['icon' => 'file-text', 'variant' => 'wellness', 'large' => $large]); ?>
      <?php endif; ?>
      <?php if ($p['topic']): ?><span class="tcard__tag"><?= e($p['topic']) ?></span><?php endif; ?>
    </div>
    <div class="pcard-blog__body">
      <p class="pcard-blog__meta"><time datetime="<?= e(date('Y-m-d', strtotime((string)$date))) ?>"><?= e(date('F j, Y', strtotime((string)$date))) ?></time><span aria-hidden="true">·</span><?= Content::readingTime($p['content']) ?> min read</p>
      <h3 class="pcard-blog__title"><?= e($p['title']) ?></h3>
      <p class="pcard-blog__text"><?= e(str_limit((string)$p['excerpt'], $large ? 220 : 140)) ?></p>
      <span class="tcard__more">Read article <span class="tcard__arrow"><?= icon('arrow-right') ?></span></span>
    </div>
  </a>
</article>
