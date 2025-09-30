<?php

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "@import 'EXT:ie_site_template/Configuration/TsConfig/Page/Default.tsconfig'"
    );
})();
