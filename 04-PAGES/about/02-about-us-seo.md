# About Us — SEO (`/about-quranlyhub/`)

## 1. Target keyword
**`about quranlyhub`** (brand informational). Uses "online Quran academy" as a *variant* only — Home owns that exact keyword.

## 2. Title tag
`About QuranlyHub — Our Story, Mission & Values` *(46 chars)*

## 3. Meta description (≤ 155, CTA)
`About QuranlyHub — an online Quran academy founded to bring certified Quran teachers to every home. Read our story and mission, then try us free.` *(145 chars)*

## 4. URL / canonical
`https://quranlyhub.com/about-quranlyhub/` — self-canonical.

## 5. On-page structure
- **One H1:** "About QuranlyHub — Bringing Quran Teachers to Every Home"
- H2 order: About QuranlyHub: Why We Built It → Our Mission & Vision → What We Stand For → The QuranlyHub Difference → Questions About QuranlyHub → Come and See For Yourself.
- Hero body **starts with the keyword** ("About QuranlyHub: we are an online Quran academy on a mission…") and uses "online Quran academy" as a variant. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-quran-classes-online/` | Book Free Trial |
| Story body | `/noorani-qaida-online/` | Noorani Qaida |
| Story body | `/online-hifz-classes/` | full Hifz |
| Story body | `/quran-classes-in-uk/` (etc.) | UK, USA, Canada, Australia |
| Footer (site-wide) | `/how-online-quran-classes-work/`, `/online-quran-teaching-methodology/`, `/certified-quran-teachers-online/` | subpages |

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
        { "@type": "ListItem", "position": 2, "name": "About Us", "item": "https://quranlyhub.com/about-quranlyhub/" }
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
- [ ] Clean slug `/about-quranlyhub/` + canonical
- [ ] Alt text on all images
- [ ] 2–3+ internal links
- [ ] Schema: Organization + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
