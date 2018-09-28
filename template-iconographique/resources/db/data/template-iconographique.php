<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'background' => [
        'background_color' => '#f5f5f5'
    ],
    'homepage' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5',
        'border_color' => '#000000',
        'image_color' => '#000000'
    ],
    'list_item_divider' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'list_item' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'card_item_divider' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'card_item' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'buttons' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5',
        'border_color' => '#000000'
    ],
    'checkbox_on' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'checkbox_off' => [
        'background_color' => '#f5f5f5'
    ],
    'checkbox_general' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'radio' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'toggle_on' => [
        'background_color' => '#f5f5f5'
    ],
    'toggle_general' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'toggle_off' => [
        'background_color' => '#f5f5f5',
        'border_color' => '#000000'
    ],
    'toggle_handle_on' => [
        'background_color' => '#f5f5f5'
    ],
    'toggle_handle_off' => [
        'background_color' => '#f5f5f5'
    ],
    'tooltip' => [
        'color' => '#000000',
        'background_color' => '#f5f5f5'
    ],
    'spinner_ios_text' => [
        'background_color' => '#f5f5f5'
    ],
    'spinner_android_text' => [
        'background_color' => '#f5f5f5'
    ]
];


$features = [
    'facebook' => ['icon' => '/social_facebook/facebook1-flat.png'],
    'weblink_multi' => ['name' => 'Links', 'icon' => '/weblink/link1-flat.png'],
    'push_notification' => ['icon' => '/push_notifications/push1-flat.png'],
    'tip' => ['icon' => '/tip/tip1-flat.png'],
    'catalog' => ['icon' => '/catalog/catalog1-flat.png'],
    'set_meal' => ['icon' => '/set_meal/meat1-flat.png'],
    'radio' => ['icon' => '/radio/radio1-flat.png'],
    'code_scan' => ['icon' => '/code_scan/scan1-flat.png'],
    'booking' => ['icon' => '/booking/booking1-flat.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateIconographique',
    'Ico',
    'ico',
    'layout_14',
    ['Arts'],
    $ionicColors,
    $features
);

