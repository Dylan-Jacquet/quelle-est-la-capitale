<?php

$countryChoose = $_GET["country"]??"";

$countries = [
    'france' => [
        'capital-name' => 'paris',
        'flag-file' => 'france-flag-icon-256.png',
    ],
    'belgique' =>[
        'capital-name' => 'bruxelles',
        'flag-file' => 'belgium-flag-icon-256.png',
    ],
    'allemagne' =>[
        'capital-name' => 'berlin',
        'flag-file' => 'germany-flag-icon-256.png',
    ],
    'portugal' =>[
        'capital-name' => 'lisbonne',
        'flag-file' => 'portugal-flag-icon-256.png',
    ],
    'espagne' =>[
        'capital-name' => 'madrid',
        'flag-file' => 'espagne-flag-icon-256.png',
    ],
    'croatie' =>[
        'capital-name' => 'zagreb',
        'flag-file' => 'croatie-flag-icon-256.png',
    ],
    'autriche' =>[
        'capital-name' => 'vienne',
        'flag-file' => 'autriche-flag-icon-256.png',
    ],
    'russie' =>[
        'capital-name' => 'moscou',
        'flag-file' => 'russie-flag-icon-256.png',
    ],
    'canada' =>[
        'capital-name' => 'ottawa',
        'flag-file' => 'canada-flag-icon-256.png',
    ],
    'danemark' =>[
        'capital-name' => 'copenhague',
        'flag-file' => 'danemark-flag-icon-256.png',
    ],
];

$nameCountries = array_keys($countries);

require "index.view.php";
