# Keyword Placement Audit — QuranlyHub

Rule set (applied to **every** page): the page's single target keyword must appear in

1. **URL** · 2. **Title** · 3. **Meta description** · 4. **H1** · 5. **an H2** · 6. **the start of the first paragraph** · 7. **the first image's filename** · 8. **the first image's alt text**

Method: each page's build guide + SEO file was read and the 8 points checked mechanically (exact keyword match, case/hyphen-insensitive; the paragraph check requires the keyword to be the **first words**). Keywords come from the site keyword map in `03-COURSES/README.md` / `04-PAGES/README.md`. 17 pages audited (Home, Courses hub, 2 course pages, 5 About-section pages, Pricing, Free Trial, Blog hub, Contact, Privacy, 3 blog posts) = 132 checks.

## Result

| | Passing | Missing |
|---|---|---|
| **Before** (repo as committed) | 49 / 132 | **83** |
| **After** (this change) | 131 / 132 | **1** |

The single remaining miss is the **Home URL**: the homepage lives at `/`, which cannot hold a keyword. Everything else on Home (title, meta, H1, H2, first paragraph, image filename, alt) is aligned to `online quran academy`.

### Before
| Page | Keyword | URL | Title | Meta | H1 | H2 | 1st para | Img file | Img alt |
|---|---|:-:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|
| Home | `online quran academy` | ❌ | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| Courses hub | `online quran classes` | ❌ | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| Noorani Qaida | `noorani qaida online` | ❌ | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ✅ |
| Tajweed | `learn tajweed online` | ❌ | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌ |
| About | `about quranlyhub` | ❌ | ❌ | ❌ | ✅ | ✅ | ❌ | ❌ | ❌ |
| How It Works | `how online quran classes work` | ❌ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌ | ❌ |
| Teaching Methodology | `online quran teaching methodology` | ❌ | ✅ | ❌ | ❌ | ❌ | ❌ | ❌ | ❌ |
| Quality Assurance | `certified quran teachers online` | ❌ | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌ |
| Terms & Conditions | `quranlyhub terms and conditions` | ❌ | ❌ | ❌ | ❌ | ❌ | ❌ | — | — |
| Pricing | `online quran classes cost` | ❌ | ✅ | ❌ | ❌ | ❌ | ❌ | ❌ | ❌ |
| Free Trial | `free quran classes online` | ❌ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌ | ❌ |
| Blog hub | `quran learning blog` | ❌ | ✅ | ❌ | ✅ | ❌ | ❌ | ❌ | ❌ |
| Contact | `contact quranlyhub` | ❌ | ❌ | ✅ | ✅ | ❌ | ❌ | ❌ | ❌ |
| Privacy Policy | `quranlyhub privacy policy` | ❌ | ❌ | ❌ | ❌ | ❌ | ❌ | — | — |
| Post: choose a teacher | `how to choose an online quran teacher` | ✅ | ✅ | ✅ | ✅ | ❌ | ✅ | ❌ | ❌ |
| Post: what is tajweed | `what is tajweed` | ✅ | ✅ | ✅ | ✅ | ❌ | ✅ | ❌ | ❌ |
| Post: qaida for beginners | `noorani qaida for beginners` | ✅ | ✅ | ✅ | ✅ | ❌ | ❌ | ❌ | ❌ |

### After
| Page | Keyword | URL | Title | Meta | H1 | H2 | 1st para | Img file | Img alt |
|---|---|:-:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|
| Home | `online quran academy` | ❌ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Courses hub | `online quran classes` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Noorani Qaida | `noorani qaida online` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Tajweed | `learn tajweed online` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| About | `about quranlyhub` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| How It Works | `how online quran classes work` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Teaching Methodology | `online quran teaching methodology` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Quality Assurance | `certified quran teachers online` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Terms & Conditions | `quranlyhub terms and conditions` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | — | — |
| Pricing | `online quran classes cost` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Free Trial | `free quran classes online` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Blog hub | `quran learning blog` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Contact | `contact quranlyhub` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Privacy Policy | `quranlyhub privacy policy` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | — | — |
| Post: choose a teacher | `how to choose an online quran teacher` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Post: what is tajweed | `what is tajweed` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |
| Post: qaida for beginners | `noorani qaida for beginners` | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ | ✅ |

## What was wrong (before)

