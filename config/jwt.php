<?php

return [

    'secret' => env('JWT_SECRET'),

    'ttl' => env('JWT_TTL', 60),

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    'algo' => env('JWT_ALGO', 'HS256'),

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'sub',
        'jti',
    ],

    'persistent_claims' => [],

    'lock_subject' => true,

    'leeway' => 0,

    'blacklist_enabled' => true,

    'blacklist_grace_period' => 0,

];
