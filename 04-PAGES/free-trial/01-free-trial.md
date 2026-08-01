# Free Trial — Build Guide + Copy (`/free-trial/`)

Target keyword: **free quran classes online** (transactional — unique). This is the site's main conversion landing page — build it carefully and test the form.

## Setup

- Page **Free Trial**, slug `/free-trial/`, template Elementor Full Width.

## S1. Hero — blue band, conversion-focused

- `qly-hero`, two columns: left = pitch (text), right = **the form card** (form is the star).
- **Eyebrow:** `FREE TRIAL` (`#F2C94C`)
- **H1 (only one):** `Book Free Quran Classes Online — Your 30-Minute Trial`
- **Body:** `Try QuranlyHub free — a 30-minute online Quran class with a certified teacher, a level assessment, and a recommendation for your next step. No card. No commitment.`
- **Checklist** (`fa-check` `#F2C94C`):
  - 1-on-1 with a certified, background-checked teacher
  - Level assessment + course recommendation
  - Female teachers available on request
  - Slots 7 days a week, every timezone
- **Form card** (right column, white `qly-card qly-card-arch`, padding 28):

  **Elementor Pro Form widget — fields:**
  1. Name (text, required)
  2. Email (email, required)
  3. WhatsApp number (tel, required)
  4. Country (select: UK, USA, Canada, Australia, Other)
  5. Student age (select: Under 5, 5–12, 13–17, 18+, Adults 18–40, 40+)
  6. Course interest (select: Noorani Qaida, Nazra, Hifz, Tajweed, Quran Translation, Tafseer, Islamic Studies, Not sure yet)
  7. Preferred time (select: Morning, Afternoon, Evening, Night — or a date/time picker)
  Submit button: `Book My Free Trial`

  **Actions after submit:**
  - `Email` → admin address (student details)
  - `Webhook` → WhatsApp notification (see `00-SETUP/01-theme-plugins-install.md` step 5)
  - Success message: `JazakAllah Khair! Your free trial is booked. We'll WhatsApp you within 24 hours to confirm your teacher and slot.`
  - Spam filter: honeypot ON, reCAPTCHA v3 ON (or Cloudflare Turnstile — lighter).

- Mobile: text first, form below it — the form must be fully visible and tappable on a phone.

## S2. What you get in the trial — white

- `qly-section`. Eyebrow `YOUR FREE TRIAL` (`#B8850F`). H2 `What Happens in Your 30-Minute Trial`.
- 4 step cards (`qly-card`):
  1. **Meet your teacher** — `A certified, background-checked teacher matched to your level and goals.`
  2. **Level assessment** — `The teacher checks your reading and places you at the right starting point.`
  3. **Mini-lesson** — `You experience a real lesson — Makharij, Qaida page, or a Tajweed rule — tailored to you.`
  4. **Clear next step** — `You leave knowing your level, your recommended course and your plan.`

## S3. Social proof — white (compact)

- Centered strip: `5,000+ Students` · `60+ Countries` · `4.9/5 Parent Rating` — gold numbers, deep-blue text.

## S4. FAQ — white

- Eyebrow `FAQ`. H2 `Free Trial Questions`. FAQ widget; schema in `02-free-trial-seo.md`.
  1. **Is the free trial really free?** — `Yes. A full 30-minute trial class with a certified teacher. We don't ask for a card, and there's no obligation to continue.`
  2. **How long is the trial?** — `30 minutes — enough to assess your level, meet your teacher and experience a real lesson.`
  3. **What if I'm a complete beginner?** — `Perfect. The trial is designed for beginners — we start from your level, even if that's the very first letter.`
  4. **Do I need any equipment?** — `Just a smartphone, tablet or computer with internet. We provide all materials.`
  5. **Can I request a female teacher for the trial?** — `Yes — tell us in the form and we'll arrange a certified female teacher.`
  6. **What happens after the trial?** — `We send your level report, recommend a course, and you choose a plan — or walk away, free.`

## S5. Final CTA — gold block

- H2 `Still Unsure? WhatsApp Us.` Body `Message us anytime and we'll answer every question before you book.` Buttons: `WhatsApp Us` (`#123B57` pill, white) + ghost `See Full Pricing` → `/pricing/`.

## Alt text (Free Trial)

| Image | Alt |
|---|---|
| Decorative | `alt=""` (no photos needed on this page — keep it fast) |

## After building

Fill `02-free-trial-seo.md`, tick checklist, then **test the form end-to-end** (submit → email + WhatsApp webhook received) on both desktop and mobile before calling it done.
