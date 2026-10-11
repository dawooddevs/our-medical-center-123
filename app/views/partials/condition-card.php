<?php
/** @var array $c condition row */
$grp = Content::CONDITION_GROUPS[$c['grp']] ?? ['label' => '', 'icon' => 'activity'];
$artVariant = ['spine' => 'spine', 'joints' => 'injury', 'metabolic' => 'wellness'][$c['grp']] ?? 'medical';
?>
<article class="tcard ccond" data-cat="<?= e($c['grp']) ?>" data-search="<?= e(strtolower($c['title'] . ' ' . $grp['label'] . ' ' . str_replace("\n", ' ', (string)$c['symptoms']) . ' ' . $c['excerpt'])) ?>">
  <a class="tcard__link" href="<?= e(Content::conditionUrl($c)) ?>">
    <div class="tcard__media">
      <?php if ($c['image']): ?>
        <?= img($c['image'], $c['title'], ['sizes' => '(min-width: 1024px) 30vw, 90vw']) ?>
      <?php else: ?>
        <?php partial('art', ['icon' => $c['icon'] ?: $grp['icon'], 'variant' => $artVariant]); ?>
      <?php endif; ?>
      <span class="tcard__tag"><?= e($grp['label']) ?></span>
    </div>
    <div class="tcard__body">
      <h3 class="tcard__title"><?= e($c['title']) ?></h3>
      <p class="tcard__text"><?= e(str_limit((string)$c['excerpt'], 120)) ?></p>
      <span class="tcard__more">Learn more <span class="tcard__arrow"><?= icon('arrow-right') ?></span></span>
    </div>
  </a>
</article>
