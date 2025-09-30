<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Site package delivering the base layout, TypoScript and assets for the Image Engineering website.',
    'category' => 'templates',
    'state' => 'stable',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'version' => '1.0.0',
    'clearCacheOnLoad' => true,
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.99.99',
            'php' => '8.2.0-8.99.99',
        ],
    ],
];
