QuranlyHub SEO Skill: Image SEO & Image OptimizationVersion: 1.01. PURPOSE & CORE PRINCIPLESPurpose: Optimize website images for SEO, Google Images, page speed, Core Web Vitals, accessibility, user experience, AEO, and GEO.Core Principle: Images must serve users first. Optimize for speed, accessibility, and relevance without resorting to keyword stuffing or unnecessary quality reduction.Prohibitions: Zero keyword-stuffed alt text, zero fake descriptions, zero unnecessary stock images, and zero lazy loading of critical above-the-fold/LCP hero images.2. IMAGE INVENTORY & PURPOSE CLASSIFICATIONInventory Data: Record filename, format, dimensions, file size, purpose, section, alt text, and above/below-the-fold placement.Image Purpose Types: Hero image, supporting blog image, course image, teacher image, location image, decorative image, or logo. Optimization workflows adapt to image purpose.3. TECHNICAL OPTIMIZATION (FORMATS, SIZING & LOADING)Formats: Prefer modern formats like WebP or AVIF when supported. Use PNG only for transparency or JPEG for standard photographic workflows.Dimensions & Responsive Sizing: Match actual display requirements. Avoid uploading oversized 4000px images when maximum display width is 800px. Use responsive attributes (srcset/sizes).Loading Strategy:Hero / LCP Images: Prioritize loading; never lazy-load above-the-fold primary elements.Below-the-Fold Images: Implement lazy loading (loading="lazy") to improve performance.Layout Shift (CLS): Specify explicit width, height, or aspect ratios to prevent unexpected content jumps during loading.4. SEO & ACCESSIBILITY (ALT TEXT & FILENAMES)Filenames: Use descriptive, hyphen-separated names.Good: online-quran-class-for-kids.webp, quran-classes-qatar.webpBad: IMG1234.jpg, image-final-2.webpAlt Text Rules: Describe actual visible content accurately for screen-reader users and context.Good: "Child attending an online Quran lesson with a qualified tutor"Bad (Keyword Stuffing): "best online Quran classes online Quran teacher Quran classes Qatar"Decorative & Logos: Use empty alt attributes for decorative images. Ensure QuranlyHub logos use clean brand identification ("Quranly Hub").5. EXAMPLE: GOOD VS. BAD PRACTICESElementGood PracticeBad Practice (Keyword Stuffing / Errors)Filenametajweed-online-class.webpbest-tajweed-classes-qatar-dubai-london.webpAlt Text"Teacher explaining Tajweed rules to an adult student""tajweed classes online quran teacher quran tutoring"LoadingPreloaded hero image for LCP optimizationLazy-loading the primary hero banner above the fold6. QUALITY CONTROL & FAILURE CONDITIONSQuality Checklist: Valid formats verified, file sizes compressed without visual artifacting, alt text accurately describes visuals, and no critical hero image is lazy-loaded.Failure Conditions: Return FAIL if required images cannot be accessed, dimensions/file sizes cannot be verified, or optimization requires guessing missing properties.7. OUTPUT FORMAT (JSON SCHEMA)The skill concludes by outputting a structured JSON optimization report:JSON{
  "audit_date": "",
  "page_url": "",
  "images_analyzed": 0,
  "image_inventory": [],
  "optimization_summary": {
    "webp_count": 0,
    "avif_count": 0,
    "oversized_images": 0,
    "missing_alt": 0,
    "weak_alt": 0,
    "lazy_loading_issues": 0
  },
  "images": [],
  "alt_text_recommendations": [],
  "filename_recommendations": [],
  "compression_recommendations": [],
  "responsive_image_recommendations": [],
  "image_seo_opportunities": [],
  "critical_issues": [],
  "high_priority_issues": [],
  "medium_priority_issues": [],
  "low_priority_issues": [],
  "publication_status": "",
  "next_agent": "Final SEO QA & Publishing Agent"
}
8. AGENT HANDOFFHandoff Package To:On-Page SEO AgentAEO/GEO AgentTechnical SEO AgentFinal SEO QA AgentPublishing Agent