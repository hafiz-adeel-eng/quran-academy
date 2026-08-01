# Plugin — Deploy via WP Pusher

Companion plugin to the QuranlyHub child theme. Its only job: register the Rank Math SEO meta keys (`rank_math_title`, `rank_math_description`) with `show_in_rest` so the site's SEO titles and descriptions can be set through the WordPress REST API (and stay in sync with the page content).

## Deploy

In WP admin → **WP Pusher** → **Install from GitHub** → Repository: `hafiz-adeel-eng/quran-academy` → Branch: `main` → Type: **Plugin** → Subdirectory: `plugin` → **Install**, then **Activate**.

You can add this as a second package next to the theme package in WP Pusher — both point to the same repo, different subdirectories.

## Why it exists

Without it, WordPress silently ignores `rank_math_*` keys posted to the REST API, so per-page SEO metas cannot be written programmatically. Activating this plugin enables exactly that.
