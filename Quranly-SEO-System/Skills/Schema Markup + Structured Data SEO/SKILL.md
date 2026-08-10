# QuranlyHub SEO Skill: Schema Markup & Structured Data
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLES
*   **Purpose:** Analyze QuranlyHub pages to recommend, validate, and structure valid Schema markup that enhances search, AEO, and GEO understanding.
*   **Core Principle:** Schema is not a ranking shortcut. Every property must be supported by visible page content.
*   **Prohibitions:** **Zero fabricated data.** Never add fake reviews, ratings, prices, fake local addresses, fake authors, unverified courses, or hidden content solely for schema. If data is missing, report `"User input required."`

---

## 2. INPUT & EXISTING SCHEMA AUDIT
*   **Required Inputs:** Page URL, Page Type, and Page Content.
*   **Audit Requirements:** Inspect live page elements (title, H1, headings, breadcrumbs, FAQs, services) and audit existing structured data (JSON-LD, microdata) for duplication, conflicts, or errors.

---

## 3. SCHEMA TYPES & SELECTION RULES
*   **Homepage:** Organization, WebSite, WebPage, Logo, SameAs (verified profiles).
*   **Articles/Blogs:** Article/BlogPosting, WebPage, BreadcrumbList, Person (only if real author exists).
*   **Services & Courses:** Service or Course schema. *Never* use Service schema for general blog posts, and *never* invent course durations, pricing, or enrollments.
*   **Local & Location Pages:** Use Service/Organization. **Do not** use LocalBusiness schema unless QuranlyHub operates a physical, verifiable office in that location. Online service availability does not equal a physical office.
*   **FAQ & Breadcrumbs:** FAQPage requires genuine, visible questions/answers on the page. Breadcrumbs must match visible navigation.

---

## 4. EXAMPLE: JSON-LD IMPLEMENTATION
```json
<script type="application/ld+json">
{
  "@context": "[https://schema.org](https://schema.org)",
  "@type": "WebPage",
  "@id": "[https://www.quranlyhub.com/quran-classes-in-qatar/#webpage](https://www.quranlyhub.com/quran-classes-in-qatar/#webpage)",
  "url": "[https://www.quranlyhub.com/quran-classes-in-qatar/](https://www.quranlyhub.com/quran-classes-in-qatar/)",
  "name": "Quran Classes in Qatar | Learn Online",
  "description": "Learn Quran online with qualified teachers in Qatar.",
  "publisher": {
    "@type": "Organization",
    "name": "QuranlyHub",
    "url": "[https://www.quranlyhub.com/](https://www.quranlyhub.com/)"
  }
}
</script>5. QUALITY CONTROL & FAILURE CONDITIONS
Quality Checklist: Valid JSON-LD structure, canonical URL consistency, no keyword stuffing in schema fields, and complete alignment with visible content.

Failure Conditions: Return FAIL if:

Page URL is missing.

Page cannot be accessed for inspection when required.

Schema would require fabricated data or fake local office representation.

6. OUTPUT FORMAT (JSON SCHEMA)
The skill concludes by outputting a structured JSON research and implementation package:

JSON