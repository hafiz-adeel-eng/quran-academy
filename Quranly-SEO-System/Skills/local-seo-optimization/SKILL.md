# QuranlyHub SEO Skill #13: E-E-A-T + Content Quality & Trust Optimization
## Purpose
Audit and improve content for genuine Experience, Expertise, Authoritativeness, Trust, accuracy, originality, usefulness, transparency, and information gain before publishing.

## Core Rules
- Never fabricate authority, experience, credentials, certifications, reviews, testimonials, awards, partnerships, locations, statistics, student numbers, religious endorsements, or business claims.
- If required factual information is unavailable: `USER_INPUT_REQUIRED`.
- Never present unsupported claims, superlatives, guarantees, or religious attributions as facts.
- Separate Quran, Hadith, scholarly explanation, general advice, and QuranlyHub methodology.
- Never invent or misattribute Quranic, Hadith, scholarly, Madhhab, or institutional statements.
- Verify important claims or remove/qualify them.
- Never create fake testimonials, ratings, teacher credentials, offices, addresses, local staff, or business facts.

## E-E-A-T Audit

### Experience
Check for genuine:
- Teaching workflow
- Lesson structure
- Learner difficulties
- Practical exercises
- Parent/child guidance
- Teacher-student interaction
- First-hand observations

Do not manufacture experience.

### Expertise
Verify:
- Subject accuracy
- Quran/Tajweed terminology
- Qualified authorship/review where applicable
- Clear educational explanations

### Authoritativeness
Check:
- Organization identity
- Author/reviewer information
- Relevant expertise
- Consistent topical coverage
- Legitimate sources

### Trust
Check:
- Accurate business/service information
- Contact details
- Policies
- Pricing where applicable
- Trial/registration process
- Working links/forms
- HTTPS
- Clear CTA
- Transparent conditions

## Content Accuracy
Verify claims involving:
- Quran/Islamic education
- Tajweed
- Courses
- Teachers
- Pricing
- Locations
- Business information
- Technical facts

Classify important claims:
`VERIFIED | SUPPORTED | NEEDS_EVIDENCE | USER_INPUT_REQUIRED | REMOVE`

High-risk claims include:
`#1 | Best | Guaranteed | 100% | Certified | Most Trusted | Award-winning | Thousands of students`

Unsupported claims must not be published.

## Religious Content
- Verify religious attributions before publication.
- Do not fabricate rulings or scholarly positions.
- Clearly distinguish religious sources from educational advice and marketing.
- Business claims must never be presented as religious authority.

## Content Quality
Check whether the page:
- Answers the main question quickly
- Answers important follow-up questions
- Provides actionable information
- Is easy to scan
- Helps users make decisions
- Avoids filler
- Provides meaningful information gain
- Contains original value beyond generic competitor content

Reject:
- Competitor paraphrasing
- Generic AI filler
- Copied examples
- Repetitive explanations
- Keyword-driven sections
- Empty conclusions
- Generic motivational text
- Unnecessary keyword variations

## Information Gain
Ask:
`What useful information does this page provide that users cannot easily get everywhere else?`

Look for:
- Better explanations
- Practical guidance
- Original frameworks
- Useful examples
- Local context
- Better FAQs
- Transparent service information
- Better comparisons/checklists

If information gain is weak, recommend specific improvements.

## User-First SEO
Avoid:
- Keyword stuffing
- Forced synonyms
- Repetitive headings
- Artificial FAQs
- Search-engine-only paragraphs
- Unnatural exact-match anchors

Prioritize user usefulness over SEO manipulation.

## AEO/GEO
Make important information:
- Direct
- Clear
- Self-contained
- Factually consistent
- Structured
- Entity-clear
- Easy to quote accurately
- Supported by reliable evidence where needed

Use clear definitions, direct answers, concise explanations, and explicit relationships.

Never manipulate AI systems to obtain citations. Earn citation potential through quality and clarity.

## Sources
Prefer:
- Quran and verified primary religious sources where appropriate
- Reputable Islamic institutions
- Government sources for official/local information
- Recognized educational institutions
- Official documentation
- Primary business sources

Avoid unreliable content farms.

Check external information against QuranlyHub's:
- Business facts
- Services
- Courses
- Pricing
- Locations
- Policies

Resolve contradictions before publishing.

## Site-Wide Trust Consistency
Verify consistent business information across:
- Homepage
- Service/course pages
- Location pages
- About
- Contact
- Footer
- Blog
- Schema

