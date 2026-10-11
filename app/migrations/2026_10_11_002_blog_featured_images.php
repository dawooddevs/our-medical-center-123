<?php
/**
 * Assigns uploaded featured images to blog posts that still have none, using the improved name
 * matching (handles "glp-1" vs "glp1", copy suffixes, long names cut to 60 characters and files
 * named after the post title). Posts that already have an image are left alone.
 * Returns false (retry on the next deploy) while a post is still without an image.
 */
return function (): array|false {
    $images = DB::all("SELECT * FROM media WHERE kind = 'image' ORDER BY id ASC");
    $index = Media::imageIndex($images);
    $log = [];
    $missing = [];
    $used = [];
    foreach (DB::all('SELECT id, slug, title, image FROM posts ORDER BY published_at DESC') as $p) {
        if ($p['image'] !== '' && !Media::isMissing($p['image'])) {
            $used[$p['image']] = true;
            continue;
        }
        $m = Media::matchImage($index, ['blog-' . $p['slug'], $p['slug'], $p['title']]);
        if (!$m) {
            $missing[] = $p['slug'];
            continue;
        }
        DB::update('posts', ['image' => $m['path'], 'updated_at' => now()], 'id = ?', [$p['id']]);
        if (trim((string)$m['alt']) === '') {
            DB::update('media', ['alt' => mb_substr($p['title'], 0, 250)], 'id = ?', [$m['id']]);
        }
        $used[$m['path']] = true;
        $log[] = "{$p['slug']} → {$m['path']} (\"{$m['original_name']}\")";
    }
    if (!$missing) {
        return $log ?: ['All blog posts already had featured images'];
    }
    foreach ($log as $l) {
        echo "  - {$l}\n";
    }
    echo '  - Still without an image: ' . implode(', ', $missing) . "\n";
    $since = date('Y-m-d H:i:s', time() - 7 * 86400);
    foreach (DB::all("SELECT path, original_name FROM media WHERE kind = 'image' AND created_at >= ? ORDER BY id DESC LIMIT 40", [$since]) as $m) {
        if (!isset($used[$m['path']])) {
            echo "  - Recent upload not used by a post: {$m['path']} (\"{$m['original_name']}\")\n";
        }
    }
    return false;
};
