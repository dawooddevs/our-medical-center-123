<?php
/**
 * Seeds the database on a fresh install: treatments, core pages, redirects and the
 * GoHighLevel booking form and chat widget. Safe to run once.
 *
 * Providers, locations, testimonials and homepage FAQs start empty. Add them in the
 * dashboard only from information the practice supplies; never invent them.
 */
function seed_database(): void
{
    $now = now();

    // ---------- Treatments ----------
    $services = require __DIR__ . '/services.php';
    foreach ($services as $i => $s) {
        $faqs = array_map(fn($f) => ['q' => $f[0], 'a' => $f[1]], $s['faqs'] ?? []);
        DB::insert('services', [
            'slug' => $s['slug'],
            'title' => $s['title'],
            'menu_label' => $s['menu_label'] ?? '',
            'category' => $s['category'],
            'excerpt' => $s['excerpt'],
            'hero_text' => $s['hero_text'],
            'image' => '',
            'icon' => $s['icon'] ?? '',
            'what_is' => Html::paragraphs($s['what_is']),
            'conditions' => $s['conditions'],
            'how_it_works' => Html::paragraphs($s['how_it_works']),
            'benefits' => $s['benefits'],
            'what_to_expect' => Html::paragraphs($s['what_to_expect']),
            'faqs' => json_encode($faqs),
            'related' => $s['related'],
            'body_areas' => $s['body_areas'],
            'featured' => (int)($s['featured'] ?? 0),
            'coming_soon' => (int)($s['coming_soon'] ?? 0),
            'show_in_menu' => (int)($s['show_in_menu'] ?? 1),
            'needs_review' => 1,
            'sort_order' => ($i + 1) * 10,
            'status' => $s['status'] ?? 'published',
            'meta_title' => $s['meta_title'] ?? $s['title'],
            'meta_description' => $s['meta_description'] ?? str_limit($s['excerpt'], 155),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

    // ---------- Pages ----------
    foreach (seed_pages() as $i => $p) {
        DB::insert('pages', array_merge([
            'eyebrow' => '', 'intro' => '', 'image' => '', 'content' => '', 'template' => 'default', 'show_cta' => 1, 'is_system' => 0,
            'needs_review' => 0, 'status' => 'published', 'meta_title' => '', 'meta_description' => '',
        ], $p, ['sort_order' => ($i + 1) * 10, 'created_at' => $now, 'updated_at' => $now]));
    }

    // ---------- Redirects for common URL variations ----------
    foreach ([
        ['/services/', '/treatments/'], ['/service/', '/treatments/'], ['/pain-treatments/', '/treatments/'],
        ['/appointment/', '/book-appointment/'], ['/make-appointment/', '/book-appointment/'], ['/book/', '/book-appointment/'],
        ['/contact/', '/contact-us/'], ['/home/', '/'],
    ] as [$from, $to]) {
        DB::insert('redirects', ['source' => $from, 'target' => $to, 'code' => 301, 'hits' => 0, 'note' => 'URL variation', 'created_at' => $now, 'updated_at' => $now]);
    }

    // ---------- GoHighLevel booking form and chat widget ----------
    Settings::set('ghl_appointment_embed', '<iframe src="https://api.leadconnectorhq.com/widget/booking/H2ssEyBKOquqdXQjSOcB" id="H2ssEyBKOquqdXQjSOcB_1777412903815" title="Book Your Consultation" scrolling="yes" allow="payment" style="width:100%;height:1200px;min-height:1200px;border:none;overflow:auto;"></iframe>');
    Settings::set('chat_widget', '<script src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" data-widget-id="69f118eb421593b058fc9406"></script>');
}

function seed_pages(): array
{
    return [
        [
            'slug' => 'treatments', 'title' => 'Treatments', 'eyebrow' => 'All Treatments', 'template' => 'treatments', 'is_system' => 1,
            'intro' => 'Explore our non-surgical treatments, from sports injury and accident care to chiropractic, spinal decompression, regenerative medicine and wellness.',
            'meta_title' => 'Treatments — Injury, Spine & Wellness Care',
            'meta_description' => 'Browse our treatments: sports injuries, car accident injuries, chiropractic care, spinal decompression, regenerative medicine, IV therapy and weight loss.',
        ],
        [
            'slug' => 'book-appointment', 'title' => 'Book an Appointment', 'eyebrow' => 'Appointments', 'template' => 'appointment', 'is_system' => 1, 'show_cta' => 0,
            'intro' => 'Pick a date and time that works for you, then add your details. Prefer to talk? Call us and we will help you get scheduled.',
            'meta_title' => 'Book an Appointment',
            'meta_description' => 'Book an appointment online or call (843) 874-8185.',
        ],
        [
            'slug' => 'contact-us', 'title' => 'Contact Us', 'eyebrow' => 'Contact', 'template' => 'contact', 'is_system' => 1, 'show_cta' => 0,
            'intro' => 'Call, text or book online. Our team is here to help you find the right place to start.',
            'meta_title' => 'Contact Us',
            'meta_description' => 'Contact Our Medical Center 123. Call or text (843) 874-8185 or book an appointment online.',
        ],
        [
            'slug' => 'privacy-policy', 'title' => 'Privacy Policy', 'eyebrow' => 'Legal', 'template' => 'legal', 'show_cta' => 0, 'needs_review' => 1,
            'intro' => 'How we collect, use and protect information submitted through this website.',
            'content' => '<h2>Information we collect</h2><p>When you submit a form on this website, for example to book an appointment or contact us, we collect the information you provide, such as your name, phone number, email address and message. We also collect basic, non-identifying usage information (such as pages visited) to improve the website.</p><h2>How we use information</h2><p>We use the information you submit to respond to your request, schedule appointments and communicate with you about your care. We do not sell your personal information.</p><h2>Protected health information</h2><p>Please do not submit detailed medical information through general website forms. Protected health information you share with us as a patient is handled in accordance with our Notice of Privacy Practices and applicable law, including HIPAA.</p><h2>Third-party services</h2><p>This website uses third-party services for scheduling, chat, maps and analytics. These providers process information on our behalf according to their own privacy policies.</p><h2>Contact</h2><p>Questions about this policy? Call (843) 874-8185.</p>',
            'meta_title' => 'Privacy Policy', 'meta_description' => 'Privacy policy for the Our Medical Center 123 website.',
        ],
        [
            'slug' => 'terms-and-conditions', 'title' => 'Terms & Conditions', 'eyebrow' => 'Legal', 'template' => 'legal', 'show_cta' => 0, 'needs_review' => 1,
            'intro' => 'The terms that apply to your use of this website.',
            'content' => '<h2>Website information</h2><p>The content on this website is provided for general educational purposes and is not medical advice. It is not a substitute for an evaluation by a qualified healthcare provider. Individual results vary, and eligibility for any treatment is determined after evaluation.</p><h2>Appointments</h2><p>Appointments booked online may need to be confirmed by our office.</p><h2>Emergencies</h2><p>Do not use this website for medical emergencies. If you are experiencing an emergency, call 911.</p><h2>Changes</h2><p>We may update these terms from time to time. Continued use of the website means you accept the current terms.</p>',
            'meta_title' => 'Terms & Conditions', 'meta_description' => 'Terms and conditions for the Our Medical Center 123 website.',
        ],
        [
            'slug' => 'medical-disclaimer', 'title' => 'Medical Disclaimer', 'eyebrow' => 'Legal', 'template' => 'legal', 'show_cta' => 0, 'needs_review' => 1,
            'intro' => 'Important information about the health content on this website.',
            'content' => '<p>The information on this website is provided for general informational purposes only. It is not intended to replace a one-on-one relationship with a qualified healthcare provider and should not be considered medical advice.</p><p>The content, materials and communications on this website should not be used as a substitute for professional medical advice, diagnosis or treatment. Always seek the advice of your physician or another qualified healthcare provider with any questions you have about a medical condition. Never disregard professional medical advice or delay seeking it because of something you read on this website.</p><p>Statements on this website have not been evaluated by the U.S. Food and Drug Administration (FDA). Products, practices and information discussed here are not intended to diagnose, treat, cure or prevent any disease. Individual results vary, and eligibility for any treatment is determined after evaluation.</p><p>If you are pregnant, nursing, taking medication or have a pre-existing medical condition, consult your healthcare provider before using any product or service. If you have a medical emergency, call 911.</p>',
            'meta_title' => 'Medical Disclaimer', 'meta_description' => 'Medical disclaimer for the Our Medical Center 123 website.',
        ],
        [
            'slug' => 'sitemap', 'title' => 'Sitemap', 'eyebrow' => 'Sitemap', 'template' => 'sitemap', 'is_system' => 1, 'show_cta' => 0,
            'intro' => 'Every page on this website in one place.',
            'meta_title' => 'Sitemap', 'meta_description' => 'A complete list of pages on the Our Medical Center 123 website.',
        ],
    ];
}
