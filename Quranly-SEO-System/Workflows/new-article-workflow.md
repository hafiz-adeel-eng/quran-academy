# QuranlyHub New Article Workflow
## Version: 1.0

## PURPOSE
Create, optimize, audit, and publish SEO-focused QuranlyHub content using the available skills and agents.

## INPUT
Required:
- Target keyword
- Target country/city if applicable
- Target audience
- Existing relevant URL if any

Optional:
- User-provided keywords
- Images
- Existing article
- Competitor URLs
- Business/service information

## WORKFLOW

### STEP 1 — Keyword Research
Agent:
01-Main-SEO-Orchestrator

Use:
- Keyword-Research skill

Tasks:
- Find primary keyword
- Find relevant secondary keywords
- Find long-tail keywords
- Find commercial keywords
- Find location keywords
- Identify search intent
- Identify keyword opportunities
- Avoid keyword stuffing

Output:
Keyword research dataset.

### STEP 2 — SERP & Content Gap Research
Use:
- SERP-Analysis skill

Tasks:
- Analyze current relevant SERP
- Analyze top organic competitors
- Determine dominant search intent
- Extract topics and subtopics
- Extract entities
- Extract user questions
- Identify content gaps
- Identify local SEO gaps
- Identify AEO/GEO opportunities
- Identify competitor weaknesses
- Identify internal-link opportunities

Output:
SERP intelligence and content brief.

### STEP 3 — Search Intent & Title
Use:
- search-intent-title-optimization skill

Tasks:
- Confirm dominant intent
- Generate title options
- Evaluate CTR potential
- Ensure title matches actual intent
- Select the strongest title
- Avoid misleading clickbait

Output:
Final SEO title + intent direction.

### STEP 4 — Content Architecture
Use:
- content-brief-seo-architecture skill

Tasks:
- Build article structure
- Define H1/H2/H3 hierarchy
- Map keywords to sections
- Map entities to sections
- Map questions to sections
- Define internal-link opportunities
- Define CTA placement
- Prevent cannibalization

Output:
Final content brief.

### STEP 5 — Article Writing
Use:
- seo-content-writer skill

Tasks:
- Write original content
- Satisfy search intent
- Cover important topics and entities
- Use keywords naturally
- Include long-tail and commercial terms naturally
- Include location relevance where appropriate
- Follow E-E-A-T principles
- Write answer-first sections where useful
- Make content useful for humans first
- Avoid keyword stuffing and AI-sounding repetition

Output:
Complete draft article.

### STEP 6 — On-Page SEO
Use:
- On-Page-SEO-optimization skill

Check:
- Title
- H1
- H2/H3
- Meta title
- Meta description
- URL
- Keyword placement
- Semantic relevance
- Readability
- Image placement
- CTA
- Internal links
- External links where appropriate

Output:
On-page optimized article.

### STEP 7 — Image SEO
Use:
- image-seo-optimization skill

Tasks:
- Review supplied images
- Recommend appropriate image placement
- Optimize filenames
- Write descriptive ALT text
- Optimize captions where useful
- Avoid unnecessary images
- Recommend WebP/compression/lazy loading

Never invent image facts.

### STEP 8 — Internal Linking & Topical Cluster
Use:
- Internal Linking + Topical Cluster skill

Tasks:
- Identify relevant existing pages
- Add contextual internal links
- Recommend natural anchor text
- Connect pillar and supporting pages
- Strengthen topical authority
- Avoid excessive links
- Avoid exact-match anchor repetition

Output:
Internal linking map.

### STEP 9 — Schema
Use:
- Schema Markup + Structured Data SEO skill

Tasks:
- Determine appropriate schema types
- Validate eligibility
- Match schema with visible page content
- Avoid fake or unsupported claims
- Avoid unnecessary schema
- Flag implementation requirements

Output:
Schema recommendation/implementation.

### STEP 10 — AEO/GEO Optimization
Use:
- aeo-geo-optimization skill

Tasks:
- Improve direct answers
- Add concise definitions where useful
- Improve question-answer sections
- Improve entity clarity
- Improve factual structure
- Make important information easy to extract
- Improve AI-search citation potential
- Preserve natural human readability

Output:
AEO/GEO optimized article.

### STEP 11 — Technical SEO
Use:
- technical-seo-audit skill

Check:
- Indexability
- Canonical
- Robots directives
- Sitemap
- Status code
- URL structure
- Mobile usability
- Page speed
- Broken links
- Redirects
- Duplicate content
- Structured data
- Crawl issues

Do not publish if critical technical issues remain.

### STEP 12 — Core Web Vitals & Mobile UX
Use:
- Core Web Vitals + Mobile UX Optimization skill

Check:
- Mobile layout
- Responsive behavior
- LCP
- INP
- CLS
- Image performance
- Font loading
- Spacing
- Buttons
- Navigation
- Readability
- Touch targets

Mobile UX has high priority.

### STEP 13 — Content Freshness
Use:
- Content Freshness + Content Maintenance skill

Determine:
- Whether content requires current information
- Facts that need verification
- Dates that need updating
- Future maintenance requirements

Do not add artificial freshness.

### STEP 14 — Final SEO QA
Use:
- pre-publish-qa skill

Verify:
- Search intent
- Keyword targeting
- Content completeness
- Originality
- E-E-A-T
- On-page SEO
- Internal links
- Schema
- AEO/GEO
- Images
- Technical SEO
- Mobile UX
- Core Web Vitals
- Grammar/readability
- CTA
- Cannibalization
- Keyword stuffing
- Broken links

## PUBLISH RULE

NEVER publish automatically before final QA passes.

If critical issues exist:
1. Stop publishing.
2. Report issues.
3. Fix issues.
4. Re-run relevant checks.
5. Run final QA again.

Only publish when:
- SEO QA = PASS
- Technical SEO = PASS
- Mobile UX = PASS
- Content quality = PASS
- No critical errors remain

## FINAL OUTPUT

Return:
1. Final URL
2. Final title
3. Primary keyword
4. Search intent
5. Content status
6. SEO status
7. Technical status
8. Mobile status
9. Internal-link status
10. Schema status
11. Publish status
12. Remaining warnings

## FAILURE RULES

Never:
- Fabricate SERP data
- Fabricate competitors
- Fabricate statistics
- Fabricate credentials
- Fabricate locations
- Copy competitor content
- Stuff keywords
- Create unnecessary pages
- Publish with critical SEO/technical issues

When required information is unavailable:
Report "User input required" instead of guessing.