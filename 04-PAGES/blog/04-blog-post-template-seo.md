# Blog Post SEO — the per-post pattern

Apply to **every** blog post. The sample posts in `posts/` already follow it — copy the pattern for new articles.

## 1. Before writing
- Pick one informational keyword. **Never** a commercial keyword owned by a course page (e.g. never "online hifz classes" in a post — that's the Hifz page). Informational keywords feed the course pages via internal links.
- Check the keyword map in `03-COURSES/README.md` to confirm no clash.

## 2. Title / meta / slug
- Title ≤ 60 chars, keyword near the start, brand at the end.
- Meta ≤ 155 chars, includes a CTA (e.g. "Learn more in our Tajweed course →").
- Clean slug `/blog/<keyword-slug>/`.

## 3. On-page
- Exactly one H1 = the post title, containing the keyword.
- H2/H3 hierarchy, no skips. Keyword + variants in the first 100 words.
- FAQ block (4–6 questions) with FAQPage schema — targets "People Also Ask".

## 3b. Keyword placement (8 points — every post)
1. Slug contains the keyword (`/blog/<keyword-slug>/`).
2. Title contains the keyword (near the start).
3. Meta description contains the keyword.
4. H1 contains the keyword.
5. At least one H2 contains the keyword (posts use H2 → H3, never H1 → H3).
6. The first paragraph **starts with** the keyword.
7. Featured image filename = the keyword (`<keyword-slug>.webp`).
8. Featured image alt text contains the keyword.

## 4. Internal links (mandatory, 2–3+)
Course page ↔ blog ↔ hub. Every post links to its related course page + the free trial.

## 5. Schema — Article + Breadcrumb + FAQPage

```json
{
  "@context": "https://schema.org",
  "@graph": [
    { "@type": "Organization", "@id": "https://quranlyhub.com/#organization" },
    {
      "@type": "Article",
      "@id": "https://quranlyhub.com/blog/<slug>/#article",
      "headline": "<post title>",
      "description": "<meta description>",
      "image": "https://quranlyhub.com/wp-content/uploads/<featured-image>.webp",
      "datePublished": "<YYYY-MM-DD>",
      "dateModified": "<YYYY-MM-DD>",
      "author": { "@type": "Person", "name": "<Author / tutor name>" },
      "publisher": { "@id": "https://quranlyhub.com/#organization" },
      "mainEntityOfPage": "https://quranlyhub.com/blog/<slug>/"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://quranlyhub.com/" },
        { "@type": "ListItem", "position": 2, "name": "Blog", "item": "https://quranlyhub.com/quran-learning-blog/" },
        { "@type": "ListItem", "position": 3, "name": "<post title>", "item": "https://quranlyhub.com/blog/<slug>/" }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        { "@type": "Question", "name": "<Q>", "acceptedAnswer": { "@type": "Answer", "text": "<A>" } }
      ]
    }
  ]
}
```

Fill `<...>` per post. Set `dateModified` whenever you update the post (freshness signal).

## 6. OG + Twitter
Rank Math auto-inserts per-post OG/Twitter from title/meta/featured image.

## 7. Publish rhythm
- Publish consistently (weekly is a good target) to keep the freshness signal on Home's "Latest blog" grid.
- Each new post: update the Blog hub (automatic), add related posts links to existing posts, and check no duplicate titles (Rank Math report).
