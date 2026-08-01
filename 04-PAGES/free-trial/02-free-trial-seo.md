# Free Trial — SEO (`/free-trial/`)

## 1. Target keyword
**`free quran classes online`** (transactional — unique; no other page targets "free").

## 2. Title tag
`Free Quran Classes Online — Book Your 30-Minute Trial | QuranlyHub` *(59 chars)*

## 3. Meta description (≤ 155, CTA)
`Try free Quran classes online at QuranlyHub — a 30-minute trial with a certified teacher. No card, no commitment. Book your slot in 30 seconds.` *(140 chars)*

## 4. URL / canonical
`https://quranlyhub.com/free-trial/` — self-canonical. This page is linked from **every** CTA site-wide — internal-link strength is high by design.

## 5. On-page structure
- **One H1:** "Book Free Quran Classes Online — Your 30-Minute Trial"
- H2 order: What Happens in Your 30-Minute Trial → (social proof, no heading) → Free Trial Questions → Still Unsure? WhatsApp Us.
- Keyword in H1 + first 100 words (hero body + checklist). ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero pitch | `/about/` | QuranlyHub |
| Checklist line | `/courses/` | course recommendation |
| FAQ 3 | `/courses/noorani-qaida/` | very first letter |
| Final CTA | `/pricing/` | See Full Pricing |
| (every CTA site-wide) | `/free-trial/` | in-bound |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → Free Trial) + FAQPage.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Free Trial", "item": "https://quranlyhub.com/free-trial/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is the free trial really free?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. A full 30-minute trial class with a certified teacher. We don't ask for a card, and there's no obligation to continue." }
        },
        {
          "@type": "Question",
          "name": "How long is the trial?",
          "acceptedAnswer": { "@type": "Answer", "text": "30 minutes — enough to assess your level, meet your teacher and experience a real lesson." }
        },
        {
          "@type": "Question",
          "name": "What if I'm a complete beginner?",
          "acceptedAnswer": { "@type": "Answer", "text": "Perfect. The trial is designed for beginners — we start from your level, even if that's the very first letter." }
        },
        {
          "@type": "Question",
          "name": "Do I need any equipment?",
          "acceptedAnswer": { "@type": "Answer", "text": "Just a smartphone, tablet or computer with internet. We provide all materials." }
        },
        {
          "@type": "Question",
          "name": "Can I request a female teacher for the trial?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — tell us in the form and we'll arrange a certified female teacher." }
        },
        {
          "@type": "Question",
          "name": "What happens after the trial?",
          "acceptedAnswer": { "@type": "Answer", "text": "We send your level report, recommend a course, and you choose a plan — or walk away, free." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `free quran classes online` unique
- [ ] Title ≤ 60 chars
- [ ] Meta ≤ 155 with CTA
- [ ] One H1 with keyword
- [ ] Logical H2/H3
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] Alt text (no photos — keep fast)
- [ ] 2–3+ internal links
- [ ] Schema: Org + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
- [ ] **Form tested end-to-end** (email + WhatsApp notification) on desktop and mobile
