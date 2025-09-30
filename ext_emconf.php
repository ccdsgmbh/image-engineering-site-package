<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Site package delivering the Image Engineering layout, assets, and TypoScript configuration for TYPO3 v13.',
    'category' => 'templates',
    'state' => 'beta',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];
