<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'colPos',
    [
        'LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:tt_content.colPos.footerContent',
        300,
        'content-text'
    ],
    '3',
    'after'
);
