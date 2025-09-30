<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'ie_site_template',
    'Configuration/TypoScript',
    'Image Engineering Site Template'
);
