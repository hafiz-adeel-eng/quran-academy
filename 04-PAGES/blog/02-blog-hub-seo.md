# Blog Hub (Archive) — SEO (`/quran-learning-blog/`)

## 1. Target keyword
**`quran learning blog`** (archive-level; informational). Individual posts own their own keywords — never "quran learning blog".

## 2. Title tag
`Quran Learning Blog — Tips & Guides | QuranlyHub` *(47 chars)*

## 3. Meta description (≤ 155, CTA)
`Quran learning blog: practical guides from our certified teachers on choosing a teacher, Tajweed and Noorani Qaida. Learn Quran online with QuranlyHub.` *(151 chars)*

## 4. URL / canonical
`https://quranlyhub.com/quran-learning-blog/` — self-canonical. Rank Math: confirm the posts-page title/meta override is set (Settings → Reading → Posts page → set per-page title/meta via the page editor).

## 5. On-page structure
- **One H1:** "Quran Learning Blog — Guides, Tips and How-Tos"
- H2s: Latest From the Quran Learning Blog (above the posts grid) → Get One Quran Learning Tip a Week (if used) → Want to Go Deeper?
- Keyword at the **start** of the hero body ("Quran learning blog by QuranlyHub: practical, honest guides…"). ✓

## 6. Internal links
| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-quran-classes-online/` | Start With a Free Trial |
| Post cards | individual `/blog/<slug>/` | titles |
| Post category chips | `/category/<cat>/` | Tajweed / For Beginners / Quran Learning |
| Footer | `/online-quran-classes/`, `/online-quran-classes-cost/` | Courses / Pricing |

## 7. Schema — Blog + CollectionPage + Breadcrumb

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "Blog",
      "@id": "https://quranlyhub.com/quran-learning-blog/#blog",
      "name": "QuranlyHub Blog",
      "url": "https://quranlyhub.com/quran-learning-blog/",
      "publisher": { "@id": "https://quranlyhub.com/#organization" }
    },
    {
      "@type": "CollectionPage",
      "@id": "https://quranlyhub.com/quran-learning-blog/#webpage",
      "url": "https://quranlyhub.com/quran-learning-blog/",
      "isPartOf": { "@id": "https://quranlyhub.com/#website" },
      "about": "Learning the Quran online"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://quranlyhub.com/quran-learning-blog/" }
      ]
    }
  ]
}
```

## 8. OG + Twitter
og:title/description from title/meta; og:image = 1200×630 brand card; twitter `summary_large_image`.

## 9. Checklist
- [ ] Keyword `quran learning blog` unique
- [ ] Title ≤ 60 chars
- [ ] Meta ≤ 155 with CTA
- [ ] One H1
- [ ] Logical H2s
- [ ] Keyword in first 100 words
- [ ] Clean slug `/quran-learning-blog/` + canonical
- [ ] Alt text on every card image
- [ ] 2–3+ internal links
- [ ] Schema: Organization + Blog + CollectionPage + Breadcrumb
- [ ] OG + Twitter set
- [ ] Mobile + speed checks passed (cards full-width, fast grid)
