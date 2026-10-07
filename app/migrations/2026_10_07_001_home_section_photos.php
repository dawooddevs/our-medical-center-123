<?php
/**
 * Assigns the homepage section photos the practice uploaded, named after the section headings:
 *   "Care That Starts With You…"              → Why choose us (about_image)
 *   "Hurt In An Accident Or Playing Sports…"  → Injury care (injury_image)
 * Matches the original file name or the stored path; the newest matching upload wins.
 * Returns false (retry on the next deploy) while either photo is still missing.
 */
return function (): array|false {
    $want = [
        'about_image' => ['care-that-starts-with-you', 'Care at ' . setting('site_short_name')],
        'injury_image' => ['hurt-in-an-accident-or-playing-sports', 'Injury care at ' . setting('site_short_name')],
    ];
    $images = DB::all("SELECT * FROM media WHERE kind = 'image' ORDER BY id ASC");
    $log = [];
    $missing = 0;
    foreach ($want as $key => [$needle, $alt]) {
        $hit = null;
        foreach ($images as $m) {
            $names = slugify(pathinfo((string)$m['original_name'], PATHINFO_FILENAME)) . ' ' . slugify(pathinfo((string)$m['path'], PATHINFO_FILENAME));
            if (str_contains($names, $needle)) {
                $hit = $m; // newest wins
            }
        }
        if (!$hit) {
            $missing++;
            echo "  - {$key}: no image named like \"{$needle}\" yet\n";
            continue;
        }
        Settings::set($key, $hit['path']);
        if (trim((string)$hit['alt']) === '') {
            DB::update('media', ['alt' => mb_substr($alt, 0, 250)], 'id = ?', [$hit['id']]);
        }
        $log[] = "{$key} → {$hit['path']} (\"{$hit['original_name']}\")";
    }
    if ($missing) {
        foreach ($log as $l) {
            echo "  - {$l}\n";
        }
        return false;
    }
    return $log;
};