- **URL — 14 of 14 static pages failed.** Slugs were generic (`/about/`, `/pricing/`, `/courses/`…) and none contained the target keyword. Only the 3 blog posts already had keyword slugs.
- **First image filename — failed on every page.** All pages used `placeholder-hero.svg` or an unnamed featured image.
- **First image alt — missing keyword** on Tajweed, About, How It Works, Methodology, Quality, Pricing, Free Trial, Blog hub, Contact and all 3 posts. Hub, How It Works, Methodology, Quality, Pricing, Free Trial, Blog hub and Contact had **no image at all**, so there was nothing to name.
- **First paragraph** never started with the keyword (it opened with the brand or a generic sentence), except posts 1 and 2.
- **H2** — no H2 held the keyword on How It Works, Methodology, Quality, Pricing, Free Trial, Blog hub, Contact, Terms, Privacy and all 3 posts. The posts also jumped from H1 straight to `###` (skipped H2 — a heading-hierarchy error), now `##`.
- **Title / meta** — About, Terms, Contact and Privacy titles lacked the keyword; About, Methodology, Quality, Pricing, Blog hub, Terms and Privacy metas lacked it.
- **H1** — Methodology, Pricing, Terms and Privacy H1s did not contain the keyword.
- **Length bug found along the way:** the Hub, Tajweed and Free Trial titles were 61 / 61 / 66 chars while the docs claimed 55 / 58 / 59 (over the 60-char limit). Trimmed; after this change no title is over 60 and no meta is over 155 (checked mechanically).

## Final spec per page (after)

| Page | URL | Title | H1 | First paragraph starts | First image file |
|---|---|---|---|---|---|
| Home | `/` | Online Quran Academy \| Learn Quran Online — QuranlyHub | Your Online Quran Academy for a Lifetime of Guidance | Online Quran academy for the whole family — QuranlyHub is tr… | `online-quran-academy.webp` |
| Courses hub | `/online-quran-classes/` | Online Quran Classes — Courses & Pricing \| QuranlyHub | Online Quran Classes for Every Age and Level | Online Quran classes for every age and level — from your fir… | `online-quran-classes.webp` |
| Noorani Qaida | `/noorani-qaida-online/` | Learn Noorani Qaida Online — 1-on-1 Classes \| QuranlyHub | Learn Noorani Qaida Online with a Certified Quran Teacher | Noorani Qaida online is the first step to reading the Quran.… | `noorani-qaida-online.webp` |
| Tajweed | `/learn-tajweed-online/` | Learn Tajweed Online — 1-on-1 Classes \| QuranlyHub | Learn Tajweed Online and Recite the Quran Beautifully | Learn Tajweed online and recite the Quran with perfect artic… | `learn-tajweed-online.webp` |
| About | `/about-quranlyhub/` | About QuranlyHub — Our Story, Mission & Values | About QuranlyHub — Bringing Quran Teachers to Every Home | About QuranlyHub: we are an online Quran academy on a missio… | `about-quranlyhub.webp` |
| How It Works | `/how-online-quran-classes-work/` | How Online Quran Classes Work — 4 Simple Steps \| QuranlyHub | How Online Quran Classes Work at QuranlyHub | How online Quran classes work at QuranlyHub is simple: from … | `how-online-quran-classes-work.webp` |
| Teaching Methodology | `/online-quran-teaching-methodology/` | Our Online Quran Teaching Methodology \| QuranlyHub | Our Online Quran Teaching Methodology for Real Progress | Online Quran teaching methodology at QuranlyHub pairs a stru… | `online-quran-teaching-methodology.webp` |
| Quality Assurance | `/certified-quran-teachers-online/` | Certified Quran Teachers Online \| QuranlyHub | Quality Assurance: Meet the Best Certified Quran Teachers Online | Certified Quran teachers online are the heart of your Quran … | `certified-quran-teachers-online.webp` |
| Terms & Conditions | `/quranlyhub-terms-and-conditions/` | QuranlyHub Terms and Conditions | QuranlyHub Terms and Conditions | QuranlyHub terms and conditions apply to your use of quranly… | — (legal page, no image) |
| Pricing | `/online-quran-classes-cost/` | Online Quran Classes Cost — Pricing & Plans \| QuranlyHub | Online Quran Classes Cost — Simple, Honest Pricing | Online Quran classes cost less than you think: a free trial … | `online-quran-classes-cost.webp` |
| Free Trial | `/free-quran-classes-online/` | Free Quran Classes Online — 30-Minute Trial \| QuranlyHub | Book Free Quran Classes Online — Your 30-Minute Trial | Free Quran classes online with QuranlyHub: a 30-minute onlin… | `free-quran-classes-online.webp` |
| Blog hub | `/quran-learning-blog/` | Quran Learning Blog — Tips & Guides \| QuranlyHub | Quran Learning Blog — Guides, Tips and How-Tos | Quran learning blog by QuranlyHub: practical, honest guides … | `quran-learning-blog.webp` |
| Contact | `/contact-quranlyhub/` | Contact QuranlyHub — WhatsApp, Email & Support | Contact QuranlyHub — We're Here to Help | Contact QuranlyHub with any question about courses, pricing … | `contact-quranlyhub.webp` |
| Privacy Policy | `/quranlyhub-privacy-policy/` | QuranlyHub Privacy Policy — Your Data & Rights | QuranlyHub Privacy Policy | QuranlyHub privacy policy: what data QuranlyHub collects whe… | — (legal page, no image) |
| Post: choose a teacher | `/blog/how-to-choose-an-online-quran-teacher/` | How to Choose an Online Quran Teacher — 6 Checks | How to Choose an Online Quran Teacher: A 6-Point Checklist | How to choose an online Quran teacher is the most important … | `how-to-choose-an-online-quran-teacher.webp` |
| Post: what is tajweed | `/blog/what-is-tajweed/` | What Is Tajweed and Why Does It Matter? \| QuranlyHub | What Is Tajweed and Why Does It Matter? | What is Tajweed? Simply put, it is the set of rules for reci… | `what-is-tajweed.webp` |
| Post: qaida for beginners | `/blog/noorani-qaida-for-beginners/` | Noorani Qaida for Beginners: Where to Start \| QuranlyHub | Noorani Qaida for Beginners: Where to Start | Noorani Qaida for beginners is the perfect starting point at… | `noorani-qaida-for-beginners.webp` |

