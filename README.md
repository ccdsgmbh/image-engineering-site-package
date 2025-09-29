# Image Engineering TYPO3 Site Template

This extension translates the React application found in the local `src/` folder into a TYPO3 v13 site package. It supplies
Fluid layouts, custom content elements, assets, and initialization data so editors can bootstrap a site that mirrors the
Image Engineering landing page experience.

## Highlights

- **Custom content elements**: `ccds_hero`, `ccds_announcement`, `ccds_tiles`, and `ccds_slider` model the hero, banner,
  industry grid, and team slider from the React components. They ship with backend fields, Fluid templates, and wizard
  entries.
- **Assets and layout**: The SCSS/CSS and JavaScript helpers replicate the interactions and styling required by the
  imported design.
- **Site Set & demo data**: `Configuration/Site/Default` registers a site set that imports example pages, content, and
  media derived from the original React project. Use it while creating a site to get a ready-to-browse frontend.

## Getting started

1. Install the extension with Composer: `composer req image-engineering/site-template`.
2. Activate it in the TYPO3 Extension Manager.
3. Include the static TypoScript template **Site Template** on your root template record.
4. In **Site Management → Sites → Site Sets** add the provided *Image Engineering Site Template* set to your site.
5. When creating the site select the initializer *Image Engineering demo pages* to import the sample page tree and
   content. Uploaded demo media is copied to `fileadmin/user_upload/site-template/`.

## Custom content element usage

Each content element exposes dedicated fields in the backend:

- **Hero** – Headline, subline, lead text, CTA buttons, optional highlights (JSON array or `value|label` lines), and a
  single background image through the standard media tab.
- **Announcement** – Short message with icon selector and a single CTA link.
- **Tiles** – Section-based flexform for repeatable tiles (title, description, icon/emoji, optional link).
- **Slider** – Flexform that defines team member cards with image paths or paired media references. The companion
  JavaScript enables navigation and automatic rotation.

Refer to `Resources/Private/Language/locallang_db.xlf` for field labels and inline documentation while editing content.

## Development notes

- `Resources/Private/Scss/site.scss` contains the original SCSS source, while `Resources/Public/Styles/site.css` is the
  compiled artifact loaded in the TypoScript setup.
- `Resources/Public/Media/` holds hero and slider imagery copied from the React project under `src/src/assets/`.
- `Initialization/Site/ImageEngineering/` mirrors a classic Import/Export bundle, whereas the site set initializer in
  `Configuration/Site/Default/Initialization/` uses YAML to seed pages and content for TYPO3 13.

## License

MIT © Image Engineering
