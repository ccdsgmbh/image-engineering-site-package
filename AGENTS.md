# AGENTS.md

## Instructions
Create a TYPO Version 13 **site package extension** that delivers the website configuration and basic layout.  
The extension must be installable via Composer.
The extension is only for the basic layout including Fluid Templates, CSS, JS, Layout-Images like Logo and TypoScript. 
Read http://localhost:8080/ for the home page template
Read http://localhost:8080/automotive for a subpage template
Identify and create the necessary Fluid Templates, CSS, JS, Layout-Images like Logo and TypoScript to replicate the layout of the website that runs under http://localhost:8080/
Ignore any content elements, all menus and content areas must be empty and rendered via TypoScript and Fluid Templates
Identify the different areas in the layout for header, footer, navigations and content areas. The home template has multiple content areas, create TSConfig backend layout configurations for the different areas
Ignore any password protection or login functionality

## Deliverable
**Extension Key:** `ie_site_template`  
**Type:** `typo3-cms-extension`  
**Target:** TYPO3 13.x, PHP 8.2+

## Extension structure (do not create files if not needed)
```
├── composer.json                 ← defines package, type=typo3-cms-extension
├── ext_emconf.php                ← TYPO3 extension metadata
├── ext_localconf.php             ← runtime registrations (plugins, TS, routes, etc.)
├── ext_tables.sql                ← DB schema additions (if any)
├── ext_tables.php                ← optional (backend-only registrations)
│
├── Configuration/
│   ├── TCA/
│   │   └── Overrides/
│   │       └── tt_content.php    ← register custom CEs
│           └── sys_template.php  ← register static TypoScript
│   │
│   ├── TypoScript/
│   │   ├── constants.typoscript  ← TypoScript constants
│   │   └── setup.typoscript      ← TypoScript setup, FLUIDTEMPLATE wiring
│   │
│   ├── page.tsconfig            ← backend page TSconfig (RTE, backend layout, etc.)
│   ├── PageTS/
│   │   └── TCEFORM.tsconfig      ← backend form customizations
│   │
│   ├── Routes/
│   │   └── Frontend.yaml         ← Extbase routes for JSON/AJAX
│   │
│   └── Site/
│       └── Default/
│           ├── config.yaml       ← site config (rootPageId, languages, errorHandling)
│           └── Initialization/   ← initial site content
│               ├── pages.yaml    ← page tree seed
│               ├── content.yaml  ← demo content
│               └── files.yaml    ← demo files
│
├── Classes/                      ← PHP classes, PSR-4 autoloaded
│   ├── Controller/               ← Extbase/PSR-15 controllers
│   ├── Domain/                   ← Extbase models & repositories
│   ├── Middleware/               ← PSR-15 middlewares
│   ├── Service/                  ← business logic services
│   └── Utility/                  ← small helpers (e.g. JsonUtility.php)
│
├── Resources/
│   ├── Private/
│   │   ├── Layouts/              ← Fluid layouts
│   │   ├── Partials/             ← Fluid partials
│   │   ├── Templates/
│   │   │   ├── Page/             ← page templates (Default.html, Home.html, etc.)
│   │   │   └── Content/          ← templates for custom CEs (Hero.html, Slider.html, …)
│   │   ├── Language/             ← locallang.xlf, locallang_db.xlf
│   │   └── Scss/                 ← SCSS source (site.scss)
│   │
│   └── Public/
│       ├── Styles/               ← compiled CSS (site.css)
│       ├── JavaScript/           ← site.js (jQuery/Vite output)
│       ├── Images/               ← public images/icons
│       └── Icons/                ← SVG/Backend icons for CEs
│
├── Documentation/                ← reST / Sphinx documentation
│   ├── Index.rst
│   ├── installation.rst
│   ├── content.rst
│   └── development.rst
│
├── Tests/
│   ├── Unit/                     ← PHPUnit unit tests
│   │   └── Utility/
│   │       └── JsonUtilityTest.php
│   └── phpunit.xml.dist          ← PHPUnit config
│
└── README.md                     ← Extension overview
```

**End of AGENTS.md**
