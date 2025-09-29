# AGENTS.md

## Purpose
Create a TYPO3 v13 **site package extension** that delivers the website layout, page structure, and required custom content element types.  
The extension must be installable via Composer, provide a Site Set, and include example pages/content in the **Initialization** folder so they can be imported when the site is created.

---

## Deliverable
**Extension Key:** `site_template`  
**Type:** `typo3-cms-extension`  
**Target:** TYPO3 13.x, PHP 8.2+

The extension must contain:

1. **Site Set / Site configuration and content**
    - Create a site set in `Configuration/Sets/SitePackage/`.
        - config.yaml defining the site set.
        - .typoscript files for constants and setup.
        - .tsconfig files for backend configuration.
    - Create example pages/content and site configuration in Initialisation/
      - Initialisation/data.xml file for pages, content, and files.
      - Initialisation/Site/main/config.yaml for site configuration.
2. **Layout & Templates**
    - Fluid layouts, templates, and partials for page rendering.
    - FLUIDTEMPLATE wiring in TypoScript (`constants.typoscript` and `setup.typoscript`).
    - Static TypoScript template registered in `Configuration/TCA/Overrides/sys_template.php`.

3. **Custom Content Elements**
    - Implement the following elements:
        - `ccds_hero`
        - `ccds_announcement`
        - `ccds_tiles`
        - `ccds_slider`
    - Register via TCA in `Configuration/TCA/Overrides/tt_content.php`.
    - Provide Fluid templates in `Resources/Private/Templates/Content/`.

4. **Assets**
    - SCSS input: `Resources/Private/Scss/site.scss`
    - Compiled CSS: `Resources/Public/Styles/site.css`
    - JavaScript helpers: `Resources/Public/JavaScript/site.js`

---

## Required Structure
```
site_template/
  composer.json
  ext_emconf.php
  ext_localconf.php
  ext_tables.sql
  Configuration/
    TypoScript/{constants.typoscript, setup.typoscript}
    TCA/Overrides/tt_content.php
    Site/Default/config.yaml
    Site/Default/Initialization/
      pages.yaml
      content.yaml
      files.yaml
  Classes/
    Utility/JsonUtility.php
  Resources/
    Private/
      Layouts/
      Templates/Page/
      Templates/Content/{Hero.html, Announcement.html, Tiles.html, Slider.html}
      Partials/
    Public/
      Styles/site.css
      JavaScript/site.js
    Private/Language/{locallang.xlf, locallang_db.xlf}
  Documentation/
    Index.rst
  README.md
```

---

## Acceptance Criteria
- Extension can be required via Composer and activated in Extension Manager.
- Site Set is available under **Site Management → Sites → Site Sets**.
- On site creation, example pages/content from `Initialization/` are imported automatically.
- Static TypoScript template “Site Template” is selectable in sys_template.
- Frontend renders seeded page tree using delivered layouts.
- Custom content elements appear in the wizard and render correctly.
- CSS/JS assets are included via TypoScript.

**End of AGENTS.md**
