# Image Engineering Site Template

TYPO3 v13 site package extension that provisions the Image Engineering layout, TypoScript configuration, and site initialization data. The design is based on the existing frontend prototype located in the `src/` directory and uses Tailwind CSS (CDN) together with a lightweight jQuery enhancement layer.

## Features

- Fluid layout with hero, industry, news, standards, and contact sections inspired by the React prototype
- Tailwind CSS (via CDN) and custom CSS enhancements in `Resources/Public/Css/site.css`
- jQuery-powered header behaviour and smooth scrolling from `Resources/Public/JavaScript/site.js`
- Site Set exposed under `Configuration/Sets/SitePackage/` for easy assignment in TYPO3 backend
- Initialization payload (`Initialisation/`) to create the site configuration and example page tree during site creation

## Usage

1. Require the extension via Composer inside your TYPO3 instance:
   ```bash
   composer req image-engineering/site-template
   ```
2. Activate the extension in the Extension Manager.
3. Navigate to **Site Management → Sites → Site Sets** and assign the "Image Engineering Site Template" set to your site, or import the provided Initialization set while creating a new site.
4. The shipped TypoScript registers the `FLUIDTEMPLATE` setup, includes Tailwind/jQuery assets, and wires common navigation data processors.

## Assets

All images and content originate from the `/src` prototype supplied with this repository. They were copied into `Resources/Public/Images/` to keep the site package self-contained.
