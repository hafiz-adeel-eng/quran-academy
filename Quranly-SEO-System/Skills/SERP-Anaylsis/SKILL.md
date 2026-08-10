# QuranlyHub SEO Skill: SERP Intelligence & Content Gap Research
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLES
*   **Purpose:** Analyze live search results to understand SERP patterns, dominant intent, competitor content depth, entities, questions, and content gaps. 
*   **Core Principle:** Do not copy competitor text, headings, or media. Use competitors solely for research. 
*   **The Ultimate Objective:** Do not ask *"What did competitors write?"* Instead, ask: *"What does the SERP tell us users need, what is missing, and how can QuranlyHub provide a superior, original answer?"*

---

## 2. INPUT SPECIFICATIONS
*   **Required:** Target Keyword
*   **Recommended:** Country, City, Target Audience, Existing QuranlyHub URL, Keyword Research Skill output.
*   **Example Input:**
    *   *Target Keyword:* `quran classes in qatar`
    *   *Country:* `Qatar`
    *   *Audience:* `Parents and adults`

---

## 3. LIVE SERP & LOCATION REQUIREMENTS
*   **Live Data Rule:** Use live search results when available. Do not rely exclusively on memory, cached rankings, or assumptions. Record research date.
*   **Location Awareness:** Analyze SERPs tailored to the requested geography (e.g., Qatar vs. UK vs. USA vs. Doha). Do not assume global and local SERPs match.

---

## 4. ANALYSIS WORKFLOW & CHECKLIST

### 1. Top 10 Competitor Analysis
*   Analyze up to 10 organic results. Record Position, URL, Domain, Title, H1, Content Type, Intent, Subtopics, Entities, Questions, and UX/Conversion strengths & weaknesses.
*   *Example Output Check:* If fewer than 10 organic results exist, report the exact number analyzed without fabricating results.

### 2. SERP Feature & Search Intent Analysis
*   **Features:** Identify AI Overviews, Featured Snippets, PAA, Local Packs, and Videos. Determine what format Google rewards.
*   **Intent Consensus:** Estimate intent distribution (e.g., 8/10 Commercial Investigation, 2/10 Informational). Let SERP behavior dictate intent over keyword wording alone.

### 3. Extraction: Topics, Subtopics, Entities, & Questions
*   **Topics/Subtopics:** Extract major themes (e.g., online learning, Tajweed, Hifz, pricing, trial classes) and break them into functional subtopics.
*   **Entities:** Catalog common, important, and missing entities (people, places, organizations, religious/educational concepts) across ranking pages.
*   **Questions:** Extract queries from headings, PAA, and FAQs, categorized into beginner, commercial, pricing, trust, or location intents.

### 4. Content Gap & EEAT Slicing
*   **Gaps:** Evaluate Topic, Subtopic, Entity, Question, Intent, Experience, Trust, Local, Conversion, UX, AEO (Answer Engine), and GEO (Generative Engine) gaps.
*   **EEAT Gaps:** Audit Experience, Expertise, Authoritativeness, and Trustworthiness signals. 
    *   *Example Rule:* Never invent credentials. If information is missing, state `"User input required."`

### 5. Differentiation Strategy & AEO/GEO Structuring
*   **Differentiation:** Avoid writing "competitor content + more words." Identify gaps in beginner guidance, local relevance, practical examples, or FAQs.
*   **AEO/GEO Structures:** Recommend formats like direct definitions, bullet lists, step-by-step processes, or comparison tables for AI citation readiness.

---

## 5. OUTPUT FORMAT (JSON SCHEMA)
The skill must conclude by outputting a structured JSON research brief matching this schema:

```json
{
  "research_date": "",
  "target_keyword": "",
  "location": "",
  "dominant_intent": "",
  "intent_consensus": "",
  "serp_features": [],
  "top_results": [],
  "content_type_distribution": {},
  "common_topics": [],
  "common_subtopics": [],
  "entities": [],
  "questions": [],
  "content_gaps": [],
  "competitor_strengths": [],
  "competitor_weaknesses": [],
  "eeat_gaps": [],
  "local_seo_gaps": [],
  "aeo_opportunities": [],
  "geo_opportunities": [],
  "internal_linking": [],
  "recommended_content_type": "",
  "recommended_url": "",
  "content_brief": {
    "primary_topic": "",
    "required_topics": [],
    "required_subtopics": [],
    "required_entities": [],
    "required_questions": [],
    "recommended_structure": []
  },
  "differentiation_strategy": [],
  "data_quality": {
    "results_analyzed": 0,
    "limitations": []
  },
  "next_agent": "Search Intent + Title Optimization Agent"
}6. FAILURE CONDITIONS & AGENT HANDOFF
Failure Conditions: Return FAIL if the target keyword is missing, live SERP data is inaccessible when required, or data would require fabrication.

Agent Handoff: Pass intelligence dataset to:

Search Intent Agent

Title Optimization Agent

Content Brief Agent

SEO Content Writer

AEO/GEO Optimizer

SEO Auditor

Note: This skill concludes upon producing the intelligence dataset; it does not write the final article.