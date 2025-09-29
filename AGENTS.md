# AGENTS.md

## Purpose
Create a TYPO3 v13 **site package extension** that delivers the website layout, page structure.  
The extension must be installable via Composer, provide a Site Set, and include example pages in the **Initialization** folder so they can be imported when the site is created.
The extension is only for the basic layout and structure, no custom backend modules or advanced features are required.
---

## Deliverable
**Extension Key:** `site_template`  
**Type:** `typo3-cms-extension`  
**Target:** TYPO3 13.x, PHP 8.2+

The extension must contain:

1. **Site Set / Site configuration and content**
    - Create a site set in `Configuration/Sets/SitePackage/`.
        - config.yaml defining the site set.
        - .typoscript files for constants and setup for e.g. page config, content objects and navigation.
        - Any content, page configuration or navigation must base on TypoScript.
        - .tsconfig files for backend configuration.
    - Create example pages/content and site configuration in Initialisation/
      - Initialisation/data.xml file for pages.
      - Initialisation/Site/main/config.yaml for site configuration.
2. **Layout & Templates**
    - Fluid layouts, templates, and partials for page rendering.
    - FLUIDTEMPLATE wiring in TypoScript (`constants.typoscript` and `setup.typoscript`).
    - Include CSS/JS assets in TypoScript.
    - Use jQuery and Tailwind CSS (via CDN or local files).

---


## Acceptance Criteria
- Extension can be required via Composer and activated in Extension Manager.
- Site Set is available under **Site Management → Sites → Site Sets**.
- On site creation, example pages/content from `Initialization/` are imported automatically.
- Frontend renders seeded page tree using delivered layouts.
- CSS/JS assets are included via TypoScript.

**End of AGENTS.md**
