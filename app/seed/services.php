<?php
/**
 * Treatment pages loaded on a fresh install. Every record is flagged "needs review" in the
 * dashboard. Clinical copy is written conservatively: no guaranteed outcomes, no invented
 * statistics or credentials.
 *
 * IV Therapy and Weight Loss are drafts with placeholder copy: write their content
 * (see the project brief) and publish them from the dashboard or a migration.
 */
return [
    // ---------------- Injury & Sports Care ----------------
    [
        'slug' => 'sports-injuries-and-physical-fitness', 'title' => 'Sports Injuries and Physical Fitness', 'menu_label' => 'Sports Injuries & Physical Fitness',
        'category' => 'injury', 'icon' => 'dumbbell', 'featured' => 1,
        'excerpt' => 'Sports injury care and performance support for athletes and active people, combining soft tissue therapy, movement assessment, chiropractic and regenerative options.',
        'hero_text' => 'From weekend warriors to professional athletes, comprehensive, non-surgical care to help you recover and perform at your best.',
        'what_is' => <<<'HTML'
<p>Our providers and therapists bring extensive knowledge of sports injuries and physical fitness to patients at every activity level. Whether you are a professional athlete, a weekend warrior or simply want to improve your health, our team understands how the body moves, in high-level sport and in everyday life.</p>
<p>We go beyond a traditional injury assessment. Our care focuses on relieving pain and also on improving performance and body function, combining current research, treatments and techniques in an integrated approach.</p>
<h3>Two main types of injury</h3>
<ul>
<li><strong>Acute injuries</strong> happen suddenly, usually from trauma or a single incident such as a fall. They often involve bruising, swelling, muscle spasm and severe pain. An ankle sprain from a twist on the court is a common example.</li>
<li><strong>Chronic injuries</strong> develop over time from repetitive stress, overuse or poor biomechanics. They can cause ongoing pain, stiffness and discomfort. Golfer's elbow, from repeated strain on the forearm, is a common example.</li>
</ul>
HTML,
        'conditions' => "Low back pain\nSciatica\nAnkle sprains\nPlantar fasciitis\nShin splints\nKnee pain, including ACL, MCL and LCL injuries\nHip impingement and hip pain\nRotator cuff and shoulder impingement\nCarpal tunnel syndrome\nTennis and golfer's elbow\nTendinitis and tendinosis\nPosture issues\nNeck pain and headaches",
        'how_it_works' => <<<'HTML'
<p>We treat the whole body, addressing muscles, joints and connective tissue, and work with other healthcare professionals when needed. Our approach to recovery and prevention includes:</p>
<ul>
<li><strong>Soft tissue treatment.</strong> Trigger point therapy, dry needling, shockwave therapy, cupping and Active Release Techniques to relieve pain and improve function.</li>
<li><strong>Movement assessment and rehabilitation.</strong> We evaluate and improve how your body moves so you recover from injury and perform better.</li>
<li><strong>Non-surgical orthopedic assessment and treatment.</strong></li>
<li><strong>Chiropractic manipulative treatment (CMT).</strong> Spinal adjustments to improve movement and reduce pain.</li>
<li><strong>Lifestyle and behavior changes</strong> to build healthier habits and avoid re-injury.</li>
<li><strong>On-site musculoskeletal ultrasound</strong> for diagnostics.</li>
</ul>
<h3>Advanced regenerative support</h3>
<p>When needed, non-surgical regenerative options can support healing. These include Incrediwear sleeves and garments for recovery, and PurePRP® platelet-rich plasma to support tissue repair.</p>
HTML,
        'benefits' => "Care for athletes of every level\nTreats root causes, not just symptoms\nFocus on performance as well as recovery\nNon-surgical, patient-centered approach\nDiagnostics, therapy and regenerative care under one roof",
        'what_to_expect' => <<<'HTML'
<p>We are committed to finding an accurate diagnosis so your treatment is as effective as possible. Whether you have acute pain or a chronic condition, our team works with you to recover, perform better and get back in the game.</p>
HTML,
        'faqs' => [
            ['Do I have to be an athlete?', 'No. We care for professional athletes, weekend warriors and anyone who wants to move and feel better.'],
            ['What is the difference between acute and chronic injuries?', 'Acute injuries happen suddenly, like an ankle sprain. Chronic injuries develop over time from repetitive stress or overuse, like golfer’s elbow.'],
            ['Do you offer regenerative options for sports injuries?', 'Yes. When appropriate, options include PurePRP® platelet-rich plasma and Incrediwear recovery garments.'],
        ],
        'related' => 'chiropractic-care,regenerative-medicine,car-accident-injury-treatment',
        'body_areas' => 'neck,shoulder,back,hip,knee,elbow,wrist-hand,ankle-foot,joint',
        'meta_title' => 'Sports Injury Treatment & Physical Fitness',
        'meta_description' => 'Sports injury care for athletes of every level, including soft tissue therapy, movement assessment, chiropractic and regenerative options.',
    ],
    [
        'slug' => 'car-accident-injury-treatment', 'title' => 'Car Accident Injury Treatment', 'menu_label' => 'Car Accident Injury Treatment',
        'category' => 'injury', 'icon' => 'car', 'featured' => 1,
        'excerpt' => 'Prompt, integrated care after a car accident, including chiropractic, physical therapy and medical pain management, to help you recover and prevent long-term problems.',
        'hero_text' => 'Even a "minor" car accident can cause months of pain. Early, integrated care can help you get back to your routine faster.',
        'what_is' => <<<'HTML'
<p>A car accident, even a "minor" one, can disrupt your busy life and cause months of stress and unexpected pain. Coordinated care from our medical providers and chiropractors can help you return to normal function. With proper management, many patients get back to their regular routine faster and reduce the chance of chronic problems.</p>
<h3>What happens to your body after a car accident?</h3>
<p>When you are injured, your body tightens the muscles and creates inflammation around the injury to protect it from further damage. Left untreated, this protective response can cause problems later, such as neck, back, knee, elbow or ankle pain. The guarded area can lose motion and flexibility, reducing mobility in the muscles and joints.</p>
HTML,
        'conditions' => "Whiplash\nNeck pain\nBack pain\nHeadaches\nShoulder, knee, elbow and ankle pain\nStiffness and loss of motion\nSoft tissue injuries",
        'how_it_works' => <<<'HTML'
<p>Research on whiplash suggests that people who get prompt care and start gentle neck exercises soon after the injury tend to recover flexibility and function better. Active, early care helps for two reasons:</p>
<ul>
<li>Staying active helps you overcome fear of movement or re-injury.</li>
<li>Activity increases blood flow to the injured area and supports healing.</li>
</ul>
<p>Chiropractic care focuses carefully on the injured areas of your spine and works to restore motion there. Combined with physical therapy exercises and, when needed, medical pain management, the goal is to get you back to where you were before the accident, or even better.</p>
HTML,
        'benefits' => "Early care to help prevent chronic problems\nChiropractic, therapy and medical care under one roof\nRestores motion and flexibility\nA personalized pain management plan",
        'what_to_expect' => <<<'HTML'
<p>If you or someone you know has been in an auto accident, call us even if the injuries seem minor. The earlier an injury is treated, the better the chance of a faster recovery. We will discuss your pain management plan and any recommended procedures with you, and our team can review your coverage options before treatment begins.</p>
HTML,
        'faqs' => [
            ['Should I be seen even if I feel fine?', 'Yes. Some injuries, such as whiplash, may not cause symptoms right away. An early evaluation lets problems be found and treated before they become chronic.'],
            ['How is accident-related care paid for?', 'It depends on your situation and coverage. Our team will review your options with you and explain them before treatment begins.'],
        ],
        'related' => 'chiropractic-care,spinal-decompression-therapy,sports-injuries-and-physical-fitness',
        'body_areas' => 'neck,shoulder,back,knee,elbow,ankle-foot',
        'meta_title' => 'Car Accident Injury Treatment',
        'meta_description' => 'Car accident injury treatment with prompt chiropractic care, physical therapy and pain management to help you recover from whiplash and auto injuries.',
    ],

    // ---------------- Spine & Chiropractic ----------------
    [
        'slug' => 'chiropractic-care', 'title' => 'Chiropractic Care', 'menu_label' => 'Chiropractic Care',
        'category' => 'spine', 'icon' => 'spine', 'featured' => 1,
        'excerpt' => 'Gentle chiropractic adjustments that focus on proper spinal motion and nervous system function, for back, neck and joint pain.',
        'hero_text' => 'Relieve back, neck and joint pain and restore healthy spinal motion with gentle, drug-free chiropractic care.',
        'what_is' => <<<'HTML'
<p>Chiropractic therapy, or chiropractic adjustment, is a drug-free treatment focused on proper spinal motion and nervous system function. Spinal joints can become restricted and inflamed through normal wear and tear or injury, which can irritate nerves and cause pain. Gentle adjustments work to reduce these restrictions and inflammation and restore spinal motion.</p>
<blockquote>"Chiropractic is a health care discipline which emphasizes the inherent recuperative power of the body to heal itself without the use of drugs and surgery. The practice of chiropractic focuses on the relationship between structure (primarily the spine) and function (as coordinated by the nervous system) and how that relationship affects the preservation and restoration of health." (Association of Chiropractic Colleges)</blockquote>
<h3>Why so many people seek chiropractic care</h3>
<p>Chiropractors treat much more than back pain, including neck, knee, elbow and ankle pain. Still, back pain is the most common reason patients seek care. Back problems are extremely common, so it pays to address them early rather than waiting until you are in pain.</p>
HTML,
        'conditions' => "Low back pain\nNeck pain\nHeadaches\nJoint pain in the knees, elbows and ankles\nStiffness and muscle spasms\nArthritic joint pain\nWhiplash and auto injuries\nPosture-related pain",
        'how_it_works' => <<<'HTML'
<p>After an examination, your chiropractor uses gentle, controlled adjustments to restore motion to restricted joints in the spine and extremities. Care is often combined with soft tissue therapy, stretching and exercise.</p>
<h3>Home exercise programs</h3>
<p>Your care continues at home. We give you an evidence-based home exercise program organized by body region, from neck to foot. Each program reviews your rehabilitation needs and includes clear instructions and photos. The exercises progress from basic to advanced, so you can follow them confidently at home.</p>
HTML,
        'benefits' => "Spinal and extremity pain relief\nHeadache relief\nBetter mobility and range of motion\nLess stiffness and muscle spasm\nRelief from arthritic joint pain\nBetter balance and coordination\nA greater sense of well-being and relaxation\nSupport for tissue healing",
        'what_to_expect' => <<<'HTML'
<p>Your first visit includes a history, an examination and a discussion of your goals. Your chiropractor explains the findings and recommends a plan, which may include short-term care for pain relief and optional ongoing care. We focus on getting you back to a pain-free life as quickly as possible and do not push long-term treatment plans.</p>
<p>After an injury such as whiplash, active early care helps. Staying active helps you overcome fear of movement or re-injury, and activity increases blood flow to the injured area to support healing.</p>
HTML,
        'faqs' => [
            ['Do chiropractors only treat back pain?', 'No. Back pain is the most common reason people visit, but our chiropractors also treat neck pain, headaches, and knee, elbow and ankle pain.'],
            ['Is chiropractic care drug-free?', 'Yes. Adjustments are a hands-on, drug-free treatment. When needed, our chiropractors work alongside our medical providers so you can access other options under one roof.'],
            ['Will I get exercises to do at home?', 'Yes. We provide a home exercise program with clear instructions and photos that progresses from basic to advanced as you improve.'],
        ],
        'related' => 'spinal-decompression-therapy,car-accident-injury-treatment,sports-injuries-and-physical-fitness',
        'body_areas' => 'neck,back,shoulder,hip,knee,elbow,ankle-foot,joint',
        'meta_title' => 'Chiropractic Care',
        'meta_description' => 'Chiropractic care that relieves back, neck and joint pain and restores spinal motion, with home exercise programs to support recovery.',
    ],
    [
        'slug' => 'spinal-decompression-therapy', 'title' => 'Spinal Decompression Therapy', 'menu_label' => 'Spinal Decompression Therapy',
        'category' => 'spine', 'icon' => 'move', 'featured' => 1,
        'excerpt' => 'Gentle, computer-controlled traction designed to take pressure off spinal discs and nerves in the neck and low back, without surgery.',
        'hero_text' => 'Relief for neck and back pain caused by disc problems in the lower back or neck, through gentle, non-surgical spinal decompression.',
        'what_is' => <<<'HTML'
<p>Lasting back pain can be very disruptive to everyday life. Non-surgical spinal decompression may help people living with chronic back or neck pain.</p>
<p>The therapy works by gently stretching the spine and changing its force and position. This takes pressure off the spinal discs and nerves and helps water, oxygen and nutrient-rich fluids reach the discs. Decompression is designed to support healing and relieve pain from bulging, degenerating or herniated discs.</p>
HTML,
        'conditions' => "Sciatic nerve pain\nInflamed facet joints\nPinched nerves\nTingling and numbness in the arms or legs\nBulging, degenerating or herniated discs\nChronic neck and low back pain",
        'how_it_works' => <<<'HTML'
<p>After your provider's assessment, you lie face up or face down on a motorized table and are secured with a harness around your pelvis and trunk. Your customized treatment settings are entered into the computer that runs the table, and the session begins. The table gently pulls and releases your spine at set intervals throughout the session.</p>
HTML,
        'benefits' => "Non-surgical and drug-free\nDesigned to reduce pressure on discs and nerves\nHelps nutrients reach the discs\nComfortable, relaxing sessions\nA cost-effective option to consider before surgery",
        'what_to_expect' => <<<'HTML'
<p>Most patients find decompression comfortable and even relaxing. Treatments are usually scheduled as a series, and decompression is often combined with chiropractic care, soft tissue therapy and exercise. Your provider will confirm whether decompression is right for you after an evaluation.</p>
HTML,
        'faqs' => [
            ['Is spinal decompression painful?', 'Most patients find it comfortable. Settings are customized and adjusted to your tolerance.'],
            ['What conditions can decompression help?', 'It is commonly used for disc problems in the lower back or neck, such as bulging, degenerating or herniated discs, sciatic nerve pain, pinched nerves and inflamed facet joints.'],
            ['Is everyone a candidate?', 'No. Certain conditions make decompression inappropriate. Your provider will screen for them during your evaluation.'],
        ],
        'related' => 'chiropractic-care,car-accident-injury-treatment,regenerative-medicine',
        'body_areas' => 'neck,back,leg',
        'meta_title' => 'Spinal Decompression Therapy',
        'meta_description' => 'Non-surgical spinal decompression that relieves pressure on discs and nerves for back pain, neck pain, sciatica and pinched nerves.',
    ],

    // ---------------- Regenerative & Wellness ----------------
    [
        'slug' => 'regenerative-medicine', 'title' => 'Regenerative Medicine', 'menu_label' => 'Regenerative Medicine',
        'category' => 'wellness', 'icon' => 'flask', 'featured' => 1,
        'excerpt' => 'Biologic treatments such as PurePRP® platelet-rich plasma and prolotherapy, designed to support your body’s natural healing in painful joints, tendons and ligaments.',
        'hero_text' => 'Supporting your body’s natural healing with biologic treatments like PurePRP® platelet-rich plasma and prolotherapy, delivered with ultrasound guidance.',
        'what_is' => <<<'HTML'
<p>Regenerative medicine focuses on using and supporting the body's own healing processes to restore function. In orthopedics, sports medicine and integrative physical medicine, biologic treatments are increasingly used for conditions such as knee osteoarthritis and tendonitis.</p>
<h3>Platelet-rich plasma: PurePRP® and ultrasound-guided PurePRP®</h3>
<p>Platelets are cells in your blood that respond when tissue is damaged. They release growth factors that start a chain of processes leading to tissue repair. Platelet-rich plasma (PRP) is concentrated from a small sample of your own blood and then injected into the injured area.</p>
<p>We use PurePRP®, a patented process available only through the EmCyte® processing system. According to EmCyte, many PRP systems reach a 1x to 3x platelet concentration, while PurePRP® can reach up to 8x.</p>
<h3>Prolotherapy and ultrasound-guided prolotherapy</h3>
<p>Prolotherapy, or proliferation therapy, is an injection of a solution, commonly dextrose, into damaged or weakened connective tissue to stimulate the body's natural healing response. Ligaments are the most common treatment sites, although tendons and muscles can also be treated.</p>
<h3>Wharton's jelly and ultrasound-guided Wharton's jelly</h3>
<p>Wharton's jelly is a connective tissue found in the umbilical cord, where it provides cushioning, support and lubrication. As a donated tissue allograft, it may be considered for some patients with joint damage from arthritis, inflammation or injury.</p>
HTML,
        'conditions' => "Knee osteoarthritis\nTendonitis and tendon injuries\nLigament sprains and injuries\nJoint pain in the knee, hip, shoulder, elbow, wrist, hand, foot and ankle\nChronic sports injuries\nInjuries from auto accidents",
        'how_it_works' => <<<'HTML'
<p>Your body already knows how to heal. A cut or scrape repairs itself, and your immune system fights off a cold. Regenerative medicine aims to support and strengthen that natural healing response after an orthopedic injury.</p>
<p>For PRP, a small amount of blood is drawn, processed to concentrate the platelets, and injected into the injured area. For prolotherapy, a dextrose solution is injected into degraded or injured connective tissue. The injection creates a small, controlled healing response at the site and helps release growth factors linked to tissue repair.</p>
<p>Guidance matters. Our regenerative treatments are delivered with ultrasound guidance so the injection reaches the intended structure.</p>
HTML,
        'benefits' => "Minimally invasive\nMinimal to no downtime for most patients\nPRP uses your own blood (autologous)\nDesigned to support and speed natural healing\nAn option to consider before surgery\nCan avoid the side effects associated with repeated steroid injections",
        'what_to_expect' => <<<'HTML'
<p>Your visit begins with an examination to determine whether regenerative medicine is right for you. Regenerative therapy is most effective when the provider can diagnose your condition and screen for contraindications.</p>
<p>The procedure itself typically takes about 30 minutes and is often a single injection completed in one office visit. The healing process commonly unfolds over four to six weeks, and recovery time depends on the area treated, your health history and the severity of the injury.</p>
HTML,
        'faqs' => [
            ['Does insurance cover regenerative medicine?', 'It depends on your plan and the treatment. If your provider recommends regenerative medicine after your exam, our team can check your coverage and explain your options before treatment.'],
            ['Does the procedure hurt?', 'Treatment usually involves a single injection that takes only a few minutes in the office. Some soreness at the injection site for a few days is common.'],
            ['Does my age matter?', 'Yes. Age is one of several factors that can affect results. Your provider will discuss realistic outcomes with you during your consultation.'],
            ['Is regenerative medicine safe?', 'When administered properly by qualified professionals, these treatments are generally well tolerated. PRP uses your own blood. Note that the FDA has approved very few cell-based products, and only for specific uses, so your provider will explain the regulatory status, benefits and risks of any recommended treatment before you decide.'],
            ['When will I start to feel the benefits?', 'It varies with the area treated, your health history and the severity of the injury. The healing process commonly unfolds over several weeks. Your provider can give you a recovery timeline for your situation.'],
            ['Am I a candidate?', 'Candidacy depends on your condition, health history and goals. Osteoarthritis and ligament and tendon injuries are common reasons patients consider regenerative care. Your provider will determine eligibility after an evaluation.'],
        ],
        'related' => 'sports-injuries-and-physical-fitness,spinal-decompression-therapy,chiropractic-care',
        'body_areas' => 'shoulder,hip,knee,elbow,wrist-hand,ankle-foot,joint',
        'meta_title' => 'Regenerative Medicine & PurePRP®',
        'meta_description' => 'Regenerative medicine, including PurePRP® platelet-rich plasma and prolotherapy, to support natural healing in painful joints, tendons and ligaments.',
    ],
    [
        // DRAFT — write the content (see the project brief), then publish.
        'slug' => 'iv-therapy', 'title' => 'IV Therapy', 'menu_label' => 'IV Therapy',
        'category' => 'wellness', 'icon' => 'droplet', 'featured' => 1, 'status' => 'draft',
        'excerpt' => 'Placeholder: IV therapy content to be written.',
        'hero_text' => 'Placeholder: IV therapy content to be written.',
        'what_is' => '', 'conditions' => '', 'how_it_works' => '', 'benefits' => '', 'what_to_expect' => '', 'faqs' => [],
        'related' => 'weight-loss,regenerative-medicine',
        'body_areas' => '',
        'meta_title' => 'IV Therapy',
    ],
    [
        // DRAFT — write the content (see the project brief), then publish.
        'slug' => 'weight-loss', 'title' => 'Weight Loss', 'menu_label' => 'Medical Weight Loss',
        'category' => 'wellness', 'icon' => 'target', 'featured' => 1, 'status' => 'draft',
        'excerpt' => 'Placeholder: weight loss content to be written.',
        'hero_text' => 'Placeholder: weight loss content to be written.',
        'what_is' => '', 'conditions' => '', 'how_it_works' => '', 'benefits' => '', 'what_to_expect' => '', 'faqs' => [],
        'related' => 'iv-therapy,chiropractic-care',
        'body_areas' => '',
        'meta_title' => 'Medical Weight Loss',
    ],
];
