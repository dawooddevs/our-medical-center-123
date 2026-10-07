<?php
/**
 * Site logo. 'light' picks the white version (dark backgrounds); 'both' prints the two
 * versions so CSS can swap them (the header is transparent over the hero, white on scroll).
 */
$light = !empty($light);
$variants = !empty($both) ? [false, true] : [$light];
foreach ($variants as $isLight):
    $logo = $isLight ? (setting('logo_light') ?: '') : setting('logo');
    $class = 'brand__img' . (!empty($both) ? ($isLight ? ' brand__img--light' : ' brand__img--dark') : '');
    $alt = (!empty($both) && $isLight) ? '' : setting('site_name');
    if ($logo): ?>
<?= img($logo, $alt, ['class' => $class, 'loading' => 'eager', 'decoding' => 'sync']) ?>
<?php else: ?>
<img class="<?= e($class) ?>" src="<?= e(asset('img/' . ($isLight ? 'logo-light.png' : 'logo.png'))) ?>" alt="<?= e($alt) ?>" width="944" height="216" decoding="sync">
<?php endif;
endforeach;
