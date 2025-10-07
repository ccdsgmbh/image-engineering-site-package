<?php

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:tt_content.CType.trustedIndustryItem',
        'trusted_industry_item',
        'content-text'
    ],
    'textmedia',
    'after'
);

ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'tx_iesitetemplate_icon' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_iesitetemplate_icon',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.camera', 'camera'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.smartphone', 'smartphone'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.car', 'car'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.tv', 'tv'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.shield', 'shield'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.cog', 'cog'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.stethoscope', 'stethoscope'],
                    ['LLL:EXT:ie_site_template/Resources/Private/Language/locallang_db.xlf:trustedIndustries.icon.scanLine', 'scan-line'],
                ],
                'default' => 'camera',
            ],
        ],
    ]
);

$GLOBALS['TCA']['tt_content']['types']['trusted_industry_item'] = [
    'showitem' => '--palette--;;general, tx_iesitetemplate_icon, header, bodytext, --div--;Access, --palette--;;hidden, --palette--;;access',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => 0,
                'rows' => 5,
            ],
        ],
    ],
];

$GLOBALS['TCA']['tt_content']['ctrl']['typeicons']['trusted_industry_item'] = 'content-text';
