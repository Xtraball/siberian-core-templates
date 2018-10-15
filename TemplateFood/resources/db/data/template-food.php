<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'background' => [
        'background_color' => '#2b2d2c'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => 'transparent',
        'border_color' => '#2b2d2c',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'card_item' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'checkbox_off' => [
        'background_color' => '#2b2d2c'
    ],
    'checkbox_general' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'radio' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'toggle_on' => [
        'background_color' => '#2b2d2c'
    ],
    'toggle_general' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'toggle_off' => [
        'background_color' => '#2b2d2c'
    ],
    'toggle_handle_on' => [
        'background_color' => '#2b2d2c'
    ],
    'toggle_handle_off' => [
        'background_color' => '#2b2d2c'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#2b2d2c'
    ],
    'spinner_ios_text' => [
        'background_color' => '#2b2d2c'
    ],
    'spinner_android_text' => [
        'background_color' => '#2b2d2c'
    ]
];

$features = [
    'facebook' => ['icon' => '/social_facebook/facebook1-flat.png'],
    'weblink_multi' => ['name' => 'Links', 'icon' => '/weblink/link1-flat.png'],
    'push_notification' => ['icon' => '/push_notifications/push1-flat.png'],
    'tip' => ['icon' => '/tip/tip1-flat.png'],
    'catalog' => ['icon' => '/catalog/catalog1-flat.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateFood',
    'Food',
    'food',
    'layout_16',
    ['Local Business'],
    $ionicColors,
    $features
);