Full title / meta / H1 / H2 / alt text for each page lives in that page's own build guide and `*-seo.md` (edited in place). First-image filename = keyword slug, e.g. `online-quran-classes.webp`; placeholder SVGs with those exact names are in `03-ASSETS/page-heroes/`.

## URL changes — old → new (set up 301 redirects before launch / on any live page)

| Old slug | New slug (= keyword) |
|---|---|
| `/courses/` | `/online-quran-classes/` |
| `/courses/noorani-qaida/` | `/noorani-qaida-online/` |
| `/courses/tajweed/` | `/learn-tajweed-online/` |
| `/courses/nazra/` · `/hifz/` · `/quran-translation/` · `/tafseer/` · `/basic-islamic-studies/` · `/arabic-language/` | `/nazra-course-online/` · `/online-hifz-classes/` · `/learn-quran-translation-online/` · `/quran-tafseer-online/` · `/online-islamic-studies-for-kids/` · `/learn-arabic-online-for-quran/` |
| `/about/` | `/about-quranlyhub/` |
| `/how-it-works/` | `/how-online-quran-classes-work/` |
| `/teaching-methodology/` | `/online-quran-teaching-methodology/` |
| `/quality-assurance/` | `/certified-quran-teachers-online/` |
| `/terms-and-conditions/` | `/quranlyhub-terms-and-conditions/` |
| `/privacy-policy/` | `/quranlyhub-privacy-policy/` |
| `/pricing/` | `/online-quran-classes-cost/` |
| `/free-trial/` | `/free-quran-classes-online/` |
| `/contact/` | `/contact-quranlyhub/` |
| `/blog/` (hub only) | `/quran-learning-blog/` |
| `/online-quran-classes-for-beginners/` (was linked, page not built) | `/learn-quran-for-beginners/` — now matches the keyword map |

Blog **posts** keep `/blog/<keyword-slug>/` (their slugs already hold the keyword). All internal links, schema `@id`/`url`/breadcrumb values, the nav menu in the QuranlyHub Core plugin (`plugin/quranlyhub-core.php`) and the footer CTA script were rewritten to the new slugs.

## Judgment calls — easy to reverse

- **Legal/brand pages got keyword slugs too** (`/quranlyhub-privacy-policy/`, `/contact-quranlyhub/`…). They read a little long, but the rule was applied uniformly. If you'd rather keep `/privacy-policy/`, `/terms-and-conditions/`, `/contact/`, those four are the ones to revert.
- **Pages that had no image now have one** (the 8 listed above) — a single small WebP so there is a "first image" to name. Free Trial and Contact keep it ≤ 30 KB to protect speed. Terms and Privacy stay image-free (rule marked n/a).
- **Header logo** is site-wide, so "first image on the page" means the first image in the page content (the hero), not the logo.
- **Keyword stuffing guard:** H2s add the keyword to *one* heading per page and alt text stays a natural sentence.

## If any of this is already live on WordPress

The repo is the source of truth; the live site is not touched by this change. To apply it live: change each page's slug in WordPress (Permalink field), add the 301s above (Rank Math → Redirections), re-save the Rank Math title/meta from each `*-seo.md`, rename and re-upload the hero images, and re-check Rank Math's focus keyword score. Note the plugin sets permalinks to `/%postname%/`, while these docs place posts under `/blog/<slug>/` — set the posts permalink base to `/blog/` (Settings → Permalinks → custom structure `/blog/%postname%/`) if you want that path.
