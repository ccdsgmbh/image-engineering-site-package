<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Image Engineering Site Template',
    'description' => 'Site package extension providing layouts, TypoScript, and initialization data.',
    'category' => 'templates',
    'author' => 'Image Engineering',
    'author_email' => 'dev@image-engineering.example',
    'state' => 'beta',
    'clearcacheonload' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
