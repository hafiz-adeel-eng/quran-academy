# Courses Hub — SEO (`/courses/`)

Applied while building the page — never as a fix-up.

## 1. Target keyword

**`online quran classes`** (hub-level). Every individual course page targets its own phrase (see `README.md` keyword map) — this page is the umbrella.

## 2. Title tag (≤ 60 chars)

`Online Quran Classes — Courses, Levels & Pricing | QuranlyHub`
*(55 chars — keyword first, brand last)*

## 3. Meta description (≤ 155 chars, CTA)

`Explore online Quran classes at QuranlyHub — Noorani Qaida, Nazra, Hifz, Tajweed, Translation and Tafseer for kids, adults and sisters. Book a free trial.`
*(148 chars)*

## 4. URL / canonical

- `https://quranlyhub.com/courses/`
- Canonical self-referencing (Rank Math default). Confirm it renders in the `<head>`.

## 5. On-page structure

- **One H1:** "Online Quran Classes for Every Age and Level" — keyword in H1 ✓
- H2 order: Find the Right Online Quran Class for You → Online Quran Classes for Kids, Adults, Beginners and Sisters → How Our Online Quran Classes Work → Simple Monthly Pricing → Online Quran Classes — Your Questions, Answered → Not Sure Where to Start? Book a Free Trial.
- Keyword + variants in first 100 words (hero body): "1-on-1 online Quran classes with certified teachers, for kids, adults, beginners and sisters."

## 6. Internal links

| From | To | Anchor |
|---|---|---|
| 8 course cards | `/courses/<slug>/` | course names |
| 4 audience cards | `/online-quran-classes-for-<audience>/` | Kids / Adults / Beginners / Sisters |
| Hero CTA | `/free-trial/` | Book Free Trial |
| Pricing | `/pricing/` | See full pricing |
| (schema provider) | Homepage `/#organization` | Organization |

## 7. Schema markup

Single schema via Rank Math (or one JSON-LD block — never both). `@graph` entries:

- **Organization** (from global settings — referenced by `@id`).
- **BreadcrumbList:** Home → Courses.
- **FAQPage** — from the S6 FAQ copy:

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Online Quran Classes", "item": "https://quranlyhub.com/courses/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Which online Quran class should I start with?",
          "acceptedAnswer": { "@type": "Answer", "text": "If you are a complete beginner, start with Noorani Qaida. If you can already read the Quran, a Nazra or Tajweed class will polish your recitation. Book a free trial and we will recommend the right level." }
        },
        {
          "@type": "Question",
          "name": "Do online Quran classes work for kids?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Our kids' classes are short (20–30 minutes), interactive and fun, with patient teachers and regular progress reports so you always know how your child is doing." }
        },
        {
          "@type": "Question",
          "name": "Can adults learn online?",
          "acceptedAnswer": { "@type": "Answer", "text": "Absolutely — many of our students are adults learning for the first time. Lessons are 1-on-1 and scheduled around work and family." }
        },
        {
          "@type": "Question",
          "name": "Are the teachers certified?",
          "acceptedAnswer": { "@type": "Answer", "text": "Every QuranlyHub teacher holds an Ijazah or recognised certification, is background-checked and personally interviewed before joining." }
        },
        {
          "@type": "Question",
          "name": "How much do online Quran classes cost?",
          "acceptedAnswer": { "@type": "Answer", "text": "Plans start free with a trial, then from £49/month for 5 classes per week. No hidden fees, cancel anytime." }
        },
        {
          "@type": "Question",
          "name": "What do I need to join a class?",
          "acceptedAnswer": { "@type": "Answer", "text": "Just a smartphone, tablet or computer with internet. Your teacher shares the screen and all materials with you." }
        }
      ]
    }
  ]
}
```

> The hub FAQ differs from the Home FAQ — never duplicate FAQ blocks between pages.

## 8. Open Graph + Twitter Card

- og:title = title tag; og:description = meta description; og:image = 1200×630 brand card; og:type `website`; twitter `summary_large_image`.

## 9. Speed

- WebP images, lazy-loaded below the fold, fixed dimensions (no CLS), fonts as configured globally.

## 10. Hub checklist

- [ ] Keyword `online quran classes` — no other page targets it
- [ ] Title ≤ 60 chars, keyword first
- [ ] Meta ≤ 155 chars, CTA
- [ ] Exactly one H1 with keyword
- [ ] Logical H2/H3, no skips
- [ ] Keyword in first 100 words
- [ ] Clean slug `/courses/` + self-canonical
- [ ] Alt text on all images
- [ ] 2–3+ internal links (12+ here)
- [ ] Schema: Organization + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile check passed
- [ ] Speed check passed
