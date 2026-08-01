# Tajweed Course — Build Guide + Copy (`/courses/tajweed/`)

Target keyword: **learn tajweed online**. Mobile-first build order.

## Setup

- Create page **Tajweed Course**, slug `/courses/tajweed/`, template **Elementor Full Width**.
- Add `07-courses-css.css`. Reuse global classes (`qly-hero`, `qly-section`, `qly-card`, `qly-icon-circle`, `qly-cta-gold`, `qly-pricing-card`).

## S1. Hero — blue band

- Container `qly-hero` two columns (text 60% / image 40%; image below text on mobile).
- **Eyebrow:** `TAJWEED · ONLINE QURAN CLASSES` (`#F2C94C`)
- **H1 (only one):** `Learn Tajweed Online and Recite the Quran Beautifully`
- **Body:** `Tajweed is the art of reciting the Quran with perfect articulation and rhythm. Our online Tajweed classes teach you Makharij, Sifaat and the rules of recitation — 1-on-1 with certified Quran teachers, from your own home.`
- **Buttons:** `Book Free Tajweed Trial` → `/free-trial/`; ghost `See All Courses` → `/courses/`.
- **Trust line:** `For students who can already read · Beginners welcome · Female teachers available`
- **Image:** `03-ASSETS/placeholder-hero.svg` (swap for a real recitation lesson photo). Alt: `Student learning Tajweed rules online with a QuranlyHub teacher — online tajweed classes`.

## S2. What you'll learn — white

- Eyebrow `CURRICULUM`. H2 `What You'll Learn in Our Online Tajweed Course`.
- **5 curriculum cards** (`qly-card`, check icons `#D4A017`):
  1. **Makharij — points of articulation** — `Pronounce every letter precisely from its correct place, correcting common mistakes.`
  2. **Sifaat — attributes of letters** — `Master the characteristics that give each letter its quality, clarity and weight.`
  3. **Rules of Noon & Meem** — `Ikhfa, Idgham, Iqlab and the rules of Meem Saakinah, applied in real verses.`
  4. **Qalqalah, Madd & Waqf** — `Echo sounds, correct elongation and where to stop when reciting.`
  5. **Practical recitation** — `Apply every rule while reciting the Quran with your teacher — rule by rule, page by page.`

## S3. Course structure — white

- Eyebrow `STRUCTURE`. H2 `How Our Tajweed Course Works`.
- **3 mini-cards** (`qly-card`):
  - **Levels** — `Beginner, intermediate and advanced — we assess you in the free trial and place you correctly.`
  - **Lessons** — `30–45 minutes, 1-on-1, 3–5 times a week at times that suit you.`
  - **Assessment** — `A monthly recitation check with a written report so you always see your progress.`

## S4. Who it's for — white

- Eyebrow `WHO IT'S FOR`. H2 `Tajweed Online for Every Student`.
- 4 audience cards (links to future audience pages):
  - **Adults** → `/online-quran-classes-for-adults/` — `Perfect your recitation around work and family.`
  - **Beginners** → `/online-quran-classes-for-beginners/` — `Start with correct habits from day one.`
  - **Kids** → `/online-quran-classes-for-kids/` — `Engaging Tajweed lessons for young reciters.`
  - **Sisters** → `/online-quran-classes-for-sisters/` — `Certified female teachers available.`

## S5. Why this course — white

- Eyebrow `WHY TAJWEED`. H2 `Why Learn Tajweed Online With QuranlyHub?`.
- 3 icon features:
  1. **Correct from the start** — `Makharij and rules taught properly now, so bad habits never take root.` (icon `fa-check-circle`)
  2. **Ijazah-certified teachers** — `Trained in the science of Tajweed, with years of recitation experience.` (icon `fa-award`)
  3. **Recite with confidence** — `Read aloud beautifully at the Masjid, at home and in Tarawih.` (icon `fa-quran`)

## S6. Pricing snapshot — white

- Eyebrow `PRICING`. H2 `Affordable Tajweed Classes Online`.
- 3 cards as the Home S4 pattern (`qly-pricing-card` highlight): Free Trial `£0` · Standard `£49/month` (MOST POPULAR) · Family `£69/month`. All → `/pricing/`.

## S7. FAQ — white

- Eyebrow `FAQ`. H2 `Tajweed — Your Questions, Answered`.
- FAQ widget. FAQPage schema in `06-tajweed-seo.md`.
  1. **What is Tajweed?** — `Tajweed means making something beautiful. In Quran recitation, it is the set of rules for articulating every letter correctly — from where it is pronounced to how long it is held.`
  2. **Do I need to read the Quran already?** — `Yes, ideally. This course is designed for students who can already read Arabic words. If you cannot read yet, start with Noorani Qaida first.`
  3. **How long does it take to learn Tajweed?** — `With 3–5 lessons a week, most students complete the full rules in 6–12 months, then practise by reciting with a teacher.`
  4. **Can I learn Tajweed online?** — `Yes — online is the best way. 1-on-1 lessons let the teacher hear every sound clearly and correct you in real time, on any device.`
  5. **Can I request a female teacher?** — `Yes. Request a certified female Quran teacher at booking and we will match you.`
  6. **Will I get a certificate?** — `Yes — a Tajweed completion certificate for every level you finish.`

## S8. Final CTA — gold block

- H2 `Recite the Quran the Way It Should Be Recited.` Body `Book your free Tajweed trial — we will assess your recitation and start you at the perfect level.` Button `Book Free Trial` → `/free-trial/`.

## Alt text (Tajweed)

| Image | Alt |
|---|---|
| Hero | `Student learning Tajweed rules online with a QuranlyHub teacher — online tajweed classes` |
| Decorative | `alt=""` |

## After building

Fill `06-tajweed-seo.md` (Course schema + FAQPage), tick the checklist, check on a phone.
