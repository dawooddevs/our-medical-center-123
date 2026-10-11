<?php
/**
 * October 2026 content update for sites installed before it:
 *   - creates the conditions and posts tables
 *   - adds the ten new treatment pages and moves Regenerative Medicine into the new
 *     "Regenerative & Joint Care" category
 *   - adds the condition pages, the Conditions and Blog index pages, the New Patients section
 *     (hub plus three sub-pages), the New Patient FAQs and the blog posts
 * Only adds what is missing (matched by slug), so anything already edited in the dashboard
 * is left alone.
 */
return function (): array {
    require_once APP . '/schema.php';
    require_once APP . '/seed/seed.php';
    schema_install();

    $now = now();
    $log = [];
    $exists = fn(string $table, string $slug) => (bool)DB::val("SELECT COUNT(*) FROM {$table} WHERE slug = ?", [$slug]);
    $nextSort = fn(string $table) => (int)DB::val("SELECT COALESCE(MAX(sort_order), 0) FROM {$table}") + 10;

    // Treatments
    $added = [];
    foreach (require APP . '/seed/services.php' as $s) {
        if ($exists('services', $s['slug'])) continue;
        DB::insert('services', seed_service_row($s, $nextSort('services'), $now));
        $added[] = $s['slug'];
    }
    $log[] = 'Treatments added: ' . ($added ? implode(', ', $added) : 'none');
    $moved = DB::update('services', ['category' => 'regenerative', 'updated_at' => $now], "slug = ? AND category = 'wellness'", ['regenerative-medicine']);
    $log[] = 'Regenerative Medicine moved to Regenerative & Joint Care: ' . ($moved ? 'yes' : 'no change');

    // Conditions
    $added = [];
    foreach (require APP . '/seed/conditions.php' as $c) {
        if ($exists('conditions', $c['slug'])) continue;
        DB::insert('conditions', seed_condition_row($c, $nextSort('conditions'), $now));
        $added[] = $c['slug'];
    }
    $log[] = 'Conditions added: ' . ($added ? implode(', ', $added) : 'none');

    // Pages
    $added = [];
    foreach (require APP . '/seed/pages-2026-10.php' as $p) {
        if ($exists('pages', $p['slug'])) continue;
        DB::insert('pages', seed_page_row($p, $p['sort_order'] ?? $nextSort('pages'), $now));
        $added[] = $p['slug'];
    }
    $log[] = 'Pages added: ' . ($added ? implode(', ', $added) : 'none');

    // New Patient FAQs
    $grp = 'new-patients/new-patient-faqs';
    if (!DB::val('SELECT COUNT(*) FROM faqs WHERE grp = ?', [$grp])) {
        $faqs = require APP . '/seed/faqs-new-patients.php';
        foreach ($faqs as $i => [$q, $a]) {
            DB::insert('faqs', ['question' => $q, 'answer' => $a, 'grp' => $grp, 'sort_order' => ($i + 1) * 10, 'status' => 'published', 'created_at' => $now, 'updated_at' => $now]);
        }
        $log[] = 'New Patient FAQs added: ' . count($faqs);
    }

    // Blog posts
    $added = [];
    foreach (require APP . '/seed/posts.php' as $i => $p) {
        if ($exists('posts', $p['slug'])) continue;
        DB::insert('posts', seed_post_row($p, ($i + 1) * 10, $now));
        $added[] = $p['slug'];
    }
    $log[] = 'Blog posts added: ' . count($added);

    return $log;
};
