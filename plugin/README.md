# Plugin — Deploy via WP Pusher (or manual upload)

**QuranlyHub Core** is the single package that makes the whole site look professional. Install + activate it and everything below goes live immediately:

## What it does
- Loads the full **QuranlyHub brand** (blue/gold design system, Cormorant Garamond/Inter fonts, buttons, cards, grids, stats, CTA bands, responsive tables) across every page.
- **Logo**: sizes the site logo correctly (max 60px) in the header.
- **Header**: white, professional, with a primary nav menu (Home · Courses · Pricing · Free Trial · Contact) plus a gold **Free Trial** button — created and assigned automatically on activation.
- **Footer**: branded dark navy with white text.
- Removes the default duplicate "Page title" H1 (pages carry their own hero).
- Registers **Rank Math SEO meta** (`rank_math_title`, `rank_math_description`) for the REST API so per-page SEO is set programmatically.
- Switches **permalinks to Post name** on activation (and creates the nav menu).

## Deploy
- **WP Pusher:** Install from GitHub → repo `hafiz-adeel-eng/quran-academy` → Branch `main` → Type **Plugin** → Subdirectory `plugin` → Install → Activate.
- **Manual:** zip the `plugin/` folder → Plugins → Add New → Upload Plugin → Activate.

The `theme/` child theme is optional polish on top (nav menu locations + parent styles). The plugin works with plain Hello Elementor.
