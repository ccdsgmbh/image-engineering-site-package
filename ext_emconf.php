<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Template',
    'description' => 'TYPO3 v13 site package for Image Engineering.',
    'category' => 'templates',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Image Engineering',
    'author_email' => 'devs@image-engineering.com',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.99',
            'fluid_styled_content' => '13.0.0-13.9.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
];
