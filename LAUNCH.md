# LAUNCH — QuranlyHub Go-Live Checklist

Tick each box as you complete it. Everything below maps to a doc already in this repo. Work top to bottom; do not skip ahead (SEO is built with each page, never after).

**Where to find everything:** each step lists the file(s) to open next to it.

---

## PHASE 1 — Hosting & Domain (approx 1 hour)

- [ ] Buy/confirm hosting (SiteGround, Hostinger, WP Engine — shared plan is fine)
- [ ] Point **quranlyhub.com** DNS to the host (host gives you the NS or A-record)
- [ ] Install WordPress (most hosts have 1-click install)
- [ ] Enable **SSL/HTTPS** (free Let's Encrypt in host dashboard)
- [ ] Set **Permalinks → Post name**
- [ ] Set timezone (Europe/London or primary audience)

→ Full guide: `00-SETUP/01-theme-plugins-install.md`

## PHASE 2 — Theme & Plugins (approx 30 min)

- [ ] Astra (free) — install + activate
- [ ] Elementor (free) + Elementor **Pro** — activate license
- [ ] Rank Math SEO (free)
- [ ] WP Rocket (or one comparable cache)
- [ ] ShortPixel or Imagify (WebP + compression)
- [ ] **Do NOT** add slider/animation/extra plugins — the carousel is native

→ Full guide: `00-SETUP/01-theme-plugins-install.md`

## PHASE 3 — Design System (one-time, 20 min)

- [ ] Global Colors locked (8 slots → exact hex values)
- [ ] Global Fonts locked (Cormorant Garamond / Inter / Amiri)
- [ ] Global Buttons (gold pill, hover)
- [ ] Typography scale set

→ `00-SETUP/02-global-colors-and-fonts.md` + `01-DESIGN-SYSTEM/design-system.md`

## PHASE 4 — SEO Tools (30 min)

- [ ] Rank Math setup wizard → Organization
- [ ] XML sitemap ON, robots.txt safe
- [ ] Organization info: name, logo, URL, social links
- [ ] Homepage title + meta (already written in `02-HOME/05-home-seo.md`)
- [ ] Connect Google Search Console + Google Analytics 4

→ `00-SETUP/03-seo-tools-setup.md`

## PHASE 5 — Global Templates (Theme Builder, 1–2 hours)

- [ ] Header (logo / nav / WhatsApp + Book Free Trial / sticky / mobile CTA)
- [ ] Footer (4 columns, blue)
- [ ] Save the CTA band + testimonial carousel as reusable templates

→ `04-GLOBAL-TEMPLATES/reusable-sections.md`

## PHASE 6 — Pages (build in this order)

Each page: build guide (with copy) → apply its SEO file → tick `05-CHECKLISTS/per-page-seo-checklist.md` → check on a real phone.

- [ ] Home → `02-HOME/01-home-build-guide.md` (+ CSS `03-home-custom-css.css`, JS `04-home-countup.js`)
- [ ] Courses hub → `03-COURSES/01-courses-hub.md`
- [ ] Noorani Qaida course → `03-COURSES/03-noorani-qaida.md`
- [ ] Tajweed course → `03-COURSES/05-tajweed.md`
- [ ] About Us → `04-PAGES/about/01-about-us.md`
- [ ] How It Works → `04-PAGES/about/03-how-it-works.md`
- [ ] Teaching Methodology → `04-PAGES/about/05-teaching-methodology.md`
- [ ] Quality Assurance → `04-PAGES/about/07-quality-assurance.md`
- [ ] Terms & Conditions → `04-PAGES/about/09-terms-and-conditions.md`
- [ ] Pricing → `04-PAGES/pricing/01-pricing.md`
- [ ] Free Trial → `04-PAGES/free-trial/01-free-trial.md` — **test the form** (email + WhatsApp webhook)
- [ ] Blog hub → `04-PAGES/blog/01-blog-hub.md`
- [ ] Single-post template → `04-PAGES/blog/03-blog-post-template.md`
- [ ] Publish the 3 sample posts → `04-PAGES/blog/posts/`
- [ ] Contact → `04-PAGES/contact/01-contact.md` — **test the form**
- [ ] Privacy Policy → `04-PAGES/privacy-policy/01-privacy-policy.md`

Remaining pages to build after launch (same templates): Nazra, Hifz, Quran Translation, Tafseer, Basic Islamic Studies, Arabic courses; audience pages (Kids/Adults/Beginners/Sisters); country pages (UK/USA/Canada/Australia).

## PHASE 7 — Assets & Content Placeholders (before going live)

- [ ] Replace `03-ASSETS/logo-placeholder.svg` with the **real logo**
- [ ] Replace hero/tutor placeholders with **licensed real photos** (WebP)
- [ ] Real phone/WhatsApp number + email in contact/footer/forms
- [ ] Real business address or remove
- [ ] Verify `salam@quranlyhub.com` receives form emails
- [ ] Set up WhatsApp notification webhook for both forms

→ `03-ASSETS/assets-README.md`

## PHASE 8 — Legal (before going live)

- [ ] Solicitor/GDPR review of Terms & Conditions and Privacy Policy
- [ ] Update dates in both documents

## PHASE 9 — Site-wide Pre-Launch Audit (final day)

- [ ] XML sitemap submitted to Google Search Console
- [ ] No duplicate titles/metas (Rank Math report) — currently all 14 unique
- [ ] SSL on every page, no mixed content
- [ ] 404 page styled on-brand
- [ ] PageSpeed Insights: Home, one course page, one blog post (mobile target: green LCP/CLS/INP)
- [ ] Google Analytics receiving traffic (test visit)
- [ ] Search Console fetching the homepage
- [ ] Open every page on a real phone one final time

→ `05-CHECKLISTS/per-page-seo-checklist.md` (pre-launch section)

---

## Done = all boxes ticked above.
Then announce on socials, submit sitemap, and start the weekly blog rhythm to feed the Home freshness signal.
