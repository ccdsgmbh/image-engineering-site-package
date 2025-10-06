# AGENTS.md

## Environment
**Extension Key:** `ie_site_template`  
**Type:** `typo3-cms-extension`  
**Target:** TYPO3 13.x, PHP 8.2+

## TYPO3 extension structure
- `Configuration/`: Configuration files for the extension.
- `Resources/`: Contains public assets, language files, and templates.
- `Classes/`: PHP classes for controllers, models, and services.
- `ext_emconf.php`: Extension metadata and dependencies.
- `ext_localconf.php`: Local configuration for the extension.
- `ext_tables.php`: Database table definitions and TCA configurations.
- `composer.json`: Composer configuration for managing dependencies.
- `README.md`: Documentation for the extension.
- `CHANGELOG.md`: Log of changes made in each version.
- `Configuration/TCA`: Table Configuration Array files.
- `Configuration/TypoScript`: TypoScript configuration files.
- `Resources/Private/Templates`: Fluid templates for rendering views.
- `Resources/Private/Partials`: Fluid partials for reusable components.
- `Resources/Private/Layouts`: Fluid layouts for consistent page structure.
- `Resources/Public/Css`: CSS files for styling.
- `Resources/Public/JavaScript`: JavaScript files for interactivity.
- `Resources/Public/Images`: Image assets used in the extension.
- `Classes/Controller`: Controllers handling requests and responses.
- `Classes/Domain/Model`: Domain models representing data structures.
- `Classes/Domain/Repository`: Repositories for data access and manipulation.
- `Classes/Service`: Service classes for business logic.
- `Classes/Utility`: Utility classes for common functions.
- `Classes/Middleware`: Middleware for request processing.

## Additional instructions
- Always log the latest prompt and response in a file named `prompt.log` in the root of the extension.

## Deployment
- Always commit and push changes to the Git repository. Add a meaningful commit message.