<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Site package delivering the Image Engineering layout with Fluid templates, TypoScript, CSS, and assets.',
    'category' => 'templates',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'author_company' => 'Image Engineering',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.99.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
