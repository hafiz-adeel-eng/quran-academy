# QuranlyHub SEO Skill #9: Internal Linking + Topical Cluster Strategy

## Purpose
Design a logical, user-first internal-linking and topical-cluster architecture that:
- Strengthens topical authority
- Improves crawlability and page relationships
- Distributes internal authority
- Supports commercial and important pages
- Connects informational content to relevant next steps
- Reduces orphan pages, dead ends, and cannibalization
- Improves SEO, AEO, GEO, and AI-search understanding

Never add links merely to increase link count.

## Inputs
Required:
- Target page URL
- Target keyword
- Verified sitemap or available page inventory

Recommended:
- Keyword research
- SERP/content-gap research
- Content brief
- Existing URLs, titles, topics, categories
- Course/service/location/audience pages

## 1. Website Inventory
Inspect available pages and classify:
- Homepage
- Service/course pages
- Location pages
- Audience pages
- Blog/supporting guides
- FAQ
- Free Trial/Contact
- About/Trust
- Other relevant pages

Never invent URLs.
If a useful destination does not exist, report:
`PAGE_MISSING: creation recommended`

## 2. Page Role
Classify pages as:
- Pillar
- Money
- Service
- Course
- Location
- Supporting Article
- Guide
- FAQ
- Commercial Investigation
- Conversion
- Trust/Authority

## 3. Topic & Cluster Architecture
Identify:
- Primary topic
- Pillar page
- Supporting topics/pages
- Related questions
- Commercial pages
- Audience pages
- Location pages
- Trust/resources

Use a hub-and-spoke structure where appropriate.

Example:
`Online Quran Classes`
├── Kids
├── Adults
├── Tajweed
├── Hifz
├── Quranic Arabic
├── Female Teachers
└── Supporting Articles

Do not create overlapping clusters targeting the same intent.

## 4. Cluster Relationships
Recommend logical relationships such as:
- Supporting → Pillar
- Pillar → Supporting
- Guide → Course/Service
- Course → Guide
- Location → Service
- Service → Location
- Article → Free Trial
- Free Trial → Course

Link direction must make sense to users and page purpose.

## 5. Internal Link Types
Classify recommended links as:
- Contextual
- Supporting
- Pillar/Cluster
- Navigational
- Breadcrumb
- Related Content
- Conversion/CTA
- Sitewide

Prioritize contextual relevance over sitewide links.

## 6. Link Relevance
Every link must be relevant to:
- Source page
- Surrounding content
- Destination page
- User's next likely need

Do not link weakly related pages simply because they exist.

## 7. Anchor Text
Use natural variation:
- Exact match
- Partial match
- Descriptive
- Natural phrase
- Branded
- Long-tail
- Navigational

Rules:
- Avoid keyword stuffing.
- Avoid repeating one exact-match anchor excessively.
- Match the anchor to the sentence and destination.
- Prefer descriptive anchors over vague `click here/read more` when appropriate.

## 8. Commercial & Conversion Linking
Informational pages may naturally link to relevant:
- Service
- Course
- Teacher
- Location
- Free Trial
- Contact

Do not turn informational content into aggressive sales pages.
Links must provide genuine contextual value.

## 9. Location Clusters
For local SEO, evaluate:
- Country/city relevance
- Existing location pages
- Service/location relationships
- Local supporting content
- Unique local value

Do not create thin location pages solely for keywords.
Never invent offices, addresses, staff, phone numbers, or physical presence.

## 10. Audience & Course Clusters
Where search intent supports it, connect:
- Kids
- Adults
- Beginners
- Parents
- Female learners
- Advanced learners

Courses may include:
- Quran Reading
- Tajweed
- Hifz
- Quranic Arabic
- Other verified QuranlyHub services

Do not create separate pages where intent is substantially identical.

## 11. Orphan & Dead-End Pages
Classify pages:
`ORPHAN | WEAKLY_LINKED | ADEQUATELY_LINKED`

