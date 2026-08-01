# Tajweed Course — SEO (`/courses/tajweed/`)

Applied while building the page — never as a fix-up.

## 1. Target keyword

**`learn tajweed online`** — no other page targets this phrase (hub = "online quran classes", Noorani Qaida = "noorani qaida online").

## 2. Title tag (≤ 60 chars)

`Learn Tajweed Online — 1-on-1 Rules & Recitation | QuranlyHub`
*(58 chars)*

## 3. Meta description (≤ 155 chars, CTA)

`Learn Tajweed online with certified teachers — Makharij, Sifaat and the rules of recitation, applied in real Quran verses. Book a free trial.`
*(139 chars)*

## 4. URL / canonical

- `https://quranlyhub.com/courses/tajweed/` — self-canonical.

## 5. On-page structure

- **One H1:** "Learn Tajweed Online and Recite the Quran Beautifully" ✓ keyword in H1
- H2 order: What You'll Learn in Our Online Tajweed Course → How Our Tajweed Course Works → Tajweed Online for Every Student → Why Learn Tajweed Online With QuranlyHub? → Affordable Tajweed Classes Online → Tajweed — Your Questions, Answered → Recite the Quran the Way It Should Be Recited.
- Keyword + variants in first 100 words (hero body): "online Tajweed classes teach you Makharij…" ✓

## 6. Internal links

| From | To | Anchor |
|---|---|---|
| Hero ghost | `/courses/` | See All Courses |
| Audience cards | `/online-quran-classes-for-<audience>/` | Adults / Beginners / Kids / Sisters |
| FAQ 2 | `/courses/noorani-qaida/` | start with Noorani Qaida |
| (structure) | `/courses/nazra/` | Nazra (once live) |
| Pricing | `/pricing/` | See full pricing |
| CTA | `/free-trial/` | Book Free Trial |
| Blog (when live) | `/blog/what-is-tajweed/` | What Is Tajweed |

## 7. Schema markup — Course + FAQPage + Breadcrumb

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "Course",
      "@id": "https://quranlyhub.com/courses/tajweed/#course",
      "name": "Tajweed Course — Recite the Quran with Perfect Pronunciation",
      "description": "1-on-1 online Tajweed classes covering Makharij, Sifaat, rules of Noon and Meem, Qalqalah, Madd and Waqf — applied in real Quran recitation.",
      "provider": { "@id": "https://quranlyhub.com/#organization" },
      "coursePrerequisites": "Ability to read Arabic script (Noorani Qaida level or higher)",
      "inLanguage": "English",
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "online",
        "courseWorkload": "P6M",
        "offers": {
          "@type": "Offer",
          "category": "paid",
          "price": "49",
          "priceCurrency": "GBP",
          "availability": "https://schema.org/InStock"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Online Quran Classes", "item": "https://quranlyhub.com/courses/" },
        { "@type": "ListItem", "position": 3, "name": "Tajweed Course", "item": "https://quranlyhub.com/courses/tajweed/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Tajweed?",
          "acceptedAnswer": { "@type": "Answer", "text": "Tajweed means making something beautiful. In Quran recitation, it is the set of rules for articulating every letter correctly — from where it is pronounced to how long it is held." }
        },
        {
          "@type": "Question",
          "name": "Do I need to read the Quran already?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, ideally. This course is designed for students who can already read Arabic words. If you cannot read yet, start with Noorani Qaida first." }
        },
        {
          "@type": "Question",
          "name": "How long does it take to learn Tajweed?",
          "acceptedAnswer": { "@type": "Answer", "text": "With 3–5 lessons a week, most students complete the full rules in 6–12 months, then practise by reciting with a teacher." }
        },
        {
          "@type": "Question",
          "name": "Can I learn Tajweed online?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — online is the best way. 1-on-1 lessons let the teacher hear every sound clearly and correct you in real time, on any device." }
        },
        {
          "@type": "Question",
          "name": "Can I request a female teacher?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Request a certified female Quran teacher at booking and we will match you." }
        },
        {
          "@type": "Question",
          "name": "Will I get a certificate?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — a Tajweed completion certificate for every level you finish." }
        }
      ]
    }
  ]
}
```

> Review/AggregateRating only after genuine student reviews are collected.

## 8. OG + Twitter Card

- og:title = title tag; og:description = meta; og:image = 1200×630 brand card; twitter `summary_large_image`.

## 9. Speed

- WebP hero preloaded (LCP), other images lazy, fixed dimensions, no render-blocking scripts.

## 10. Course-page checklist

- [ ] Keyword `learn tajweed online` — no other page targets it
- [ ] Title ≤ 60 chars, keyword first
- [ ] Meta ≤ 155 chars, CTA
- [ ] Exactly one H1 with keyword
- [ ] Logical H2/H3, no skips
- [ ] Keyword in first 100 words
- [ ] Clean slug `/courses/tajweed/` + self-canonical
- [ ] Alt text on all images
- [ ] 2–3+ internal links (7+ here)
- [ ] Schema: **Course** + Breadcrumb + FAQPage ✓
- [ ] OG + Twitter set
- [ ] Mobile check passed
- [ ] Speed check passed
