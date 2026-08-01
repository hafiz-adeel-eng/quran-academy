# Courses Hub — Build Guide + Copy (`/courses/`)

Target keyword: **online quran classes**. Build order below is mobile-first (check each section on a phone before desktop).

## Setup

- Create page **Courses**, slug `/courses/`, template **Elementor Full Width**.
- Add `07-courses-css.css` alongside the home CSS (Astra Customizer → Additional CSS).

## S1. Hero — blue band

- Container `qly-hero`: `#123B57`, padding 64/64 (mobile 48/48). Centered text, max-width 720px.
- **Eyebrow:** `COURSES · ONLINE QURAN CLASSES` (`#F2C94C`)
- **H1 (only one):** `Online Quran Classes for Every Age and Level`
- **Body:** `From your first Noorani Qaida lesson to full Hifz and Tafseer — QuranlyHub offers 1-on-1 online Quran classes with certified teachers, for kids, adults, beginners and sisters.`
- **Buttons:** Primary gold `Book Free Trial` → `/free-trial/`; Secondary ghost `Compare Plans` → `/pricing/`.

## S2. Course categories — white

- Container `qly-section` white. Eyebrow `EXPLORE COURSES` (`#B8850F`). H2 `Find the Right Online Quran Class for You`.
- **3 category groups**, each with course cards (`qly-card qly-card-arch`):

### Quran & Tajweed
1. **Noorani Qaida Course** — `Start reading the Quran from zero. Best for complete beginners.` → `/courses/noorani-qaida/`
2. **Nazra (Quran Reading) Course** — `Read the Quran fluently with correct pronunciation.` → `/courses/nazra/`
3. **Hifz (Memorization) Course** — `Memorise the Quran with a structured, tested plan.` → `/courses/hifz/`
4. **Tajweed Course** — `Recite with perfect Makharij and Tajweed rules.` → `/courses/tajweed/`

### Arabic Language
5. **Quran Translation Course** — `Understand what you recite, word by word.` → `/courses/quran-translation/`
6. **Arabic Language Course** — `Build Arabic reading and grammar foundations for the Quran.` → `/courses/arabic-language/`

### Islamic Studies
7. **Tafseer Course** — `Study the meaning and context of the Quran.` → `/courses/tafseer/`
8. **Basic Islamic Studies Course** — `Duas, Salah, Seerah and everyday Islamic knowledge.` → `/courses/basic-islamic-studies/`

Each card: icon circle (see design system), H3 (Cormorant 22 `#123B57`), one-line description, `Learn more →` gold link.
*Cards 1 and 4 (this increment's live pages) link to the real pages; the other six link to `/courses/<slug>/` and are built next.*

## S3. Who are you learning for? — white

- Eyebrow `FOR EVERYONE`. H2 `Online Quran Classes for Kids, Adults, Beginners and Sisters`.
- **4 audience cards** (`qly-card`):
  - **Kids** — `Patient teachers, short engaging lessons and progress reports for parents.` → `/online-quran-classes-for-kids/`
  - **Adults** — `Flexible timings that fit work and family life.` → `/online-quran-classes-for-adults/`
  - **Beginners** — `Start from the alphabet with zero prior knowledge.` → `/online-quran-classes-for-beginners/`
  - **Sisters** — `Learn from certified female Quran teachers, on your schedule.` → `/online-quran-classes-for-sisters/`
- Note: these landing pages are built in a later increment — the cards are the internal links to them.

## S4. How classes work — white

- Eyebrow `HOW IT WORKS`. H2 `How Our Online Quran Classes Work`.
- 4 mini steps (icon circles): `1. Free trial & level check` → `2. Teacher match` → `3. 1-on-1 live lessons` → `4. Progress reports & certificates`.
- Copy:
  1. `We assess your current level in a free 30-minute trial class.`
  2. `We match you with a certified teacher suited to your age, level and goals.`
  3. `Live 1-on-1 lessons on any device — Zoom or your preferred platform.`
  4. `Monthly progress reports for parents and a certificate for every completed level.`

## S5. Pricing snapshot — white

- Eyebrow `PRICING`. H2 `Simple Monthly Pricing`.
- 3 cards (reuse the Home S4 pattern, `qly-pricing-card` for the Standard highlight):
  - **Free Trial** `£0` — `1 free class` → `Start Free Trial`
  - **Standard** `£49 /month` — `5 classes per week` — MOST POPULAR
  - **Family** `£69 /month` — `5 classes per week · up to 4 children`
- All → `/pricing/`. Ghost link `See full pricing →`.

## S6. FAQ — white

- Eyebrow `FAQ`. H2 `Online Quran Classes — Your Questions, Answered`.
- Pro FAQ widget (accordion). Copy below. FAQPage schema in `02-courses-hub-seo.md`.
  1. **Which online Quran class should I start with?** — `If you are a complete beginner, start with Noorani Qaida. If you can already read the Quran, a Nazra or Tajweed class will polish your recitation. Book a free trial and we will recommend the right level.`
  2. **Do online Quran classes work for kids?** — `Yes. Our kids' classes are short (20–30 minutes), interactive and fun, with patient teachers and regular progress reports so you always know how your child is doing.`
  3. **Can adults learn online?** — `Absolutely — many of our students are adults learning for the first time. Lessons are 1-on-1 and scheduled around work and family.`
  4. **Are the teachers certified?** — `Every QuranlyHub teacher holds an Ijazah or recognised certification, is background-checked and personally interviewed before joining.`
  5. **How much do online Quran classes cost?** — `Plans start free with a trial, then from £49/month for 5 classes per week. No hidden fees, cancel anytime.`
  6. **What do I need to join a class?** — `Just a smartphone, tablet or computer with internet. Your teacher shares the screen and all materials with you.`

## S7. Final CTA — gold block

- `qly-cta-gold`: H2 `Not Sure Where to Start? Book a Free Trial.` Body `We will assess your level and recommend the right online Quran class — no card, no commitment.` Button deep-blue pill `Book Free Trial` → `/free-trial/`.

## Alt text (hub)

| Image | Alt |
|---|---|
| Hero | `Online Quran classes at QuranlyHub — 1-on-1 lessons with certified teachers` |
| Decorative | `alt=""` |

## After building

Fill `02-courses-hub-seo.md`, tick `05-CHECKLISTS/per-page-seo-checklist.md`, check on a real phone.
