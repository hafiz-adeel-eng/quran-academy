# Blog Hub (Archive) — Build Guide + Copy (`/quran-learning-blog/`)

The blog is the site's **long-tail SEO engine** (tarteelequran.com strategy: informational articles that interlink with course pages). Target keyword for the archive itself: **quran learning blog**.

## Setup

- Create category **Blog** → default posts page in Settings → Reading → "Posts page": *Blog*.
- OR build the page in Elementor (recommended — fully editable): page **Blog**, slug `/quran-learning-blog/`, template Elementor Full Width, with the Posts widget below.
- Create **categories** first: `Quran Learning`, `Tajweed`, `For Beginners`.

## S1. Hero — blue band

- `qly-hero` centered. Eyebrow `BLOG` (`#F2C94C`). H1 (only one): `Quran Learning Blog — Guides, Tips and How-Tos`.
- Body: `Quran learning blog by QuranlyHub: practical, honest guides written by our certified teachers — from choosing the right online Quran teacher to understanding Tajweed rules — to help your whole family learn Quran online.`
- Hero image (first on the page): centered under the CTA, max-width 560px, fixed 560×315, WebP. File `quran-learning-blog.webp` (placeholder `03-ASSETS/page-heroes/quran-learning-blog.svg`). Alt: `Quran learning blog — open Quran and notebook with study guides from QuranlyHub teachers`.
- CTA: gold `Start With a Free Trial` → `/free-quran-classes-online/`.

## S2. Posts grid — white

- `qly-section` white. H2 `Latest From the Quran Learning Blog` (above the grid).
- **Elementor Pro Posts widget** (or the Theme Builder loop): query = category *Blog*, posts 6 per page, layout **cards**, columns 1 mobile / 2 tablet / 3 desktop, equal height on.
- Card style: `qly-card qly-card-arch` — featured image on top (WebP, lazy, fixed height), then **category chip** (`qly-chip`, gold), **title** (Post Title widget, Cormorant 22, `#123B57`, linked), excerpt (Inter 15), **read more** gold link + date/author meta (Inter 13, `#B8850F`).
- Pagination: numbers, styled `#B8850F`.
- *(Optional: a "Browse topics" chip row above the grid linking to category archives — /category/tajweed/ etc. Add once categories have posts.)*

## S3. Newsletter / subscribe — white (optional, adds email capture)

- H2 `Get One Quran Learning Tip a Week.` Short form (email only) → Email action to your address + tag in your email tool. Keep **lazy-loaded / low priority** — add only if email tooling exists; otherwise skip (lightweight rule).

## S4. Final CTA — gold block

- H2 `Want to Go Deeper?` Body `Our blog articles are only the beginning — learn Quran online 1-on-1 with a certified teacher.` Button `Book Free Trial` → `/free-quran-classes-online/`.

## CSS additions (append to `02-HOME/03-home-custom-css.css`)

```css
.qly-chip {
  display: inline-block;
  background: rgba(212, 160, 23, 0.12);
  color: var(--qly-gold-deep);
  font-weight: 600;
  font-size: 12px;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  padding: 4px 10px;
  border-radius: 50px;
}
.qly-post-card .elementor-post__thumbnail { border-radius: 14px 14px 0 0; }
.qly-post-card { border-radius: 24px 24px 14px 14px; }
```

## Alt text (blog cards)

Each featured image: descriptive, e.g. `A student practising Noorani Qaida online — noorani qaida for beginners blog`. Never leave the default "image.jpg".

## After building

Fill `02-blog-hub-seo.md`, tick the checklist, check the grid on a phone (cards must be full-width, tappable, no overlap).
