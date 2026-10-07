<?php
/**
 * Treatment pages loaded on a fresh install. Every record is flagged "needs review" in the
 * dashboard. Clinical copy is written conservatively: no guaranteed outcomes, no invented
 * statistics or credentials.
 *
 * IV Therapy and Medical Weight Loss were written for this site and are published, but stay
 * flagged "needs review" until the practice approves the clinical wording.
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
        'slug' => 'iv-therapy', 'title' => 'IV Therapy', 'menu_label' => 'IV Therapy',
        'category' => 'wellness', 'icon' => 'droplet', 'featured' => 1,
        'excerpt' => 'Fluids, vitamins and minerals delivered through a vein by trained clinical staff, after a health screening, to support hydration, recovery and general wellness.',
        'hero_text' => 'IV therapy delivers fluids, vitamins and minerals directly into a vein. Every visit starts with a health screening, and your provider decides whether it is right for you.',
        'what_is' => <<<'HTML'
<p>IV (intravenous) therapy delivers fluids, vitamins and minerals directly into your bloodstream through a small, flexible catheter placed in a vein, usually in the arm. Because the fluids go straight into a vein, they do not need to pass through the digestive system first.</p>
<p>IV therapy is given by trained clinical staff after a health screening. Your provider chooses the formulation for you, based on your health history, your goals and the results of your screening.</p>
<h3>Who it may suit</h3>
<p>Many patients consider IV therapy for hydration support, for recovery after exercise or a recent illness, or as part of their general wellness routine. Whether it is appropriate for you is decided by your provider after your screening.</p>
<p>IV therapy is a wellness service. It is not a substitute for medical treatment of a disease, and it does not replace the care you receive from your primary care provider or specialists.</p>
HTML,
        'conditions' => "Hydration support\nRecovery after exercise or physical activity\nRecovery after a recent illness, when your provider confirms it is appropriate\nGeneral wellness support",
        'how_it_works' => <<<'HTML'
<h3>1. Health screening</h3>
<p>Before any IV therapy, our clinical team reviews your health history and current medications and checks your vital signs, such as blood pressure and heart rate. Your provider uses this information to decide whether IV therapy is appropriate for you and, if it is, which formulation to use. If it is not a good fit, we will tell you and talk about other options.</p>
<h3>2. Starting the IV</h3>
<p>A trained member of our clinical staff cleans the skin and places a small, flexible catheter in a vein, usually in your arm. You may feel a quick pinch as the needle goes in. The needle is then removed, and only the soft catheter stays in the vein.</p>
<h3>3. During the infusion</h3>
<p>The fluids drip slowly from the IV bag through the catheter. Our staff check on you during the session and can slow or stop the infusion if you feel unwell.</p>
<h3>4. Finishing up</h3>
<p>When the infusion is complete, the catheter is removed and a small bandage is placed over the site.</p>
HTML,
        'benefits' => "Designed to support hydration\nMay help you feel refreshed after exercise or illness\nFluids and nutrients go directly into a vein\nA formulation chosen by your provider\nA health screening before treatment\nGiven by trained clinical staff",
        'what_to_expect' => <<<'HTML'
<p>A session typically takes about 30 to 60 minutes once the IV is in place, depending on the formulation. Allow extra time for your first visit, which includes the health screening. Our team will let you know if there is anything you should do to prepare.</p>
<p>You sit in a comfortable chair while the fluids run. Many patients read, use their phone or simply rest.</p>
<h3>Afterwards</h3>
<p>Many people return to their usual activities the same day. You may need to use the bathroom more often for a few hours. Some people have mild bruising, tenderness or soreness where the needle went in, which usually settles within a few days.</p>
<h3>Safety</h3>
<p>IV therapy is not right for everyone. Possible side effects include bruising or soreness at the needle site and, less commonly, irritation or swelling of the vein, lightheadedness or a reaction to an ingredient. Some people, such as those with certain heart, kidney or blood pressure conditions, or who are pregnant, may not be suitable candidates. Your provider checks for these during your screening.</p>
<p>Tell our staff straight away if you feel pain, burning, swelling, shortness of breath or dizziness during or after your infusion. IV therapy is not a substitute for medical treatment of a disease and is not for emergencies. If you have a medical emergency, call 911.</p>
HTML,
        'faqs' => [
            ['Am I a good candidate for IV therapy?', 'Your provider decides after a health screening that reviews your health history, current medications and vital signs. IV therapy is not right for everyone, including some people with certain heart, kidney or blood pressure conditions.'],
            ['What is in the IV?', 'It depends on you. IV fluids are usually a saline-based solution, and your provider may add vitamins or minerals. Your provider chooses the formulation based on your screening and goals, and will explain what it contains before you start.'],
            ['Does it hurt?', 'You may feel a brief pinch when the IV is placed. Most people feel little during the infusion itself. Some have mild bruising or soreness at the site afterwards.'],
            ['How long does a session take?', 'Typically about 30 to 60 minutes once the IV is in place. Your first visit takes longer because it includes your health screening.'],
            ['Can IV therapy treat an illness?', 'No. IV therapy is a wellness service and is not a substitute for medical treatment of a disease. If you are unwell, talk to your primary care provider. In an emergency, call 911.'],
        ],
        'related' => 'weight-loss,regenerative-medicine,sports-injuries-and-physical-fitness',
        'body_areas' => '',
        'meta_title' => 'IV Therapy',
        'meta_description' => 'IV therapy delivers fluids, vitamins and minerals through a vein after a health screening, with a formulation chosen by your provider.',
    ],
    [
        'slug' => 'weight-loss', 'title' => 'Medical Weight Loss', 'menu_label' => 'Medical Weight Loss',
        'category' => 'wellness', 'icon' => 'target', 'featured' => 1,
        'excerpt' => 'A medically supervised weight loss program with an evaluation, a personalized plan and regular check-ins, including prescription medication when appropriate.',
        'hero_text' => 'A weight loss plan built around your health and supervised by a licensed provider, with support for nutrition, activity and everyday habits.',
        'what_is' => <<<'HTML'
<p>Medical weight loss is a weight management program supervised by a licensed healthcare provider. Instead of a one-size-fits-all diet, your plan is based on your health history, your current health and your goals, and it is adjusted as you go.</p>
<p>A medically supervised program typically includes:</p>
<ul>
<li><strong>An evaluation.</strong> A review of your health history, current medications, past weight loss efforts and goals, along with a physical assessment.</li>
<li><strong>Lab work, if needed.</strong> Your provider may order blood tests to understand your health better before recommending a plan.</li>
<li><strong>A personalized plan</strong> built around your needs, preferences and daily routine.</li>
<li><strong>Regular check-ins</strong> to review your progress, answer your questions and adjust your plan.</li>
</ul>
HTML,
        'conditions' => "Managing your weight with medical supervision\nBuilding healthier eating habits\nMoving more in a way that suits your body\nStaying on track with regular check-ins",
        'how_it_works' => <<<'HTML'
<p>Your plan is built from a few core parts. Your provider decides which ones are right for you.</p>
<h3>Nutrition guidance</h3>
<p>Practical guidance on what and how much you eat, built around foods you enjoy and a routine you can keep.</p>
<h3>Activity planning</h3>
<p>A realistic plan to move more, based on your current fitness, any injuries or pain, and your schedule.</p>
<h3>Behavior and habit support</h3>
<p>Help with the habits that affect weight, such as sleep, stress and eating patterns, so changes are easier to keep.</p>
<h3>Prescription medication, when appropriate</h3>
<p>For some patients, a licensed provider may prescribe medication as part of the plan. This can include GLP-1 medications such as semaglutide or tirzepatide. Whether medication is an option, and which one, is decided by your provider after your evaluation. Medication is used together with nutrition, activity and habit changes, not instead of them.</p>
<p>Before you start any medication, your provider will talk with you about how it works, how it is taken, its possible side effects and the monitoring it needs. GLP-1 medications commonly cause digestive side effects such as nausea, and they are not suitable for everyone.</p>
HTML,
        'benefits' => "A plan based on your health, not a generic diet\nSupervised by a licensed provider\nRegular check-ins to review progress and adjust your plan\nSupport for nutrition, activity and everyday habits\nPrescription options considered when appropriate",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is an evaluation. Your provider reviews your health history, current medications and goals, completes an assessment and may order lab work. You will talk through what has and has not worked for you before, and what you want to achieve.</p>
<p>If the program is a good fit, your provider explains your personalized plan, including whether medication is an option for you. Follow-up visits are scheduled regularly so your provider can check your progress, help manage any side effects and adjust the plan.</p>
<h3>Who it may suit, and who it may not</h3>
<p>Medical weight loss may suit adults who want medical support to manage their weight, including people who have tried to lose weight on their own. It is not right for everyone. For example, some weight loss medications are not suitable during pregnancy or for people with certain medical conditions. Your provider determines whether the program, and any medication, is appropriate for you during your evaluation.</p>
<p>Everyone's body responds differently, so progress varies from person to person. We do not promise specific results or timelines.</p>
HTML,
        'faqs' => [
            ['Am I eligible for medical weight loss?', 'Eligibility is determined by a licensed provider after an evaluation of your health history, current health and goals. Lab work may be part of that evaluation.'],
            ['Will I be prescribed medication?', 'Not necessarily. Many plans focus on nutrition, activity and habits. If your provider thinks a medication, such as a GLP-1 like semaglutide or tirzepatide, may be appropriate, they will explain the options, possible side effects and monitoring before you decide.'],
            ['How much weight will I lose?', 'Results vary from person to person, and we do not promise a specific amount or timeline. Your provider will help you set realistic goals and review your progress at regular check-ins.'],
            ['How often are check-ins?', 'It depends on your plan. Your provider will set a follow-up schedule with you, and check-ins may be more frequent when you start or adjust a medication.'],
            ['Do I need to follow a strict diet?', 'No. Your nutrition guidance is built around your preferences and routine, with the aim of changes you can keep up over time.'],
        ],
        'related' => 'iv-therapy,sports-injuries-and-physical-fitness,chiropractic-care',
        'body_areas' => '',
        'meta_title' => 'Medical Weight Loss',
        'meta_description' => 'Medically supervised weight loss with an evaluation, a personalized plan, regular check-ins and prescription medication when appropriate.',
    ],
];
