# 02 — Lock Global Colors & Fonts (Elementor Site Settings)

Elementor **Site Settings → Global Colors** and **Global Fonts** is the "lock it once" step.
Every new page, button, and section automatically inherits these. No designer picks shades per page afterwards.

## A. Global Colors (Site Settings → Global Colors)

Elementor Free gives 8 named color slots. Map them exactly:

| Slot | Value | Role |
|---|---|---|
| `Primary` | `#123B57` | Deep blue — accent bands (Hero, Stats, Pricing card, Footer), body text on white |
| `Secondary` | `#D4A017` | Medium gold — buttons, icon-circle fills, final CTA block background |
| `Text` | `#123B57` | Body text everywhere (deep blue, **never black**) |
| `Accent` | `#B8850F` | Deep gold — headings, links, small text **on white** |
| `Custom 1` | `#1B5A82` | Mid blue — link/button hover, secondary accents on blue |
| `Custom 2` | `#F2C94C` | Light gold — headings, eyebrows, highlight numbers **on blue** |
| `Custom 3` | `#FFFFFF` | White — card backgrounds, text on blue bands |
| `Custom 4` | `rgba(18,59,87,.14)` | Border tint — card borders (Enter in Elementor's color picker as `rgba(18,59,87,.14)`) |

Usage rules (enforced from the design system — never mixed randomly):

- **On white:** headings/links/small text use deep gold `#B8850F`. Never light gold `#F2C94C` (poor contrast on white).
- **On blue:** headings, eyebrows, highlight numbers use light gold `#F2C94C`. Text is white.
- **Buttons:** medium gold `#D4A017` background; icon circles `#D4A017` with white glyphs.
- **No black anywhere.** Body text = deep blue `#123B57`.

## B. Global Fonts (Site Settings → Global Fonts)

| Font slot | Family | Use |
|---|---|---|
| Primary | **Cormorant Garamond** (weights 500, 600, 700) | All headings — matches the logo wordmark serif |
| Secondary | **Inter** (400, 500, 600, 700) | Body, buttons, UI text |
| (on demand) | **Amiri** (400, 700) | Any Quranic/Arabic text (verse quotes, `القرآن`, Arabic lesson snippets) |

Load via **Elementor → Site Settings → Global Fonts** (Google Fonts). Keep only the weights above — every extra weight costs load time.

Performance:
- Preconnect to `fonts.googleapis.com` and `fonts.gstatic.com` (WP Rocket does this automatically, or add via Custom Code).
- Once live, consider self-hosting fonts with WP Rocket ("Font Optimization / local font hosting") — one less third-party request and better Core Web Vitals.

## C. Global Buttons (Site Settings → Global Buttons, Pro)

Set defaults so every CTA inherits the brand:

- **Primary button:** background `#D4A017`, text `#FFFFFF` (bold), radius `50` (pill), padding `16/28`.
- **Hover:** background `#B8850F`, text white.
- **Secondary button:** outline white on blue sections, or background `#123B57` with white text on white sections.

> Accessibility note: white on gold `#D4A017` is ~2.7:1 — acceptable for large/bold button text (WCAG large-text AA ≥ 3:1) but not for small body text. If a button ever needs small text, switch the text to deep blue `#123B57`.

## D. Global Typography Scale (apply per heading widget)

| Element | Font | Desktop | Mobile (768px & under) |
|---|---|---|---|
| H1 | Cormorant 600 | 54 | 32 |
| H2 | Cormorant 600 | 38 | 25 |
| H3 | Cormorant 600 | 24 | 20 |
| Body | Inter 400 | 16 | 16 |
| Eyebrow label | Inter 600, uppercase, letter-spacing 0.12em | 12 | 12 |
| Buttons | Inter 600 | 16 | 16 |
| Arabic text | Amiri | 36 | 28 |

Line-height: headings 1.15, body 1.6. Never go below 16px for body copy on mobile.
