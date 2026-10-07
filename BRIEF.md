# Our Medical Center 123 — Website Build Brief

**Site:** https://med.yoursamplesites.com (SiteGround)  
**Repository:** the new GitHub repository attached to this session  
**Starter kit:** `medcenter-starter-kit.zip` (attached with this brief)

This brief is written for Claude Code. Read all of it before you start, and follow it over your own defaults. When something here conflicts with the kit's code, this brief wins.

---

## 1. The task

Build a modern, fast medical-practice website with an app-style admin dashboard for **Our Medical Center 123**, a sample (demo) practice site. Deploy it to `med.yoursamplesites.com` on SiteGround over SSH from GitHub Actions.

You are **not** starting from zero. The attached starter kit is a complete, working PHP website engine:

- public site and router
- admin dashboard (single-page app)
- media library
- forms and form inbox
- SEO and schema
- installer
- migrations
- deploy workflow

It already contains:

- the brand name, phone number, colours and logo
- five of the seven treatment pages with finished content
- the GoHighLevel booking form and the chat widget

Your job:

1. **Commit the kit** as the repository's starting point.
2. **Make the design clearly its own** (section 5). It should be similar in quality and feel to the kit, but not the same.
3. **Write the two missing treatment pages**, IV Therapy and Weight Loss (section 8).
4. **Rework the homepage** (section 7.2).
5. **Test** locally and against the acceptance checklist (section 12).
6. **Deploy** and help the user finish the one-time install (section 11).

Work in this order. Report progress in short messages as you go.

---

## 2. What you have been given

| Item | Where |
|---|---|
| Starter kit (code, logo, fonts, seed content) | `medcenter-starter-kit.zip`. Unzip it into the repository root. It holds a `medcenter/` folder; move that folder's contents to the root, including the hidden files `.github/`, `.htaccess`, `.user.ini` and `.gitignore`. |
| This brief | `BRIEF.md` (also inside the kit) |
| Logo | `assets/img/logo.png` (navy, transparent background), `logo-light.png` (white, for dark backgrounds), `mark-512.png` (the cross symbol only), `favicon.png`, `apple-touch-icon.png` |
| GoHighLevel booking form | Section 9.1. Already saved by the installer. |
| GoHighLevel chat widget | Section 9.2. Already saved by the installer. |
| Treatment content | `app/seed/services.php` |

Read `README.md` in the kit for the code layout, local development commands and the deploy workflow.

---

## 3. Rules you must not break

### 3.1 No reference to any other practice or website

This site must not mention, link to or resemble the branding of any other clinic. The kit was made from another project and has been cleaned. Keep it clean:

- Do not add other practice names, doctors, addresses, phone numbers, patient reviews, videos, PDFs or URLs.
- Do not look up or copy content from other clinic websites.
- Before every commit, run the check in section 12.1. It must return nothing.

### 3.2 Never invent facts about the practice

The practice has supplied only these facts:

- its name
- its phone number
- its logo
- its colours
- its list of treatments

Everything else is unknown. Do **not** make up any of the following:

- statistics ("10,000 patients", "98% satisfaction") or years in practice
- credentials ("board-certified"), awards or affiliations
- team members, provider names or bios
- testimonials, reviews, star ratings or review counts
- addresses, office hours or email addresses
- insurance acceptance (including Medicare), prices, discounts or payment plans
- promises such as "same-day appointments", "walk-ins welcome" or "no out-of-pocket cost"

The kit already hides sections with no data:

- providers
- locations
- office hours
- testimonials
- homepage FAQs
- statistics
- patient-form PDFs

Keep them hidden until the user adds real information in the dashboard.

### 3.3 Medical copy

- **Outcomes:** never guarantee them. Use "may help", "designed to" and "many patients", and avoid "cures", "eliminates" and "guaranteed".
- **Eligibility:** say that it is determined after an evaluation by a provider.
- **No fake proof:** no before-and-after claims, specific weight-loss numbers or timelines presented as typical.
- **Regulatory claims:** do not claim FDA approval for anything unless it is a plain fact about a named product, and keep the Medical Disclaimer page.

### 3.4 Keep the site out of search engines

Leave **Dashboard → Settings → SEO → Hide site from search engines** ON. This is the default, and the installer keeps it ON. Two reasons:

- It is a sample site.
- Several treatment pages share copy with another live website, so indexing would create duplicate content.

### 3.5 Security and secrets

