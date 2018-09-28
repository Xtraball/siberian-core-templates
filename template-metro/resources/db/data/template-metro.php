<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'background' => [
        'background_color' => '#5e9cd5'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5',
        'border_color' => '#5e9cd5',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'card_item' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'checkbox_off' => [
        'background_color' => '#5e9cd5'
    ],
    'checkbox_general' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'radio' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'toggle_on' => [
        'background_color' => '#5e9cd5'
    ],
    'toggle_general' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'toggle_off' => [
        'background_color' => '#5e9cd5',
        'border_color' => '#e6e6e6'
    ],
    'toggle_handle_on' => [
        'background_color' => '#5e9cd5'
    ],
    'toggle_handle_off' => [
        'background_color' => '#5e9cd5'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#5e9cd5'
    ],
    'spinner_ios_text' => [
        'background_color' => '#5e9cd5'
    ],
    'spinner_android_text' => [
        'background_color' => '#5e9cd5'
    ]
];

$features = [
    'facebook' => ['icon' => '/social_facebook/facebook1-flat.png'],
    'weblink_multi' => ['name' => 'Links', 'icon' => '/weblink/link1-flat.png'],
    'push_notification' => ['icon' => '/push_notifications/push1-flat.png'],
    'tip' => ['icon' => '/tip/tip1-flat.png'],
    'catalog' => ['icon' => '/catalog/catalog1-flat.png'],
    'set_meal' => ['icon' => '/set_meal/meat1-flat.png'],
    'music_gallery' => ['icon' => '/musics/music1-flat.png'],
    'image_gallery' => ['icon' => '/images/image1-flat.png'],
    'video_gallery' => ['icon' => '/videos/video1-flat.png'],
    'radio' => ['icon' => '/radio/radio1-flat.png'],
    'code_scan' => ['icon' => '/code_scan/scan1-flat.png'],
    'booking' => ['icon' => '/booking/booking1-flat.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateMetro',
    'Metro',
    'metro',
    'layout_17',
    ['Corporate'],
    $ionicColors,
    $features
);

