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

$GLOBALS['TCA']['tt_content']['types']['trusted_industry_item'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['textmedia'] ?? [],
    [
        'showitem' => '--palette--;;general, header, bodytext, assets, --div--;Access, --palette--;;hidden, --palette--;;access',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => 0,
                    'rows' => 5,
                ],
            ],
            'assets' => [
                'config' => [
                    'maxitems' => 1,
                    'overrideChildTca' => [
                        'columns' => [
                            'title' => [
                                'config' => [
                                    'max' => 128,
                                ],
                            ],
                            'alternative' => [
                                'config' => [
                                    'max' => 128,
                                ],
                            ],
                        ],
                        'types' => [
                            2 => [
                                'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                            ],
                            3 => [
                                'showitem' => '--palette--;;imageoverlayPalette,--palette--;;filePalette',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicons']['trusted_industry_item'] = 'content-text';
