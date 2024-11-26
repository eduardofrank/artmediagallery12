<?php

return [
    'frontend' => [
        'eduardo-frank/webmanifest' => [
            'target' => \EduardoFrank\Artmediagallery12\Middleware\Webmanifest::class,
            'before' => [
                'typo3/cms-frontend/page-resolver',
            ],
            'after' => [
                'typo3/cms-frontend/site',
            ],
        ],
    ],
];
