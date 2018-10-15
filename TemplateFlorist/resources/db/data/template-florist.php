<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#268411',
        'background_color' => '#f8f8f8'
    ],
    'background' => [
        'background_color' => '#ffd787'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#268411',
        'background_opacity' => '90',
        'border_color' => '#268411',
        'border_opacity' => '90',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#268411',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#5bb848'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#5bb848'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#5bb848',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#5bb848'
    ],
    'checkbox_off' => [
        'background_color' => '#5bb848'
    ],
    'checkbox_general' => [
        'color' => '#268411',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#268411',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#268411'
    ],
    'toggle_general' => [
        'color' => '#268411',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#268411'
    ],
    'toggle_handle_on' => [
        'background_color' => '#5bb848'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#268411'
    ],
    'spinner_ios_text' => [
        'background_color' => '#268411'
    ],
    'spinner_android_text' => [
        'background_color' => '#268411'
    ]
];

$features = [
    'custom_page' => ['name' => 'Florist', 'icon' => '/custom_page/custom1.png'],
    'newswall' => ['name' => 'News', 'icon' => '/newswall/newswall3.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image3.png'],
    'loyalty' => ['icon' => '/loyalty/loyalty4.png'],
    'contact' => ['icon' => '/contact/contact1.png'],
    'facebook' => ['icon' => '/social_facebook/facebook1.png'],
    'discount' => ['icon' => '/discount/discount2.png'],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push2.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateFlorist',
    'Florist',
    'florist',
    'layout_3',
    ['Local Business'],
    $ionicColors,
    $features
);
