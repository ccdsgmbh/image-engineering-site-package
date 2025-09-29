<?php
declare(strict_types=1);

defined('TYPO3') or die();

call_user_func(static function (): void {
    $additionalColumns = [
        'tx_site_template_primary_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_primary_label',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],
        'tx_site_template_primary_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_primary_link',
            'config' => [
                'type' => 'input',
                'renderType' => 'link',
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'allowedLinkOptions' => ['page', 'url', 'file', 'email', 'telephone']
                        ],
                    ],
                ],
            ],
        ],
        'tx_site_template_secondary_label' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_secondary_label',
            'config' => [
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim',
                'max' => 255,
            ],
        ],
        'tx_site_template_secondary_link' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_secondary_link',
            'config' => [
                'type' => 'input',
                'renderType' => 'link',
                'eval' => 'trim',
                'fieldControl' => [
                    'linkPopup' => [
                        'options' => [
                            'allowedLinkOptions' => ['page', 'url', 'file', 'email', 'telephone']
                        ],
                    ],
                ],
            ],
        ],
        'tx_site_template_highlight_items' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_highlight_items',
            'description' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_highlight_items.description',
            'config' => [
                'type' => 'text',
                'rows' => 6,
                'enableRichtext' => false,
                'eval' => 'trim',
            ],
        ],
        'tx_site_template_announcement_icon' => [
            'exclude' => true,
            'label' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_announcement_icon',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_announcement_icon.calendar', 'calendar'],
                    ['LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_announcement_icon.location', 'location'],
                    ['LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.tx_site_template_announcement_icon.info', 'info'],
                ],
                'default' => 'calendar',
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'siteTemplateElements',
        'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.group.siteTemplate'
    );

    $contentTypes = [
        'ccds_hero' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.ccds_hero',
        'ccds_announcement' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.ccds_announcement',
        'ccds_tiles' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.ccds_tiles',
        'ccds_slider' => 'LLL:EXT:site_template/Resources/Private/Language/locallang_db.xlf:tt_content.ccds_slider',
    ];

    foreach ($contentTypes as $type => $label) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
            'tt_content',
            'CType',
            [
                'label' => $label,
                'value' => $type,
                'icon' => 'content-special-information',
                'group' => 'siteTemplateElements',
            ],
            'textmedia',
            'after'
        );

        $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'][$type] = 'content-special-information';
    }

    $GLOBALS['TCA']['tt_content']['types']['ccds_hero'] = [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,' .
            '--palette--;;general,' .
            '--palette--;;headers,subheader,bodytext,' .
            'tx_site_template_primary_label,tx_site_template_primary_link,' .
            'tx_site_template_secondary_label,tx_site_template_secondary_link,' .
            'tx_site_template_highlight_items,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:media,assets,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,' .
            '--palette--;;frames,--palette--;;appearanceLinks,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' .
            '--palette--;;language,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,' .
            '--palette--;;hidden,--palette--;;access',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => false,
                ],
            ],
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['ccds_announcement'] = [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,' .
            '--palette--;;general,' .
            'header,bodytext,tx_site_template_primary_label,tx_site_template_primary_link,' .
            'tx_site_template_announcement_icon,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,' .
            '--palette--;;appearanceLinks,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' .
            '--palette--;;language,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,' .
            '--palette--;;hidden,--palette--;;access',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => false,
                ],
            ],
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['ccds_tiles'] = [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,' .
            '--palette--;;general,' .
            'header,subheader,bodytext,pi_flexform,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,' .
            '--palette--;;frames,--palette--;;appearanceLinks,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' .
            '--palette--;;language,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,' .
            '--palette--;;hidden,--palette--;;access',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => false,
                ],
            ],
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['ccds_slider'] = [
        'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,' .
            '--palette--;;general,' .
            'header,subheader,bodytext,pi_flexform,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:media,assets,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,' .
            '--palette--;;frames,--palette--;;appearanceLinks,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,' .
            '--palette--;;language,' .
            '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,' .
            '--palette--;;hidden,--palette--;;access',
        'columnsOverrides' => [
            'bodytext' => [
                'config' => [
                    'enableRichtext' => false,
                ],
            ],
        ],
    ];

    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,ccds_tiles'] = 'FILE:EXT:site_template/Configuration/FlexForms/Tiles.xml';
    $GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds']['*,ccds_slider'] = 'FILE:EXT:site_template/Configuration/FlexForms/Slider.xml';
});
