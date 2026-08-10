# QuranlyHub SEO Skill: Keyword Research
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLE
This skill performs comprehensive keyword research for **QuranlyHub** to identify, classify, prioritize, cluster, and map search queries for organic search, AI engines (ChatGPT, Gemini, Perplexity, Bing Copilot, AI Overviews), and local visibility.

*   **Core Principle:** Search intent and relevance supersede search volume. Prioritize user satisfaction and accuracy over optimization and ranking.
*   **Prohibitions:** No keyword stuffing, no massive keyword lists for the sake of volume, and **zero fabricated data** (search volume, keyword difficulty, CPC, traffic potential, and ranking probability must never be guessed).

---

## 2. BUSINESS CONTEXT
*   **Brand:** QuranlyHub
*   **Business Model:** Online Quran Academy
*   **Primary Conversion Goals:** 1. Free Trial Class | 2. WhatsApp Inquiry | 3. Contact Form Submission | 4. Course Enrollment
*   **Target Audiences:** Kids, Adults, Parents, Families, Sisters, Reverts, Quran Beginners
*   **Target Geographies:** UK, US, Canada, Australia, UAE, Qatar, Kuwait, Saudi Arabia
*   **Core Services:** Quran Foundation, Noorani Qaida, Quran Reading, Tajweed, Hifz (Memorization), Tafsir, Translation, Quranic Arabic, Female Quran Teachers, Online Quran Classes
*   **Brand Colors:** Primary `#14B8A6` | Secondary `#EAB308`

---

## 3. INPUT SPECIFICATIONS
*   **Required:** Seed Keyword OR Topic
*   **Optional:** Country, City, Target Audience, Service/Course, Existing URL, Search Intent, Business Objective, Existing Keyword List/Database, Competitor URLs

---

## 4. SEARCH INTENT CLASSIFICATION
Every keyword must be classified into one or more search intents:
*   **Informational:** (e.g., "what is tajweed")
*   **Commercial Investigation:** (e.g., "best online quran classes")
*   **Transactional:** (e.g., "book quran class")
*   **Navigational:** (e.g., "QuranlyHub")
*   **Local:** (e.g., "quran classes in qatar")
*   **Mixed:** Use when SERP explicitly demonstrates dual intent. Do not force single intents artificially.

---

## 5. KEYWORD RESEARCH PROCESS

### Step 1 — Seed Analysis
Evaluate the user intent, target persona, underlying problem, action triggers, location relevance, and intent type before expanding.

### Step 2 — Keyword Expansion
Generate valid variations using word order shifts, synonyms, natural language, and modifiers (audience, location, course, commercial, question, problem/benefit).

### Step 3 — Local & City Keyword Research
*   Generate country-level and city-level terms only when search intent justifies local relevance.
*   **Constraint:** Never create doorway pages. A city keyword must have genuine intent to warrant a dedicated page.

### Step 4 — Intent-Specific Slicing
Classify keywords into designated buckets:
*   **Long-Tail:** Specific, intent-rich queries (retain low-volume / high-intent terms).
*   **Commercial:** Buying intent, service relevance, pricing queries.
*   **Transactional:** Immediate action terms mapping to service, course, free trial, or contact pages.
*   **Question:** Natural questions pulled from PAA, search suggestions, and competitor FAQs.
*   **Audience-Specific:** Kids, adults, beginners, parents, sisters, reverts, families.
*   **Course-Specific:** Mapped strictly to QuranlyHub services (Tajweed, Hifz, Arabic, etc.). Do not target unprovided services.
*   **Semantic & Entities:** Identify related concepts, educational entities, and religious concepts for topical completeness.

---

## 6. KEYWORD CLUSTERING & CANNIBALIZATION CHECK
*   **Clustering:** Group keywords by shared intent and topical relationship. Multiple keywords with identical intent must target a single strong page.
*   **Cannibalization Rule:** Before recommending a new URL, check existing QuranlyHub URLs. If an existing page satisfies the search intent, recommend optimization, content expansion, or internal linking rather than creating a duplicate page.

---

## 7. SCORING & METRICS PROTOCOL

### Priority Score (0–100 Scale)
*   Search Intent Fit: **25 points**
*   Business Value: **20 points**
*   Topical Relevance: **15 points**
*   Conversion Potential: **15 points**
*   SERP Opportunity: **10 points**
*   Long-tail Specificity: **5 points**
*   Local Relevance: **5 points**
*   Content Gap Opportunity: **5 points**

### Data Availability Rule
*   If reliable tool metrics are absent, set values to `null` or state **"Data unavailable."**
*   Qualitative assessments (Low, Moderate, High, Very High) must be explicitly labeled as **"Qualitative assessment."**

---

## 8. OUTPUT FORMAT (JSON SCHEMA)

The final skill output must strictly return a structured JSON dataset matching this schema:

```json
{
  "seed_topic": "",
  "primary_keyword": {
    "keyword": "",
    "intent": [],
    "priority_score": 0
  },
  "secondary_keywords": [],
  "long_tail_keywords": [],
  "commercial_keywords": [],
  "transactional_keywords": [],
  "question_keywords": [],
  "local_keywords": [],
  "city_keywords": [],
  "audience_keywords": [],
  "course_keywords": [],
  "semantic_keywords": [],
  "entities": [],
  "clusters": [],
  "keyword_cannibalization": [],
  "recommended_pages": [],
  "content_opportunities": [],
  "data_quality": {
    "search_volume_available": false,
    "keyword_difficulty_available": false,
    "cpc_available": false,
    "notes": []
  },
  "research_warnings": [],
  "next_agent": "SERP Intelligence Agent"
}9. QUALITY CONTROL & FAILURE CONDITIONS
Quality Checklist
No fabricated search volume or keyword difficulty.

No keyword stuffing or artificial variations.

All required intent classifications and cannibalization checks completed.

Failure Conditions
Return FAIL if:

Seed topic is missing.

Search intent cannot be reliably determined.

Keyword data is fabricated.

Existing site structure cannot be accessed for cannibalization validation when required.

10. AGENT HANDOFF
This skill hands off its final dataset to:

SERP Intelligence Agent

Search Intent Agent

Entity Research Agent

Content Gap Agent

Topic Cluster Agent

Content Brief Agent

Note: This skill does not write final articles; its scope concludes upon producing the keyword intelligence dataset.