<?php
declare(strict_types=1);

defined('TYPO3') or die();

call_user_func(static function (): void {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'site_template',
        'Configuration/TypoScript',
        'Site Template'
    );
});
