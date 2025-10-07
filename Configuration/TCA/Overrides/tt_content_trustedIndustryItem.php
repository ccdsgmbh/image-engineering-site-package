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
                'type' => 'input',
                'size' => 10,
                'max' => 10,
                'eval' => 'trim',
                'placeholder' => '🚀',
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
