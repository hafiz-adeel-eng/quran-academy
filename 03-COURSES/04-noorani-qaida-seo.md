# Noorani Qaida Course — SEO (`/courses/noorani-qaida/`)

Applied while building the page — never as a fix-up.

## 1. Target keyword

**`noorani qaida online`** — hub targets "online quran classes"; no other page targets this phrase.

## 2. Title tag (≤ 60 chars)

`Learn Noorani Qaida Online — 1-on-1 Classes | QuranlyHub`
*(55 chars)*

## 3. Meta description (≤ 155 chars, CTA)

`Master Noorani Qaida online with certified Quran teachers. 1-on-1 classes for kids, adults and beginners. Book your free trial today.`
*(128 chars)*

## 4. URL / canonical

- `https://quranlyhub.com/courses/noorani-qaida/` — self-canonical.

## 5. On-page structure

- **One H1:** "Learn Noorani Qaida Online with a Certified Quran Teacher" ✓ keyword in H1
- H2 order: What You'll Learn in Our Noorani Qaida Course → How Long Does It Take? → Noorani Qaida Online for Everyone → Why Start With Noorani Qaida? → Affordable Noorani Qaida Classes Online → Noorani Qaida — Your Questions, Answered → Start Reading the Quran Today.
- Keyword + variants in first 100 words (hero body): "online Noorani Qaida classes teach you Arabic letters…" ✓

## 6. Internal links

| From | To | Anchor |
|---|---|---|
| Hero ghost | `/courses/` | See All Courses |
| Audience cards | `/online-quran-classes-for-kids/` etc. | Kids / Adults / Beginners / Sisters |
| Curriculum card 5 | `/courses/nazra/` | ready for Nazra |
| (structure card) | `/courses/tajweed/` | Tajweed rules (when Tajweed page is live) |
| Pricing | `/pricing/` | See full pricing |
| CTA | `/free-trial/` | Book Free Trial |
| Blog (when live) | `/blog/noorani-qaida-for-beginners/` | Noorani Qaida for Beginners |

## 7. Schema markup — Course + FAQPage + Breadcrumb

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "Course",
      "@id": "https://quranlyhub.com/courses/noorani-qaida/#course",
      "name": "Noorani Qaida Course — Learn to Read Quran Online",
      "description": "1-on-1 online Noorani Qaida classes teaching Arabic letters, Makharij and fluent reading — for kids, adults and complete beginners.",
      "provider": { "@id": "https://quranlyhub.com/#organization" },
      "coursePrerequisites": "None — designed for complete beginners",
      "inLanguage": "English",
      "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "online",
        "courseWorkload": "P3M",
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
        { "@type": "ListItem", "position": 3, "name": "Noorani Qaida Course", "item": "https://quranlyhub.com/courses/noorani-qaida/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is Noorani Qaida?",
          "acceptedAnswer": { "@type": "Answer", "text": "Noorani Qaida is a step-by-step book that teaches Arabic letters, pronunciation and how to join them into words. It is the most common first step before reading the Quran." }
        },
        {
          "@type": "Question",
          "name": "Do I need any prior knowledge?",
          "acceptedAnswer": { "@type": "Answer", "text": "No. Our online Noorani Qaida classes assume zero prior knowledge — we start from the very first letter." }
        },
        {
          "@type": "Question",
          "name": "How long will it take to finish?",
          "acceptedAnswer": { "@type": "Answer", "text": "Most students finish in 3–6 months with 3–5 classes per week. Kids and adults progress at their own pace." }
        },
        {
          "@type": "Question",
          "name": "Can my child learn Noorani Qaida online?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — kids from age 5 learn with short, interactive 20–30 minute lessons and patient teachers." }
        },
        {
          "@type": "Question",
          "name": "Can I request a female teacher?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Just ask at booking and we will match you with a certified female Quran teacher." }
        },
        {
          "@type": "Question",
          "name": "What do I need to join?",
          "acceptedAnswer": { "@type": "Answer", "text": "A phone, tablet or computer with internet. We provide the Qaida book and practice sheets digitally and by post." }
        }
      ]
    }
  ]
}
```

> Add Review/AggregateRating only once genuine student reviews exist (Google review policy — never fabricated).

## 8. OG + Twitter Card

- og:title = title tag; og:description = meta; og:image = 1200×630 brand card; twitter `summary_large_image`.

## 9. Speed

- WebP hero (LCP, preloaded `fetchpriority=high`), other images lazy, fixed dimensions, no render-blocking scripts.

## 10. Course-page checklist

- [ ] Keyword `noorani qaida online` — no other page targets it
- [ ] Title ≤ 60 chars, keyword first
- [ ] Meta ≤ 155 chars, CTA
- [ ] Exactly one H1 with keyword
- [ ] Logical H2/H3, no skips
- [ ] Keyword in first 100 words
- [ ] Clean slug `/courses/noorani-qaida/` + self-canonical
- [ ] Alt text on all images
- [ ] 2–3+ internal links (7+ here)
- [ ] Schema: **Course** + Breadcrumb + FAQPage ✓
- [ ] OG + Twitter set
- [ ] Mobile check passed
- [ ] Speed check passed
