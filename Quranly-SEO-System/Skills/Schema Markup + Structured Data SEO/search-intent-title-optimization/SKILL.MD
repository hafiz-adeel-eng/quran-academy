# QuranlyHub SEO Skill: Search Intent & Title Optimization
## Version: 1.0

---

## 1. PURPOSE & CORE PRINCIPLES
*   **Purpose:** Determine true search intent and select the optimal SEO title and H1 for QuranlyHub content based on SERP patterns and user needs.
*   **Core Principle:** Base titles on SERP intent, user needs, and differentiation—never on keyword wording alone. Match the title to what the page actually provides without clickbait or stuffing.
*   **Prohibitions:** Zero fabrication. Do not promise unverified claims (e.g., "Best", "100% guaranteed", unverified teacher credentials). If information is missing, report `"User input required."`

---

## 2. INPUT & ANALYSIS WORKFLOW
*   **Required Inputs:** Target Keyword, Keyword Research output, and SERP Intelligence output.
*   **Workflow Steps:**
    1.  **Intent Classification:** Identify dominant search intent (Informational, Commercial Investigation, Transactional, Navigational, Local, Mixed) using SERP evidence.
    2.  **Journey & Need Analysis:** Map the user journey stage (Problem Awareness, Provider Comparison, Booking) and core user needs/questions.
    3.  **Local & Content Type Decision:** Evaluate location intent (Essential/Secondary) and select the correct page type (Service, Location, Blog, Course).

---

## 3. TITLE REQUIREMENTS & EXAMPLES

### Title Formatting & Placement
*   Include primary keywords naturally without forced front-loading or keyword repetition.
*   **Example Good Title:** `Quran Classes in Qatar | Learn Online with Qualified Teachers`
*   **Example Bad Title:** `Quran Classes Qatar | Qatar Quran Classes | Quran Classes in Qatar`

### Differentiation & CTR Optimization
*   Differentiate from competitors by highlighting specific audiences, local relevance, clear outcomes, or trial opportunities.
*   **SEO Title vs. H1:** The SEO Title maximizes search clarity and CTR; the H1 optimizes in-page comprehension and user experience.

---

## 4. EVALUATION & SCORING PROTOCOL
*   **Title Candidates:** Generate 5–10 original title candidates.
*   **Scoring Criteria (1–10 Scale):** Evaluate Intent Match, Keyword Relevance, Clarity, CTR Potential, Differentiation, Accuracy, User Benefit, and Natural Language.
*   **Cannibalization & Trust Check:** Check existing QuranlyHub URLs before finalizing titles to prevent duplication. Verify that all service, location, or teacher claims in the title are authentic.

---

## 5. OUTPUT FORMAT (JSON SCHEMA)
The skill concludes by outputting a structured JSON decision brief:

```json
{
  "target_keyword": "",
  "primary_intent": "",
  "secondary_intent": "",
  "intent_confidence": "",
  "search_journey_stage": "",
  "location_intent": "",
  "recommended_content_type": "",
  "user_need": {
    "primary": "",
    "secondary": [],
    "concerns": [],
    "desired_action": ""
  },
  "title_candidates": [
    {
      "title": "",
      "intent_match": 0,
      "keyword_relevance": 0,
      "clarity": 0,
      "ctr_potential": 0,
      "differentiation": 0,
      "accuracy": 0,
      "overall_score": 0,
      "reason": ""
    }
  ],
  "recommended_title": "",
  "recommended_h1": "",
  "primary_keyword": "",
  "secondary_keywords": [],
  "meta_description_angle": "",
  "differentiation_angle": "",
  "cannibalization_status": "",
  "trust_validation": [],
  "reason_for_selection": "",
  "next_agent": "Content Brief & SEO Content Writer Agent"
}. QUALITY CONTROL & FAILURE CONDITIONS
Quality Checklist: Intent backed by SERP evidence, natural keyword usage, no clickbait or unverified claims, and verified cannibalization checks.

Failure Conditions: Return FAIL if target keywords or SERP intelligence data are missing, intent cannot be determined, or titles rely on unverified claims.

7. AGENT HANDOFF
Handoff Package To:

Content Brief Agent

SEO Content Writer Agent

AEO/GEO Optimization Agent

SEO Auditor

Technical SEO Agent

Note: This skill makes the strategic search positioning and title decision; it does not write the final article.