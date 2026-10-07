<?php
/**
 * Key/value site settings with sensible defaults. Everything here is editable
 * from Dashboard → Settings.
 */
final class Settings
{
    private static ?array $cache = null;

    public static function defaults(): array
    {
        return [
            // General
            'site_name' => 'Our Medical Center 123',
            'site_short_name' => 'Our Medical Center 123',
            'tagline' => 'Non-Surgical Injury, Spine & Wellness Care',
            'brand_description' => 'Non-surgical injury, spine, regenerative and wellness care, from chiropractic and spinal decompression to IV therapy and medically supervised weight loss.',
            'phone' => '(843) 874-8185',
            'sms_phone' => '(843) 874-8185',
            'email' => '',
            'notify_email' => '',
            'communities' => '',
            'founded_year' => '',

            // Branding
            'logo' => '',
            'logo_light' => '',
            'favicon' => '',
            'color_primary' => '#07334c',
            'color_accent' => '#37a9e7',
            'color_highlight' => '#37a9e7',

            // Homepage
            'hero_line1' => 'Feel Better.',
            'hero_line2' => 'Move, Recover and Live Well.',
            'hero_copy' => 'Non-surgical care for injuries, back and neck pain, recovery and wellness, with chiropractic care, spinal decompression, regenerative medicine, IV therapy and medically supervised weight loss.',
            'hero_image' => '',
            'hero_badges' => "Non-Surgical Treatment Options\nPersonalized Care Plans\nOnline Booking",
            'about_image' => '',
            'testimonials_image' => '',
            'stats' => json_encode([]),
            'featured_services' => 'sports-injuries-and-physical-fitness,chiropractic-care,spinal-decompression-therapy,regenerative-medicine,iv-therapy,weight-loss',

            // Integrations
            'ghl_appointment_embed' => '',
            'ghl_contact_embed' => '',
            'ghl_benefits_embed' => '',
            'ghl_webhook_url' => '',
            'chat_widget' => '',
            'head_scripts' => '',
            'body_scripts' => '',
            'ga_id' => '',

            // Patient forms (media library URLs)
            'form_new_patient_en' => '',
            'form_new_patient_es' => '',
            'form_accident_en' => '',
            'form_accident_es' => '',
            'form_pain_questionnaire' => '',

            // Social
            'social_facebook' => '',
            'social_x' => '',
            'social_instagram' => '',

            // SEO
            'seo_title_suffix' => ' | Our Medical Center 123',
            'seo_default_description' => 'Non-surgical injury, spine and wellness care: sports injuries, car accident injuries, chiropractic care, spinal decompression, regenerative medicine, IV therapy and weight loss. Call (843) 874-8185.',
            'seo_og_image' => '',
            'seo_noindex' => '1',
            'cookie_notice' => '0',

            // Appointment CTA
            'cta_headline' => 'Ready to Take the Next Step?',
            'cta_copy' => 'Whether you\'re dealing with a recent injury or persistent pain, our team can help you determine the right place to start.',
            'cta_small_print' => '',
        ];
    }

    private static function load(): array
    {
        if (self::$cache === null) {
            self::$cache = [];
            if (DB::connected()) {
                try {
                    foreach (DB::all('SELECT k, v FROM settings') as $r) {
                        self::$cache[$r['k']] = $r['v'];
                    }
                } catch (Throwable $e) {
                    // table may not exist yet during install
                }
            }
        }
        return self::$cache;
    }

    public static function get(string $key, $default = null)
    {
        $all = self::load();
        if (array_key_exists($key, $all) && $all[$key] !== null) {
            return $all[$key];
        }
        $d = self::defaults();
        return $d[$key] ?? $default;
    }

    public static function all(): array
    {
        return array_merge(self::defaults(), array_filter(self::load(), fn($v) => $v !== null));
    }

    public static function set(string $key, $value): void
    {
        $value = is_array($value) ? json_encode($value) : (string)$value;
        if (DB::val('SELECT COUNT(*) FROM settings WHERE k = ?', [$key])) {
            DB::update('settings', ['v' => $value], 'k = ?', [$key]);
        } else {
            DB::insert('settings', ['k' => $key, 'v' => $value]);
        }
        self::$cache = null;
    }

    public static function flush(): void
    {
        self::$cache = null;
    }
}
