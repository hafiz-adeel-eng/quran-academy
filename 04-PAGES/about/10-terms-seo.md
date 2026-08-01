# Terms & Conditions — SEO (`/terms-and-conditions/`)

## 1. Target keyword
**`quranlyhub terms and conditions`** (brand/transactional, unique).

## 2. Title tag
`Terms & Conditions | QuranlyHub` *(29 chars)*

## 3. Meta description (≤ 155, CTA)
`The terms and conditions for using QuranlyHub's online Quran classes and website — trials, bookings, payments, cancellations and liability. Contact us for questions.` *(148 chars)*

## 4. URL / canonical
`https://quranlyhub.com/terms-and-conditions/` — self-canonical.

## 5. On-page structure
- **One H1:** "Terms & Conditions"
- H2 sections numbered 1–10 (legal headings), no skipping. No FAQ block on this page.
- First 100 words: "online Quran classes", "quranlyhub.com", "terms" present. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Section 4 | `/pricing/` | Pricing page |
| Section 2 | `/free-trial/` | free trial |
| Footer CTA | `/free-trial/` | Book Free Trial |
| Footer | `/privacy-policy/` | Privacy Policy *(create a short privacy page before launch)* |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → About → Terms & Conditions). No FAQPage.

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
        { "@type": "ListItem", "position": 3, "name": "Terms & Conditions", "item": "https://quranlyhub.com/terms-and-conditions/" }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title = title; og:description = meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `quranlyhub terms and conditions` unique
- [ ] Title short & clean
- [ ] Meta ≤ 155 with CTA
- [ ] One H1
- [ ] Logical H2s (legal numbering)
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] Alt text (minimal imagery)
- [ ] 2–3 internal links
- [ ] Schema: Org + Breadcrumb
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
- [ ] **Pre-launch:** legal review of draft copy
