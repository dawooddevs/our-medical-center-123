<?php $phone = setting('phone'); ?>
<div class="mnav" id="mobile-nav" data-mnav hidden>
  <div class="mnav__backdrop" data-menu-close></div>
  <div class="mnav__panel" role="dialog" aria-modal="true" aria-label="Menu">
    <div class="mnav__top">
      <a class="brand brand--sm" href="<?= e(url('')) ?>"><?php partial('logo'); ?></a>
      <button class="mnav__close" type="button" data-menu-close><?= icon('x') ?><span class="sr-only">Close menu</span></button>
    </div>
    <nav class="mnav__body" aria-label="Mobile navigation">
      <div class="mnav__section">
        <button class="mnav__toggle" type="button" aria-expanded="false">Treatments<?= icon('chevron-down') ?></button>
        <div class="mnav__sub" hidden>
          <a class="mnav__all" href="<?= e(url('treatments/')) ?>">View All Treatments <?= icon('arrow-right') ?></a>
          <?php foreach (Content::CATEGORIES as $key => $cat):
              $items = array_filter($byCat[$key] ?? [], fn($s) => (int)$s['show_in_menu'] === 1);
              if (!$items) continue; ?>
          <div class="mnav__section mnav__section--nested">
            <button class="mnav__toggle mnav__toggle--nested" type="button" aria-expanded="false"><span class="mnav__cat-icon"><?= icon($cat['icon']) ?></span><?= e($cat['label']) ?><?= icon('chevron-down') ?></button>
            <div class="mnav__sub" hidden>
              <?php foreach ($items as $s): ?>
              <a href="<?= e(Content::serviceUrl($s)) ?>"><?= e(preg_replace('/\s*—\s*Coming Soon$/i', '', $s['menu_label'] ?: $s['title'])) ?><?= (int)$s['coming_soon'] ? ' <span class="tag tag--soon">Soon</span>' : '' ?></a>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

<?php if ($condGroups = Content::conditionsByGroup()): ?>
      <div class="mnav__section">
        <button class="mnav__toggle" type="button" aria-expanded="false">Conditions<?= icon('chevron-down') ?></button>
        <div class="mnav__sub" hidden>
          <a class="mnav__all" href="<?= e(url('conditions/')) ?>">View All Conditions <?= icon('arrow-right') ?></a>
          <?php foreach ($condGroups as $gk => $items): $g = Content::CONDITION_GROUPS[$gk]; ?>
          <div class="mnav__section mnav__section--nested">
            <button class="mnav__toggle mnav__toggle--nested" type="button" aria-expanded="false"><span class="mnav__cat-icon"><?= icon($g['icon']) ?></span><?= e($g['label']) ?><?= icon('chevron-down') ?></button>
            <div class="mnav__sub" hidden>
              <?php foreach ($items as $cn): ?><a href="<?= e(Content::conditionUrl($cn)) ?>"><?= e($cn['title']) ?></a><?php endforeach; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
<?php endif; ?>

<?php if ($npHub = Content::page('new-patients')): ?>
      <div class="mnav__section">
        <button class="mnav__toggle" type="button" aria-expanded="false">New Patients<?= icon('chevron-down') ?></button>
        <div class="mnav__sub" hidden>
          <a href="<?= e(url('new-patients/')) ?>"><?= e($npHub['title']) ?></a>
          <?php foreach (Content::childPages('new-patients') as $np): ?><a href="<?= e(url($np['slug'] . '/')) ?>"><?= e($np['title']) ?></a><?php endforeach; ?>
          <?php foreach ($forms as $f): ?>
          <a href="<?= e($formUrl($f)) ?>" target="_blank" rel="noopener"><?= icon('download') ?><?= e($f['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
<?php elseif ($forms): ?>
      <div class="mnav__section">
        <button class="mnav__toggle" type="button" aria-expanded="false">Patient Forms<?= icon('chevron-down') ?></button>
        <div class="mnav__sub" hidden>
          <?php foreach ($forms as $f): ?>
          <a href="<?= e($formUrl($f)) ?>" target="_blank" rel="noopener"><?= icon('download') ?><?= e($f['label']) ?></a>
          <?php endforeach; ?>
        </div>
      </div>
<?php endif; ?>

<?php if (Content::page('blog')): ?>
      <a class="mnav__link" href="<?= e(url('blog/')) ?>">Blog<?= icon('arrow-right') ?></a>
<?php endif; ?>

      <div class="mnav__section">
        <button class="mnav__toggle" type="button" aria-expanded="false">Contact<?= icon('chevron-down') ?></button>
        <div class="mnav__sub" hidden>
          <?php foreach ($contact as [$label, $href]): ?>
          <a href="<?= e(url($href)) ?>"><?= e($label) ?></a>
          <?php endforeach; ?>
        </div>
      </div>

    </nav>
    <div class="mnav__foot">
      <a class="btn btn--accent btn--block btn--lg" href="<?= e(url('book-appointment/')) ?>"><?= icon('calendar-check') ?>Book Appointment</a>
      <div class="mnav__foot-row">
        <a class="btn btn--outline btn--block" href="<?= e(tel_href($phone)) ?>"><?= icon('phone') ?>Call</a>
        <a class="btn btn--outline btn--block" href="<?= e(sms_href(setting('sms_phone') ?: $phone)) ?>"><?= icon('message') ?>Text</a>
      </div>
    </div>
  </div>
</div>
