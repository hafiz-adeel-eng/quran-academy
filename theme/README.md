# Theme — Deploy via WP Pusher

This `theme/` folder is a real WordPress child theme (Hello Elementor parent) holding the QuranlyHub brand layer: fonts, colors, cards, buttons, grids, the count-up script and the testimonial carousel CSS.

## Deploy (2 minutes)

1. In WP admin → **WP Pusher** → connect your GitHub account (authorize `hafiz-adeel-eng`).
2. **Install from GitHub** → Repository: `hafiz-adeel-eng/quran-academy` → Branch: `main` → Type: **Theme** → Subdirectory: `theme` → **Install**.
3. WP admin → **Appearance → Themes** → activate **QuranlyHub Child**.
4. Done — brand styles are live sitewide.

## What it does

- Enqueues the parent Hello Elementor styles, then the QuranlyHub brand CSS + Google Fonts (Cormorant Garamond / Inter / Amiri) + the count-up/carousel JS.
- Adds `.qly-*` classes (cards, buttons, grids, blue/gold bands) used by the API-created pages so they render on-brand.
- Registers `primary` and `footer` nav menus for the future Theme Builder header/footer.

## Re-deploying after CSS/JS changes

Commit + push to GitHub → WP Pusher shows the update → click the **Update** button in WP Pusher. Changes go live instantly.
