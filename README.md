# Our Medical Center 123 — Website + Dashboard

Website for **med.yoursamplesites.com** with an app-style dashboard at `/admin/`. Plain PHP 8 + MySQL (SQLite for local development), with no framework and no build step needed on the server, so it runs on standard SiteGround hosting.

> This is a starter kit. The engine (router, dashboard, media library, forms, SEO, installer, deploy workflow) is complete and working. The design, homepage and content still need the work described in the project brief (`BRIEF.md`, supplied with the kit).

## Local development

```bash
npm install                      # esbuild only
php app/cli/install.php --driver=sqlite --username=admin --email=you@example.com --password='choose-one'
php -S 127.0.0.1:8080 index.php  # site: http://127.0.0.1:8080  dashboard: /admin/
npm run build                    # rebuild assets/css/site.min.css and assets/js/site.min.js after CSS/JS edits
```

Reinstall from scratch with `--force` (SQLite only; it deletes the local database).

## Where things live

| Path | What it is |
|---|---|
| `index.php` | Front controller: redirects, `robots.txt`, `sitemap.xml`, `/api/form`, `/api/treatments`, page routing. Treatment pages are `/treatments/<slug>/`. |
| `app/views/` | Templates: `layout.php`, `pages/*.php`, `partials/*.php` |
| `assets/css/site.css`, `assets/js/site.js` | Design system and interactions (source; the `.min` files are built) |
| `assets/img/` | Logo (`logo.png`, `logo-light.png` for dark backgrounds), favicon, apple-touch icon, `mark-512.png` (logo mark only) |
| `assets/fonts/` | Self-hosted fonts (Montserrat and Inter added for the new design; Plus Jakarta Sans and Instrument Serif are the kit's current fonts) |
| `app/seed/` | Content loaded on install: the 7 treatments (`services.php`), core pages, redirects, GoHighLevel booking embed and chat widget (`seed.php`) |
| `app/migrations/` | One-time content updates that run on every deploy until applied (`php app/cli/migrate.php --list`) |
| `app/lib/Settings.php` | Default settings (brand, phone, colours, homepage copy, SEO); all editable in Dashboard → Settings |
| `app/lib/Content.php` | Treatment categories, patient-form PDFs, videos, location helpers |
| `admin/` | Dashboard single-page app and its JSON API |
| `install/` | Web installer (creates tables, loads content, creates the admin account, then locks itself) |
| `.github/workflows/deploy.yml` | "Deploy to SiteGround" GitHub Action (rsync over SSH) |

## Install on SiteGround

1. **Database:** Site Tools → Site → MySQL → create a database and a user with all privileges on it.
2. **Deploy the files:** run the *Deploy to SiteGround* workflow with **first_deploy** ticked (see below for the secrets).
3. Open `https://med.yoursamplesites.com/install/`, choose MySQL (host `localhost`), create the admin account, keep **Hide the site from search engines** ON, and click **Install website**.
4. Sign in at `/admin/`.

## Deploying updates

GitHub → Actions → **Deploy to SiteGround** → Run workflow. It PHP-lints, builds the minified assets, rsyncs changed files over SSH (port 18765) and runs pending migrations. It never uploads or deletes `app/config.php`, the database, logs, sessions or uploaded media.

Repository secrets (Settings → Secrets and variables → Actions): `SSH_HOST`, `SSH_USER`, `SSH_PRIVATE_KEY`, `SSH_PASSPHRASE` (only if the key has one) and optionally `SSH_DIR` (default `www/med.yoursamplesites.com/public_html/`). Create the key in Site Tools → Devs → SSH Keys Manager.

## Dashboard

Treatments, pages, providers, testimonials, FAQs, locations, media library (drag and drop, automatic WebP and thumbnails, auto-assign by file name), form inbox, users and roles, settings (brand, colours, homepage, GoHighLevel embeds, chat widget, analytics, SEO), redirects and an activity log. Ctrl/Cmd + K opens search.

Providers, locations, testimonials and homepage FAQs start empty and their sections stay hidden until real information is added.
