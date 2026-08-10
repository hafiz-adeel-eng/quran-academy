# QuranlyHub SEO Skill: SEO Content Writer
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLES
*   **Purpose:** Write original, search-intent-focused, human-first SEO content using approved outputs from preceding research skills.
*   **Core Principle:** Write for the user first, search engines second. Prioritize usefulness, accuracy, originality, clarity, and natural optimization over arbitrary word counts or keyword density.
*   **Prohibitions:** Zero content copying from competitors, zero keyword stuffing, zero fabricated stats, credentials, or religious references. If data/claims are missing, report `"User input required"` or flag for verification.

---

## 2. INPUT & PRE-WRITING CHECKLIST
*   **Inputs Required:** Keyword Research, SERP Intelligence, Search Intent & Title Optimization, and Content Brief outputs.
*   **Pre-Writing Verification:** Identify primary keyword, dominant intent, target audience, page type, mandatory topics, required entities/questions, AEO/GEO/EEAT requirements, internal-linking plan, and claims requiring verification. Do not begin writing until the brief is fully understood.

---

## 3. CONTENT STRUCTURE & EXECUTION RULES

### Title & Introduction
*   **Title:** Use the approved title from Skill #3. Use one clear H1. 
*   **Introduction:** Address intent quickly, establish page scope, and avoid generic filler (e.g., *"In today's digital world..."*).

### Writing Style & Optimization
*   **Answer-First Writing:** Answer key user questions directly at the start of sections, followed by explanations and practical examples.
*   **Keyword Usage:** Integrate primary, secondary, long-tail, and commercial keywords naturally. Avoid mechanical insertion or hitting arbitrary density targets.
*   **Local & Entity SEO:** Mention genuine target locations naturally. Use core entities from the brief to build topical depth without forced keyword stuffing.
*   **AEO & GEO Optimization:** Structure answers for answer engines using direct definitions, bullet lists, numbered steps, comparison tables, and clear subject references for AI parsers.
*   **EEAT & Religious Accuracy:** Demonstrate genuine expertise and trust. When discussing Islamic education or Tajweed, maintain precise terminology and avoid unverified religious claims or fabricated references.

---

## 4. CONTENT ENHANCEMENTS & EXAMPLES

### Example 1: Answer-First Writing
*   *Question:* Are online Quran classes suitable for children?
*   *Good Approach:* "Yes, online Quran classes are highly suitable for children when structured with interactive tools, certified tutors, and age-appropriate pacing. For example, QuranlyHub utilizes..."

### Example 2: Image Alt Text Optimization
*   *Good:* "Child attending an online Quran lesson with a female teacher"
*   *Bad (Keyword Stuffing):* "best online Quran classes for kids Quran teacher Quran classes"

### Interactive Elements
*   **Tables:** Use for course comparisons, learning options, or requirements when it clarifies data.
*   **FAQ & CTAs:** Include genuine questions only. Use clear conversion triggers matching user intent (e.g., *Book a Free Trial*, *Explore Quran Classes*), utilizing strictly verified QuranlyHub services.

---

## 5. QUALITY CONTROL & FAILURE CONDITIONS
*   **Final Article Check:** Verify intent match, H1/heading hierarchy, entity/question coverage, natural keyword integration, AEO/GEO structuring, and lack of plagiarism or fabricated claims.
*   **Failure Conditions:** Return `FAIL` if content briefs or primary keywords are missing, essential details cannot be verified, or religious claims require unverified authorization.

---

## 6. OUTPUT FORMAT (JSON SCHEMA)
The skill concludes by returning a structured JSON publication package:

```json
{
  "status": "PASS",
  "title": "",
  "meta_title": "",
  "meta_description": "",
  "url_slug": "",
  "h1": "",
  "article": "",
  "faq": [],
  "internal_links": [],
  "external_references": [],
  "image_recommendations": [],
  "image_alt_texts": [],
  "schema_content": {},
  "claims_requiring_verification": [],
  "seo_notes": [],
  "content_quality_notes": [],
  "next_agent": "AEO/GEO Optimization & SEO Audit Agent"
}7. AGENT HANDOFF
Handoff Package To:

AEO/GEO Optimization Agent

SEO Audit Agent

Internal Linking Agent

Technical SEO Agent

Publishing Agent

Note: This skill writes the article content; it does not grant final publication approval.