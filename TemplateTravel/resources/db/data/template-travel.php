<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'background' => [
        'background_color' => '#fbf7ee'
    ],
    'homepage' => [
        'color' => '#484d53',
        'background_color' => 'transparent',
        'border_color' => '#484d53',
        'image_color' => '#484d53'
    ],
    'list_item_divider' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'list_item' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'card_item_divider' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'card_item' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'buttons' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee',
        'border_color' => '#484d53'
    ],
    'checkbox_on' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'checkbox_off' => [
        'background_color' => '#fbf7ee'
    ],
    'checkbox_general' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'radio' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'toggle_on' => [
        'background_color' => '#fbf7ee'
    ],
    'toggle_general' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'toggle_off' => [
        'background_color' => '#fbf7ee',
        'border_color' => '#484d53'
    ],
    'toggle_handle_on' => [
        'background_color' => '#fbf7ee'
    ],
    'toggle_handle_off' => [
        'background_color' => '#fbf7ee'
    ],
    'tooltip' => [
        'color' => '#484d53',
        'background_color' => '#fbf7ee'
    ],
    'spinner_ios_text' => [
        'background_color' => '#fbf7ee'
    ],
    'spinner_android_text' => [
        'background_color' => '#fbf7ee'
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
    'code_scan' => ['icon' => '/code_scan/scan1-flat.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateTravel',
    'Travel',
    'travel',
    'layout_15',
    ['Entertainment'],
    $ionicColors,
    $features
);