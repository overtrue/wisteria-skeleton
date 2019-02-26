<?php

return [
    'route' => '/docs',

    'docs' => [
        // Storage path of docs files.
        'path' => '/resources/docs',

        // Index page file.
        'home' => 'index.md',

        // Versions
        'versions' => [
            'master', '3.x', '4.0',
        ],
        'default_version' => 'master',

        // Docs repository
        'repository'   => [
            'provider' => 'github',
            'url'      => 'https://github.com/easywechat/docs',
        ],
    ],

    // SEO configs
    'seo'                 => [
        'author'          => 'Wisteria',
        'description'     => '',
        'keywords'        => '',
        'og'              => [
            'title'       => '',
            'type'        => 'article',
            'url'         => '',
            'image'       => '',
            'description' => '',
        ]
    ],

    'plugins' => [
        'google-analytics' => [
            // 'id' => 'UA-XXXXXXXX-1'
        ],
    ],

    'cache' => [
        'ttl' => 0, // seconds
    ],
];
