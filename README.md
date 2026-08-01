# QuranlyHub.com — WordPress + Elementor Build Pack

Online Quran Academy at **quranlyhub.com**, delivered as a fully editable WordPress site
built with **Elementor (Pro)** on a lightweight Astra base, following the full build brief:
**SEO-first, mobile-first, lightweight**.

## What's inside

| Folder | Purpose |
|---|---|
| `00-SETUP/` | Install & configure WordPress, theme, plugins; lock global colors/fonts; configure SEO tools |
| `01-DESIGN-SYSTEM/` | The single source of truth for colors, typography, buttons, cards, spacing — every page inherits this |
| `02-HOME/` | Home page: build guide, ready-to-paste copy, custom CSS/JS, homepage SEO + schema |
| `03-ASSETS/` | Brand placeholder images (SVG), logo placeholder, arabesque divider — swap real licensed photos in before launch |
| `04-GLOBAL-TEMPLATES/` | Reusable recipes: header, footer, CTA band, testimonial slider, sticky mobile CTA, FAQ block |
| `05-CHECKLISTS/` | The per-page SEO checklist — apply to **every** page before it's considered done |

## Build order (incremental review)

1. **00-SETUP** — theme + plugins + global tokens (do once, site-wide)
2. **01-DESIGN-SYSTEM** — confirm the locked tokens with the client
3. **02-HOME** — Home page (done)
4. **03-COURSES** — Courses hub + 2 sample course pages, Noorani Qaida & Tajweed (done) → then the other 6 course pages using the same template
5. **04-PAGES** — About (5 pages) + Pricing + Free Trial + Blog (hub + template + 3 posts) + Contact + Privacy Policy (done)
6. **04-GLOBAL-TEMPLATES** — Theme Builder header/footer + reusable blocks
7. Next increments: remaining 6 course pages → audience landing pages (Kids/Adults/Beginners/Sisters) → country pages (UK/USA/Canada/Australia) → pre-launch site-wide audit

## The three non-negotiable rules (from the brief)

- **SEO is built with the page, never patched on later.** Every page passes `05-CHECKLISTS/per-page-seo-checklist.md` before moving to the next page.
- **Mobile-first.** Design and check every section on a phone screen before the desktop version is considered done.
- **Lightweight.** WebP images, lazy-load, CSS/native animation, minimal plugins. A pretty page that loads slowly on mobile data is a failed page.

## Golden palette (locked in `01-DESIGN-SYSTEM/`)

- White `#FFFFFF` (main canvas) · Deep blue `#123B57` (accent bands + body text) · Mid blue `#1B5A82` (hover) · Light gold `#F2C94C` (on blue) · Deep gold `#B8850F` (on white) · Medium gold `#D4A017` (buttons/icon circles/final CTA). **No black anywhere.**
