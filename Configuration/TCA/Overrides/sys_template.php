<?php

declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function (): void {
    ExtensionManagementUtility::addStaticFile(
        'ie_site_template',
        'Configuration/TypoScript',
        'Image Engineering Site Template'
    );
})();
