<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::registerPageTSConfigFile(
    'ie_site_template',
    'Configuration/page.tsconfig',
    'Image Engineering Site: Page TSConfig'
);
