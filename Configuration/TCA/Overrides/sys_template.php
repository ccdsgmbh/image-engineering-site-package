<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'ie_site_template',
    'Configuration/TypoScript',
    'Image Engineering Site Template'
);
