<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Site package providing the base layout, assets and TypoScript configuration for the Image Engineering website.',
    'category' => 'templates',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'state' => 'beta',
    'clearcacheonload' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.99',
            'php' => '8.2.0-8.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ],
];

