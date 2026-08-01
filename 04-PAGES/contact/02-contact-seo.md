# Contact Us — SEO (`/contact/`)

## 1. Target keyword
**`contact quranlyhub`** (brand/transactional — unique).

## 2. Title tag
`Contact Us | QuranlyHub` *(22 chars)*

## 3. Meta description (≤ 155, CTA)
`Contact QuranlyHub — WhatsApp, email or message us any time, 7 days a week. We reply within a few hours. Or book your free trial in 30 seconds.` *(144 chars)*

## 4. URL / canonical
`https://quranlyhub.com/contact/` — self-canonical.

## 5. On-page structure
- **One H1:** "Contact QuranlyHub — We're Here to Help"
- H2 order: Reach Us Any Way You Like → Send Us a Message → Quick Answers Before You Ask → Prefer to Just Start Learning?
- Keyword in H1 + first 100 words. ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| FAQ 4 | `/free-trial/` | free trial page |
| Final CTA | `/free-trial/` | Book Free Trial |
| WhatsApp card | external `https://wa.me/447700900123` | WhatsApp |
| Footer (site-wide) | `/free-trial/`, `/courses/` | Free Trial / Courses |

## 7. Schema
`@graph`: Organization (its `contactPoint` already covers this) + BreadcrumbList (Home → Contact) + FAQPage.

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Contact Us", "item": "https://quranlyhub.com/contact/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How fast do you reply?",
          "acceptedAnswer": { "@type": "Answer", "text": "Usually within a few hours, 7 days a week — fastest on WhatsApp." }
        },
        {
          "@type": "Question",
          "name": "Where are you based?",
          "acceptedAnswer": { "@type": "Answer", "text": "Our team is based in the UK and serves students in 60+ countries worldwide." }
        },
        {
          "@type": "Question",
          "name": "Can I contact you in Urdu?",
          "acceptedAnswer": { "@type": "Answer", "text": "Yes — our team answers in both English and Urdu." }
        },
        {
          "@type": "Question",
          "name": "How do I book a class?",
          "acceptedAnswer": { "@type": "Answer", "text": "The quickest way is our free trial page — choose a course and time, and we'll confirm by WhatsApp." }
        }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title = title; og:description = meta; og:image = brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `contact quranlyhub` unique
- [ ] Title short & clean
- [ ] Meta ≤ 155 with CTA
- [ ] One H1
- [ ] Logical H2s
- [ ] Keyword in first 100 words
- [ ] Clean slug + canonical
- [ ] Alt text (no photos)
- [ ] 2–3+ internal links
- [ ] Schema: Org + Breadcrumb + FAQPage
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed
- [ ] **Form tested end-to-end** (email + WhatsApp)
