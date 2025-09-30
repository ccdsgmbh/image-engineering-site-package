# Image Engineering Site Package

`ie_site_template` is the TYPO3 v13 site package that delivers the base layout, assets, TypoScript and backend configuration for the Image Engineering marketing website.

## Features

- Composer-installable site package for TYPO3 13.x (PHP 8.2+).
- Fluid layout with dedicated templates for the home and inner pages.
- Responsive CSS and lightweight JavaScript replicating the original design language.
- Backend layouts and TSconfig for structured content authoring.
- Preconfigured site setup (site configuration YAML, page tree seed and placeholders).
- Utility helpers and a PHPUnit setup for extending the package.

## Usage

Install through Composer, activate the extension in the TYPO3 backend, include the static TypoScript template and import the provided site configuration. Assign the delivered backend layouts to your pages and place content elements into the named columns to match the home page and inner page compositions.

For more information see the documentation in `Documentation/`.
