<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'IE Site Template',
    'description' => 'Site package that delivers the Image Engineering basic layout using Fluid, TypoScript and Tailwind CSS.',
    'category' => 'templates',
    'author' => 'Image Engineering',
    'author_email' => 'info@image-engineering.de',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
            'frontend' => '13.0.0-13.4.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
