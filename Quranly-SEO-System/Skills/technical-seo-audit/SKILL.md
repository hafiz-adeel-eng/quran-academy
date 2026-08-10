# QuranlyHub SEO Skill: Technical SEO & Website Health Audit
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLES
*   **Purpose:** Pre-publication technical audit ensuring QuranlyHub pages are crawlable, indexable, canonicalized, fast, mobile-friendly, secure, and search-engine optimized.
*   **Core Principle:** Visual appeal does not equal technical health. Always verify indexability, mobile UX, performance, and structure via evidence.
*   **Strict Rule:** Zero fabrication. If metrics or live access are unavailable, state `"Data unavailable"` or `"Live technical verification unavailable"`.

---

## 2. AUDIT CHECKLIST & EXAMPLES

### 1. Crawlability & Indexability
*   **Checks:** `robots.txt`, meta robots, X-Robots-Tag, status codes, and canonical consistency.
*   **Example Rule:** A page intended to rank must not accidentally contain a `noindex` directive. 
*   **Example Input/Output:** 
    *   *URL:* `https://www.quranlyhub.com/quran-classes-in-qatar/`
    *   *Check:* HTTP 200 OK, self-referencing canonical, indexable.

### 2. Architecture & Links
*   **Checks:** Clean URL structures, XML sitemaps, internal links, click depth, orphan pages, and redirect chains.
*   **Example Good URL:** `/quran-classes-in-qatar/` / `/online-quran-classes/`
*   **Example Check:** Ensure important commercial/service pages are reachable within a reasonable number of clicks and have no broken internal links.

### 3. Mobile & Desktop UX
*   **Checks:** Mobile-first priority. Responsive breakpoints, layouts, tap targets, padding, text size, and non-blocking sticky elements.
*   **Example Rule:** The page must work naturally on mobile; do not simply shrink the desktop layout. Ensure sticky navigation does not cover important content.

### 4. Performance & Images
*   **Checks:** Core Web Vitals (LCP, INP, CLS), asset compression, WebP/AVIF formatting, and dimensions.
*   **Example Image Rule:** 
    *   *Recommended WebP:* 800x500, q70, Maximum 80KB.
    *   *Constraint:* Do not lazy-load the primary above-the-fold hero image when doing so harms LCP.

### 5. On-Page Technical Elements
*   **Checks:** Single H1 hierarchy, unique H2-H3 structures, title tags, and meta descriptions.
*   **Example Rule:** Title tags must match search intent and contain the primary topic naturally without keyword stuffing.

### 6. Duplication & Cannibalization
*   **Checks:** Thin/duplicate location pages and cross-URL intent cannibalization.
*   **Example Cannibalization Fix:** If `/quran-classes/` and `/online-quran-classes/` target the same intent, recommend merging or redirecting rather than keeping duplicate competing pages.

### 7. Schema & Accessibility
*   **Checks:** Valid JSON-LD (Organization, Breadcrumb, Article, etc.), alt text, and basic accessibility.
*   **Example Rule:** Never create fake reviews, ratings, locations, prices, or author credentials. Schema must accurately reflect visible page content.

### 8. Security & JavaScript
*   **Checks:** HTTPS consistency and verifying critical content/links in raw HTML and rendered DOM.
*   **Example Rule:** Ensure critical content, headings, navigation, and CTAs remain accessible to search engines.

---

## 3. PRIORITY & PUBLISHING GATES

### Issue Severity Levels
*   **Critical:** Blocked crawling, accidental `noindex`, server errors, HTTPS failure. (*Must fix before publication.*)
*   **High:** Broken internal links, poor mobile layout, serious CWV failure, orphaned pages. (*Normally must fix before publication.*)
*   **Medium / Low:** Missing breadcrumbs, minor metadata gaps, minor UX refinements.

### Publishing Status Values
*   `READY_TO_PUBLISH`
*   `READY_WITH_MINOR_FIXES`
*   `BLOCK_PUBLICATION` (*Triggered if critical technical, indexability, or mobile errors exist.*)

---

## 4. OUTPUT FORMAT (JSON SCHEMA)
The skill concludes by outputting a structured JSON diagnostic report:

```json
{
  "audit_date": "",
  "url": "",
  "page_type": "",
  "indexability": "",
  "crawlability": "",
  "http_status": "",
  "canonical": "",
  "robots": "",
  "sitemap": "",
  "mobile_status": "",
  "desktop_status": "",
  "core_web_vitals": {},
  "image_optimization": [],
  "metadata": {},
  "heading_structure": {},
  "internal_links": [],
  "broken_links": [],
  "redirects": [],
  "schema": [],
  "duplicate_content": [],
  "cannibalization": [],
  "accessibility": [],
  "security": [],
  "critical_issues": [],
  "high_priority_issues": [],
  "medium_priority_issues": [],
  "low_priority_issues": [],
  "publication_status": "",
  "recommended_actions": [],
  "next_agent": "Final SEO QA & Publishing Agent"
}5. AGENT HANDOFF & FINAL RULE
Handoff: SEO Auditor, AEO/GEO Optimizer, Internal Linking Agent, Final QA Agent, Publishing Agent.

Final Rule: Shift focus from "Does it look good?" to "Can search engines crawl/index it, can users use it smoothly on mobile, and are there pre-publication blockers?"