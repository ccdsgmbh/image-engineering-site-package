<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Sitepackage providing the Image Engineering corporate layout and configuration.',
    'category' => 'templates',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
