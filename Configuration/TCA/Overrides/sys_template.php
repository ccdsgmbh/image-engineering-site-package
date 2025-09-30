<?php

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'ie_site_template',
        'Configuration/TypoScript',
        'Image Engineering Site Package'
    );
})();
