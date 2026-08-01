# How It Works — SEO (`/how-it-works/`)

## 1. Target keyword
**`how online quran classes work`** (how-to, unique).

## 2. Title tag
`How Online Quran Classes Work — 4 Simple Steps | QuranlyHub` *(56 chars)*

## 3. Meta description (≤ 155, CTA)
`See exactly how online Quran classes work at QuranlyHub — free trial, level assessment, teacher match and live 1-on-1 lessons. Book your free trial today.` *(150 chars)*

## 4. URL / canonical
`https://quranlyhub.com/how-it-works/` — self-canonical.

## 5. On-page structure
- **One H1:** "How Online Quran Classes Work at QuranlyHub"
- H2 order: Four Simple Steps to Start Learning → What You Need to Get Started → After Your Free Trial → Questions About How We Work → Ready When You Are.
- "online Quran classes" appears in H1 and first 100 words. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-trial/` | Start With a Free Trial |
| Step 1 | `/free-trial/` | 30-second form |
| What you need card | `/pricing/` | free with your classes (→pricing for plans) |
| Footer | `/about/`, `/teaching-methodology/`, `/quality-assurance/` | About / Methodology / Quality |
| FAQ 2 | `/contact/` | contact page (once live) |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → How It Works) + FAQPage.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "How It Works", "item": "https://quranlyhub.com/how-it-works/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How soon can I start?",
          "acceptedAnswer": { "@type": "Answer", "text": "You can book a trial today and usually start lessons within 24–48 hours of it." }
        },
        {
          "@type": "Question",
          "name": "Which platform do you use for lessons?",
          "acceptedAnswer": { "@type": "Answer", "text": "Zoom, Google Meet or Skype — whichever is easiest for you. Your teacher sends the link before every class." }
        },
        {
          "@type": "Question",
          "name": "Can I change my teacher?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — any time, free. If the fit isn't right, we find you a better one." }
        },
        {
          "@type": "Question",
          "name": "What if I need to reschedule?",
          "acceptedAnswer": { "@type": "Answer", "text": "Just let us know before the class and we reschedule free — we never charge for missed classes you give notice for." }
        },
        {
          "@type": "Question",
          "name": "Do you teach on weekends?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes, we teach 7 days a week, with slots from early morning to late night to cover every timezone." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `how online quran classes work` unique
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
