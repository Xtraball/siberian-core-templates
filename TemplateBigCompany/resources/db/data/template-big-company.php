<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#54627a',
        'background_color' => '#f8f8f8'
    ],
    'background' => [
        'background_color' => '#9ea5b1'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => 'transparent',
        'border_color' => '#ddd',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#9ea5b1'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#9ea5b1'
    ],
    'buttons' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8',
        'border_color' => '#404040'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#54627a'
    ],
    'checkbox_off' => [
        'background_color' => '#9ea5b1'
    ],
    'checkbox_general' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#54627a',
        'background_color' => '#fff'
    ],
    'toggle_on' => [
        'background_color' => '#54627a'
    ],
    'toggle_general' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#9ea5b1'
    ],
    'toggle_handle_on' => [
        'background_color' => '#9ea5b1'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#54627a'
    ],
    'spinner_ios_text' => [
        'background_color' => '#54627a'
    ],
    'spinner_android_text' => [
        'background_color' => '#54627a'
    ]
];

$features = [
    'custom_page' => ['name' => 'Company'],
    'newswall' => [],
    'push_notification' => ['name' => 'Push', 'icon' => '/push_notifications/push4.png'],
    'folder' => ['name' => 'Products', 'icon' => '/booking/booking4.png'],
    'places' => ['name' => 'Locations'],
    'video_gallery' => [],
    'contact' => [],
    'facebook' => [],
    'weblink_multi' => [],
    'form' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateBigCompany',
    'Big Company',
    'big_company',
    'layout_2',
    ['Organizations'],
    $ionicColors,
    $features
);