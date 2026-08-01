# 01 — Install WordPress, Theme & Plugins

Do this once. Every later step depends on it.

## 1. WordPress (self-hosted)

- Fresh WordPress install on your host (SiteGround, Hostinger, WP Engine, etc.).
- **SSL/HTTPS on from day one** — set it in the host dashboard before building anything. No mixed-content at launch.
- Set permalinks to **Post name**: Settings → Permalinks → *Post name*. (Gives clean slugs like `/online-quran-classes-for-kids/`.)
- Set the timezone to your target audience's primary zone (e.g. Europe/London).

## 2. Theme: Astra (Free)

Astra is a lightweight base — no bloat, no visual noise, mobile-first out of the box.

- Install → Appearance → Themes → Add New → search **Astra** → Install → Activate.
- Keep Astra's default styling minimal; all visual design lives in Elementor so the theme never fights it.

## 3. Elementor

- **Elementor (Free)** — core builder.
- **Elementor Pro** — required for: Theme Builder (header/footer), Testimonial Carousel, Posts grid, Form widget, Custom Code, motion effects/sticky. Install + activate. Enter your license.

> Free fallback: if Pro is not approved yet, `04-GLOBAL-TEMPLATES/reusable-sections.md` documents free-only versions of the carousel and header. Everything else on the Home build guide can be done with Free Elementor except where marked (Pro).

## 4. Plugin stack (kept deliberately small — each one costs load time)

| Plugin | Why |
|---|---|
| Rank Math SEO (Free) | Titles/metas, schema, sitemap, OG/Twitter, canonical — config in `00-SETUP/03-seo-tools-setup.md` |
| WP Rocket (or a comparable cache) | Page cache, CSS/JS minify + combine, lazy-load, WebP via CDN/lazy offload. One caching plugin, never two |
| ShortPixel (or Imagify) | Compress + convert all uploads to WebP, auto-lazy-load |
| Elementor Pro | Included above |

**Do NOT add:** extra slider plugins, animation plugins, mega menus, page-builder hybrid plugins, etc. The testimonial carousel is native/CSS (see `04-GLOBAL-TEMPLATES`).

## 5. Form for Free Trial / Contact

- Use the **Elementor Pro Form** widget (no extra plugin, no bloat).
- In the form's **Actions after submit**: `Email` (to your address) **and** `Webhook` → a Zapier/Make webhook that sends a WhatsApp message to your number (WhatsApp Cloud API or a simple service). This covers the "contact/trial-booking form connected to email + WhatsApp notification" requirement with zero extra plugins.
- Add `Admin Email`/`Reply-to` as the student's email, and `Success Message` copy from `02-HOME/02-home-copy.md`.

## 6. Multilingual-ready (later, not now)

- Structure the site so pages don't hard-code language strings (all copy lives in Elementor content).
- When the Urdu add-on is approved: install **Polylang** or **WPML**, duplicate pages, translate. No structural changes needed.

## Next

Run `02-global-colors-and-fonts.md`, then `03-seo-tools-setup.md`, then start the Home build in `02-HOME/`.
