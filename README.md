# Image Engineering Site Template (`ie_site_template`)

TYPO3 v13 site package that mirrors the Image Engineering design running at `http://localhost:8080/`. It provides the Fluid templates, TypoScript configuration, assets and site configuration needed to bootstrap an installation with the same layout and responsive navigation.

## Features

- Responsive header navigation with mega menu behaviour and mobile drawer toggle
- Footer layout matching the original Vite/Tailwind/React project
- Tailwind CSS via CDN and jQuery-powered mobile navigation interactions
- Static TypoScript (`constants.typoscript`, `setup.typoscript`) registered for easy inclusion
- Site configuration for English and German including 403/404 error handling
- Custom CSS/JS assets and logo shipped with the extension

## Installation

1. Require the extension with Composer from the TYPO3 web root:

   ```bash
   composer config repositories.ie_site_template path ./image-engineering-site-package
   composer require image-engineering/ie-site-template:dev-main
   ```

2. Activate the extension in the TYPO3 backend (`Admin Tools → Extensions`).
3. Create a root page (UID `1` by default), assign the included site configuration (`Site Management → Sites → Import`) from `Configuration/Site/Main/config.yaml`.
4. Add a root `sys_template` record on the root page and include the static TypoScript set **“Image Engineering Site Template”**.
5. Create TYPO3 content elements within the standard column (`colPos 0`). The layout will render them in the main content area while keeping menus and CTAs empty for editorial control.

## Configuration

Adjust the TypoScript constants in `Configuration/TypoScript/constants.typoscript` to point menus to the correct root pages or to change asset locations. The default IDs assume the site root has UID `1`.

## Asset Notes

- Tailwind CSS is loaded from the official CDN (`https://cdn.tailwindcss.com`).
- jQuery `3.7.1` is loaded from the jQuery CDN.
- Navigation behaviour is handled by `Resources/Public/JavaScript/navigation.js`.
- The original logo from the Vite project lives in `Resources/Public/Images/logo-ie-white.png`.

## Development Tips

- Extend the Fluid templates in `Resources/Private/Templates/Page/` and partials under `Resources/Private/Partials/` to add bespoke sections.
- Use the provided `lib.dynamicContent` TypoScript object (`f:cObject`) in templates to render additional content columns if needed.
- When adding new assets, register them in TypoScript (`page.includeCSS`/`includeJSFooter`).

## License

MIT License. See `composer.json` for details.
