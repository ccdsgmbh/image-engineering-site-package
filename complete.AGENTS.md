# AGENTS.md

## Purpose
Create a TYPO Version 13 **site package extension** that delivers the website basic layout.  
The extension must be installable via Composer.
The extension is only for the basic layout including Fluid Templates, CSS, JS, Layout-Images like Logo and TypoScript.
---

## Code sources to be used for the extension
- The Extension must replicate the layout of the tailwind/react website that runs under http://localhost:8080/
- Use the HTML/CSS/JS code of the project running under http://localhost:8080/ as source code for the extension
- Do not use any other code sources
- Do not replicate any password protection or login functionality
- The Extension must replicate the exact layout, behaviour and structure of the loveable project under http://localhost:8080/
  - The layout contains top navigation (responsive with burger menu), footer navigation and different content areas
    - Do not create the content elements, only the layout, all menus and content areas must be empty and rendered via TypoScript and Fluid Templates
    - Any nested navigation levels must replicate the behaviour of the original project
  - The extension must follow the coding guidelines of TYPO3 Version 13, the codebase of TYPO3 Version 13 is located in the folder ./typo3_src/typo3/sysext
  - The extension must follow the latest TYPO3 Version 13 API which is documented in ./typo3_docs/Documentation
  - The extension files must not be created in a new folder. Use the current folder as root folder for the extension

## Deliverable
**Extension Key:** `ie_site_template`  
**Type:** `typo3-cms-extension`  
**Target:** TYPO3 13.x, PHP 8.2+

The extension must contain:

1. **Site configuration**
    - Create a site configuration with languages English and German.
    - Configure the root page with a site title and base URL.
    - Set up error handling for 404 and 403 errors.
2. **Layout & Templates**
    - Fluid layouts, templates, and partials for page rendering.
    - FLUIDTEMPLATE wiring in TypoScript (`constants.typoscript` and `setup.typoscript`).
    - Include CSS/JS assets in TypoScript.
    - Use jQuery and Tailwind CSS (via CDN or local files).
3. **Static TypoScript**
    - Provide static TypoScript files for easy inclusion in the TYPO3 backend.
    - Organize TypoScript into `constants.typoscript` and `setup.typoscript`.
    - Include comments in TypoScript for clarity.
    - Ensure TypoScript is clean and follows best practices.
    - Use `EXT:ie_site_template/Configuration/TypoScript/` for TypoScript files.
    - Register static TypoScript in `Configiration/TCA/Override/sys_template.php`.
    - The TypoScript must contain at least:
        - Page setup with FLUIDTEMPLATE
        - Inclusion of CSS/JS assets (jQuery, Tailwind CSS)
        - Basic configuration for content rendering
        - Top navigation menu setup
        - Footer configuration
4. **Assets**
    - Include the logo image in `Resources/Public/Images/`.
    - Include any additional images used in the layout.
    - Use `Resources/Public/Css/` for custom CSS files if needed.
    - Use `Resources/Public/JavaScript/` for custom JS files if needed.
    - Ensure all assets are properly referenced in TypoScript.
5. **Documentation**
    - Provide a README.md file with installation and usage instructions.
    - Include comments in the code for clarity.
    - Ensure the extension follows TYPO3 coding standards and best practices.

---

**End of AGENTS.md**
