<?php

return [
    'route' => '/docs',

    'middleware' => [],

    'docs' => [
        // Storage path of docs files.
        'path' => '/resources/docs',

        // Index page file.
        'index' => 'index.md',

        // Homepage
        'home' => 'overview.md',

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

    'ui' => [
        'logo' => 'vendor/wisteria/img/logo.svg',
        'nav-links' => [
            ['url' => '/', 'label' => 'Home', ],
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
        'docsearch' => [
            'api_key' => '25626fae796133dc1e734c6bcaaeac3c',
            'index_name' => 'docsearch',
            'placeholder' => 'Search docs',
        ]
    ],

    'cache' => [
        'ttl' => 0, // seconds
    ],
];