Do not create conflicting facts.

## Local Trust
For location pages verify:
- Actual service availability
- Country/city
- Relevant timezone
- Local audience relevance
- Accurate contact information

Never invent local offices, addresses, phone numbers, staff, or classrooms.

## Commercial Trust
Verify:
- Service description
- Pricing if available
- Trial details
- Registration process
- User deliverables
- Cancellation/refund conditions where applicable

Do not hide material conditions.

## Testimonials & Reviews
Use only genuine, authorized testimonials/reviews.
Verify attribution and consistency.
Never fabricate names, photos, ratings, parent statements, student stories, or aggregate ratings.

## Children/Parent Content
Check whether relevant pages explain:
- Learning approach
- Class structure
- Teacher interaction
- Parent expectations
- Scheduling
- Progress communication
- Safety/privacy considerations

Never make unsupported child-safety guarantees.

## Readability & UX
Check:
- Short paragraphs
- Clear headings
- Useful lists
- Logical structure
- Appropriate terminology
- Mobile readability
- Useful user journey:
  `Question → Answer → Explanation → Evidence/Trust → Next Step → CTA`

CTAs must be accurate, relevant, and non-misleading. Never guarantee outcomes.

## FAQ
FAQs must answer genuine user questions.
Answers must be:
- Direct
- Accurate
- Concise
- Consistent with actual services

Never invent policies to complete an FAQ.

## Originality & Differentiation
Compare against SERP research and identify:
- Unique useful information
- Better explanations
- Missing competitor topics
- Better local relevance
- Better UX/user journey
- Stronger genuine trust signals

Do not use exaggerated claims for differentiation.

## Duplicate Content & Cannibalization
Check QuranlyHub pages for overlapping intent.

If conflict exists, report:
- Existing URL
- New URL
- Primary keyword
- Intent
- Recommended primary page
- Supporting page role
- Consolidation/differentiation/canonical recommendation

Do not create unnecessary competing pages.

## Quality Score
Score 0–5 where useful:
`Accuracy | Usefulness | Experience | Expertise | Authority | Trust | Originality | Clarity | Completeness | Transparency`

The score is an internal quality assessment, NOT a Google ranking score.

## Decision
Return one:
- `PASS` — strong quality/trust
- `PASS_WITH_FIXES` — useful but needs improvements
- `USER_INPUT_REQUIRED` — factual information missing
- `FAIL` — serious accuracy, trust, duplication, or quality problems

### Fix Priority
`P0`: false/religious errors, fake credentials/reviews, serious trust/functionality issues  
`P1`: major intent/content/E-E-A-T/duplication problems  
`P2`: readability, UX, examples, trust presentation  
`P3`: minor wording improvements

## Final QA
Before returning:
- Verify factual and religious accuracy.
- Verify claims and sources.
- Confirm no fabricated credentials/reviews/statistics/business facts.
- Confirm author/organization information.
- Check contact/policies/service/local information.
- Check originality and information gain.
- Check usefulness and readability.
- Check internal consistency.
- Check commercial/local accuracy.
- Check AEO/GEO clarity.
- Check duplicate/cannibalization risk.
- Check keyword stuffing.
- Check CTA accuracy.
- Flag missing information.

## Output
Return JSON:

{
  "status": "PASS | PASS_WITH_FIXES | USER_INPUT_REQUIRED | FAIL",
  "accuracy": {},
  "experience": {},
  "expertise": {},
  "authority": {},
  "trust": {},
  "originality": {},
  "information_gain": {},
  "claim_verification": [],
  "trust_signals": [],
  "missing_trust_signals": [],
  "content_quality_issues": [],
  "religious_content_issues": [],
  "local_trust_issues": [],
  "duplicate_content_issues": [],
  "cannibalization_issues": [],
  "required_fixes": [],
  "user_input_required": [],
  "priority_actions": [],
  "final_recommendation": ""
}

## Handoff
Pass the audit to:
1. SEO Content Writer
2. AEO/GEO Optimization
3. On-Page SEO
4. Internal Linking + Topical Cluster
5. Schema/Structured Data
6. Technical SEO
7. Final Publishing QA

This skill does not publish the page.

## Final Principle
Do not manufacture authority. Build genuine trust through evidence, accuracy, expertise, useful experience, transparency, originality, and honest communication.