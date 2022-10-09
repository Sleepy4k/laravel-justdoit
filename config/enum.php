<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Enum
    |--------------------------------------------------------------------------
    |
    */
    
    'profile' => [
        'language' => [
            'en' => 'en',
            'id' => 'id'
        ]
    ],
    'task' => [
        'priority' => [
            'high' => 'high',
            'medium' => 'medium',
            'low' => 'low'
        ],
        'isDone' => [
            'true' => 'true',
            'false' => 'false',
        ]
    ],
    'role' => [
        'guard' => [
            'web' => 'web',
            'api' => 'api'
        ]
    ],
    'menu' => [
        'type' => [
            'parent' => 'parent',
            'single' => 'single'
        ]
    ]
];