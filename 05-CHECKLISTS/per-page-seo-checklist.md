# Per-Page SEO Checklist

Apply to **every** page before it is considered done — Home first, then every course, landing, blog, and static page. No page moves forward without every box ticked.

## Before writing any content
- [ ] One target keyword/phrase decided (never the same exact keyword as another page — check the keyword map in `00-SETUP/03-seo-tools-setup.md`)

## Target keyword placement — all 8 (checked per page in `keyword-placement-audit.md`)
- [ ] 1. **URL** — slug contains the exact keyword (`online quran classes` → `/online-quran-classes/`). Home is the only exception (`/` has no slug).
- [ ] 2. **Title** — SEO title contains the keyword (near the start), ≤ 60 chars
- [ ] 3. **Meta description** — contains the keyword + a call to action, ≤ 155 chars
- [ ] 4. **H1** — contains the keyword
- [ ] 5. **H2** — at least one H2 contains the keyword
- [ ] 6. **First paragraph** — the page's first paragraph **starts with** the keyword
- [ ] 7. **First image filename** — the first image in the page content is named after the keyword (`online-quran-classes.webp`)
- [ ] 8. **First image alt text** — contains the keyword (a plain description that reads naturally, not a stuffed list)

## While building the page
- [ ] SEO title written — unique, under ~60 chars, target keyword near the start
- [ ] Meta description written — unique, under ~155 chars, includes a call to action
- [ ] Exactly **one** H1 on the page, containing the target keyword naturally
- [ ] Logical H2/H3 hierarchy — no skipped heading levels
- [ ] Target keyword + close variants used naturally in the **first 100 words**
- [ ] Clean, short, keyword-based URL slug (e.g. `/online-quran-classes-for-kids/`, not `/page-id-123/`)
- [ ] Every image has descriptive alt text + is WebP, compressed, lazy-loaded, with fixed dimensions (no CLS)
- [ ] At least 2–3 internal links to related pages (course ↔ blog ↔ hub pages)
- [ ] Schema added: Course (course pages) · FAQPage (wherever an FAQ block exists) · Organization (sitewide) · Review/AggregateRating (real testimonials only)
- [ ] Open Graph + Twitter Card meta set (title, description, image)
- [ ] Canonical tag set correctly (critical on country/audience variant pages so they don't compete)

## After building
- [ ] Mobile view checked on a real phone: no layout shift, readable font sizes (≥16px body), 44px touch targets, no horizontal scroll
- [ ] Page speed checked: images lazy-loaded, no render-blocking scripts, LCP element preloaded
- [ ] FAQ block (if page qualifies: course/landing/blog) with FAQPage schema
- [ ] No duplicate title/meta vs any other page (check Rank Math's Duplicate Titles report)

## Pre-launch site-wide audit (once, near go-live)
- [ ] XML sitemap generated and submitted to Google Search Console
- [ ] robots.txt correct — not blocking important pages
- [ ] No duplicate title tags / meta descriptions across any two pages
- [ ] SSL/HTTPS on every page, no mixed-content warnings
- [ ] 404 page styled on-brand
- [ ] All country/audience pages have genuinely unique intro copy (location-swap duplicates are the #1 reason these plans fail)
- [ ] Google Search Console + Google Analytics connected
- [ ] Core Web Vitals checked on Home, one course page, one blog post
