# Image Engineering Site Template

TYPO3 site package that delivers the base layout, assets and TypoScript configuration required to reproduce the Image Engineering design prototype for TYPO3 v13.

## Features

- Fluid layouts and templates covering the home page, standard pages and automotive-style sub pages.
- Tailwind-inspired styling implemented with vanilla CSS plus Tailwind CDN and jQuery support.
- Configurable navigation, content areas and footer rendered via TypoScript libraries (`lib.content*`).
- Backend layout definitions with dedicated column positions for hero, banner, body and highlight sections.
- Ready-to-use site configuration (`English` + `Deutsch`) including error handling templates for 403/404.
- Composer-ready extension structure without an extra root folder.

## Installation

1. Require the extension in your TYPO3 project:

   ```bash
   composer config repositories.ie_site_template path /path/to/image-engineering-site-package
   composer require image-engineering/ie-site-template:dev-main
   ```

2. Activate the extension in the TYPO3 Extension Manager.
3. Import the supplied site configuration from `Configuration/Site/ie_site_template` for your root page.
4. Assign the "Home Page Layout" backend layout to the start page and "Subpage Layout" (or leave default) for the remaining pages.
5. Include the static TypoScript template **Image Engineering Site Package** in your site template record.

## Content Areas

Content rendering is organised into dedicated column positions to keep structure close to the reference build:

| Column position | TypoScript object                | Typical usage                        |
|-----------------|----------------------------------|--------------------------------------|
| 10              | `lib.contentHero`                | Hero / above-the-fold content        |
| 20              | `lib.contentAreaPrimary`         | Announcement banner / lead section   |
| 30              | `lib.contentAreaSecondary`       | Main body area                       |
| 40              | `lib.contentAreaTertiary`        | Sidebar / supporting content         |
| 50              | `lib.contentAreaQuaternary`      | Highlight / CTA stripe               |
| 60              | `lib.footerContent`              | Footer widgets or teasers            |

All areas are rendered via standard TYPO3 content elements. They are empty by default until editors add content.

## Assets

Static assets live under `Resources/Public`:

- `Css/site.css` – main styling inspired by the Tailwind prototype.
- `JavaScript/site.js` – mobile navigation toggle powered by jQuery.
- `Images/` – essential layout imagery including the company logos and hero backgrounds.

## Development Notes

- Templates rely on TypoScript libraries (`lib.navigationPrimary`, `lib.navigationFooter`, `lib.content*`). Adjust these in `Configuration/TypoScript/setup.typoscript` as needed.
- Tailwind CSS and jQuery are loaded from CDN endpoints as per project requirements. Local overrides can be added in the TypoScript include blocks.
- Error documents are located in `Resources/Private/Templates/Error/` and referenced by the site configuration.

## License

MIT
