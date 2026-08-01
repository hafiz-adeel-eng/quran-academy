# About Us — SEO (`/about/`)

## 1. Target keyword
**`about quranlyhub`** (brand informational). Uses "online Quran academy" as a *variant* only — Home owns that exact keyword.

## 2. Title tag
`About Us — The QuranlyHub Story | QuranlyHub` *(42 chars)*

## 3. Meta description (≤ 155, CTA)
`Meet QuranlyHub — an online Quran academy founded to bring certified Quran teachers to every home. Read our story, mission and values, then try us free.` *(142 chars)*

## 4. URL / canonical
`https://quranlyhub.com/about/` — self-canonical.

## 5. On-page structure
- **One H1:** "About QuranlyHub — Bringing Quran Teachers to Every Home"
- H2 order: Why We Built QuranlyHub → Our Mission & Vision → What We Stand For → The QuranlyHub Difference → Questions About QuranlyHub → Come and See For Yourself.
- "online Quran academy" appears in the first 100 words (hero body) as a variant. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-trial/` | Book Free Trial |
| Story body | `/courses/noorani-qaida/` | Noorani Qaida |
| Story body | `/courses/hifz/` | full Hifz |
| Story body | `/quran-classes-in-uk/` (etc.) | UK, USA, Canada, Australia |
| Footer (site-wide) | `/how-it-works/`, `/teaching-methodology/`, `/quality-assurance/` | subpages |

## 7. Schema
`@graph`: Organization (global `@id`) + BreadcrumbList (Home → About). No FAQPage duplication elsewhere.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://quranlyhub.com/about/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who runs QuranlyHub?",
          "acceptedAnswer": { "@type": "Answer", "text": "QuranlyHub is run by a small, dedicated team of educators and administrators, supported by senior Quran teachers who review our curriculum and teacher standards." }
        },
        {
          "@type": "Question",
          "name": "Where are your teachers from?",
          "acceptedAnswer": { "@type": "Answer", "text": "Our certified teachers come from around the world, including the UK, Egypt and Pakistan. Every teacher holds an Ijazah or recognised certification and passes our vetting process." }
        },
        {
          "@type": "Question",
          "name": "Do you teach only children?",
          "acceptedAnswer": { "@type": "Answer", "text": "No. We teach kids from age 5, adults, complete beginners and advanced students — every lesson is matched to the student." }
        },
        {
          "@type": "Question",
          "name": "Can sisters learn from female teachers?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes. Request a certified female Quran teacher at booking and we will match you." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title = title; og:description = meta; og:image = 1200×630 brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `about quranlyhub` unique
- [ ] Title ≤ 60 chars
- [ ] Meta ≤ 155 with CTA
- [ ] One H1 with keyword
- [ ] H2/H3 logical, no skips
- [ ] Keyword/variant in first 100 words
- [ ] Clean slug `/about/` + canonical
- [ ] Alt text on all images
- [ ] 2–3+ internal links
- [ ] Schema: Organization + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
