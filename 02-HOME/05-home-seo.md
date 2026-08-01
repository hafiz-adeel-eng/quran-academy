# Home Page SEO — QuranlyHub

Everything in this file is applied while building the Home page (the brief's non-negotiable rule: SEO is built with the page, never added later).

## 1. Target keyword

**`online quran academy`** — no other page on the site targets this exact phrase.
Natural variants (used once or twice, not stuffed): *learn quran online, online quran classes, quran with tajweed, certified quran teachers, quran academy for kids*.

## 2. Title tag (≤ 60 chars)

`Online Quran Academy | Learn Quran Online — QuranlyHub`
*(56 chars — keyword first, brand last)*

## 3. Meta description (≤ 155 chars, has CTA)

`QuranlyHub is a trusted online Quran academy offering 1-on-1 Quran, Tajweed and Hifz classes with certified tutors. Book your free trial today.`
*(133 chars)*

## 4. URL / slug

`https://quranlyhub.com/` (home) — canonical set to itself. Rank Math handles the canonical automatically; verify it renders `rel="canonical" href="https://quranlyhub.com/"`.

## 5. On-page structure

- **Exactly one H1:** "Your Online Quran Academy for a Lifetime of Guidance" — keyword present in the H1.
- **H2 order:** Why Families Choose Our Online Quran Academy → 3 Simple Steps to Start → Simple, Affordable Plans → Explore Our Online Courses → (Stats, no heading) → What Our Students & Parents Say → Learn From Hand-Picked Teachers → Learn More About Quran Learning → Begin Your Quran Journey Today. No skipped levels (H1 → H2 → H3 on cards).
- Keyword + variants appear naturally in the **first 100 words** (hero subheadline): "online Quran academy trusted by families in 60+ countries. Learn Quran online with certified, hand-picked teachers…"

## 6. Internal links (minimum 2–3, Home has more)

| From | To | Anchor |
|---|---|---|
| Hero CTA | `/free-trial/` | Book Free Trial — Start Today |
| Hero CTA | `/courses/` | Explore Courses |
| Why Us card 1 | `/quran-classes-in-uk/` (+ USA/CA/AU pages when built) | UK, USA, Canada, Australia |
| Pricing section | `/pricing/` | See full pricing & payment options |
| Course categories | `/courses/` | View all Quran courses / Arabic / Islamic courses |
| Tutors | `/tutors/` | View profile |
| Blog | `/blog/…` (3 posts) | article titles |
| Footer | all hubs | site-wide |

## 7. Schema markup (JSON-LD)

Paste into Rank Math → Schema (single schema with `@graph`) or a Custom HTML widget before `</body>`. Never hand-write into two places (Rank Math OR manual — not both, to avoid duplication).

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://quranlyhub.com/#organization",
      "name": "QuranlyHub",
      "url": "https://quranlyhub.com/",
      "logo": "https://quranlyhub.com/wp-content/uploads/logo-quranlyhub.png",
      "description": "Online Quran academy offering 1-on-1 Quran, Tajweed, Hifz and Islamic Studies classes with certified tutors.",
      "sameAs": [
        "https://www.facebook.com/quranlyhub",
        "https://www.instagram.com/quranlyhub",
        "https://www.youtube.com/@quranlyhub"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+44-7700-900123",
        "contactType": "customer service",
        "areaServed": "Worldwide",
        "availableLanguage": ["English", "Urdu"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://quranlyhub.com/#website",
      "url": "https://quranlyhub.com/",
      "name": "QuranlyHub",
      "publisher": { "@id": "https://quranlyhub.com/#organization" },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://quranlyhub.com/?s={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://quranlyhub.com/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is QuranlyHub suitable for complete beginners?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Most of our students start from zero, many with the Noorani Qaida course. Every student is assessed in a free trial and matched to a teacher and level that fits them."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer online Quran classes for kids?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we specialise in online Quran classes for kids, with patient teachers, short engaging lessons, games and monthly progress reports for parents."
          }
        },
        {
          "@type": "Question",
          "name": "Can sisters learn from female Quran teachers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can request a female Quran teacher at booking and we will match you with one, with flexible timings."
          }
        },
        {
          "@type": "Question",
          "name": "What do I need to start online Quran classes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A smartphone, tablet or computer with an internet connection. Lessons run 1-on-1 over video call, so no special software is needed."
          }
        },
        {
          "@type": "Question",
          "name": "How much do online Quran classes cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Plans start with a free trial, then affordable monthly packages from around £49/month for 5 classes per week. See our Pricing page for full details."
          }
        },
        {
          "@type": "Question",
          "name": "What happens if I miss a class?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Just tell us before the class and we will reschedule it to a slot that suits you — we never make you pay for classes you miss."
          }
        }
      ]
    }
  ]
}
```

> The FAQ block on Home is the *homepage* FAQ. Course pages get their **own, different** FAQ blocks later — never duplicate this exact block elsewhere.

## 8. Open Graph + Twitter Card (Home override)

- **og:title:** `Online Quran Academy | Learn Quran Online — QuranlyHub`
- **og:description:** same as meta description above
- **og:image:** 1200×630 brand card (blue bg, gold logo + tagline) — set per-page in Rank Math
- **og:type:** `website`
- Twitter card: `summary_large_image` with same image.

## 9. Images & speed on Home

- Every image WebP + compressed (ShortPixel), lazy-loaded except the hero image (that one stays `fetchpriority=high`, preloaded — it's the LCP).
- Fixed `width`/`height` attributes on every image → zero CLS.
- Fonts: only Cormorant 600/700, Inter 400/600, Amiri (weights used). Preconnect to Google Fonts.
- No heavy animation libraries — count-up is the vanilla JS in `04-home-countup.js`; carousel is Elementor Pro's native widget.
- WP Rocket: cache enabled, CSS/JS minified + combined, remove unused CSS on.

## 10. Homepage checklist — tick every box

- [ ] Target keyword decided (online quran academy) — no other page uses it
- [ ] Title ≤ 60 chars, keyword first ✓
- [ ] Meta ≤ 155 chars with CTA ✓
- [ ] Exactly one H1 containing the keyword ✓
- [ ] Logical H2/H3, no skipped levels ✓
- [ ] Keyword + variants in first 100 words ✓
- [ ] Clean slug `/` + self-canonical ✓
- [ ] Descriptive alt text on every image ✓
- [ ] 2–3+ internal links (Hero, Why Us, Pricing, Courses, Tutors, Blog, Footer) ✓
- [ ] Schema: Organization + WebSite + FAQPage (+ Review/AggregateRating once real reviews exist) ✓
- [ ] OG + Twitter card set ✓
- [ ] Mobile check: no layout shift, ≥16px text, 44px touch targets ✓
- [ ] Speed: WebP, lazy-load, no render-blocking scripts, LCP preloaded hero ✓
