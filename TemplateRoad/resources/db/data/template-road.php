<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'background' => [
        'background_color' => '#ffffff'
    ],
    'homepage' => [
        'color' => '#000000',
        'background_color' => '#ffffff',
        'border_color' => 'transparent',
        'image_color' => '#000000'
    ],
    'list_item_divider' => [
        'color' => '#000000',
        'background_color' => '#f5f3f2'
    ],
    'list_item' => [
        'color' => '#000000',
        'background_color' => '#30a6d8'
    ],
    'card_item_divider' => [
        'color' => '#000000',
        'background_color' => '#30a6d8'
    ],
    'card_item' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#000000',
        'background_color' => '#ffffff',
        'border_color' => '#000000'
    ],
    'checkbox_on' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_general' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#000000'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#000000',
        'background_color' => '#ffffff'
    ],
    'spinner_ios_text' => [
        'background_color' => '#ffffff'
    ],
    'spinner_android_text' => [
        'background_color' => '#ffffff'
    ]
];

$features = [
    'facebook' => ['icon' => '/social_facebook/facebook1-flat.png'],
    'weblink_multi' => ['name' => 'Links', 'icon' => '/weblink/link1-flat.png'],
    'push_notification' => ['icon' => '/push_notifications/push1-flat.png'],
    'tip' => ['icon' => '/tip/tip1-flat.png'],
    'code_scan' => ['icon' => '/code_scan/scan1-flat.png'],
    'booking' => ['icon' => '/booking/booking1-flat.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateRoad',
    'Road',
    'road',
    'layout_10',
    ['Entertainment'],
    $ionicColors,
    $features
);