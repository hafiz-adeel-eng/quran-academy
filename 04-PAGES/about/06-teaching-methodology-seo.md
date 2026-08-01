# Teaching Methodology — SEO (`/teaching-methodology/`)

## 1. Target keyword
**`online quran teaching methodology`** (unique; long-tail informational).

## 2. Title tag
`Our Online Quran Teaching Methodology | QuranlyHub` *(48 chars)*

## 3. Meta description (≤ 155, CTA)
`Discover the QuranlyHub teaching methodology — structured curriculum, 1-on-1 live lessons, corrective feedback and measurable progress. Book a free trial.` *(147 chars)*

## 4. URL / canonical
`https://quranlyhub.com/teaching-methodology/` — self-canonical.

## 5. On-page structure
- **One H1:** "Our Teaching Methodology for Online Quran Learning"
- H2 order: Five Pillars of the QuranlyHub Method → What Happens Inside a Lesson → Progress You Can See → Questions About Our Method → Learn With a Method That Works.
- Keyword in H1 and hero body. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-trial/` | Book Free Trial |
| Pillar 1 | `/courses/` | Qaida, Nazra, Hifz, Tajweed (roadmap link) |
| Progress cards | `/pricing/` | certificates/plans |
| FAQ 1 | `/courses/noorani-qaida/` | Noorani Qaida |
| Footer | `/about/`, `/how-it-works/`, `/quality-assurance/` | related pages |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → About → Teaching Methodology) + FAQPage.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://quranlyhub.com/about/" },
        { "@type": "ListItem", "position": 3, "name": "Teaching Methodology", "item": "https://quranlyhub.com/teaching-methodology/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What teaching method do you use?",
          "acceptedAnswer": { "@type": "Answer", "text": "We follow the recognised classical progression — Noorani Qaida to Nazra, then Tajweed, Hifz or Tafseer — delivered with modern, structured lesson plans and clear milestones." }
        },
        {
          "@type": "Question",
          "name": "How is each lesson structured?",
          "acceptedAnswer": { "@type": "Answer", "text": "Every lesson follows the same proven flow: warm-up, new concept, guided practice, independent reading and a short recap with homework." }
        },
        {
          "@type": "Question",
          "name": "Do you give homework?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — short daily practice (10–15 minutes) that reinforces the lesson without overwhelming the student." }
        },
        {
          "@type": "Question",
          "name": "How is progress measured?",
          "acceptedAnswer": { "@type": "Answer", "text": "With a monthly assessment and report, level certificates, and continuous feedback from the teacher after every class." }
        },
        {
          "@type": "Question",
          "name": "Is the method suitable for very young children?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — our kids' lessons are shorter, game-based and repeat gently until the skill sticks." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `online quran teaching methodology` unique
- [ ] Title ≤ 60 chars
- [ ] Meta ≤ 155 with CTA
- [ ] One H1 with keyword
- [ ] Logical H2/H3
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] Alt text everywhere
- [ ] 2–3+ internal links
- [ ] Schema: Org + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
