# Image Engineering Site Package (`ie_site_template`)

Site package for TYPO3 v13 that delivers the Image Engineering corporate layout, Fluid templates, Tailwind-based styling and jQuery behaviour.

## Features
- Home and Automotive landing page templates derived from the provided reference layouts
- Fluid layout/partial structure with header, footer, and reusable CTA components
- Tailwind-inspired design tokens with custom CSS and bundled assets (images, JS)
- Backend layout configurations for home, default and automotive pages
- Site configuration bootstrap including root page tree blueprint and asset seeding
- jQuery powered mobile navigation and smooth scrolling helpers

## Installation
1. Add the package via Composer inside your TYPO3 project root:
   ```bash
   composer config repositories.ie_site_template path /path/to/image-engineering-site-package
   composer require image-engineering/ie-site-template:dev-main
   ```
2. Activate the extension in the TYPO3 Extension Manager.
3. Import the supplied site configuration (`Site Management → Sites → Import`) and select *ie-site*.
4. Set the “Image Engineering Site Template” TypoScript record on the root page (includes setup/constants).

## Tailwind CSS workflow
The distributed CSS (`Resources/Public/Styles/site.css`) is based on Tailwind utility classes and custom tokens. To rebuild the stylesheet:

1. Install dependencies locally (Node 18+):
   ```bash
   npm install tailwindcss postcss autoprefixer
   ```
2. Compile the SCSS source:
   ```bash
   npx tailwindcss -i Resources/Private/Scss/site.scss -o Resources/Public/Styles/site.css --minify
   ```
3. Commit the generated CSS file.

## Backend layouts
- `home`: hero, industries, news, standards, lead capture and banner columns
- `automotive`: hero split, highlights, standards, products, partner logos, CTA
- `default`: generic layout with main/aside columns

Adjust the backend layout on individual pages via *Page → Edit → Appearance*.

## JavaScript
`Resources/Public/JavaScript/site.js` contains lightweight jQuery scripts for the mobile navigation drawer and smooth in-page scrolling. jQuery 3.7 is loaded from the CDN through TypoScript.

## Assets
All layout images referenced in the templates are stored under `Resources/Public/Images/`. They are also referenced in the site initialisation `files.yaml` for convenience.

## Support
For customisation requests contact Image Engineering: [info@image-engineering.de](mailto:info@image-engineering.de) / +49 2231 6911-50.
