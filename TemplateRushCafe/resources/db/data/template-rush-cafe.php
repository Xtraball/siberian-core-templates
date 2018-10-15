<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'background' => [
        'background_color' => '#ffffff'
    ],
    'homepage' => [
        'color' => '#43352a',
        'background_color' => '#ffffff',
        'border_color' => '#43352a',
        'background_opacity' => '80',
        'image_color' => '#43352a'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#6e5948'
    ],
    'list_item' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#6e5948'
    ],
    'card_item' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#43352a',
        'background_color' => '#ffffff',
        'border_color' => '#43352a'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#6e5948'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#43352a'
    ],
    'toggle_general' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#e6e6e6'
    ],
    'toggle_handle_on' => [
        'background_color' => '#6e5948'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'spinner_ios_text' => [
        'background_color' => '#43352a'
    ],
    'spinner_android_text' => [
        'background_color' => '#43352a'
    ]
];

$features = [
    'newswall' => [],
    'loyalty' => ['icon' => '/loyalty/loyalty6.png'],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push2.png'],
    'catalog' => [],
    'set_meal' => [],
    'discount' => ['name' => 'Coupons'],
    'facebook' => [],
    'fanwall' => [],
    'form' => ['icon' => '/form/form3.png'],
    'places' => [],
    'contact' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateRushCafe',
    'Rush Cafe',
    'rush_cafe',
    'layout_7',
    ['Local Business'],
    $ionicColors,
    $features
);