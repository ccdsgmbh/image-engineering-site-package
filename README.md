# Image Engineering Site Package (`ie_site_template`)

TYPO3 site package for Image Engineering delivering the corporate layout, Fluid templates, TypoScript configuration and backend layout setup for TYPO3 13.

## What is included

- Composer-installable TYPO3 extension (`typo3-cms-extension`)
- Fluid page templates for the home page, automotive landing page and default pages
- Responsive SCSS/CSS and lightweight JavaScript matching the provided reference layouts
- Static TypoScript for content area mapping and navigation rendering
- Backend layouts and Site Configuration scaffolding with predefined content areas
- Basic assets such as SVG logos and favicon

## Getting started

1. `composer require image-engineering/ie-site-template`
2. Activate the extension in the TYPO3 install tool / Extension Manager.
3. Import the site configuration from `Configuration/Site/Default` or map it to an existing site.
4. Include the static TypoScript template on the root page and assign the **Home Layout** backend layout.
5. Populate the dedicated content areas (colPos) with Fluid Styled Content elements.

For editing guidance refer to the documentation in `Documentation/`.
