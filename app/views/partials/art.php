<?php
/** Designed placeholder visual used wherever a real photo has not been uploaded yet. */
$variant = $variant ?? 'medical';
$label = $label ?? '';
?>
<div class="art art--<?= e($variant) ?><?= !empty($large) ? ' art--lg' : '' ?>" aria-hidden="true">
  <span class="art__lines"></span>
  <?php partial('mark', ['class' => 'art__mark']); ?>
  <span class="art__icon"><?= icon($icon ?? 'heart-pulse') ?></span>
  <?php if ($label && !empty($large)): ?><span class="art__label"><?= e($label) ?></span><?php endif; ?>
</div>
