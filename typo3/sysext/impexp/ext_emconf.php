<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Import/Export',
    'description' => 'Import and Export of records from TYPO3 in a custom serialized format (.T3D) for data exchange with other TYPO3 systems.',
    'category' => 'be',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '11.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
