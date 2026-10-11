<?php
/**
 * Condition pages (/conditions/<slug>/), loaded on install and by the October 2026 content
 * migration. Written conservatively: no guaranteed outcomes, eligibility after evaluation.
 * Each record is flagged "needs review" in the dashboard.
 */
return [
    // ---------------- Spine & Nerve ----------------
    [
        'slug' => 'back-pain', 'title' => 'Back Pain', 'grp' => 'spine', 'icon' => 'spine',
        'excerpt' => 'Low back pain is one of the most common reasons people see a provider. Most back pain is mechanical and many people improve with the right conservative care.',
        'hero_text' => 'Back pain is more than an MRI finding. How your pain behaves tells us a lot about where it is coming from and what is likely to help.',
        'overview' => <<<'HTML'
<p>Most adults have back pain at some point. It can start suddenly after lifting or twisting, or build slowly from long hours of sitting, standing or repetitive work. For many people it settles within a few weeks. For others it keeps coming back or never fully goes away.</p>
<p>The way your back pain behaves is one of the most useful clues. Pain that grabs when you bend, pain that builds when you stand and walk, pain that is worse after sitting, and pain that travels into the leg tend to point toward different causes. That is why a careful history and exam come before any treatment decision, and often before any scan.</p>
HTML,
        'symptoms' => "Dull ache or stiffness across the low back\nSharp pain when bending, lifting or twisting\nPain that is worse after sitting or driving\nPain that builds when standing or walking\nMuscle spasm or a feeling of the back locking\nPain that spreads into the buttock or leg",
        'causes' => <<<'HTML'
<ul>
<li><strong>Muscle and ligament strain</strong> from lifting, sudden movements or overuse.</li>
<li><strong>Joint irritation</strong> in the small facet joints of the spine.</li>
<li><strong>Disc problems</strong> such as a bulging or herniated disc, which can also irritate a nerve.</li>
<li><strong>Degenerative changes</strong> that come with age, including arthritis and narrowing of the spinal canal.</li>
<li><strong>Posture, sitting and deconditioning</strong> that load the back in the same way for hours.</li>
<li><strong>Injuries</strong> from car accidents, falls or sport.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>Your evaluation looks at what movements reproduce the pain, whether the pain stays in the back or travels, and whether strength, reflexes or sensation have changed. We also check the hips, which can play a part in back pain, and screen for warning signs that need a different kind of care.</p>
<p>Imaging is only suggested when it would change the plan. Depending on what we find, your care may include chiropractic adjustments, spinal decompression for disc related pain, soft tissue treatment, exercises you can do at home and guidance on how to stay active while you recover.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for back pain with any of the following:</p>
<ul>
<li>New loss of bladder or bowel control, or numbness around the groin or inner thighs</li>
<li>Weakness in the legs that is getting worse</li>
<li>Back pain after a major fall or accident</li>
<li>Back pain with fever, unexplained weight loss or a history of cancer</li>
</ul>
HTML,
        'treatments' => 'chiropractic-care,spinal-decompression-therapy,class-iv-laser-therapy,softwave-therapy',
        'faqs' => [
            ['Do I need an MRI for back pain?', 'Not always. Many cases can be evaluated well with a history and exam. Imaging is useful when it would change the plan or when certain warning signs are present.'],
            ['Should I rest or stay active?', 'For most back pain, gentle activity helps more than bed rest. Your provider can tell you which movements to keep doing and which to ease off for now.'],
            ['Can back pain come from the hip?', 'Yes. The hip and low back work closely together, and problems in one can show up as pain in the other. Both are checked during your evaluation.'],
            ['How long does back pain take to improve?', 'Many episodes settle within weeks, but it varies. Longstanding pain usually needs a plan that includes exercise and changes to daily habits.'],
        ],
        'meta_title' => 'Back Pain Treatment',
        'meta_description' => 'Nonsurgical care for low back pain, starting with an evaluation of how your pain behaves and what is causing it, then a plan to get you moving.',
    ],
    [
        'slug' => 'neck-pain', 'title' => 'Neck Pain', 'grp' => 'spine', 'icon' => 'spine',
        'excerpt' => 'Neck pain can come from posture, injury, joint irritation or a pinched nerve. Finding the source helps decide the right care.',
        'hero_text' => 'Stiff, sore or radiating into the arm? We find what is behind your neck pain and build a plan to help you move comfortably again.',
        'overview' => <<<'HTML'
<p>Neck pain is very common, and it has become more so with long hours at desks and on phones. It can be a dull ache at the end of the day, a stiff neck after sleeping awkwardly, headaches that start at the base of the skull, or pain that travels into the shoulder and arm.</p>
<p>Whiplash after a car accident is another frequent cause. Symptoms from that kind of injury do not always appear straight away, which is why an early evaluation is a good idea even if you feel fine at first.</p>
HTML,
        'symptoms' => "Stiffness and reduced ability to turn your head\nAching across the neck and upper shoulders\nHeadaches starting at the base of the skull\nPain spreading into the shoulder blade or arm\nTingling or numbness in the arm or hand\nMuscle tightness and tender spots",
        'causes' => <<<'HTML'
<ul>
<li><strong>Posture and sustained positions</strong>, such as looking down at a screen for long periods.</li>
<li><strong>Muscle strain</strong> from sleeping awkwardly, lifting or sudden movements.</li>
<li><strong>Whiplash</strong> and other injuries from car accidents or sport.</li>
<li><strong>Joint irritation</strong> in the small joints of the neck.</li>
<li><strong>Disc problems and pinched nerves</strong>, which can cause arm pain, tingling or weakness.</li>
<li><strong>Age related changes</strong> such as arthritis in the neck.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We check how your neck moves, which movements bring on the pain, and whether there are any signs of nerve involvement, such as changes in strength, reflexes or sensation in the arms. We also look at the upper back and shoulders, which often contribute.</p>
<p>Your plan may include chiropractic adjustments, soft tissue work, spinal decompression for disc related symptoms, laser therapy and exercises to improve strength and posture. We will also look at your work setup and daily habits so the improvement lasts.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for neck pain with any of the following:</p>
<ul>
<li>Neck pain after a significant accident, fall or blow to the head</li>
<li>Weakness, clumsiness or numbness in both arms or legs, or trouble walking</li>
<li>Severe headache with neck stiffness and fever</li>
<li>Sudden, severe neck pain with dizziness, double vision or trouble speaking</li>
</ul>
HTML,
        'treatments' => 'chiropractic-care,spinal-decompression-therapy,class-iv-laser-therapy,car-accident-injury-treatment',
        'faqs' => [
            ['Can poor posture really cause neck pain?', 'Long periods in one position, especially looking down, can load the neck and upper back and contribute to pain. Small changes to your setup and regular movement can make a difference.'],
            ['Why does my neck pain cause headaches?', 'Irritated joints and tight muscles at the top of the neck can refer pain into the head. These are often called cervicogenic headaches.'],
            ['Should I be checked after a car accident if my neck feels fine?', 'It is a good idea. Whiplash symptoms can take a day or more to appear, and early care can help recovery.'],
            ['Is chiropractic care safe for the neck?', 'Your provider screens for reasons not to adjust the neck before treatment. There are also gentle techniques and other options if adjustments are not right for you.'],
        ],
        'meta_title' => 'Neck Pain Treatment',
        'meta_description' => 'Nonsurgical care for neck pain, stiffness and headaches, including whiplash. We find the source of the pain and build a plan to help you move again.',
    ],
    [
        'slug' => 'sciatica', 'title' => 'Sciatica', 'grp' => 'spine', 'icon' => 'activity',
        'excerpt' => 'Sciatica is pain that travels from the low back or buttock down the leg, usually from an irritated nerve root. Many people improve without surgery.',
        'hero_text' => 'When pain runs from your back down your leg, the nerve is telling you something. We work out where it is being irritated and why.',
        'overview' => <<<'HTML'
<p>Sciatica describes pain that follows the path of the sciatic nerve, from the low back or buttock down the back of the leg, sometimes as far as the foot. It is a symptom rather than a diagnosis. The pain usually comes from a nerve root being irritated or compressed in the low back.</p>
<p>The leg pain is often worse than the back pain. People describe it as burning, shooting or electric, and it may come with tingling, numbness or weakness. It usually affects one side.</p>
HTML,
        'symptoms' => "Pain running from the buttock down the back of the leg\nBurning, shooting or electric pain\nTingling or numbness in the leg or foot\nWeakness in the leg or foot\nPain that is worse when sitting, coughing or sneezing\nPain on one side of the body",
        'causes' => <<<'HTML'
<ul>
<li><strong>Herniated or bulging disc</strong>, the most common cause.</li>
<li><strong>Spinal stenosis</strong>, a narrowing of the spaces where nerves travel.</li>
<li><strong>Degenerative disc disease</strong> and arthritis in the low back.</li>
<li><strong>Piriformis syndrome</strong>, where a muscle in the buttock irritates the nerve.</li>
<li><strong>Spondylolisthesis</strong>, when one vertebra slips forward on another.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We trace your symptoms carefully: where the pain goes, what makes it better or worse, and whether strength, reflexes or sensation have changed. This helps tell sciatica apart from hip problems and other causes of leg pain, and shows which nerve level is likely involved.</p>
<p>Care may include spinal decompression to take pressure off the disc and nerve, chiropractic care, laser therapy and specific exercises. We monitor nerve signs closely, and if your symptoms suggest you need imaging or a specialist opinion, we will arrange that.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care if sciatica comes with:</p>
<ul>
<li>New loss of bladder or bowel control</li>
<li>Numbness in the groin, buttocks or inner thighs (saddle area)</li>
<li>Leg weakness that is getting worse, such as foot drop</li>
<li>Symptoms in both legs at once</li>
</ul>
HTML,
        'treatments' => 'spinal-decompression-therapy,chiropractic-care,class-iv-laser-therapy',
        'faqs' => [
            ['Is sciatica the same as back pain?', 'Not quite. Sciatica is leg pain that comes from an irritated nerve, often in the low back. You can have it with or without much back pain.'],
            ['Will sciatica go away on its own?', 'Many cases improve over weeks to months. Care can help manage pain and support recovery, and nerve signs are monitored in case further steps are needed.'],
            ['Can spinal decompression help sciatica?', 'It may help when the sciatica comes from a disc problem. Your provider will check whether it suits your situation.'],
            ['Do I need surgery?', 'Most people with sciatica do not need surgery. It may be considered when there is significant or worsening weakness or when symptoms do not improve with conservative care.'],
        ],
        'meta_title' => 'Sciatica Treatment',
        'meta_description' => 'Nonsurgical care for sciatica and leg pain from an irritated nerve, with a careful evaluation and options such as spinal decompression.',
    ],
    [
        'slug' => 'herniated-disc', 'title' => 'Herniated Disc', 'grp' => 'spine', 'icon' => 'move',
        'excerpt' => 'A herniated disc happens when the soft center of a spinal disc pushes through its outer layer. It can cause back or neck pain and nerve symptoms.',
        'hero_text' => 'A disc problem on an MRI does not always explain the pain. We look at your symptoms and exam together to plan the right care.',
        'overview' => <<<'HTML'
<p>Between the bones of your spine are discs that act as cushions. Each disc has a tougher outer layer and a softer center. When part of that center pushes out through a weak spot, it is called a herniated disc. A bulging disc is a related, usually milder change where the disc spreads outward more evenly.</p>
<p>A herniated disc can cause local back or neck pain, and it can also press on or irritate a nearby nerve. That can lead to pain, tingling, numbness or weakness in the leg or arm. Interestingly, disc changes are common on scans in people with no pain at all, so the findings always need to be matched to your symptoms.</p>
HTML,
        'symptoms' => "Low back or neck pain\nPain spreading into the leg or arm\nTingling or numbness\nMuscle weakness in the leg, foot, arm or hand\nPain worse with sitting, bending, coughing or sneezing",
        'causes' => <<<'HTML'
<ul>
<li>Gradual wear of the discs with age</li>
<li>Lifting, especially with bending and twisting</li>
<li>Repetitive strain from work or sport</li>
<li>Injuries such as car accidents or falls</li>
<li>Factors such as smoking and excess body weight that affect disc health</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We review your symptoms, examine your spine and test nerve function, and look at any imaging you already have. The goal is to see whether the disc is really the source of your pain and whether a nerve is involved.</p>
<p>Many people improve with conservative care. Your plan may include spinal decompression to reduce pressure on the disc and nerve, chiropractic care, laser therapy and a graded exercise program. If there are signs that you need a surgical opinion, we will tell you and help arrange it.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care if you notice:</p>
<ul>
<li>New loss of bladder or bowel control</li>
<li>Numbness in the groin or inner thighs</li>
<li>Weakness in an arm or leg that is getting worse</li>
</ul>
HTML,
        'treatments' => 'spinal-decompression-therapy,chiropractic-care,class-iv-laser-therapy',
        'faqs' => [
            ['What is the difference between a bulging and herniated disc?', 'A bulging disc spreads outward more evenly, while a herniated disc has part of its center pushing through the outer layer. Both can cause symptoms, or none at all.'],
            ['Can a herniated disc heal without surgery?', 'Many do improve over time with conservative care. Your provider will monitor your symptoms and nerve signs as you recover.'],
            ['Is spinal decompression good for herniated discs?', 'It is commonly used for disc related pain. Your provider will check whether you are a suitable candidate during your evaluation.'],
        ],
        'meta_title' => 'Herniated Disc Treatment',
        'meta_description' => 'Nonsurgical care for herniated and bulging discs, including spinal decompression, chiropractic care and exercise, after a careful evaluation.',
    ],
    [
        'slug' => 'peripheral-neuropathy', 'title' => 'Peripheral Neuropathy', 'grp' => 'spine', 'icon' => 'accessibility',
        'excerpt' => 'Peripheral neuropathy causes numbness, tingling, burning or weakness, often starting in the feet. Finding the cause shapes the care.',
        'hero_text' => 'When your feet or hands start to feel numb, burning or unreliable, it changes everyday life. We start by understanding the pattern and the cause.',
        'overview' => <<<'HTML'
<p>Peripheral neuropathy is damage or dysfunction of the nerves outside the brain and spinal cord. It often starts in the toes and feet because those nerves are the longest, and it may later affect the hands. It is not one disease but a category of nerve problems with many possible causes.</p>
<p>Neuropathy can mean pain, but it can also mean losing feeling. Reduced sensation in the feet can make small injuries easy to miss and can affect balance, so caring for the feet and keeping steady are an important part of the plan.</p>
HTML,
        'symptoms' => "Numbness or reduced feeling in the feet or hands\nTingling, pins and needles\nBurning or electric pain, often worse at night\nSensitivity to light touch\nWeakness or cramping\nPoor balance or unsteadiness",
        'causes' => <<<'HTML'
<ul>
<li>Diabetes and high blood sugar</li>
<li>Low vitamin B12 and other nutritional deficiencies</li>
<li>Certain medications, including some chemotherapy drugs</li>
<li>Heavy alcohol use</li>
<li>Thyroid and kidney problems</li>
<li>Compressed nerves, including in the spine</li>
<li>In some people no clear cause is found</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We look at where symptoms began, how they have spread and what they feel like, and test sensation, reflexes, strength and balance. Lab work may be recommended to look for treatable causes, and we coordinate with your primary care provider when a medical condition needs attention.</p>
<p>Our <a href="/treatments/neuropathy-program/">Neuropathy Program</a> then focuses on comfort, balance and function. It may include laser therapy, balance and strength training, foot care guidance and spinal care when a nerve is being irritated near the spine.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for:</p>
<ul>
<li>Weakness that spreads quickly, over hours or days</li>
<li>A foot wound, sore or color change that is not healing, especially if you have diabetes</li>
<li>Sudden numbness on one side of the body or face, which can be a sign of stroke</li>
</ul>
HTML,
        'treatments' => 'neuropathy-program,class-iv-laser-therapy,spinal-decompression-therapy,metabolic-optimization',
        'faqs' => [
            ['Why does neuropathy often start in the feet?', 'The nerves to the feet are the longest in the body, which can make them more vulnerable to damage.'],
            ['Is all numbness and tingling neuropathy?', 'No. A pinched nerve in the back or neck and circulation problems can cause similar symptoms. The evaluation helps tell them apart.'],
            ['Can neuropathy be reversed?', 'It depends on the cause and how long the nerves have been affected. Some people improve when the cause is addressed. The focus is on comfort, safety and function.'],
            ['Why is foot care important?', 'Reduced feeling can make it easy to miss cuts, blisters or pressure sores. Checking your feet daily helps catch problems early.'],
        ],
        'meta_title' => 'Peripheral Neuropathy Care',
        'meta_description' => 'Care for numbness, tingling and burning from peripheral neuropathy, starting with a search for the cause and a plan for comfort and balance.',
    ],

    // ---------------- Joints & Mobility ----------------
    [
        'slug' => 'knee-pain', 'title' => 'Knee Pain', 'grp' => 'joints', 'icon' => 'knee',
        'excerpt' => 'Knee pain can come from arthritis, the meniscus, tendons or the kneecap. An accurate diagnosis is the first step to the right care.',
        'hero_text' => 'Pain on stairs, stiffness in the morning or a knee that swells after activity. We find out why and what can help.',
        'overview' => <<<'HTML'
<p>The knee takes a lot of load every day, so it is no surprise that knee pain is so common. It can come on after an injury, or build slowly through wear, overuse or changes in how you move.</p>
<p>Where the pain is and when it happens give useful clues. Pain at the front of the knee on stairs, pain on the inside of the knee when twisting, stiffness first thing in the morning and swelling after a long walk all suggest different causes, and each calls for a slightly different plan.</p>
HTML,
        'symptoms' => "Pain on stairs, squatting or kneeling\nStiffness, especially in the morning or after sitting\nSwelling or a feeling of fullness\nClicking, catching or locking\nA knee that feels unstable or gives way\nPain around or behind the kneecap",
        'causes' => <<<'HTML'
<ul>
<li><strong>Osteoarthritis</strong>, the gradual wear of the joint surfaces.</li>
<li><strong>Meniscus tears or irritation</strong> from twisting or wear.</li>
<li><strong>Tendon pain</strong>, such as patellar or quadriceps tendon problems.</li>
<li><strong>Kneecap pain</strong> when the kneecap does not track smoothly.</li>
<li><strong>Ligament injuries</strong> from sport or falls.</li>
<li><strong>Weakness at the hip and thigh</strong>, which can increase load on the knee.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We examine the knee and the hip and ankle above and below it, watch how you move and review any imaging you already have. That helps pinpoint the structure involved and how much healthy function the knee still has.</p>
<p>Depending on the cause, your plan may include our <a href="/treatments/knee-restoration/">Knee Restoration</a> program, regenerative options when appropriate, SoftWave or laser therapy for irritated tissue, and a strength program to support the joint.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for:</p>
<ul>
<li>A knee that is hot, red and swollen, especially with fever</li>
<li>Being unable to put weight on the leg after an injury</li>
<li>An obvious deformity after a fall or accident</li>
<li>Calf pain and swelling, which can be a sign of a blood clot</li>
</ul>
HTML,
        'treatments' => 'knee-restoration,regenerative-joint-care,softwave-therapy,class-iv-laser-therapy',
        'faqs' => [
            ['Do I need an X-ray or MRI?', 'Not always. Your history and exam often point to the cause. Imaging is suggested when it would change the plan.'],
            ['Is exercise safe with knee arthritis?', 'For most people, the right exercise helps. Strengthening the muscles around the knee can reduce pain and improve function.'],
            ['Can knee pain come from my hip?', 'Yes. Hip problems and weakness can show up as knee pain, which is why we check the whole leg.'],
            ['Will I eventually need a knee replacement?', 'Not necessarily. Many people manage well with conservative care. If surgery becomes the best option, we will help you find the right specialist.'],
        ],
        'meta_title' => 'Knee Pain Treatment',
        'meta_description' => 'Nonsurgical care for knee pain from arthritis, meniscus, tendon or kneecap problems, starting with an accurate diagnosis and a clear plan.',
    ],
    [
        'slug' => 'hip-pain', 'title' => 'Hip Pain', 'grp' => 'joints', 'icon' => 'activity',
        'excerpt' => 'Hip pain can be felt in the groin, the side of the hip or the buttock, and each points to different causes. We help work out which one you have.',
        'hero_text' => 'Groin pain, pain on the side of the hip or pain when you lie on it at night. We look at where the pain is coming from, including the low back.',
        'overview' => <<<'HTML'
<p>Hip pain is not always felt where you expect. Problems in the hip joint itself are often felt in the groin. Pain on the outside of the hip usually comes from tendons and the tissue that covers the bony point of the hip. Pain in the buttock can come from the hip, the low back or the sacroiliac joint.</p>
<p>Because the hip and low back are so closely linked, we check both. Getting the source right makes a real difference to how quickly you improve.</p>
HTML,
        'symptoms' => "Pain in the groin or front of the hip\nPain on the outside of the hip, especially lying on that side\nStiffness getting out of a car or putting on socks\nPain when walking, climbing stairs or standing up\nA limp or reduced range of motion\nPain in the buttock or thigh",
        'causes' => <<<'HTML'
<ul>
<li><strong>Hip osteoarthritis</strong> and other wear of the joint.</li>
<li><strong>Gluteal tendon problems and bursitis</strong> on the outside of the hip.</li>
<li><strong>Hip impingement and labral problems</strong>, often in active people.</li>
<li><strong>Low back and sacroiliac joint problems</strong> that refer pain to the hip.</li>
<li><strong>Muscle strains</strong> in the groin or hip flexors.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We check how the hip moves, which movements bring on your pain, the strength of the surrounding muscles and whether the low back is involved. Imaging may be suggested if it would change the plan.</p>
<p>Care may include chiropractic treatment, SoftWave or laser therapy for irritated tendons, regenerative options for suitable joint problems, and a program to strengthen the hip and improve how you move.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for:</p>
<ul>
<li>Hip pain after a fall, especially if you cannot bear weight</li>
<li>A hot, swollen joint with fever</li>
<li>Sudden severe hip pain with no clear cause</li>
</ul>
HTML,
        'treatments' => 'chiropractic-care,regenerative-joint-care,softwave-therapy,class-iv-laser-therapy',
        'faqs' => [
            ['Why does my hip hurt when I lie on it?', 'Pain lying on the side of the hip is often linked to the tendons and bursa on the outside of the hip. The evaluation helps confirm this.'],
            ['Can hip pain come from my back?', 'Yes. The low back and sacroiliac joints can refer pain to the hip and buttock, so we check both.'],
            ['Will exercise make my hip worse?', 'The right exercises usually help. Your provider will show you which to do and how to progress them safely.'],
        ],
        'meta_title' => 'Hip Pain Treatment',
        'meta_description' => 'Nonsurgical care for hip pain in the groin, side of the hip or buttock, including tendon, joint and low back causes, after a careful evaluation.',
    ],
    [
        'slug' => 'shoulder-pain', 'title' => 'Shoulder Pain', 'grp' => 'joints', 'icon' => 'activity',
        'excerpt' => 'Shoulder pain often comes from the rotator cuff tendons, the joint itself or the neck. The right care starts with finding the source.',
        'hero_text' => 'Pain reaching overhead, lying on your side or lifting? We look at the shoulder and the neck to find what is causing it.',
        'overview' => <<<'HTML'
<p>The shoulder is the most mobile joint in the body, which also makes it easy to irritate. Most shoulder pain comes from the rotator cuff, a group of tendons that keep the joint stable as you move. Other causes include a stiff or frozen shoulder, arthritis and pain that is actually coming from the neck.</p>
<p>Shoulder problems often make everyday tasks hard, such as reaching for a shelf, putting on a jacket or sleeping on one side.</p>
HTML,
        'symptoms' => "Pain reaching overhead or behind your back\nPain lying on the affected side\nWeakness lifting the arm\nStiffness and reduced range of motion\nAching in the upper arm\nPain that spreads from the neck to the shoulder",
        'causes' => <<<'HTML'
<ul>
<li><strong>Rotator cuff tendon problems</strong>, from irritation to tears.</li>
<li><strong>Shoulder impingement</strong>, when tendons are pinched during movement.</li>
<li><strong>Frozen shoulder</strong>, where the joint becomes stiff and painful.</li>
<li><strong>Arthritis</strong> in the shoulder or the joint at the top of the shoulder.</li>
<li><strong>Referred pain from the neck</strong>.</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We test your shoulder movement and strength, look at your posture and shoulder blade movement, and check the neck. This helps tell tendon problems from joint stiffness or nerve pain.</p>
<p>Care may include SoftWave or laser therapy for tendon pain, chiropractic care for the neck and upper back, regenerative options when appropriate, and a progressive strengthening program.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get urgent medical care for:</p>
<ul>
<li>Sudden inability to lift the arm after an injury</li>
<li>A shoulder that looks deformed after a fall</li>
<li>Left shoulder or arm pain with chest pain, shortness of breath or sweating, which can be a sign of a heart problem. Call 911.</li>
</ul>
HTML,
        'treatments' => 'softwave-therapy,class-iv-laser-therapy,regenerative-joint-care,chiropractic-care',
        'faqs' => [
            ['Why does my shoulder hurt at night?', 'Lying on the shoulder can compress irritated tendons. Night pain is common with rotator cuff problems.'],
            ['Can shoulder pain come from my neck?', 'Yes. Irritated joints or nerves in the neck can refer pain to the shoulder, which is why we check both.'],
            ['Should I stop using my arm?', 'Usually not completely. Gentle, guided movement helps prevent stiffness. Your provider will tell you what to avoid for now.'],
        ],
        'meta_title' => 'Shoulder Pain Treatment',
        'meta_description' => 'Nonsurgical care for shoulder pain from rotator cuff, joint or neck problems, with SoftWave, laser, regenerative options and rehabilitation.',
    ],
    [
        'slug' => 'joint-pain', 'title' => 'Joint Pain', 'grp' => 'joints', 'icon' => 'bone',
        'excerpt' => 'Ongoing pain in the knees, hips, shoulders, hands or feet can limit everyday life. We look at the cause and the options to help you move better.',
        'hero_text' => 'Aching, stiff or swollen joints do not have to set the limits of your day. We look at what is going on and what can help.',
        'overview' => <<<'HTML'
<p>Joint pain is a broad term for pain in any joint, from the small joints of the hands and feet to the knees, hips and shoulders. It may affect one joint after an injury or several joints over time.</p>
<p>Wear and tear arthritis is a common cause, but tendons, ligaments, posture, previous injuries and inflammatory conditions can all play a part. Some causes need medical treatment, so a careful evaluation matters.</p>
HTML,
        'symptoms' => "Aching or pain in one or more joints\nStiffness after rest or first thing in the morning\nSwelling or warmth\nReduced range of motion\nClicking or grinding\nPain that limits walking, gripping or lifting",
        'causes' => <<<'HTML'
<ul>
<li>Osteoarthritis and age related joint changes</li>
<li>Old injuries that changed how a joint moves</li>
<li>Tendon and ligament problems around the joint</li>
<li>Overuse from work, hobbies or sport</li>
<li>Inflammatory conditions such as rheumatoid arthritis or gout, which need medical care</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>We look at which joints are affected, the pattern of pain and stiffness and your health history. If the pattern suggests an inflammatory condition, we will recommend the right medical testing or specialist.</p>
<p>For mechanical joint pain, your plan may include regenerative joint care, SoftWave or laser therapy, chiropractic care and exercise to support the joint.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Get prompt medical care for:</p>
<ul>
<li>A hot, red, swollen joint, especially with fever</li>
<li>Sudden severe joint pain</li>
<li>Several swollen joints with fatigue or a rash</li>
</ul>
HTML,
        'treatments' => 'regenerative-joint-care,knee-restoration,softwave-therapy,class-iv-laser-therapy',
        'faqs' => [
            ['Is joint pain just part of getting older?', 'Joint changes are common with age, but pain is not something you simply have to accept. Many people improve with the right care.'],
            ['Should I see a rheumatologist?', 'If your symptoms suggest an inflammatory condition, we will recommend the right testing or a referral.'],
            ['Does weight affect joint pain?', 'Extra body weight increases load on joints such as the knees and hips. For some people, weight management is a helpful part of the plan.'],
        ],
        'meta_title' => 'Joint Pain Treatment',
        'meta_description' => 'Care for joint pain in the knees, hips, shoulders, hands and feet, starting with an evaluation of the cause and nonsurgical options to help.',
    ],

    // ---------------- Weight & Metabolic ----------------
    [
        'slug' => 'difficulty-losing-weight', 'title' => 'Difficulty Losing Weight', 'grp' => 'metabolic', 'icon' => 'target',
        'excerpt' => 'When weight will not shift despite real effort, there is often more going on than willpower. A medical evaluation can help explain why.',
        'hero_text' => 'If you are doing the work and the scale is not moving, you are not alone. We look at the medical and lifestyle factors behind it.',
        'overview' => <<<'HTML'
<p>Many people come to us after years of trying different diets and exercise plans. They lose some weight, then it returns, or it simply will not move. That experience is frustrating, and it is not a sign of weak willpower.</p>
<p>Body weight is influenced by appetite signals, hormones, sleep, stress, medications, genetics and medical conditions, as well as food and activity. Understanding which of these is playing a part makes it easier to choose a plan that works for you.</p>
HTML,
        'symptoms' => "Weight that will not shift despite consistent effort\nWeight that returns after dieting\nStrong hunger or cravings\nWeight gain around the middle\nLow energy and poor sleep\nBlood sugar, blood pressure or cholesterol concerns",
        'causes' => <<<'HTML'
<ul>
<li>Changes in appetite hormones and metabolism after previous diets</li>
<li>Insulin resistance and blood sugar problems</li>
<li>Thyroid conditions and other hormone changes</li>
<li>Poor sleep and ongoing stress</li>
<li>Medications that can affect weight</li>
<li>Reduced muscle mass with age or inactivity</li>
</ul>
HTML,
        'approach' => <<<'HTML'
<p>Your evaluation covers your weight history, previous attempts, eating patterns, activity, sleep, medications and health conditions. Lab work may be recommended to look for underlying factors.</p>
<p>From there, your provider builds a plan. It may include our <a href="/treatments/weight-loss/">Medical Weight Loss</a> program with nutrition, activity and habit support, and prescription medication when it is appropriate and prescribed by a licensed provider. Progress is reviewed regularly, and we do not promise a set amount of weight loss.</p>
HTML,
        'when_to_seek' => <<<'HTML'
<p>Talk to a medical provider promptly about:</p>
<ul>
<li>Unexplained, rapid weight gain or weight loss</li>
<li>Weight gain with swelling in the legs or shortness of breath</li>
<li>Extreme fatigue, excessive thirst or frequent urination</li>
</ul>
HTML,
        'treatments' => 'weight-loss,metabolic-optimization,hormone-optimization',
        'faqs' => [
            ['Why can I not lose weight even though I eat well?', 'Hormones, sleep, stress, medications and medical conditions can all affect weight. A medical evaluation helps identify what may be getting in the way.'],
            ['Will I be prescribed a GLP-1 medication?', 'Not necessarily. Medication is considered only when it is medically appropriate, after an evaluation by a licensed provider.'],
            ['Do I need lab work?', 'Often, yes. Labs can show blood sugar, thyroid and other factors that may affect your weight.'],
        ],
        'meta_title' => 'Difficulty Losing Weight',
        'meta_description' => 'When weight will not shift despite real effort, a medical evaluation can look at hormones, blood sugar, sleep and other factors that may be involved.',
    ],
];
