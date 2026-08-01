# Quality Assurance — SEO (`/quality-assurance/`)

## 1. Target keyword
**`certified quran teachers online`** (unique; no course page uses it — Tajweed uses "learn tajweed online", etc.).

## 2. Title tag
`Quality Assurance — Certified Quran Teachers Online | QuranlyHub` *(58 chars)*

## 3. Meta description (≤ 155, CTA)
`Every QuranlyHub teacher is Ijazah-certified, background-checked and monitored with monthly quality reviews. See how we guarantee quality classes.` *(142 chars)*

## 4. URL / canonical
`https://quranlyhub.com/quality-assurance/` — self-canonical.

## 5. On-page structure
- **One H1:** "Quality Assurance: Meet the Best Certified Quran Teachers Online"
- H2 order: Every Teacher Passes 4 Checks → Quality Doesn't Stop After Hiring → Our Teacher Guarantee → Questions About Our Teachers → Learn From Someone You Can Trust.
- "certified Quran teachers"/"certified quran teachers online" in H1 and hero body. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/tutors/` | Meet Our Teachers |
| Guarantee button | `/free-trial/` | Book a Trial |
| FAQ 2 | `/courses/tajweed/` | Tajweed (Ijazah context) |
| Footer | `/about/`, `/teaching-methodology/` | About / Methodology |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → About → Quality Assurance) + FAQPage.

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
        { "@type": "ListItem", "position": 3, "name": "Quality Assurance", "item": "https://quranlyhub.com/quality-assurance/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Are your teachers background-checked?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Every QuranlyHub teacher passes identity and reference checks before joining, alongside qualification and interview reviews." }
        },
        {
          "@type": "Question",
          "name": "What is an Ijazah?",
          "acceptedAnswer": { "@type": "Answer", "text": "An Ijazah is a certification granted by a qualified teacher, authorising the holder to recite and teach the Quran with the correct rules." }
        },
        {
          "@type": "Question",
          "name": "How do you monitor classes?",
          "acceptedAnswer": { "@type": "Answer", "text": "Through monthly class reviews, per-lesson student ratings and direct feedback to our support team." }
        },
        {
          "@type": "Question",
          "name": "What if I don't get on with my teacher?",
          "acceptedAnswer": { "@type": "Answer", "text": "We replace them free within your first two classes — no questions asked." }
        },
        {
          "@type": "Question",
          "name": "Can I choose my teacher?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. We match you based on your preferences, and you can request a specific teacher or a female teacher at any time." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `certified quran teachers online` unique
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
