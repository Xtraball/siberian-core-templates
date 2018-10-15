<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'background' => [
        'background_color' => '#99c7ab'
    ],
    'homepage' => [
        'color' => '#404040',
        'background_color' => '#99c7ab',
        'border_color' => '#99c7ab',
        'image_color' => '#404040'
    ],
    'list_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#c6e1d1'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#c6e1d1'
    ],
    'buttons' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#6baa84',
        'background_color' => '#c6e1d1'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#6baa84',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#6baa84',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#6baa84'
    ],
    'toggle_general' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#6baa84'
    ],
    'toggle_handle_on' => [
        'background_color' => '#99c7ab'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#404040',
        'background_color' => '#6baa84'
    ],
    'spinner_ios_text' => [
        'background_color' => '#404040'
    ],
    'spinner_android_text' => [
        'background_color' => '#404040'
    ]
];

$features = [
    'custom_page' => ['name' => 'The City', 'icon' => '/custom_page/custom1.png'],
    'folder' => ['name' => 'Guide', 'icon' => '/booking/booking7.png'],
    'fanwall' => ['icon' => '/fanwall/fanwall1.png'],
    'discount' => ['icon' => '/discount/discount1.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image4.png'],
    'video_gallery' => ['icon' => '/videos/video1.png'],
    'weblink_multi' => ['icon' => '/weblink/link1.png'],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push1.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateNyc',
    'NYC',
    'nyc',
    'layout_1',
    ['City'],
    $ionicColors,
    $features
);