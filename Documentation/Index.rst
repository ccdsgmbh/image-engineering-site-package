Image Engineering Site Template
================================

This site package delivers the Image Engineering landing page that was originally
implemented in the React application located in ``src/`` of this repository.

Features
--------

* Fluid page layout with navigation header, content region, and footer.
* Custom content elements ``ccds_hero``, ``ccds_announcement``, ``ccds_tiles`` and ``ccds_slider`` rendered with the delivered templates.
* TypoScript setup that wires the Fluid templates and includes the compiled CSS/JS assets.
* Site Set providing demo pages, content, and files for quick project bootstrap.

Installation
------------

1. Require the extension via Composer: ``composer req image-engineering/site-template``.
2. Activate the extension in the TYPO3 Extension Manager.
3. Create or edit a site record and select the *Image Engineering Site Template* Site Set.
4. During site creation choose the *Image Engineering demo pages* initializer to import the example data.
5. Include the static TypoScript template "Site Template" in the desired root template record.

After publishing, the frontend renders the React-inspired layout, and editors can
place the custom content elements via the new content element wizard.
