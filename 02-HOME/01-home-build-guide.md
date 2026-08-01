# Home Page Build Guide — `02-HOME/`

Build order for the Home page, section by section, **mobile-first** (design & check the phone layout first, then desktop). Copy is in `02-home-copy.md`; CSS/JS in `03-home-custom-css.css` and `04-home-countup.js`; SEO/schema in `05-home-seo.md`.

## Setup steps (once)

1. Create page **Home** (Slug: leave as `home` or set to `/` — the front page). Set **Template → Elementor Full Width**.
2. Settings → Reading → "A static page" → Homepage: *Home*.
3. Add `03-home-custom-css.css` (Astra → Customizer → Additional CSS, or Elementor Custom Code) and `04-home-countup.js` (Elementor Custom Code → `<script>` tag, `in_head = false`). Both files are already mobile-first.
4. Target keyword for this page: **"Online Quran Academy"**. See `05-home-seo.md` before writing any content.

---

## S0. Header (Theme Builder — Pro)

Built once in Theme Builder, reused on every page.

- **Container:** full width, background `#FFFFFF`, bottom border `1px solid rgba(18,59,87,.14)`, height 70px, **Sticky → Top** (motion effects).
- **Left:** Logo — use the provided logo file (`03-ASSETS/logo-placeholder.svg` until the real file arrives), height 44px, alt `QuranlyHub — Learn Quran. Live Guidance.`.
- **Center (desktop):** Nav Menu — Home, About, Courses, Tutors, Pricing, Blog, Contact. Hover color `#B8850F`. Font Inter 600 15px.
- **Right:** WhatsApp icon button (circle, `#D4A017`, white glyph) → `https://wa.me/<number>` + **Book Free Trial** button (primary gold pill) → `/free-trial/`.
- **Mobile:** hamburger (Elementor default), full-screen overlay menu; **sticky bottom CTA bar** (see `.qly-mobile-cta` in the CSS) shows on phones only — *Book Free Trial* + WhatsApp.

## S1. Hero — blue band

