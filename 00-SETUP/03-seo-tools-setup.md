# 03 — SEO Tools Setup (Rank Math, once)

Rank Math handles: titles/metas, schema, sitemap, canonical, Open Graph + Twitter Card, robots.txt.

## 1. Activate Rank Math & run setup wizard

- Connect to a free Rank Math account if prompted.
- **Site type:** Local Business (Org) → choose **Organization**.
- During wizard: enable **Titles & Metas**, **XML Sitemap**, **Open Graph**, **Twitter Cards**, **Local SEO** (optional), **FAQ**.

## 2. Global settings (Rank Math → Dashboard → General Settings)

- **Links** → enable "redirect attachment pages", keep permalinks clean.
- **XML Sitemap** → enable. Leave post types: posts + pages only (exclude media).
- **robots.txt** → default is fine; make sure it does **not** block `/wp-admin`, `/wp-content`, or `?s=` search. Rank Math generates a safe one.
- **Search Console** → connect Google Search Console now (add your property). **Analytics** → connect Google Analytics 4 now.
- **Local SEO** → add business info (only if a registered physical address is used; otherwise skip the address and use a contact-only listing).

## 3. Organization info (used in every page's Organization schema)

Rank Math → General Settings → **Links/Knowledge Graph** (or Titles & Metas → Schema):

- Type: **Organization**
- Name: `QuranlyHub`
- Logo: upload the final logo (white/green version — must have transparent or brand background)
- URL: `https://quranlyhub.com/`
- Social: Facebook, Instagram, YouTube profiles (used for `sameAs`)

## 4. Homepage title & meta (Rank Math → Titles & Metas → Homepage)

- **Homepage title:** `Online Quran Academy | Learn Quran Online — QuranlyHub`  *(56 chars)*
- **Homepage description:** `QuranlyHub is a trusted online Quran academy offering 1-on-1 Quran, Tajweed and Hifz classes with certified tutors. Book your free trial today.` *(133 chars)*
- **Homepage logo** set, canonical default (self) is correct.

## 5. Global default titles/metas patterns

- Posts: `%title% | QuranlyHub`
- Pages: `%title% | QuranlyHub`
- Category/archive: `%category% — QuranlyHub Blog`
- **No `%sitename%` duplication** — keep one brand mention.

## 6. Schema strategy (Rank Math → Titles & Metas → Schema)

Enable by default for each content type:

| Schema | Where |
|---|---|
| Organization | Site-wide (from step 3) |
| WebSite + SearchAction | Site-wide |
| Course | Every course page (set in the course page editor) |
| FAQPage | Every page with an FAQ block (set in the page editor — Rank Math FAQ block, or paste the JSON-LD from `02-HOME/05-home-seo.md`) |
| Review / AggregateRating | Only on real, collected testimonials (Google review policy — never fabricate ratings) |
| BreadcrumbList | Site-wide |

## 7. Open Graph + Twitter Card (site-wide defaults)

- Default OG image: upload a 1200×630 brand image (blue background, gold logo + tagline "Learn Quran. Live Guidance.").
- Rank Math auto-inserts OG + Twitter tags on every page. Per-page images can override in each editor.

## 8. Post-launch (site-wide audit)

- Submit the XML sitemap URL in Search Console.
- Run Pagespeed Insights on Home, one course page, one blog post — fix LCP (hero image), CLS (fixed dimensions on all images), INP.
- Check "no duplicate titles/metas" via Rank Math → Dashboard → "Duplicate Titles" report.
