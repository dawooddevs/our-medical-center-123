<?php
/**
 * The logo mark (a cross with two ribbon arms) as inline SVG, used as a decorative motif in
 * the hero, placeholder art and footer. Colours come from CSS: the bar uses currentColor and
 * the ribbons use --mark-ribbon (falls back to currentColor).
 */
$class = $class ?? '';
?>
<svg class="mark<?= $class ? ' ' . e($class) : '' ?>" viewBox="0 0 100 100" aria-hidden="true" focusable="false">
  <path class="mark__bar" d="M38 4h24v30.5C55.2 38 46.6 40.3 38 41.6zM62 96H38V65.5c6.8-3.5 15.4-5.8 24-7.1z" fill="currentColor"/>
  <path class="mark__ribbon" d="M2 43.5c22.6 0 46.8-4.2 60-39.5v30.5C49.6 57 27 64 2 66z" fill="var(--mark-ribbon, currentColor)"/>
  <path class="mark__ribbon" d="M98 56.5c-22.6 0-46.8 4.2-60 39.5V65.5C50.4 43 73 36 98 34z" fill="var(--mark-ribbon, currentColor)"/>
</svg>
