# Privacy Policy — SEO (`/privacy-policy/`)

## 1. Target keyword
**`quranlyhub privacy policy`** (brand/legal — unique).

## 2. Title tag
`Privacy Policy | QuranlyHub` *(25 chars)*

## 3. Meta description (≤ 155, CTA)
`How QuranlyHub collects, uses and protects your data on quranlyhub.com and in our online Quran classes. Your rights, retention and contact details.` *(148 chars)*

## 4. URL / canonical
`https://quranlyhub.com/privacy-policy/` — self-canonical.

## 5. On-page structure
- **One H1:** "Privacy Policy"
- H2 sections 1–11 (legal headings). No FAQ block.
- Keyword in first 100 words. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| §3 | `/free-trial/` | book a trial |
| §5 | `/quality-assurance/` | quality review |
| Footer CTA | `/free-trial/` | Book Free Trial |
| T&Cs §9 | `/privacy-policy/` | Privacy Policy |
| Footer | `/privacy-policy/`, `/terms-and-conditions/` | site-wide legal links |

## 7. Schema
`@graph`: Organization + BreadcrumbList (Home → Privacy Policy). No FAQPage.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Privacy Policy", "item": "https://quranlyhub.com/privacy-policy/" }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title = title; og:description = meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `quranlyhub privacy policy` unique
- [ ] Title short & clean
- [ ] Meta ≤ 155
- [ ] One H1
- [ ] Logical H2s
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] 2–3 internal links
- [ ] Schema: Org + Breadcrumb
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
- [ ] **Pre-launch:** legal review of draft copy
