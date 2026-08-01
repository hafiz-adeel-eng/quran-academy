# Blog Post Template — Build Guide (Theme Builder, Pro)

Built once in **Elementor Pro → Theme Builder → Single Post**, applied to all posts. Global header/footer wrap it automatically.

## Layout (single column, white)

1. **Featured image** — WebP, `qly-card-arch` top radius, lazy-loaded, fixed height (no CLS). Alt: descriptive per post.
2. **Meta row** (Post Info widget) — category chip · date · author · read time. Inter 13, `#B8850F`.
3. **Post Title** — this is the **H1** (styled Cormorant 600, desktop 38 / mobile 28, `#123B57`).
4. **Post Content** — styles:
   - H2s: Cormorant 600, 28 / mobile 22, `#123B57` (the post's H2/H3 hierarchy)
   - H3s: Cormorant 600, 22 / 20, `#123B57`
   - Paragraphs: Inter 400, 16, line-height 1.7, `#123B57`
   - Links: `#B8850F` underlined
   - Blockquotes: Cormorant italic 20, `#123B57`, left border 3px `#D4A017`, white bg card
   - Lists: Inter 16, gold bullets/checks `#D4A017`
   - Images: all WebP, lazy, alt text, fixed dimensions
5. **Author box** (Author Box widget, Pro) — tutor/author photo, bio, "About the author" (Cormorant 20).
6. **Related posts** — Posts widget, exclude current, 3 cards (same style as blog grid). Title `Related Reading`.
7. **CTA band** — gold `qly-cta-gold`: `Enjoying This Guide?` + `Learn Quran online 1-on-1 with a certified teacher.` + deep-blue pill `Book Free Trial` → `/free-trial/`.

## SEO wiring for every post (see `posts/*.md`)

Each post file carries: target keyword, title ≤ 60, meta ≤ 155 with CTA, slug, category, H1, body copy (keyword in first 100 words), FAQ + FAQPage schema, internal links, image alt.

- Set title/meta/keyword in **Rank Math** in the post editor.
- Schema per post: **Article** + **BreadcrumbList** + **FAQPage** (template in `04-blog-post-template-seo.md`).
- One H1 per post (the title). Do not add another H1 in the body.
- 2–3+ internal links to course/hub pages per post (course ↔ blog interlinking is the SEO engine).

## After building

Publish the 3 sample posts (`posts/01`, `02`, `03`), tick the checklist for each, check the template on a phone (font sizes, images, tappable links).
