# Design System — QuranlyHub (single source of truth)

Locked once in `00-SETUP/02-global-colors-and-fonts.md`. Every page, section, button, and card inherits these tokens. **Do not invent new shades per page.**

## 1. Color tokens

| Token | Hex | Used for |
|---|---|---|
| White | `#FFFFFF` | Main canvas, card backgrounds |
| Deep blue | `#123B57` | Hero, Stats band, Pricing card, Footer, **body text on white** |
| Mid blue | `#1B5A82` | Hover states, links on blue |
| Light gold | `#F2C94C` | Headings, eyebrows, highlight numbers **on blue** only |
| Deep gold | `#B8850F` | Headings, links, small text **on white** only |
| Medium gold | `#D4A017` | Buttons, icon circles, final CTA block background |
| Border tint | `rgba(18,59,87,.14)` | Card borders |
| Shadow | `0 2px 14px rgba(18,59,87,.05)` | Card shadows |

**No black anywhere.** Dark text = deep blue. Light gold never sits on white. Gold/blue never mixed randomly.

### Contrast (AA-safe combos only)

- White on `#123B57` ≈ 11.6:1 — **AAA** ✓
- `#F2C94C` on `#123B57` ≈ 9.0:1 — **AAA** ✓ (headings on blue)
- `#123B57` on white ≈ 11.1:1 — **AAA** ✓ (body text)
- `#B8850F` on white ≈ 4.1:1 — **AA** for large/bold text ✓ (headings/links on white)
- White on `#D4A017` ≈ 2.7:1 — **large-text only** ✓ (use bold 16px+ buttons; never small body text in gold buttons)
- On the gold CTA block, text = deep blue `#123B57` (≈ 11:1) or white for large headings.

## 2. Rhythm: alternating bands

The page alternates **white** sections with **deep blue** bands:

```
Header (white) → Hero (blue) → Why Us (white) → Steps (white) → Pricing snapshot (white, pricing card blue)
→ Course categories (white) → Stats (blue) → Testimonials (white) → Tutors (white)
→ Blog (white) → Final CTA (gold) → Footer (blue)
```

This is what gives mishkahacademy.com its airy rhythm. One blue band, then plain white, then a band again — never two heavy bands side by side.

## 3. Typography

- **Headings:** Cormorant Garamond 600/700 — serif, elegant (evokes the "Quranly" wordmark).
- **Body / UI / buttons:** Inter 400/600.
- **Arabic/Quranic text:** Amiri.
- Scale + line-heights: `00-SETUP/02-global-colors-and-fonts.md → D`.

## 4. Buttons

| Style | Fill | Text | Radius | Hover |
|---|---|---|---|---|
| Primary CTA | `#D4A017` | `#FFFFFF` bold 16 | 50px pill | `#B8850F` |
| Secondary (on white) | `#123B57` | `#FFFFFF` | 50px pill | `#1B5A82` |
| Secondary (on blue) | outline 1px `#FFFFFF` | `#FFFFFF` | 50px pill | fill `#1B5A82` |
| Ghost link | none | `#B8850F` + underline | — | darker gold |

Min touch target: **44×44px**, at least 12px between adjacent tappable elements on mobile.

## 5. Cards

- Background white, border `1px solid rgba(18,59,87,.14)`, shadow `0 2px 14px rgba(18,59,87,.05)`.
- **Major cards** (hero card, pricing, course categories, tutor cards): mihrab-arch radius — `border-radius: 24px 24px 14px 14px` (arch feel on top, softer base).
- **Minor cards** (icon features, steps, blog): `border-radius: 14px`.
- Never a hard black border, never a heavy dark box.

## 6. Iconography

- Flat icons inside **solid circles**:
  - On white sections: circle `#D4A017`, glyph `#FFFFFF`, circle size 56px, icon 24px.
  - On blue sections: circle `#F2C94C`, glyph `#123B57`.
- One icon per feature/benefit block (globe, book, certificate, teacher, clock, payment).
- Use Elementor's built-in icon set / Font Awesome names (e.g. `fa-globe`, `fa-book`, `fa-award`, `fa-chalkboard-teacher`, `fa-clock`, `fa-credit-card`) — no extra icon plugin.

## 7. Spacing (mobile-first scale)

| Context | Desktop | Mobile |
|---|---|---|
| Section padding top/bottom | 88 / 88 | 48 / 48 |
| Column gap | 28 | 20 |
| Card padding | 32 | 24 |
| Eyebrow → heading gap | 12 | 10 |
| Heading → body gap | 14 | 12 |

## 8. Imagery rules

- Real, warm photos of students/teachers in online classes.
- Until a licensed photo exists: use the on-brand placeholder from `03-ASSETS/` (deep blue fill + thin gold mihrab arch) — **never** a generic gray box or random stock photo.
- Every image: WebP, compressed, lazy-loaded (below the fold), fixed width/height (no CLS), descriptive alt text.
- Decorative arabesque divider: `03-ASSETS/arabesque-divider.svg`, used sparingly as a thin 8–12px strip between a white section and a blue band. Not as a background texture anywhere.

## 9. Accessibility (non-negotiable)

- Body text ≥ 16px. Headings readable on real phone screens.
- Contrast per section 1 above.
- Every image has alt text; decorative images `alt=""`.
- Carousel is keyboard + swipe accessible (see `04-GLOBAL-TEMPLATES/reusable-sections.md`).
- Forms have labels, visible focus states.