- **Container** `qly-hero`: background `#123B57`, padding 72px top/72px bottom (mobile 56/56). Two columns: left 58% text, right 42% image.
- **Eyebrow:** "ONLINE QURAN ACADEMY · LEARN QURAN ONLINE" — `#F2C94C`, Inter 600, uppercase, letter-spacing 0.14em, 12px.
- **H1 (the page's only H1):** "Your Online Quran Academy for a Lifetime of Guidance" — Cormorant 600, white, desktop 54 / mobile 32. *(Target keyword present and near the start — SEO ✓)*
- **Subheadline:** `02-home-copy.md → Hero`. Inter 400, white, 17px, max-width 560px.
- **CTA row:** Primary button "Book Free Trial — Start Today" (gold pill) → `/free-trial/`; Secondary ghost (outline white) "Explore Courses" → `/courses/`.
- **Trust badges row** (below CTAs, 3 inline items): `🌍 60+ Countries` · `🎓 5,000+ Students` · `★ 4.9/5 Parent Rating` — keep as small white text with `#F2C94C` highlights. No emojis in final design — use Elementor icons (globe, cap, star).
- **Right column:** Hero image — `03-ASSETS/placeholder-hero.svg` until a real photo replaces it. Alt: "Muslim child in an online Quran class with a QuranlyHub teacher". Mobile: image below text, full width, no overflow.
- *Mobile check:* single column, H1 32px, buttons full-width-ish (44px min height), no horizontal scroll.

## S2. Why QuranlyHub — white, 6 cards

- **Container** `qly-section`: white bg, padding 88/88 (mobile 48/48).
- **Eyebrow:** "WHY QURANLYHUB" `#B8850F`.
- **H2:** "Why Families Choose Our Online Quran Academy" — Cormorant, `#123B57`, desktop 38 / mobile 25.
- **Grid:** 6 columns (3×2 on tablet, 1 column on mobile) of **icon feature cards** (`qly-card`, minor radius).
  Each card: icon circle (56px, `#D4A017`, white glyph) + H3 (`#123B57`, Cormorant 24) + body (Inter 16, `#123B57`).
- Cards & icons from `02-home-copy.md → Why Us`. Elementor icons: globe, book, chalkboard-teacher, award, credit-card, clock.
- *Internal links:* in card 1 body, link "UK · USA · Canada · Australia" → `/quran-classes-in-uk/` (first country page once built; pattern repeated for others).

## S3. 3 Simple Steps — white

- **Container** `qly-section` white. Eyebrow "HOW IT WORKS" `#B8850F`. H2 "3 Simple Steps to Start".
- **3 columns** (1 col mobile) of step cards (`qly-card`): gold circle with big step number (`#D4A017` bg, white Cormorant 28), H3 title, body text. Copy in `02-home-copy.md → Steps`.
- Connect line/arrow between steps: use a subtle horizontal line only on desktop (CSS class `qly-step-line`), hidden on mobile.

## S4. Pricing snapshot — white

- **Container** `qly-section` white. Eyebrow "PRICING". H2 "Simple, Affordable Plans".
- **3 plan cards** (1 col mobile): **Free Trial**, **Standard** (highlighted — `#123B57` background, white text, "Most Popular" gold ribbon `#F2C94C`), **Family**.
  Standard card uses the blue-band treatment (`qly-pricing-card`); others are white `qly-card`.
  Price: gold (`#B8850F` on white / `#F2C94C` on blue), Cormorant 40.
  Feature list: check icons (Elementor `fa-check`), no bullets.
  Each card: gold CTA button → `/pricing/`.
- Copy: `02-home-copy.md → Pricing`.
- *Below the grid:* ghost link "See full pricing & payment options" → `/pricing/`.

## S5. Course category cards — white

- **Container** `qly-section` white. Eyebrow "COURSES". H2 "Explore Our Online Courses".
- **3 category cards** (`qly-card` major radius): Quran & Tajweed · Arabic Language · Islamic Studies.
  Each: 3–4 course chips (links to future course pages), icon circle, "View all X courses →" gold link → `/courses/`.
- Copy + chip links: `02-home-copy.md → Course categories`. These are the internal-link rows to the Course hub.

## S6. Stats counter — blue band

- **Container** `qly-stats-band`: background `#123B57`, padding 72/72 (mobile 56/56).
- **4 columns:** each = number (Cormorant 600 54, `#F2C94C`) + label (Inter 600 15, white). Numbers are the count-up targets (see JS).
- Values: `5000+ Students taught` · `60+ Countries served` · `1200+ Happy families` · `250+ Certified tutors`.
- Markup: `<span class="qly-stat-value" data-target="5000">0</span>` for the numbers (custom class on the heading widget). JS in `04-home-countup.js` animates once on scroll into view.
- *Mobile:* 2×2 grid (not 4 across), numbers 40px.

## S7. Testimonials — white, horizontal carousel

- **Container** `qly-section` white. Eyebrow "TESTIMONIALS". H2 "What Our Students & Parents Say".
- **Pro widget: Testimonial Carousel** (Elementor Pro) — swipe-enabled natively on touch, arrows, autoplay 6s. See `04-GLOBAL-TEMPLATES/reusable-sections.md → Testimonial carousel` for exact settings (slides to show: 1 mobile, 2 tablet, 3 desktop; equal-height cards).
- Review cards: `qly-card`, quote (Inter 16, `#123B57`), 5 gold stars (`#D4A017`), avatar (placeholder) + name/country. Copy: `02-home-copy.md → Testimonials`.
- *Free fallback* (no Pro): the scroll-snap HTML widget recipe in `04-GLOBAL-TEMPLATES`.
- Reviews also feed the **Review/AggregateRating schema** once real reviews are collected.

## S8. Featured tutors — white

- **Container** `qly-section` white. Eyebrow "TUTORS". H2 "Learn From Hand-Picked Teachers".
- **4 tutor cards** (`qly-card` major radius): photo (`03-ASSETS/placeholder-tutor.svg`), name (Cormorant 22), cert line ("Ijazah · Qira'at · 8 yrs"), rating stars + level badges, "View profile →" → `/tutors/<name>/`. 
- Names/copy: `02-home-copy.md → Tutors`. Alt text per tutor: "Quran teacher [Name] — [course] tutor at QuranlyHub".

## S9. Latest blog articles — white

- **Container** `qly-section` white. Eyebrow "FROM THE BLOG". H2 "Learn More About Quran Learning".
- **Pro widget: Posts** (category Blog, 3 posts, card style `qly-card`). Title font Cormorant 22 `#123B57`, meta Inter 13 `#B8850F`. Links to individual posts.
- These 3 posts are the first blog content (topics in `02-home-copy.md → Blog`); create them in the **next increment** (Blog). Until then, link them to `/blog/`.
- This section is the site's SEO freshness signal — keep it publishing.

## S10. Final CTA — solid gold block

- **Container** `qly-cta-gold`: background `#D4A017`, padding 72/72. Rounded arch top corners via CSS (`border-radius: 24px 24px 0 0` optional — or keep it a full-bleed band).
- **H2:** white Cormorant 36 "Begin Your Quran Journey Today".
- **Body:** white Inter 17 "Book a free trial class and meet your teacher — no card, no commitment."
- **Button:** deep-blue pill (`#123B57` bg, white text) "Book Free Trial" → `/free-trial/`.
- Optional small arabesque divider strip above this band (use `03-ASSETS/arabesque-divider.svg`), nothing busier.

## S11. Footer (Theme Builder — Pro, blue)

- **Container** `qly-footer`: `#123B57`, padding 64/32. 4 columns (2×2 mobile).
  - Col 1: Logo + tagline "Learn Quran. Live Guidance." + social icons (Elementor icon list: Facebook, Instagram, YouTube, X).
  - Col 2: **Courses** — links to all 8 course pages + audience variants (Kids, Adults, Beginners, Sisters).
  - Col 3: **Quick Links** — About, Tutors, Pricing, Free Trial, Blog, Testimonials, Contact.
  - Col 4: **Contact** — phone/WhatsApp, email, address (placeholders from `02-home-copy.md → Footer`).
- Bottom bar: small print copyright, links to Terms & Conditions + Privacy Policy, "Online Quran Academy · QuranlyHub" text for a final keyword anchor.
- Text white / headings `#F2C94C`; links white with `#F2C94C` hover. All links internal + external SEO-consistent.

---

## After finishing: run the Home SEO checklist

Open `05-CHECKLISTS/per-page-seo-checklist.md` and tick every box for Home (title, meta, H1, schema, OG/Twitter, canonical, mobile, speed). Then view on a real phone before calling the section done.
