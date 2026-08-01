# Reusable Global Templates

Build once in **Elementor Pro → Theme Builder** (and as saved templates), reuse everywhere. Keeps header/footer/CTA/carousel consistent and editable across every page.

## 1. Header (Theme Builder → Header)

See `02-HOME/01-home-build-guide.md → S0`. One detail to lock globally:
- Background `#FFFFFF`, bottom border `rgba(18,59,87,.14)`, sticky top.
- If a page uses a blue band right under the header (like Home's hero), the white header on the blue hero reads cleanly — no transparency needed.
- Mobile: hamburger + **sticky bottom CTA bar** (`.qly-mobile-cta` in `02-HOME/03-home-custom-css.css`).

## 2. Footer (Theme Builder → Footer)

- Blue `#123B57`, 4 columns as described in `01-home-build-guide.md → S11`.
- Footer is **site-wide** — its "Online Quran Academy · QuranlyHub" line is a global brand/keyword anchor; the per-page keyword work happens in the page content, not the footer.

## 3. CTA band (saved Elementor template, reusable)

- Gold block (`qly-cta-gold`): H2 + one-liner + deep-blue pill button → `/free-trial/`.
- Reuse on: every course page (end), About, Pricing, Contact, Blog (sidebar/footer of posts), country pages.
- Text swaps per page (e.g. "Start Your Hifz Journey" on the Hifz page) — keep the free-trial button consistent.

## 4. Testimonial carousel

**Primary (Pro):** Elementor Pro → Testimonial Carousel widget.
- Content per slide: quote, 5 gold stars (icon `fa-star`, `#D4A017`), avatar + name + country.
- Settings: slides to show 1 (mobile) / 2 (tablet) / 3 (desktop); autoplay 6000ms, pause on hover; arrows on; **equal height cards on**; drag/swipe on (native for touch).
- Card style: `.qly-card`.

**Free fallback (no Pro):** an **HTML widget** with scroll-snap, no plugin.

```html
<div class="qly-carousel-wrap">
  <div class="qly-scroll-carousel" tabindex="0" aria-label="Student testimonials">
    <!-- one .qly-card per review -->
    <figure class="qly-card">
      <blockquote>“My daughter used to dread Quran lessons. Now she asks for them.”</blockquote>
      <figcaption><strong>Aisha M.</strong> · London, UK</figcaption>
    </figure>
    <!-- …more figures… -->
  </div>
</div>
```

CSS (append to the home CSS file):

```css
.qly-scroll-carousel {
  display: flex;
  gap: 16px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  padding: 4px;
}
.qly-scroll-carousel::-webkit-scrollbar { display: none; }
.qly-scroll-carousel .qly-card {
  flex: 0 0 86%;
  scroll-snap-align: center;
  padding: 24px;
}
@media (min-width: 769px) {
  .qly-scroll-carousel .qly-card { flex: 0 0 46%; }
}
@media (min-width: 1200px) {
  .qly-scroll-carousel .qly-card { flex: 0 0 31%; }
}
```

Autoplay for the free version is handled by `02-HOME/04-home-countup.js` (`.qly-scroll-carousel`).

## 5. FAQ block (reusable pattern, unique content per page)

- Elementor Pro **FAQ widget** (accordion) or Rank Math **FAQ block**.
- 4–6 questions per page, **never duplicated** between pages.
- Always paired with **FAQPage schema** — via Rank Math's FAQ block (auto-schema) or the JSON-LD pattern in `02-HOME/05-home-seo.md`.
- Styling: question Cormorant 20 `#123B57`; answers Inter 16 `#123B57`; gold chevrons (`#B8850F`); card container `.qly-card`.

## 6. Country / audience landing page skeleton (for later increments)

To make the site's main SEO engine consistent:
1. Unique intro (never copy-paste with the location swapped).
2. Local trust signals (time-zone friendly hours, local payment, WhatsApp number).
3. Course chips + free-trial CTA.
4. Local FAQ with FAQPage schema.
5. Canonical self-referencing; internal links to Course hub + Blog.