- Never commit credentials, keys or `app/config.php`. The kit's `.gitignore` already excludes the config, database, logs, sessions and uploads.
- SSH keys and passwords live only in GitHub repository secrets.
- Do not try to get around SiteGround's bot protection ("sgcaptcha"). If you cannot load the live site, verify through the deploy logs and ask the user to check pages in their browser.

### 3.6 Git

- Commit with clear messages and push to the branch this session tells you to use.
- Do not open pull requests unless the user asks.
- Do not rewrite history on shared branches.

---

## 4. Brand

| | |
|---|---|
| Name | **Our Medical Center 123**. Write it exactly like this, everywhere. |
| Phone (call and text) | **(843) 874-8185**. Link it as `tel:+18438748185` and `sms:+18438748185`. |
| Primary colour | **#07334c** (deep navy blue) |
| Accent colour | **#37a9e7** (sky blue) |
| Logo | `assets/img/logo.png`. Use `logo-light.png` on dark backgrounds. The logo has a thin geometric "OUR MEDICAL" over a heavy "CENTER 123", and a navy cross with grey ribbon arms. |
| Fonts | **Montserrat** for headings (weights 600–800) and **Inter** for body text. Both are self-hosted variable fonts in `assets/fonts/` (`montserrat-*.woff2`, `inter-*.woff2`), licensed under the SIL OFL. |
| Timezone | `America/New_York`, set in `app/bootstrap.php` (843 is a South Carolina area code) |

### 4.1 Colour accessibility

The new colours change how buttons and links must be styled. Follow these rules exactly:

- **White text on sky blue #37a9e7 fails** WCAG AA (2.6:1). On sky-blue buttons and badges, use **navy #07334c text** (5.0:1).
- For a sky-blue button with white text, use a darker shade such as **#1676b0** (4.9:1).
- **Sky-blue text on white also fails** (2.6:1). Use it only for large display text (24px or larger, or 19px bold) or for decorative elements.
- For links and small accent text on white, use **#1676b0** or navy.
- White on navy #07334c is 13.2:1, so it is fine everywhere.
- Define derived shades as CSS variables, for example:
  - `--accent-ink: #1676b0`
  - `--accent-soft: #e8f5fd`
  - `--primary-deep: #052536`

### 4.2 Voice

Calm, clear and reassuring. Short sentences, plain English and no hype. Address the reader as "you", and say "our team" rather than naming people.

---

## 5. Design direction: similar, but not the same

The kit's current design was built for another practice. Keep its **quality, structure and app-like polish**: smooth reveal animations, sticky header, mobile slide-out menu, sticky mobile action bar and card-based layouts. Then make it **visibly different**, so nobody would think the two sites came from the same template.

Make at least these changes:

1. **Typography.**
   - Switch to Montserrat and Inter.
   - Remove the italic serif accent words (the kit uses Instrument Serif in `<em>` inside headings). Highlight key words with the accent colour or an underline or marker effect instead.
   - Delete the unused Plus Jakarta Sans and Instrument Serif files and their `@font-face` and preload lines (`app/views/layout.php`, `admin/index.php`).
2. **Colour system.**
   - Rebuild the palette around #07334c and #37a9e7 following section 4.1.
   - Check every component for leftover hard-coded colours from the old palette (reds, pinks, oranges) and replace them.
3. **Hero.**
   - Use a new composition. Replace the animated spine illustration with something that fits a broader injury, spine and wellness practice, for example:
     - an abstract cross or "plus" motif taken from the logo mark, or
     - a layered card collage of the treatment categories.
   - Use a layout that is not the kit's text-left, illustration-right split. Options include:
     - centred text with cards below, or
     - a full-width background with a booking card.
