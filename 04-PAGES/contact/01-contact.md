# Contact Us — Build Guide + Copy (`/contact/`)

Target keyword: **contact quranlyhub** (unique). Mobile-first. This page handles general enquiries (trials have their own page/form at `/free-trial/`).

## Setup

- Page **Contact Us**, slug `/contact/`, template Elementor Full Width. Uses home global CSS.

## S1. Hero — blue band

- `qly-hero` centered. Eyebrow `CONTACT US` (`#F2C94C`). H1 (only one): `Contact QuranlyHub — We're Here to Help`.
- Body: `Questions about courses, pricing or scheduling? Message us any time — our team replies within a few hours, 7 days a week, and we always answer in English (and Urdu).`
- Quick line: `Average reply time: under 4 hours`

## S2. Contact cards — white

- `qly-section`. H2 `Reach Us Any Way You Like`.
- **4 icon cards** (`qly-card`, icon circles `#D4A017`):
  1. **WhatsApp** (`fa-whatsapp`) — `+44 7700 900123` — `Fastest reply — message us anytime` → link `https://wa.me/447700900123`
  2. **Email** (`fa-envelope`) — `salam@quranlyhub.com` — `For questions and course advice` → `mailto:salam@quranlyhub.com`
  3. **Support hours** (`fa-clock`) — `24/7 support for students` — `Scheduling help around the clock`
  4. **Location** (`fa-map-marker-alt`) — `London, United Kingdom` — `Serving students worldwide`

## S3. Contact form — white

- H2 `Send Us a Message`.
- **Elementor Pro Form** fields:
  1. Name (text, required)
  2. Email (email, required)
  3. Subject (select: Course question, Pricing, Scheduling, Feedback, Other)
  4. Message (textarea, required)
  Submit: `Send Message`
- **Actions after submit:** `Email` → admin address; `Webhook` → WhatsApp notification (same setup as `/free-trial/`). Success message: `JazakAllah Khair! Your message has been sent — we'll reply within a few hours.`
- Spam: honeypot ON + reCAPTCHA v3 / Turnstile.

## S4. FAQ — white

- Eyebrow `FAQ`. H2 `Quick Answers Before You Ask`. FAQ widget; schema in `02-contact-seo.md`.
  1. **How fast do you reply?** — `Usually within a few hours, 7 days a week — fastest on WhatsApp.`
  2. **Where are you based?** — `Our team is based in the UK and serves students in 60+ countries worldwide.`
  3. **Can I contact you in Urdu?** — `Yes — our team answers in both English and Urdu.`
  4. **How do I book a class?** — `The quickest way is our free trial page — choose a course and time, and we'll confirm by WhatsApp.`

## S5. Final CTA — gold block

- H2 `Prefer to Just Start Learning?` Body `Skip the questions and book your free trial — it takes 30 seconds.` Button `Book Free Trial` → `/free-trial/`.

## Alt text

No photos needed on this page (keep it fast) — decorative images `alt=""`.

## After building

Fill `02-contact-seo.md`, tick checklist, **test the form end-to-end** on mobile + desktop, check on a phone.
