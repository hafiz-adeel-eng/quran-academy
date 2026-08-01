# Pricing — SEO (`/pricing/`)

## 1. Target keyword
**`online quran classes cost`** (commercial intent — unique; Home owns "online quran academy", hub owns "online quran classes").

## 2. Title tag
`Pricing — Online Quran Classes Cost & Plans | QuranlyHub` *(56 chars)*

## 3. Meta description (≤ 155, CTA)
`See QuranlyHub pricing — a free trial, then simple monthly plans from £39/month. No hidden fees, cancel anytime. Compare plans and book your free trial.` *(137 chars)*

## 4. URL / canonical
`https://quranlyhub.com/pricing/` — self-canonical.

## 5. On-page structure
- **One H1:** "Online Quran Classes Pricing at QuranlyHub"
- H2 order: Plans That Fit Every Family → What Every Plan Includes → No Hidden Costs, Ever → Pricing Questions, Answered → Pick Your Plan and Start Learning.
- Keyword in H1 + first 100 words. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| All plan CTAs | `/free-trial/` | Book Free Trial / Choose Standard etc. |
| FAQ 6 | `/quran-classes-in-uk/` etc. | country pages (local pricing) |
| Feature table | `/courses/` | course names context |
| Footer | `/free-trial/`, `/how-it-works/` | Free Trial / How It Works |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → Pricing) + FAQPage + `OfferCatalog` (the plans).

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Pricing", "item": "https://quranlyhub.com/pricing/" }
      ]
    },
    {
      "@type": "OfferCatalog",
      "name": "Online Quran Classes Plans",
      "itemListElement": [
        {
          "@type": "Offer",
          "name": "Basic Plan",
          "description": "3 online Quran classes per week",
          "price": "39",
          "priceCurrency": "GBP",
          "availability": "https://schema.org/InStock",
          "offeredBy": { "@id": "https://quranlyhub.com/#organization" }
        },
        {
          "@type": "Offer",
          "name": "Standard Plan",
          "description": "5 online Quran classes per week with progress reports and certificates",
          "price": "49",
          "priceCurrency": "GBP",
          "availability": "https://schema.org/InStock",
          "offeredBy": { "@id": "https://quranlyhub.com/#organization" }
        },
        {
          "@type": "Offer",
          "name": "Family Plan",
          "description": "5 online Quran classes per week for up to 4 children",
          "price": "69",
          "priceCurrency": "GBP",
          "availability": "https://schema.org/InStock",
          "offeredBy": { "@id": "https://quranlyhub.com/#organization" }
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What does an online Quran class cost?",
          "acceptedAnswer": { "@type": "Answer", "text": "Plans start with a free trial, then from £39/month for 3 classes a week or £49/month for 5 classes. Family plans are available for up to 4 children." }
        },
        {
          "@type": "Question",
          "name": "Is the trial really free?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — a full 30-minute trial class with a certified teacher. No card, no commitment." }
        },
        {
          "@type": "Question",
          "name": "How do I pay?",
          "acceptedAnswer": { "@type": "Answer", "text": "By card, bank transfer, PayPal or mobile payment, billed monthly. You can change or cancel at any time." }
        },
        {
          "@type": "Question",
          "name": "Are there discounts for siblings?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — our Family plan covers up to 4 children, and we offer sibling discounts on request." }
        },
        {
          "@type": "Question",
          "name": "What if I miss a class?",
          "acceptedAnswer": { "@type": "Answer", "text": "With notice, we reschedule free — you're never charged for a class you couldn't attend." }
        },
        {
          "@type": "Question",
          "name": "Do you price in other currencies?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — we have local pricing for the UK, USA, Canada and Australia. See our country pages for details." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `online quran classes cost` unique
- [ ] Title ≤ 60 chars
- [ ] Meta ≤ 155 with CTA
- [ ] One H1 with keyword
- [ ] Logical H2/H3
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] Alt text (minimal imagery)
- [ ] 2–3+ internal links
- [ ] Schema: Org + Breadcrumb + OfferCatalog + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed (comparison table must scroll on phones)
