<?php return [
    'cache' => [
        'path' => '_cache',
    ],
    'providers' => [
        'MorningMedley\\Block\\ServiceProvider',
        'MorningMedley\\Hook\\ServiceProvider',
        'MorningMedley\\View\\ServiceProvider',
        'MorningMedley\\WordPressConfig\\ServiceProvider',
        'MorningMedley\\Database\\ServiceProvider',
        'MorningMedley\\Route\\ServiceProvider',
    ],
];
