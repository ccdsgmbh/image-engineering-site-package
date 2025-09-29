<?php
declare(strict_types=1);

defined('TYPO3') or die();

call_user_func(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:site_template/Configuration/TsConfig/Page/All.tsconfig'");

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addSiteSet(
        'site_template',
        'Configuration/Site/Default'
    );
});
