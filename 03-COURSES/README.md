# Courses Increment — README

Build order for this increment (follows the brief: Courses hub + 2 sample course pages).

| File | Page |
|---|---|
| `01-courses-hub.md` | Courses hub (`/courses/`) |
| `02-courses-hub-seo.md` | Hub SEO + keyword map |
| `03-noorani-qaida.md` | Sample course page 1 — Noorani Qaida (`/courses/noorani-qaida/`) |
| `04-noorani-qaida-seo.md` | Noorani Qaida SEO + Course schema |
| `05-tajweed.md` | Sample course page 2 — Tajweed (`/courses/tajweed/`) |
| `06-tajweed-seo.md` | Tajweed SEO + Course schema |
| `07-courses-css.css` | CSS shared by all course pages |

The other 6 course pages (Nazra, Hifz, Quran Translation, Tafseer, Basic Islamic Studies, Arabic Language) and the 4 audience landing pages (Kids, Adults, Beginners, Sisters) reuse the exact same templates — build them in the next increments using these as the pattern.

## Site-wide keyword map (anti-cannibalization — no two pages share a target)

| Page | Target keyword |
|---|---|
| Home | online quran academy |
| **Courses hub** | **online quran classes** |
| Noorani Qaida | noorani qaida online |
| Tajweed | learn tajweed online |
| Nazra | nazra course online |
| Hifz | online hifz classes |
| Quran Translation | learn quran translation online |
| Tafseer | quran tafseer online |
| Basic Islamic Studies | online islamic studies for kids |
| Arabic Language | learn arabic online for quran |
| Kids landing | online quran classes for kids |
| Adults landing | online quran classes for adults |
| Beginners landing | learn quran for beginners |
| Sisters landing | online quran classes for sisters |
| UK country page | quran classes in uk |
| USA country page | quran classes in usa |
| Canada country page | quran classes in canada |
| Australia country page | quran classes in australia |

Blog posts target informational phrases (e.g. "what is tajweed", "noorani qaida for beginners") and interlink to these pages — never competing for the same commercial keyword.

## Build order (per page)

1. Read the page's `*.md` build guide → build in Elementor (mobile-first).
2. Paste copy from the guide.
3. Apply `07-courses-css.css` classes.
4. Fill in the page's `*-seo.md`: title/meta, H1, schema, internal links, OG/Twitter.
5. Tick `05-CHECKLISTS/per-page-seo-checklist.md` before moving to the next page.
