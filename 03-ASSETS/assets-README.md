# Assets — usage guide

| File | Purpose | Replace with |
|---|---|---|
| `logo-placeholder.svg` | Header + footer logo (recreation from the brief's brand description) | **The provided logo file** (upload as PNG/SVG before launch) |
| `placeholder-hero.svg` | Hero image until a real photo is licensed | Real photo: student/teacher in an online class |
| `placeholder-tutor.svg` | Tutor profile images | Real licensed tutor photos |
| `arabesque-divider.svg` | Thin decorative divider between a white section and a blue band — use sparingly | Keep (it's the subtle pattern) |

## Rules

- **Never** use a generic gray box or a random stock photo from another site as a stand-in.
- Real licensed photos replace placeholders **before launch**. Photos should be warm and authentic: students/teachers in online classes, real people, natural light.
- Convert every final image to **WebP** (ShortPixel/Imagify) and lazy-load everything except the hero image.
- Set explicit `width`/`height` on every `<img>` to avoid layout shift (CLS).
- Alt text: descriptive, never just the filename. See `02-HOME/02-home-copy.md → Image alt text`.

## SVG use notes

- The `aria-label` on the placeholders is intentional — swap to `alt=""` once real photos replace them and the photo itself carries the descriptive alt text.
- The arabesque divider renders with the `#D4A017`/`#B8850F` golds on transparent. Place it as a background strip (height ~12px) above a blue band or below a white section.