Identify pages with no useful next step.
Recommend relevant links to related content, services, courses, locations, Free Trial, or Contact where appropriate.

Do not add artificial links merely to eliminate a dead end.

## 12. Cannibalization
Check whether pages target the same:
- Keyword
- Search intent
- Topic
- Location
- Commercial purpose

If overlap exists, recommend:
- Consolidation
- Differentiation
- Redirect/canonical strategy where appropriate
- Clear primary/supporting roles

Do not create competing pages unnecessarily.

## 13. Topical Coverage
For each cluster identify:
- Existing topics
- Missing supporting topics
- Missing questions
- Missing commercial pages
- Missing location opportunities
- Missing trust/resources

Prioritize by:
1. Business value
2. Search demand
3. Search intent
4. Topical relevance
5. Existing authority
6. Content gap
7. Conversion potential
8. Local opportunity

Search volume alone must not determine priority.

## 14. Sitewide Architecture
Evaluate:
- Header/navigation
- Footer
- Breadcrumbs
- Related-content modules
- CTA areas

Keep sitewide links focused on genuinely important destinations.
Avoid excessive exact-match keyword anchors sitewide.

## 15. AEO/GEO & Entity Relationships
Use internal links to make relationships between important entities/topics explicit.

Support:
- Clear descriptive anchors
- Logical hierarchy
- Consistent page/entity naming
- Strong contextual relationships
- Clear page titles

Do not invent unsupported entity relationships.
Internal linking cannot guarantee AI citations; it should improve clarity and discoverability.

## 16. Cluster Map
Return a text map:

`Pillar: [Topic]`
├── Existing Page
├── Existing Page
├── Missing Page
├── Supporting Article
├── FAQ
└── Conversion Page

For each branch specify:
- Page status
- Role
- Link direction
- Priority

## 17. Link Opportunity Matrix

| Source | Destination | Anchor | Type | Reason | Priority |
|---|---|---|---|---|---|
| URL | URL | Natural anchor | Contextual | Why relevant | Critical/High/Medium/Low |

Only recommend verified destinations.

## 18. Quality Control
Verify:
- URLs exist or are clearly marked missing
- Links are contextually relevant
- Anchors are natural
- Exact-match repetition is controlled
- Important pages receive appropriate links
- Pillars connect to supporting pages
- Supporting pages connect to relevant pillars
- Orphans/dead ends are identified
- Cannibalization is checked
- Location pages are not thin/duplicated
- No fake URLs/pages are created
- No irrelevant links are recommended
- No keyword stuffing is introduced
- AEO/GEO relationships are considered
- User navigation remains the primary priority

## 19. Failure Conditions
Return `FAIL` if:
- Target page is missing
- Page inventory/sitemap is unavailable
- Required destination verification is impossible
- Required information is insufficient
- Recommendations would require fabricated URLs/pages

Never fabricate website architecture.

## Output
Return:

{
  "target_page": "",
  "target_keyword": "",
  "page_role": "",
  "pillar_page": "",
  "topic_cluster": "",
  "cluster_map": [],
  "existing_pages": [],
  "missing_pages": [],
  "internal_link_opportunities": [],
  "anchor_recommendations": [],
  "orphan_pages": [],
  "dead_end_pages": [],
  "cannibalization_risks": [],
  "topical_gaps": [],
  "location_cluster": [],
  "commercial_links": [],
  "aeo_geo_relationships": [],
  "priority_actions": [],
  "quality_control": {},
  "status": "PASS | PASS_WITH_FIXES | FAIL"
}

## Handoff
Pass results to:
1. Content Architecture
2. SEO Content Writer
3. On-Page SEO
4. AEO/GEO Optimization
5. SEO Auditor
6. Technical SEO

This skill designs architecture and linking; it does not write the final article.

## Core Principle
Do not ask: "Where can we add more links?"

Ask:
"What page relationship is genuinely useful to the user and clear to search engines?"

Build a logical, crawlable, topical architecture without irrelevant links, keyword stuffing, fabricated pages, or artificial SEO manipulation.