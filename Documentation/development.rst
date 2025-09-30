Development Notes
=================

* Source styles live in ``Resources/Private/Scss/site.scss``. Compile to ``Resources/Public/Styles/site.css`` with your preferred tool chain.
* JavaScript behaviour is bundled in ``Resources/Public/JavaScript/site.js``. Keep functionality lightweight to preserve TYPO3 caching.
* Fluid templates follow the TYPO3 layout/partial/template structure. Additional partials can be added in ``Resources/Private/Partials``.
* Backend layouts are defined in ``Configuration/page.tsconfig``. Update the ``colPos`` mapping in ``Configuration/TypoScript/setup.typoscript`` when changing layouts.
