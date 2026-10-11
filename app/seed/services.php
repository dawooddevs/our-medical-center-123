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
        'category' => 'regenerative', 'icon' => 'flask', 'featured' => 1,
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
    // ---------------- Added treatments (October 2026) ----------------
    [
        'slug' => 'softwave-therapy', 'title' => 'SoftWave Therapy', 'menu_label' => 'SoftWave Therapy',
        'category' => 'injury', 'icon' => 'waves', 'featured' => 0,
        'excerpt' => 'Noninvasive acoustic wave therapy designed to stimulate a healing response in painful muscles, tendons and joints, with no needles and no medication.',
        'hero_text' => 'A noninvasive option for stubborn tendon, joint and soft tissue pain. Your provider decides whether it fits after an evaluation.',
        'what_is' => <<<'HTML'
<p>SoftWave is a form of extracorporeal shockwave therapy. A handheld applicator sends acoustic waves through the skin into the tissue underneath. Unlike tightly focused shockwave devices, the SoftWave applicator spreads its energy over a broader area, reaching both surface and deeper tissue in each pass.</p>
<p>The goal is not to numb pain or mask it. The waves create a mechanical stimulus that is designed to trigger the body's own repair processes in the treated area, including changes in local blood flow and the activity of cells involved in tissue healing.</p>
<p>SoftWave is noninvasive. There is no incision, no injection and no medication involved in the treatment itself, and most people go back to their normal day straight afterwards.</p>
HTML,
        'conditions' => "Shoulder pain and rotator cuff tendon problems\nTennis elbow and golfer's elbow\nKnee pain, including patellar tendon pain\nPlantar fasciitis and heel pain\nAchilles tendon pain\nHip and low back muscle pain\nMuscle trigger points and stubborn soft tissue pain",
        'how_it_works' => <<<'HTML'
<p>Your visit starts with an evaluation. Your provider looks at where the pain is, how it behaves, what you have already tried and which tissue is most likely involved. SoftWave is only added to your plan when the findings suggest it may help.</p>
<h3>During a session</h3>
<ul>
<li>A gel is applied to the skin over the treatment area.</li>
<li>Your provider moves the applicator across the area while it delivers acoustic waves. Many patients notice the sensation is stronger over the most sensitive spots, which helps guide where the treatment goes.</li>
<li>Settings are adjusted to your comfort during the session.</li>
</ul>
<p>SoftWave is often combined with other care, such as chiropractic treatment, home exercises or a change in how you load the area, so the tissue is supported while it recovers.</p>
HTML,
        'benefits' => "Noninvasive with no needles or medication\nDesigned to stimulate the body's own repair response\nTreats a broad area in each pass\nUsually no downtime after a session\nCan be combined with other conservative care",
        'what_to_expect' => <<<'HTML'
<p>A session is typically short, often around 10 to 20 minutes depending on the area. You may feel a tapping or pulsing sensation, and tender spots can feel more intense for a moment. Your provider will check in with you and adjust as needed.</p>
<p>Some people notice a change after the first few visits, while for others it takes longer. Treatment is usually planned as a short series, and your provider will review how you are responding before recommending more. Mild soreness or redness in the area afterwards is possible and usually settles within a day or two.</p>
HTML,
        'faqs' => [
            ['Is SoftWave the same as shockwave therapy?', 'It belongs to the same family of treatments. The difference is the applicator, which spreads the energy over a broader area instead of focusing it on a small point.'],
            ['Does it hurt?', 'Most people describe it as a strong tapping sensation. Tender areas can feel more intense, and your provider can adjust the settings to keep you comfortable.'],
            ['How many sessions will I need?', 'It depends on the area, how long the problem has been there and how you respond. Your provider will suggest a plan after your evaluation and review it as you go.'],
            ['Can I go back to work afterwards?', 'Usually, yes. Most people return to their normal activities the same day. Your provider may suggest easing off heavy loading of the area for a short time.'],
            ['Is SoftWave right for everyone?', 'No. Some conditions, medications and situations make it unsuitable. Your provider checks for these during your evaluation before recommending it.'],
        ],
        'related' => 'class-iv-laser-therapy,sports-injuries-and-physical-fitness,regenerative-joint-care',
        'body_areas' => 'shoulder,elbow,knee,ankle-foot,hip,back',
        'meta_title' => 'SoftWave Therapy',
        'meta_description' => 'SoftWave therapy uses broad acoustic waves to stimulate healing in painful tendons, joints and soft tissue. Noninvasive, with no needles or medication.',
    ],
    [
        'slug' => 'class-iv-laser-therapy', 'title' => 'Class IV Laser Therapy', 'menu_label' => 'Class IV Laser Therapy',
        'category' => 'injury', 'icon' => 'zap', 'featured' => 0,
        'excerpt' => 'Therapeutic light applied over painful muscles, tendons and joints to support circulation and tissue recovery, as one part of a wider care plan.',
        'hero_text' => 'Therapeutic laser light, used as a comfortable, noninvasive tool for musculoskeletal pain when your evaluation shows it may help.',
        'what_is' => <<<'HTML'
<p>Class IV laser therapy uses specific wavelengths of light to deliver energy into muscles, tendons and joints. The light is absorbed by cells in the treated tissue, a process often called photobiomodulation. It is designed to support circulation, the body's inflammatory response and tissue repair.</p>
<p>Class IV lasers work at a higher power than the low level or "cold" lasers you may have heard of. That allows energy to reach larger and deeper areas in a shorter session. The treatment is applied over the skin, so there is no incision or injection.</p>
<p>Laser therapy is a tool, not a diagnosis. We use it when it fits what we find during your evaluation, often alongside movement work, chiropractic care or other treatments.</p>
HTML,
        'conditions' => "Muscle strains and soft tissue pain\nTendon pain in the shoulder, elbow, knee or ankle\nKnee and other joint discomfort\nNeck and back muscle pain\nHand and wrist pain\nPain that flares with activity during recovery",
        'how_it_works' => <<<'HTML'
<ol>
<li><strong>Evaluation.</strong> Your provider identifies the tissue and area that make sense to treat.</li>
<li><strong>Preparation.</strong> You are positioned comfortably and given protective eyewear.</li>
<li><strong>Treatment.</strong> The handpiece is moved over the area with settings chosen for the tissue, its depth and the goal of the session.</li>
<li><strong>Review.</strong> Your response helps decide whether laser stays in your plan and what else should be part of it.</li>
</ol>
HTML,
        'benefits' => "Noninvasive and drug free\nComfortable for most people, with a gentle warming feeling\nShort sessions\nCan be paired with exercise and other hands on care\nDesigned to support the body's own recovery",
        'what_to_expect' => <<<'HTML'
<p>Most people feel a gentle, soothing warmth during treatment. A session is usually only a few minutes per area. You can return to your day afterwards.</p>
<p>The number of sessions depends on what is being treated, how long it has been a problem and how you respond. Your provider will explain the plan and check your progress along the way. Laser therapy is not suitable for everyone, for example over certain areas or in pregnancy, and your provider will screen for this first.</p>
HTML,
        'faqs' => [
            ['What does it feel like?', 'Most patients feel a comfortable warmth as the handpiece moves over the area. It should not be painful. Tell your provider if anything feels too warm.'],
            ['How is Class IV different from a cold laser?', 'Class IV lasers work at a higher power, which lets energy reach larger or deeper areas in less time. The settings and technique still matter as much as the device.'],
            ['How many sessions will I need?', 'There is no single number that fits everyone. It depends on the problem, how long you have had it and how you respond. Your provider will review this with you.'],
            ['Can it be combined with other treatments?', 'Yes, when it makes sense. Laser therapy is often used alongside exercise, chiropractic care or other treatments that address different parts of the same problem.'],
        ],
        'related' => 'softwave-therapy,chiropractic-care,knee-restoration',
        'body_areas' => 'neck,shoulder,back,elbow,wrist-hand,knee,ankle-foot',
        'meta_title' => 'Class IV Laser Therapy',
        'meta_description' => 'Class IV laser therapy is a noninvasive, drug free option for muscle, tendon and joint pain, used as one part of a personalized care plan.',
    ],
    [
        'slug' => 'neuropathy-program', 'title' => 'Neuropathy Program', 'menu_label' => 'Neuropathy Program',
        'category' => 'spine', 'icon' => 'accessibility', 'featured' => 0,
        'excerpt' => 'A structured program for numbness, burning, tingling and balance problems in the feet and hands, built around what is causing your nerve symptoms.',
        'hero_text' => 'For numbness, burning, tingling and unsteady balance. We start by looking for what is driving the symptoms, then build a plan around your daily life.',
        'what_is' => <<<'HTML'
<p>Peripheral neuropathy means the nerves outside the brain and spinal cord are not working the way they should. It often starts in the toes and feet and can later affect the hands. People describe it in many ways: numbness, pins and needles, burning, electric shocks, feet that feel like they are wrapped in cotton, or simply feeling less sure on their feet.</p>
<p>Neuropathy describes the nerve problem. It does not explain why it happened. Diabetes and blood sugar problems are common causes, but so are vitamin deficiencies, some medications, alcohol, thyroid problems, compressed nerves in the spine and other conditions. Our program starts by looking at the likely causes so your plan is aimed at the right target.</p>
HTML,
        'conditions' => "Numbness or tingling in the feet or hands\nBurning or electric nerve pain\nFeet that feel cold, heavy or wooden\nPoor balance or feeling unsteady\nNerve symptoms linked to diabetes or blood sugar\nPain from pinched nerves in the low back or neck",
        'how_it_works' => <<<'HTML'
<h3>A careful evaluation</h3>
<p>We review your symptoms, health history, medications and any previous tests. The exam looks at sensation, reflexes, strength, circulation and balance. Lab work or other testing may be recommended when it could change the plan, and we will refer you elsewhere if something needs a different specialist.</p>
<h3>A plan built around you</h3>
<p>Depending on your findings, your plan may include:</p>
<ul>
<li>Treatments aimed at nerve pain and circulation, such as Class IV laser therapy</li>
<li>Balance and strengthening exercises to help you feel steadier</li>
<li>Chiropractic care or spinal decompression when a nerve is irritated near the spine</li>
<li>Guidance on blood sugar, nutrition and foot care</li>
<li>Coordination with your primary care provider when a medical cause needs attention</li>
</ul>
HTML,
        'benefits' => "A search for the cause, not just the symptom\nCare aimed at comfort, balance and daily function\nExercises you can continue at home\nFoot care guidance to help protect your feet\nCoordination with your other providers",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is an evaluation and a conversation about what neuropathy is taking away from you, whether that is sleep, walking, driving or confidence on stairs. We then explain the findings and the options.</p>
<p>Progress is measured in ways that matter to you, such as comfort, balance and how far you can walk. Nerve recovery can be slow and varies a great deal from person to person. We will not promise that damaged nerves will fully return, but many people find their symptoms and daily function can improve with the right plan.</p>
HTML,
        'faqs' => [
            ['Does numbness always mean neuropathy?', 'No. Numbness and tingling can come from a pinched nerve in the neck or back, circulation problems and other causes. That is why the evaluation comes first.'],
            ['Can diabetes cause neuropathy?', 'Yes. Diabetes is one of the most common causes. Keeping blood sugar in a healthy range is an important part of protecting the nerves, and we work alongside your other providers on this.'],
            ['Will I need lab work?', 'Sometimes. Blood tests can check for causes such as low vitamin B12 or thyroid problems. Your provider will explain if testing could change your care.'],
            ['Can neuropathy affect my balance?', 'Yes. When your feet send less information to the brain, balance can suffer. Balance training is often part of the program.'],
            ['How quickly will I improve?', 'It varies. Nerves recover slowly, and the cause makes a big difference. Your provider will set realistic goals with you and review them regularly.'],
        ],
        'related' => 'class-iv-laser-therapy,spinal-decompression-therapy,metabolic-optimization',
        'body_areas' => 'ankle-foot,leg,wrist-hand,back',
        'meta_title' => 'Neuropathy Program',
        'meta_description' => 'A structured program for numbness, burning, tingling and balance problems from peripheral neuropathy, built around the cause of your symptoms.',
    ],
    [
        'slug' => 'knee-restoration', 'title' => 'Knee Restoration', 'menu_label' => 'Knee Restoration',
        'category' => 'regenerative', 'icon' => 'knee', 'featured' => 0,
        'excerpt' => 'A knee focused program that starts with a careful look at what is driving your pain, then brings together nonsurgical options to help the knee move and work better.',
        'hero_text' => 'Before you give up on your knee, understand it. We look at what is causing the pain and which nonsurgical options fit your knee and your goals.',
        'what_is' => <<<'HTML'
<p>Knee Restoration is our step by step approach to knee pain. It is not one injection or one machine. It starts with understanding why your knee hurts, how much healthy movement it still has and what you want it to do for you again, whether that is climbing stairs, walking the dog or getting back to a sport.</p>
<p>One painful knee can have several very different causes. Arthritis, a worn or torn meniscus, an irritated tendon, a kneecap that does not track well and weakness around the hip can all lead to pain in a similar place. The right plan depends on which of these is involved.</p>
HTML,
        'conditions' => "Knee osteoarthritis and wear and tear\nPain on stairs, kneeling or getting up from a chair\nStiffness and swelling\nMeniscus irritation\nTendon pain around the kneecap\nKnees that limit walking, work or sport",
        'how_it_works' => <<<'HTML'
<h3>1. Evaluation</h3>
<p>We take a full history, examine the knee and the joints above and below it, and review any X-rays or MRI you already have. New imaging is only suggested when it could change the plan.</p>
<h3>2. A plan for your knee</h3>
<p>Depending on what we find, your plan may combine:</p>
<ul>
<li>Regenerative options, such as platelet-rich plasma, when you are a suitable candidate</li>
<li>SoftWave or Class IV laser therapy for irritated tissue</li>
<li>Strength and movement work for the knee, hip and ankle</li>
<li>Advice on activity, load and weight that can take pressure off the joint</li>
</ul>
<h3>3. Rebuilding function</h3>
<p>A knee still has to move, load and work in real life. Exercises and follow up visits help turn short term relief into better everyday function.</p>
HTML,
        'benefits' => "A clear explanation of what is driving your knee pain\nNonsurgical options considered first\nTreatment and rehabilitation planned together\nGoals based on what you want to get back to\nRegular reviews of your progress",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is mostly about listening and examining. You will leave with a clearer picture of what is going on and the options that may suit you. If a procedure is part of the plan, your provider will explain what it involves, the possible risks and what recovery looks like before you decide.</p>
<p>Some people choose this path because they want to delay or avoid knee surgery. No treatment can guarantee that, and for some knees surgery is the right answer. If that is the case for you, we will tell you and help you find the right specialist.</p>
HTML,
        'faqs' => [
            ['Is Knee Restoration just a knee injection?', 'No. An injection may be one option for some patients, but the program starts with an evaluation and usually combines several types of care.'],
            ['Can this help me avoid knee replacement?', 'Some patients explore nonsurgical options to delay or avoid surgery, but no treatment can promise that. It depends on the condition of the joint and how you respond.'],
            ['Do I need an MRI first?', 'Not always. We review any imaging you already have and only suggest new imaging when it would change the decision.'],
            ['Will I need exercises too?', 'Usually, yes. Strength and movement around the knee, hip and ankle play a big part in how well a knee does over time.'],
        ],
        'related' => 'regenerative-joint-care,regenerative-medicine,softwave-therapy',
        'body_areas' => 'knee',
        'meta_title' => 'Knee Restoration',
        'meta_description' => 'A nonsurgical knee program that starts with a careful evaluation, then combines regenerative options, recovery technology and rehabilitation.',
    ],
    [
        'slug' => 'regenerative-joint-care', 'title' => 'Regenerative Joint Care', 'menu_label' => 'Regenerative Joint Care',
        'category' => 'regenerative', 'icon' => 'bone', 'featured' => 0,
        'excerpt' => 'Joint care for knees, hips, shoulders and other joints that combines an accurate diagnosis, regenerative options when appropriate, and rehabilitation.',
        'hero_text' => 'Find out what is actually limiting your joint, then decide whether a regenerative option belongs in the plan.',
        'what_is' => <<<'HTML'
<p>Regenerative Joint Care brings together diagnosis, treatment and recovery for painful joints. It applies the regenerative medicine options described on our <a href="/treatments/regenerative-medicine/">Regenerative Medicine</a> page to specific joints, with a plan for what happens before and after any procedure.</p>
<p>Different joints create different problems. A shoulder that hurts when you reach overhead, a hip that aches after walking and a thumb joint that makes it hard to open jars need different thinking. The first job is to find what is driving the problem in your joint.</p>
HTML,
        'conditions' => "Knee, hip and shoulder joint pain\nJoint wear and arthritis\nTendon and ligament injuries near a joint\nStiffness that limits daily activities\nPain that has not settled with rest or medication\nOld sports injuries that still flare up",
        'how_it_works' => <<<'HTML'
<p>Three questions matter before a regenerative treatment is discussed:</p>
<ol>
<li><strong>Is the target clear?</strong> Your history, exam and any imaging should point to a specific structure that is causing pain.</li>
<li><strong>Are you a reasonable candidate?</strong> Your health, medications and the condition of the joint all affect whether a procedure makes sense.</li>
<li><strong>Can recovery support the result?</strong> A joint still needs to move and carry load afterwards, so rehabilitation is planned from the start.</li>
</ol>
<p>When a procedure is recommended, such as platelet-rich plasma, it is typically delivered with guidance so it reaches the intended area. Your provider will explain the options, risks and alternatives first.</p>
HTML,
        'benefits' => "An accurate diagnosis before any procedure\nMinimally invasive options when appropriate\nRehabilitation built into the plan\nCare for knees, hips, shoulders and other joints\nA clear explanation of risks and alternatives",
        'what_to_expect' => <<<'HTML'
<p>Your first visit includes a history, an exam and a review of any imaging. If a regenerative procedure may help, your provider will talk you through how it is done, how long recovery usually takes and what you should and should not do in the weeks afterwards.</p>
<p>Regenerative treatment is not right for every painful joint. Results vary, and your provider will be honest with you about what is realistic for your joint.</p>
HTML,
        'faqs' => [
            ['What is Regenerative Joint Care?', 'It is our approach to painful joints that combines diagnosis, regenerative options when they fit, and rehabilitation in one plan.'],
            ['Do I need imaging before treatment?', 'Sometimes. Existing X-rays or MRI scans are reviewed, and new imaging is only suggested when it would change the decision.'],
            ['Is it right for every painful joint?', 'No. Some joints and some conditions respond better than others. Your provider will tell you if another option is more suitable.'],
            ['What happens after a procedure?', 'You will be given guidance on activity and a follow up schedule. Rehabilitation exercises are usually part of recovery.'],
        ],
        'related' => 'regenerative-medicine,knee-restoration,class-iv-laser-therapy',
        'body_areas' => 'shoulder,hip,knee,elbow,wrist-hand,ankle-foot,joint',
        'meta_title' => 'Regenerative Joint Care',
        'meta_description' => 'Regenerative joint care for knees, hips, shoulders and other joints, combining an accurate diagnosis, regenerative options and rehabilitation.',
    ],
    [
        'slug' => 'peptide-therapy', 'title' => 'Peptide Therapy', 'menu_label' => 'Peptide Therapy',
        'category' => 'wellness', 'icon' => 'syringe', 'featured' => 0,
        'excerpt' => 'Prescription peptide therapy considered only after a medical evaluation, chosen for a clear purpose, and followed up over time.',
        'hero_text' => 'A prescription, not a product menu. Your provider decides whether peptide therapy belongs in your plan after reviewing your goals and health history.',
        'what_is' => <<<'HTML'
<p>Peptides are short chains of amino acids. Many act as signaling molecules in the body. Some peptide based medications are prescribed for specific medical purposes, and interest in them has grown for goals such as recovery, body composition and healthy aging.</p>
<p>Peptides are not one interchangeable category. Different therapies have different purposes, different levels of evidence, different risks and different regulatory status. That is why we do not offer a list to choose from. A licensed provider first looks at your goals, your health history and your medications, then decides whether any peptide therapy is appropriate for you.</p>
HTML,
        'conditions' => "Recovery from training or physical stress\nBody composition goals alongside nutrition and exercise\nHealthy aging and long term function\nSupport within a broader metabolic or hormone plan",
        'how_it_works' => <<<'HTML'
<ol>
<li><strong>Define the goal.</strong> What exactly do you want to improve, and how will you know if it is working?</li>
<li><strong>Review candidacy.</strong> Your provider reviews your medical history, current medications, possible reasons not to use a therapy and, when needed, lab work.</li>
<li><strong>Prescribe with a purpose.</strong> If a therapy is appropriate, it is chosen for a specific reason. You will be told how it is used, including injection technique if needed.</li>
<li><strong>Follow the response.</strong> Follow up visits check how you are responding, any side effects and whether treatment should continue, change or stop.</li>
</ol>
HTML,
        'benefits' => "A medical evaluation before any prescription\nA clear reason for every therapy\nInstructions on how to use your medication\nFollow up to review response and side effects\nPart of a wider plan for health, not a quick fix",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is a medical consultation. You will talk about your goals, health history and current medications. Your provider may suggest lab work before making a decision.</p>
<p>A goal on its own does not make someone a candidate for peptide therapy. If your provider does not think it is right for you, they will explain why and talk about other options. If it is prescribed, you will know what it is for, how to use it, what side effects to watch for and when your follow up is.</p>
HTML,
        'faqs' => [
            ['What is peptide therapy?', 'It is the medical use of specific peptide based prescription therapies for suitable patients. Each therapy is different, so each is considered on its own merits.'],
            ['Can I choose a peptide from a list?', 'No. Your provider evaluates your goals and health first, then decides whether any peptide therapy is appropriate.'],
            ['Are peptides injections?', 'Some are given by injection, while others are taken differently. If an injectable therapy is prescribed, you will be shown exactly how to use it.'],
            ['Are there side effects?', 'Every prescription therapy can have side effects and situations where it should not be used. Your provider will go through these with you before you start.'],
            ['How long would I stay on treatment?', 'It depends on your goal and your response. Treatment is reviewed regularly and is not meant to continue automatically.'],
        ],
        'related' => 'hormone-optimization,longevity-healthy-aging,metabolic-optimization',
        'body_areas' => '',
        'meta_title' => 'Peptide Therapy',
        'meta_description' => 'Prescription peptide therapy considered only after a medical evaluation, chosen for a clear purpose and reviewed with regular follow up.',
    ],
    [
        'slug' => 'hormone-optimization', 'title' => 'Hormone Optimization', 'menu_label' => 'Hormone Optimization',
        'category' => 'wellness', 'icon' => 'sparkles', 'featured' => 0,
        'excerpt' => 'A medical evaluation of hormone related symptoms for women and men, with lab testing and treatment options considered when they make sense for you.',
        'hero_text' => 'When something feels off, guessing is not a plan. We look at your symptoms, history and labs together before any treatment is discussed.',
        'what_is' => <<<'HTML'
<p>Hormones affect energy, sleep, mood, weight, libido, muscle and much more. When they shift, through perimenopause, menopause, lower testosterone or a thyroid problem, the changes can be hard to pin down. Many symptoms also overlap with stress, poor sleep, medications and other health conditions.</p>
<p>Hormone optimization starts with a careful medical evaluation. A lab result alone does not tell the whole story. It has to make sense next to how you feel and what has changed in your life. When treatment is appropriate, a licensed provider explains the options, benefits, risks and how it will be monitored.</p>
HTML,
        'conditions' => "Low energy and fatigue\nPoor sleep\nLow libido\nMood changes or brain fog\nSymptoms of perimenopause or menopause\nSymptoms that may relate to low testosterone\nChanges in weight or muscle",
        'how_it_works' => <<<'HTML'
<h3>Start with what changed</h3>
<p>We talk about your symptoms, when they started, what else was happening at the time and how they affect your life.</p>
<h3>Testing that answers a question</h3>
<p>Lab work is usually part of the evaluation. Your provider chooses tests based on your symptoms and history and explains what each result means.</p>
<h3>Options, not assumptions</h3>
<p>Depending on the findings, your plan may focus on sleep, nutrition, exercise and stress, a referral, or prescription hormone therapy when it is appropriate. Women and men are evaluated differently, and the plan should reflect that.</p>
<h3>Follow up and monitoring</h3>
<p>If you start treatment, your provider will check how you feel and repeat labs as needed to keep treatment safe and effective.</p>
HTML,
        'benefits' => "A full medical evaluation, not a guess\nLab testing chosen for a reason\nOptions for women and men\nClear explanation of benefits and risks\nRegular monitoring if you start treatment",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is a conversation with a medical provider about your symptoms and health history, usually followed by lab work. A second visit is often used to go through the results and your options together.</p>
<p>Hormone therapy is not right for everyone, and feeling tired does not always mean your hormones are low. Your provider will be clear about what the results show and what they do not.</p>
HTML,
        'faqs' => [
            ['Does feeling tired mean my hormones are low?', 'Not necessarily. Fatigue has many causes, including sleep, stress, thyroid problems and other conditions. The evaluation looks at the whole picture.'],
            ['Do you see women in perimenopause and menopause?', 'Yes. Hormone changes in perimenopause and menopause are a common reason people book an evaluation.'],
            ['Will I need lab work?', 'Usually, yes. Your provider will explain which tests are useful for your situation and why.'],
            ['Is hormone therapy used for weight loss?', 'Hormone therapy is not a weight loss treatment. If weight is a concern, it may be addressed separately as part of a broader plan.'],
            ['How is this different from buying hormones online?', 'You get an in person medical evaluation, appropriate testing, a discussion of risks and ongoing monitoring by a licensed provider.'],
        ],
        'related' => 'metabolic-optimization,longevity-healthy-aging,peptide-therapy',
        'body_areas' => '',
        'meta_title' => 'Hormone Optimization',
        'meta_description' => 'A medical evaluation of hormone related symptoms for women and men, with lab testing and treatment options when appropriate and regular monitoring.',
    ],
    [
        'slug' => 'metabolic-optimization', 'title' => 'Metabolic Optimization', 'menu_label' => 'Metabolic Optimization',
        'category' => 'wellness', 'icon' => 'heart', 'featured' => 0,
        'excerpt' => 'A medically guided look at energy, weight, sleep, blood sugar and recovery, with a plan to improve how your body is working day to day.',
        'hero_text' => 'For when you simply do not feel like you used to. We look at how your body is responding and build a plan around what can realistically improve.',
        'what_is' => <<<'HTML'
<p>Your metabolism is not a single switch that is either fast or slow. It is the combined result of how your body uses food for energy, how you sleep, how much you move, how you handle stress, your hormones and your blood sugar control. When several of these drift at once, people often notice low energy, weight gain around the middle, cravings, poor sleep or slower recovery.</p>
<p>Metabolic Optimization looks at those pieces together. The goal might be weight for one person and energy, recovery or healthy aging for another. Either way, the plan starts with an evaluation and, when useful, lab work to see what is going on underneath.</p>
HTML,
        'conditions' => "Low energy or afternoon crashes\nWeight gain that is hard to explain\nBlood sugar or cholesterol concerns\nCravings and irregular appetite\nPoor sleep or slow recovery\nWanting to stay healthy as you get older",
        'how_it_works' => <<<'HTML'
<p>We look at five connected areas:</p>
<ul>
<li><strong>Nutrition.</strong> What, when and how much you eat, and what fits your routine.</li>
<li><strong>Movement.</strong> Daily activity and strength, adjusted for any injuries or pain.</li>
<li><strong>Sleep and stress.</strong> How well your body can rest and recover.</li>
<li><strong>Labs and markers.</strong> Testing such as blood sugar, cholesterol and other markers when they help answer a question.</li>
<li><strong>Medical factors.</strong> Medications, hormones and conditions that may affect your metabolism.</li>
</ul>
<p>From there, your provider builds a practical plan. It may include coaching on nutrition and activity, a referral, or a medical option such as prescription weight loss medication when it is appropriate.</p>
HTML,
        'benefits' => "A clear picture of how your body is working\nLab testing when it adds useful information\nPractical changes that fit your life\nMedical options considered when appropriate\nRegular reviews to track progress",
        'what_to_expect' => <<<'HTML'
<p>Your first visit covers your goals, health history, daily routine and any recent test results. Your provider may order labs and go through the results with you at a follow up visit.</p>
<p>Progress is tracked with measures that matter for your goal, such as energy, sleep, waist size, lab markers or weight. Change usually takes time, and the plan is adjusted as you go.</p>
HTML,
        'faqs' => [
            ['Is this the same as Medical Weight Loss?', 'They overlap. Medical Weight Loss focuses on weight. Metabolic Optimization looks more broadly at energy, blood sugar, sleep and recovery, which may or may not include weight goals.'],
            ['Does everyone need lab testing?', 'Not everyone, but many people benefit from it. Your provider will explain which tests are useful for you and why.'],
            ['Can this include GLP-1 medication?', 'Prescription medication may be considered for some patients when it is appropriate. A licensed provider decides after an evaluation.'],
            ['Do I need a health problem to start?', 'No. Some people come in because they want to stay well as they get older, not because something is wrong.'],
        ],
        'related' => 'weight-loss,hormone-optimization,functional-medicine',
        'body_areas' => '',
        'meta_title' => 'Metabolic Optimization',
        'meta_description' => 'A medically guided plan to improve energy, weight, blood sugar, sleep and recovery, with lab testing and treatment options when appropriate.',
    ],
    [
        'slug' => 'longevity-healthy-aging', 'title' => 'Longevity & Healthy Aging', 'menu_label' => 'Longevity & Healthy Aging',
        'category' => 'wellness', 'icon' => 'leaf', 'featured' => 0,
        'excerpt' => 'A plan to protect strength, mobility, energy and metabolic health over the years, so you can keep doing the things you care about.',
        'hero_text' => 'Live longer, yes, but also live capable. We help you plan for the strength, mobility and health you want to keep in ten or twenty years.',
        'what_is' => <<<'HTML'
<p>Healthy aging is not about chasing perfect numbers or trying to turn back the clock. It is about protecting what lets you live your life: getting up off the floor easily, carrying the groceries, keeping your balance, sleeping well, thinking clearly and staying independent.</p>
<p>Our longevity care looks ahead. We review the areas that tend to decline with age and ask what you want your body to still let you do in the years to come. The plan then focuses on the factors you can influence today.</p>
HTML,
        'conditions' => "Losing strength or muscle\nStiff joints and reduced mobility\nLower energy than before\nChanges in sleep, weight or blood sugar\nConcerns about balance\nWanting a plan for long term health",
        'how_it_works' => <<<'HTML'
<p>We look at five areas that deserve attention as you age:</p>
<ul>
<li><strong>Strength and muscle.</strong> Muscle supports metabolism, balance and independence.</li>
<li><strong>Mobility and joints.</strong> Keeping the body moving well and comfortably.</li>
<li><strong>Metabolic health.</strong> Blood sugar, cholesterol, weight and blood pressure.</li>
<li><strong>Hormones and energy.</strong> Changes that may affect how you feel and recover.</li>
<li><strong>Sleep and recovery.</strong> The foundation for almost everything else.</li>
</ul>
<p>Depending on your evaluation, your plan may point toward exercise and lifestyle changes, chiropractic or joint care, metabolic support, or medical options such as hormone therapy when it is appropriate.</p>
HTML,
        'benefits' => "A long term plan built around your goals\nFocus on strength, mobility and balance\nMetabolic and hormone health reviewed together\nPractical changes you can keep up\nRegular reviews as your needs change",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is a conversation about your health history, your current routine and what you want to protect. Lab work and simple tests of strength, balance and mobility may be part of the picture.</p>
<p>You will leave with a clear set of priorities rather than a long list of things to manage. The plan should make your life easier, not more complicated, and it is reviewed as your needs change.</p>
HTML,
        'faqs' => [
            ['Is longevity care only for older adults?', 'No. Many people start in their 30s, 40s or 50s because they want to protect their health early.'],
            ['Does this automatically mean hormone therapy?', 'No. Hormone therapy is only one possible option and is considered only when it is medically appropriate.'],
            ['Will I need blood work?', 'Often, yes. Lab work helps show where you are starting from and which areas need attention.'],
            ['Can chiropractic care be part of it?', 'Yes. Mobility, joint health and comfortable movement are a big part of aging well.'],
            ['What is the first step?', 'Book an evaluation. We will talk about your goals and health history and decide together what to focus on first.'],
        ],
        'related' => 'hormone-optimization,metabolic-optimization,peptide-therapy',
        'body_areas' => '',
        'meta_title' => 'Longevity & Healthy Aging',
        'meta_description' => 'A long term plan to protect strength, mobility, energy and metabolic health, so you can keep doing the things you care about as you age.',
    ],
    [
        'slug' => 'functional-medicine', 'title' => 'Functional Medicine', 'menu_label' => 'Functional Medicine',
        'category' => 'wellness', 'icon' => 'stethoscope', 'featured' => 0,
        'excerpt' => 'A whole person approach for symptoms that do not fit neatly into one box, connecting your history, lifestyle and lab findings into one clear plan.',
        'hero_text' => 'Your symptoms are connected, so your care should be too. We take the time to understand the whole picture and put the pieces in order.',
        'what_is' => <<<'HTML'
<p>Functional medicine looks at how different parts of your health affect each other. Fatigue, digestive problems, weight changes, poor sleep and aches can be related, and treating each one separately does not always help.</p>
<p>It is not a hunt for one hidden answer, and it is not a promise of endless supplements or tests. It is a structured way of taking a detailed history, looking at nutrition, sleep, stress, activity and medical factors, and deciding what deserves attention first.</p>
HTML,
        'conditions' => "Ongoing fatigue\nDigestive symptoms\nWeight changes\nSleep problems\nSymptoms that cross several body systems\nWanting a more complete look at your health",
        'how_it_works' => <<<'HTML'
<ol>
<li><strong>A detailed history.</strong> We go through your symptoms, timeline, diet, sleep, stress, medications and past treatment.</li>
<li><strong>Focused testing.</strong> Lab work is chosen to answer specific questions, not ordered by default.</li>
<li><strong>A clear sequence.</strong> Rather than changing everything at once, your plan sets priorities and a sensible order.</li>
<li><strong>Coordinated care.</strong> Your plan may point toward another service, such as metabolic care, hormone care or chiropractic, or toward another specialist when that is the right step.</li>
</ol>
HTML,
        'benefits' => "Time to tell your whole story\nTesting chosen for a reason\nA clear order of priorities\nLifestyle changes you can realistically keep\nCoordination with your other care",
        'what_to_expect' => <<<'HTML'
<p>Your first visit is longer than a typical appointment because the history matters. Please bring a list of your medications and supplements and any recent lab results.</p>
<p>You will leave with a starting plan and an idea of what testing, if any, makes sense. Follow up visits review results and progress. Most plans develop over a few months rather than a single visit.</p>
HTML,
        'faqs' => [
            ['Is functional medicine the same as alternative medicine?', 'No. It uses standard medical evaluation and testing, with extra attention to how lifestyle and different body systems interact.'],
            ['Will I need a lot of lab tests?', 'Not necessarily. Testing is chosen to answer specific questions, and your provider will explain why each test is useful.'],
            ['Does it mean taking lots of supplements?', 'No. Supplements are only recommended when there is a reason, and many plans focus mainly on nutrition, sleep and activity.'],
            ['How long does a plan take?', 'It varies. Many people work on their plan over a few months, with follow up visits to review progress.'],
        ],
        'related' => 'metabolic-optimization,hormone-optimization,longevity-healthy-aging',
        'body_areas' => '',
        'meta_title' => 'Functional Medicine',
        'meta_description' => 'A whole person approach for connected symptoms like fatigue, digestion, weight and sleep, with focused testing and a clear, prioritized plan.',
    ],
];
