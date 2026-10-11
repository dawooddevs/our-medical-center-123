<?php
/**
 * Pages added in October 2026: conditions and blog indexes, and the New Patients section
 * (/new-patients/ with three sub-pages). Used on install and by the content migration.
 * Practice-specific details (hours, address, accepted insurance, prices) are left out until
 * the practice supplies them.
 */
return [
    [
        'slug' => 'conditions', 'title' => 'Conditions We Treat', 'eyebrow' => 'Conditions', 'template' => 'conditions', 'is_system' => 1,
        'intro' => 'Start with what is bothering you. Find your condition to learn what may be causing it, how we evaluate it and which treatments may help.',
        'meta_title' => 'Conditions We Treat', 'meta_description' => 'Back and neck pain, sciatica, disc problems, neuropathy, knee, hip, shoulder and joint pain, and difficulty losing weight. Learn about care options.',
    ],
    [
        'slug' => 'blog', 'title' => 'Health Insights Blog', 'eyebrow' => 'Blog', 'template' => 'blog', 'is_system' => 1,
        'intro' => 'Plain-language articles from our team on pain, recovery, movement and everyday wellness.',
        'meta_title' => 'Blog', 'meta_description' => 'Articles on back and neck pain, injuries, joint health, nerve symptoms, weight and wellness, written in plain language by our team.',
    ],
    [
        'slug' => 'new-patients', 'title' => 'New Patients', 'eyebrow' => 'New patients', 'template' => 'hub', 'sort_order' => 10,
        'intro' => 'You do not need to know which treatment you need before your first visit. Bring your questions and what you already know, and we will take it from there.',
        'content' => <<<'HTML'
<h2>Before your first visit</h2>
<p>A little preparation helps us make the most of your time with us. Bring what you have. You do not need to track down every record before you book.</p>
<div class="info-grid">
<div class="info-card"><h3>Your medications</h3><p>A list of prescription medications, over-the-counter medicines and supplements, with doses if you know them.</p></div>
<div class="info-card"><h3>Imaging and reports</h3><p>X-ray, MRI or specialist reports that relate to your concern. A copy of the written report is helpful.</p></div>
<div class="info-card"><h3>Recent lab work</h3><p>Blood test results from the last year, especially if your visit is about weight, energy or hormones.</p></div>
<div class="info-card"><h3>What you have tried</h3><p>Previous treatments, exercises, injections or programs, and how they worked for you.</p></div>
</div>
<h2>What you do not need to have figured out</h2>
<ul class="checks">
<li>Which treatment to book. Start with the concern and we will help you find the right path.</li>
<li>Whether a scan finding explains your symptoms. That gets interpreted alongside your history and exam.</li>
<li>Whether your fatigue or weight change is hormonal. Symptoms overlap, and evaluation comes first.</li>
<li>How your whole plan will look on day one. The first visit is about gathering enough information to decide the next step well.</li>
</ul>
<div class="note"><p><strong>Most important of all:</strong> tell us what is happening and what it is stopping you from doing. Walking further, sleeping through the night, getting back to the gym or simply feeling like yourself again. That goal shapes everything that follows.</p></div>
HTML,
        'meta_title' => 'New Patients', 'meta_description' => 'Everything you need for your first visit: what to bring, what to expect, insurance and payment questions, and answers to common new patient questions.',
    ],
    [
        'slug' => 'new-patients/what-to-expect', 'title' => 'What to Expect', 'eyebrow' => 'New patients', 'sort_order' => 20,
        'intro' => 'Your first visit follows a clear sequence: understand your concern, examine what matters, and agree on a sensible next step.',
        'content' => <<<'HTML'
<p>Your first visit is not a pre-written treatment plan. It is a series of decisions made with you. Every concern is different, so the length and content of the visit vary, but the logic stays the same.</p>
<h2>Your first visit, step by step</h2>
<ol class="timeline">
<li><strong>Arrive and get settled</strong> We confirm your details and any paperwork and talk briefly about the main reason you are here.</li>
<li><strong>Tell us your story</strong> What is happening, when it started, what has changed and what you have already tried. This conversation is often the most useful part of the visit.</li>
<li><strong>Evaluation</strong> Depending on your concern, this may be a movement, orthopedic or neurological exam, a medical review, or both.</li>
<li><strong>Putting it together</strong> Your provider brings together your symptoms, history, exam and any previous records or tests.</li>
<li><strong>Agreeing the next step</strong> That may be starting treatment, ordering tests, scheduling a follow-up or referring you to another clinician when that is the right call.</li>
</ol>
<h2>What the visit is for</h2>
<div class="info-grid">
<div class="info-card"><h3>Understand the problem</h3><p>Even when a final diagnosis needs more information, the visit should narrow down what is most likely and what needs to be ruled out.</p></div>
<div class="info-card"><h3>Test only when it helps</h3><p>Lab work or imaging is recommended when the result could change your diagnosis, treatment or safety.</p></div>
<div class="info-card"><h3>Explain the why</h3><p>If treatment is recommended, you should understand what it is for, what the alternatives are and how progress will be measured.</p></div>
<div class="info-card"><h3>Leave with a plan</h3><p>You should go home knowing what happens next and when.</p></div>
</div>
<h2>What the first visit does not promise</h2>
<p>We will not promise a particular treatment, medication or procedure before we have evaluated you. Some treatments may not be appropriate, some need more information first, and sometimes the right answer is a referral to someone else. We would rather tell you that than recommend care that will not help.</p>
<div class="note"><p><strong>Before you come:</strong> bring a list of your medications and supplements, any relevant imaging or lab reports, and a note of the questions you want answered. If we send you forms before your visit, completing them ahead of time saves time at check-in.</p></div>
HTML,
        'meta_title' => 'What to Expect at Your First Visit', 'meta_description' => 'What happens at your first visit: your history, an evaluation, putting the findings together and agreeing a clear next step.',
    ],
    [
        'slug' => 'new-patients/insurance-payment', 'title' => 'Insurance & Payment', 'eyebrow' => 'New patients', 'sort_order' => 30,
        'intro' => 'Coverage and cost depend on the service and your plan. Here is what to check before your visit so there are no surprises.',
        'content' => <<<'HTML'
<p>Insurance and payment questions are easier when you break them into three parts: the service you are booking, what your health plan covers, and what our office expects for that visit. Call or text our team and we will help you work through it.</p>
<h2>Three questions to answer before care begins</h2>
<ol class="timeline">
<li><strong>Which service are we talking about?</strong> Coverage questions are most useful when they name the exact visit, treatment or procedure. Our team can tell you what you are scheduled for.</li>
<li><strong>What does your health plan say?</strong> Benefits, network rules, referrals, prior authorization, deductibles, copays and coinsurance come from your plan. Your insurer is the only one who can confirm them.</li>
<li><strong>What should you expect to pay us?</strong> Ask our office about the current payment expectation or self-pay estimate for the specific care you are booking.</li>
</ol>
<h2>If you plan to use insurance</h2>
<ul class="checks">
<li>Have your insurance card and plan details ready when you call us.</li>
<li>Ask your plan whether the specific service and provider are covered.</li>
<li>Check whether a referral or prior authorization is needed.</li>
<li>Ask about your deductible, copay, coinsurance and any exclusions.</li>
</ul>
<p>Not every service is covered by every plan. A treatment can be medically appropriate without being a covered benefit under a particular policy.</p>
<h2>If you are paying yourself</h2>
<p>Ask our office for the current price or an estimate for the care you are considering. Under federal law, if you do not have insurance or are not using it, you can ask for a Good Faith Estimate of the expected charges for scheduled, non-emergency care. Keep a copy with your records.</p>
<h2>Costs that may come from elsewhere</h2>
<p>Some parts of a care plan may be billed by other organizations, such as an outside laboratory, imaging center or pharmacy. Ask which parts of your plan are provided by our office and which may involve someone else.</p>
<div class="note"><p><strong>Plans can change after an evaluation.</strong> If your provider recommends a different service from the one you booked, ask how that changes the expected cost before you go ahead.</p></div>
HTML,
        'meta_title' => 'Insurance & Payment', 'meta_description' => 'What to check before your visit: the service you are booking, what your health plan covers and what to expect to pay, including self-pay estimates.',
    ],
    [
        'slug' => 'new-patients/new-patient-faqs', 'title' => 'New Patient FAQs', 'eyebrow' => 'New patients', 'sort_order' => 40,
        'intro' => 'Quick answers to the questions people most often ask before their first appointment.',
        'content' => <<<'HTML'
<p>If you cannot find your answer here, call or text us and our team will help. For anything that may be an emergency, call 911 or go to the nearest emergency department.</p>
HTML,
        'meta_title' => 'New Patient FAQs', 'meta_description' => 'Answers to common questions before your first visit: booking, referrals, what to bring, imaging, insurance and what happens at the appointment.',
    ],
];
