# Pricing — Build Guide + Copy (`/pricing/`)

Target keyword: **online quran classes cost** (commercial — unique). Mobile-first.

## Setup

- Page **Pricing**, slug `/pricing/`, template Elementor Full Width. Uses home global CSS + course CSS.

## S1. Hero — blue band

- `qly-hero` centered. Eyebrow `PRICING` (`#F2C94C`). H1 (only one): `Online Quran Classes Pricing at QuranlyHub`.
- Body: `Simple, honest pricing for online Quran classes — a free trial to start, then one clear monthly plan that includes everything. No hidden fees, no contracts, cancel anytime.`
- Trust line: `5,000+ students · 4.9/5 rating · No card required for trial`

## S2. Plan cards — white

- `qly-section`. Eyebrow `CHOOSE YOUR PLAN` (`#B8850F`). H2 `Plans That Fit Every Family`.
- **4 cards** (1 col mobile, 4 cols desktop). Standard = blue highlight (`qly-pricing-card`), others white (`qly-card`):
  1. **Free Trial** — `£0` — *1 free class* — One 30-minute trial class · Level assessment · Meet your teacher — Button `Book Free Trial` → `/free-trial/`
  2. **Basic** — `£39/month` — *3 classes/week* — 1-on-1 lessons · Progress reports — Button `Choose Basic` → `/free-trial/`
  3. **Standard** — `£49/month` — *5 classes/week* — MOST POPULAR — 1-on-1 lessons · Progress reports · Level certificates · Priority scheduling — Button `Choose Standard` → `/free-trial/`
  4. **Family** — `£69/month` — *5 classes/week · up to 4 children* — Everything in Standard · Family dashboard · Shared teacher match — Button `Choose Family` → `/free-trial/`
- Price color: `#B8850F` on white cards, `#F2C94C` on the blue card. Cormorant 40.

## S3. Feature comparison — white

- H2 `What Every Plan Includes`. **Table** (Elementor table or a styled grid — keep it a real `<table>` for mobile scroll):
  Rows: 1-on-1 live lessons · Ijazah-certified teachers · Free level assessment · Monthly progress reports · Level certificates · Free rescheduling · Female teachers available · WhatsApp support.
  Columns: Free Trial / Basic / Standard / Family — `✓` (`#D4A017`) or `—`.
- All rows `✓` for Standard+Family except where noted (Free Trial = trial only).

## S4. Payment & value — white

- H2 `No Hidden Costs, Ever`. 3 mini-cards:
  - **Everything included** — `Materials, lesson plans and reports are included — no add-ons, no surprise fees.`
  - **Flexible payment** — `Pay by card, bank transfer, PayPal or mobile payment — monthly, no contracts.`
  - **Pause or cancel** — `Skip a month or cancel any time before your next billing date.`

## S5. FAQ — white

- Eyebrow `FAQ`. H2 `Pricing Questions, Answered`. FAQ widget; schema in `02-pricing-seo.md`.
  1. **What does an online Quran class cost?** — `Plans start with a free trial, then from £39/month for 3 classes a week or £49/month for 5 classes. Family plans are available for up to 4 children.`
  2. **Is the trial really free?** — `Yes — a full 30-minute trial class with a certified teacher. No card, no commitment.`
  3. **How do I pay?** — `By card, bank transfer, PayPal or mobile payment, billed monthly. You can change or cancel at any time.`
  4. **Are there discounts for siblings?** — `Yes — our Family plan covers up to 4 children, and we offer sibling discounts on request.`
  5. **What if I miss a class?** — `With notice, we reschedule free — you're never charged for a class you couldn't attend.`
  6. **Do you price in other currencies?** — `Yes — we have local pricing for the UK, USA, Canada and Australia. See our country pages for details.`

## S6. Final CTA — gold block

- H2 `Pick Your Plan and Start Learning.` Body `Not sure? Start with the free trial — nothing to lose, a lifetime of guidance to gain.` Button `Book Free Trial` → `/free-trial/`.

## After building

Fill `02-pricing-seo.md`, tick checklist, check on phone (table must scroll cleanly on mobile).