4. **Shapes.**
   - Change the corner radius scale (for example, tighter 10–14px radii instead of the kit's large rounded cards).
   - Change the button style (for example, a squarer pill or a solid button with an arrow chip).
   - Give the section eyebrow labels a new style (for example, a small badge instead of a line plus text).
5. **Header and footer.**
   - Restyle both, for example:
     - a transparent header over the hero that turns solid on scroll
     - a lighter footer, or a navy footer with a large logo-mark watermark
   - Update the dashboard theme in `admin/assets/admin.css` to the new palette and fonts too.
6. **Section order and rhythm.** Follow the homepage plan in section 7.2, which differs from the kit's.
7. **Treatment cards and placeholder art.**
   - Restyle the treatment cards.
   - Restyle the placeholder art (`app/views/partials/art.php` and the `.art` styles), which shows until real photos are uploaded.

Keep:

- responsive behaviour at 360px, 768px, 1024px and 1440px, with no horizontal scrolling
- visible focus states, and `prefers-reduced-motion` support
- the content-managed approach: text stays editable in the dashboard where it is now

---

## 6. Site map and URLs

| URL | Page | Template |
|---|---|---|
| `/` | Home | `pages/home.php` |
| `/treatments/` | All treatments | `pages/treatments.php` |
| `/treatments/sports-injuries-and-physical-fitness/` | Sports Injuries and Physical Fitness | `pages/service.php` |
| `/treatments/car-accident-injury-treatment/` | Car Accident Injury Treatment | `pages/service.php` |
| `/treatments/chiropractic-care/` | Chiropractic Care | `pages/service.php` |
| `/treatments/spinal-decompression-therapy/` | Spinal Decompression Therapy | `pages/service.php` |
| `/treatments/regenerative-medicine/` | Regenerative Medicine | `pages/service.php` |
| `/treatments/iv-therapy/` | IV Therapy (draft in the kit) | `pages/service.php` |
| `/treatments/weight-loss/` | Medical Weight Loss (draft in the kit) | `pages/service.php` |
| `/book-appointment/` | Book an Appointment (GoHighLevel booking form) | `pages/appointment.php` |
| `/contact-us/` | Contact | `pages/contact.php` |
| `/privacy-policy/`, `/terms-and-conditions/`, `/medical-disclaimer/` | Legal pages | `pages/legal.php` |
| `/sitemap/`, `/sitemap.xml`, `/robots.txt` | Sitemaps and robots file | |
| `/admin/` | Dashboard | |

Treatment categories (`Content::CATEGORIES` in `app/lib/Content.php`):

- **Injury & Sports Care:** Sports Injuries, Car Accident
- **Spine & Chiropractic:** Chiropractic Care, Spinal Decompression
- **Regenerative & Wellness:** Regenerative Medicine, IV Therapy, Weight Loss

The kit does **not** have About, Providers, Locations, Testimonials or Billing pages. Do not add them unless the user supplies real content for them. The data types for providers, locations and testimonials still exist in the dashboard for later.

---

## 7. Page requirements

### 7.1 Global

- **Header:**
  - logo
  - Treatments menu: a dropdown by category with icons, and treatments in hover flyouts
  - Book Appointment and Contact links
  - phone number, plus a Book Appointment button
- **Mobile:** slide-out menu, and a sticky bottom bar with Call, Text and Book.
- **Chat widget:** the GoHighLevel bubble appears bottom-right on every page. On mobile, make sure it does not cover the sticky bottom bar or the cookie notice. Test at 390px wide, and add bottom offset or spacing as needed.
- **Footer:**
  - logo and short description
  - treatment categories
  - Book Appointment and Contact links
  - phone number
  - legal links and copyright
- Every page must include a clear way to book and a clickable phone number.

### 7.2 Home

Build these sections in this order:

1. **Hero.**
   - Headline (Settings → Homepage), short supporting copy, a "Book an Appointment" button, an "Explore Treatments" button, "Or call (843) 874-8185" and up to three trust points.
   - Use only claims from section 3.2. The kit's defaults are "Non-Surgical Treatment Options", "Personalized Care Plans" and "Online Booking".
2. **Treatments.**
   - All seven treatments, grouped or filterable by the three categories, with an icon, a one-line excerpt and a link.
   - With only seven, showing them all is fine. The kit's AJAX "Show More" is optional.
3. **Wellness spotlight (new).** A two-card feature for IV Therapy and Medical Weight Loss, each with two or three plain-language points and a link.
4. **Why choose us.** Four points with no invented claims. The kit's current four are acceptable; rewrite them in the new voice.
5. **How it works.** Book, first visit and evaluation, personalized plan, ongoing support.
6. **Injury care split.** "Hurt in an accident or playing sports?" with links to Car Accident, Sports Injuries and Spinal Decompression.
7. **Booking section.**
   - Left: heading, short text, and call and text rows.
   - Right: the GoHighLevel booking form in a card (section 9.1).
   - Office and hours panels appear only once a location exists in the dashboard.
8. **FAQ.** Shown only if published homepage FAQs exist. You may draft four or five general questions that make no practice-specific claims, as **drafts**. Examples:
   - "Do I need a referral?" with the answer "Call our team to check what applies to you."
   - "What should I bring to my first visit?"
   - "How do I book?"
9. **Closing call to action.**

Remove the kit's "Where does it hurt?" body map from the homepage. With IV therapy and weight loss in the mix it no longer fits. You may delete the partial or leave it unused.

### 7.3 Treatments index (`/treatments/`)

Intro, a category filter (`?category=` already works) and all treatment cards. End with the call to action.

### 7.4 Treatment page template

These sections already exist; restyle them:

- hero with excerpt, breadcrumb and book and call buttons
- What is it?
- Conditions treated
- How it works
- Benefits
- What to expect
- FAQs, with FAQ schema
- Related treatments
- sidebar with a booking card and the other treatments in the category

Each section stays hidden when its field is empty.

### 7.5 Book an Appointment (`/book-appointment/`)

The GoHighLevel booking form is the main element. Beside it: Call and Text cards. The patient-forms section appears only once PDFs are uploaded (see `Content::FORM_GROUPS`).

### 7.6 Contact (`/contact-us/`)

- Phone (call and text) and a "Book online" link.
- The kit's built-in contact form:
  - Submissions go to Dashboard → Form Inbox.
  - They are emailed to the notification address.
  - They are optionally forwarded to a GoHighLevel webhook (Settings → Forms & Integrations).
- Keep the form fields minimal: name, phone, email, message and consent. **Do not collect date of birth or medical details.**

### 7.7 Legal pages, 404 page and sitemap

Legal pages are seeded and flagged "needs review". Restyle them only. Give the 404 page a search-free set of helpful links and the phone number.

---

## 8. Treatment content

`app/seed/services.php` holds every treatment in the format the dashboard uses:

- `excerpt` and `hero_text`
- `what_is`, `how_it_works` and `what_to_expect` (HTML)
- `conditions` and `benefits` (one item per line)
- `faqs` (question and answer pairs)
- `related`, `body_areas` and `meta_title` / `meta_description`

All records are flagged "needs review".

### 8.1 Already written (do not rewrite; edit only for the new voice or obvious errors)

- **Sports Injuries and Physical Fitness** comes from the practice's own text. These cleanups were already made:
  - Removed the "question center" boilerplate.
  - Removed a pasted paragraph about disc injuries and "board-certified" providers.
  - Removed a motto and an abbreviation that belonged to another practice.
  - Removed the "Why choose [other practice]" heading.
- **Car Accident Injury Treatment, Chiropractic Care, Spinal Decompression Therapy and Regenerative Medicine** were copied from another site with its branding, locations and insurance promises removed.

### 8.2 To write: IV Therapy and Medical Weight Loss

Both are seeded as **drafts** with placeholder text. Write full content in the same structure as the other five. Publish them by setting `status` to published, and keep `needs_review = 1` so the practice approves the clinical wording. If the user gives you source text, use it instead.

**IV Therapy** (`/treatments/iv-therapy/`, category wellness, icon `droplet`). Cover:

- What it is: fluids, vitamins and minerals delivered through a vein by trained clinical staff.
- Who it may suit, for example:
  - hydration support
  - recovery after exercise or illness
  - general wellness
- Evaluation and screening: health history, current medications and vital signs. The provider decides whether IV therapy is appropriate.
- What a visit is like: time in the chair (describe it as "typically" and "about"), comfort, and what you may feel afterwards.
- Safety:
  - possible side effects such as bruising or soreness at the needle site
  - who should not have it, determined at screening
  - IV therapy is not a substitute for medical treatment of a disease
- Do **not** list specific drip menus, ingredients, prices or "boosts" unless the practice supplies them. Say that formulations are chosen by the provider.
- Write three to five FAQs.

**Medical Weight Loss** (`/treatments/weight-loss/`, category wellness, icon `target`, menu label "Medical Weight Loss"). Cover:

- What a medically supervised program is: evaluation, health history, possibly lab work, a personalized plan, and regular check-ins.
- What the plan can include: nutrition guidance, activity planning and behaviour support. When appropriate and prescribed by a licensed provider, it can include prescription medication.
- If you mention GLP-1 medications such as semaglutide or tirzepatide:
  - Say that eligibility is determined by a provider.
  - Say that side effects are discussed before starting.
  - Do **not** make claims about compounded versions, prices or specific results.
- Who it may suit, and who may not, determined at evaluation.
- Do not use numbers such as "lose 20 lbs in a month", before-and-after language or guarantees.
- Write three to five FAQs.

### 8.3 Getting content onto the live site

The seed runs **once**, when the installer runs:

- **Before the user installs on the server:** editing `app/seed/` is enough.
- **After the install:** deliver content changes as a **migration** in `app/migrations/`.
  - Each migration is a PHP file returning a closure; look at how `app/cli/migrate.php` runs them.
  - The deploy workflow runs pending migrations automatically.
  - Never edit the live database by hand.

---

## 9. Integrations (already set up by the installer)

### 9.1 GoHighLevel booking form

It is stored in the setting `ghl_appointment_embed`. When this setting has a value, it replaces the kit's built-in appointment form on the homepage booking section and on `/book-appointment/`:

```html
<iframe
    src="https://api.leadconnectorhq.com/widget/booking/H2ssEyBKOquqdXQjSOcB"
    id="H2ssEyBKOquqdXQjSOcB_1777412903815"
    title="Book Your Consultation"
    scrolling="yes"
    allow="payment"
    style="width:100%;height:1200px;min-height:1200px;border:none;overflow:auto;">
</iframe>
```

- Keep the iframe's `src`, `id`, `title`, `allow` and inline height as given.
- The container styling lives in `.form-embed` in `assets/css/site.css`:
  - loading placeholder
  - rounded card
  - full width
  - hides GoHighLevel's stray `<br>`
  - JavaScript adds `is-loaded` when the iframe loads
- Restyle the container to the new design so the card around the form matches the site.
- **The inside of the form cannot be styled from this site.** It is a cross-origin iframe. Its colours and fonts must be set in GoHighLevel (Calendars → the calendar → widget customization). Tell the user the values to use: primary #07334c, accent #37a9e7, and font Montserrat or Inter if offered.
- GoHighLevel's servers may be blocked in your sandbox. For local tests, stub the iframe with a placeholder page (for example, a Playwright `route`) and check the layout. Do not remove the embed.

### 9.2 Chat widget

It is stored in the setting `chat_widget` and printed before `</body>` on every public page:

```html
<script src="https://widgets.leadconnectorhq.com/loader.js" data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" data-widget-id="69f118eb421593b058fc9406"></script>
```

Do not load it in the dashboard. See section 7.1 for the mobile overlap check.

### 9.3 Other settings

The following are empty until the user adds them; leave them empty:

- Google Analytics ID
- extra head and body scripts
- the GoHighLevel webhook for built-in forms
- social links
- notification email

The installer sets the notification email to the admin email.

---

## 10. Dashboard

Keep the dashboard as it is, apart from the new theme (section 5). Main areas:

- **Content:** treatments, pages, providers, testimonials, FAQs, locations
- **Media library:**
  - Upload by drag and drop, with automatic WebP versions and thumbnails.
  - **Auto-assign** matches images to content by file name. For example, `chiropractic-care.jpg` goes to that treatment and `home-hero.jpg` to the homepage hero.
- **Admin:** form inbox, users and roles, settings, redirects, activity log
- **Settings:** brand, colours, homepage text, integrations, SEO

If you add new settings, define them in `Settings::defaults()` and `Resources::settings()`.

---

## 11. Deployment and setup

### 11.1 What the user does once (Claude cannot do these)

1. **SSH key.** In SiteGround Site Tools for the site → Devs → SSH Keys Manager:
   - Create a key, with or without a passphrase.
   - Copy the **private key**.
   - Note the **hostname** and **username** shown under SSH credentials. The port is **18765**.
2. **GitHub secrets.** In the new repository → Settings → Secrets and variables → Actions, add:

   | Secret | Value |
   |---|---|
   | `SSH_HOST` | the hostname from step 1 |
   | `SSH_USER` | the username from step 1 |
   | `SSH_PRIVATE_KEY` | the full private key, including the BEGIN and END lines |
   | `SSH_PASSPHRASE` | only if the key has a passphrase |
   | `SSH_DIR` | optional; the default is `www/med.yoursamplesites.com/public_html/`. Set it only if the folder path differs. |

3. **Database.** In Site Tools → Site → MySQL, create a database and a user, and give the user all privileges on the database. Keep the database name, username and password for the installer. **Do not paste them into chat**; they are only typed into the installer.
4. **HTTPS.** In Site Tools → Security → SSL Manager, make sure the subdomain has an SSL certificate, and turn on HTTPS Enforce.

### 11.2 What you do

1. Commit the kit, then do the work in sections 5–8. Test locally with SQLite:

   ```bash
   php app/cli/install.php --driver=sqlite --username=admin --email=you@example.com --password='...'
   php -S 127.0.0.1:8080 index.php
   ```

   Rebuild with `npm run build` after any CSS or JS change, and commit the `.min` files.
2. Ask the user to confirm that the secrets from section 11.1 are in place.
3. **First deploy:**
   - Run the "Deploy to SiteGround" workflow (`.github/workflows/deploy.yml`, manual trigger) with **first_deploy** ticked.
   - The first-deploy check stops if the folder contains a different app's `index.php`. If it does, ask the user to empty the folder, after making a backup.
   - SiteGround's default `index.html` placeholder can stay; `index.php` takes priority.
4. Ask the user to open `https://med.yoursamplesites.com/install/` and:
   - choose MySQL with host `localhost` and enter the database details
   - create their admin account
   - keep **Hide the site from search engines** ON
   - click **Install website**
5. **Later deploys:** run the workflow normally, with **first_deploy** off. Read the job log and confirm:
   - the rsync step lists the expected files
   - "Run content migrations" shows your migrations as done
6. You may not be able to load the live site because of SiteGround's bot protection. Ask the user to check the homepage, a treatment page, `/book-appointment/` and `/admin/`.

---

## 12. Acceptance checklist

### 12.1 No foreign references

This command, run from the repository root, must print nothing:

```bash
grep -rnIiE "all ?star|allstar|sg-host|gilbert|tempe|arizona|844-844|medicare|old site|wordpress|wp-content|same-day|48 hours" \
  --exclude-dir=node_modules --exclude-dir=.git --exclude=BRIEF.md .
```

If you find any other practice's name, person or place in the code or content, remove it and add it to this pattern.

### 12.2 Functional

- [ ] Every page in section 6 returns 200, and IV Therapy and Weight Loss are published.
- [ ] A crawl of the site's internal links finds no 404s.
- [ ] No PHP warnings or errors in the server log.
- [ ] No JavaScript console errors.
- [ ] The booking form card shows on the homepage and `/book-appointment/`, with the loading placeholder until the iframe loads.
- [ ] The chat widget script is on public pages and not on `/admin/`. On a 390px-wide screen it does not cover the mobile bar.
- [ ] Every phone link dials `+18438748185`.
- [ ] The contact form submits and the submission appears in the dashboard Form Inbox.
- [ ] Dashboard:
  - [ ] login works
  - [ ] editing a treatment shows on the site
  - [ ] uploading an image works
  - [ ] Auto-assign by file name works
- [ ] `robots.txt` disallows everything while "Hide from search engines" is ON, and pages carry `noindex`.
- [ ] `/sitemap.xml` lists only published pages.

### 12.3 Design and quality

- [ ] The design is visibly different from the kit in each area listed in section 5.
- [ ] Colour contrast meets WCAG AA per section 4.1.
- [ ] Keyboard navigation works, including dropdowns, the mobile menu and FAQ accordions.
- [ ] Focus states are visible.
- [ ] `prefers-reduced-motion` is respected.
- [ ] No horizontal scrolling at 360px, 390px, 768px, 1024px or 1440px.
- [ ] Lighthouse mobile scores, as a target: Performance 85 or higher; Accessibility, Best Practices and SEO 95 or higher, apart from SEO's noindex warning, which is expected.
- [ ] Review screenshots of the homepage, a treatment page and the booking page at desktop and mobile widths before each deploy.

### 12.4 Content

- [ ] No invented facts (section 3.2).
- [ ] The IV Therapy and Weight Loss copy follows sections 3.3 and 8.2.
- [ ] The practice name, phone number and colours are exactly as in section 4.

---

## 13. Open items for the user

Ask the user about these once, early, as a short list. Do not block on them; build with the relevant sections hidden.

1. Office **address**, **hours** and public **email**. Without them, the Locations, hours and email elements stay hidden.
2. **Providers** to feature (names, titles, photos, short bios).
3. **Testimonials** they are allowed to publish.
4. For IV Therapy and Weight Loss: which IV options and which weight-loss medications, if any, they want named.
5. **Photos:**
   - hero
   - homepage section images
   - one per treatment, named after the treatment's slug (for example, `iv-therapy.jpg`) so Auto-assign can match them
6. Whether the Contact page should use the built-in form or a GoHighLevel form, and the GoHighLevel webhook URL if they want built-in form leads sent to GoHighLevel.
7. Social media links and a Google Analytics ID, if any.

---

## 14. When you finish

Give the user a short report covering:

- what changed
- what is live
- what still needs their input (section 13)
- the GoHighLevel form colours to set (section 9.1)
- any checklist items that could not be verified, and why
