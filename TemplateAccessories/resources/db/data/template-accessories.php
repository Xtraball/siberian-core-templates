<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#f0f0f0',
        'background_color' => '#b80000'
    ],
    'background' => [
        'background_color' => '#f0f0f0'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#b80000',
        'border_color' => '#ffffff',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#006e6e'
    ],
    'list_item' => [
        'color' => '#004040',
        'background_color' => '#088888'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#006e6e'
    ],
    'card_item' => [
        'color' => '#004040',
        'background_color' => '#088888'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#b85300',
        'border_color' => '#6a3000'
    ],
    'checkbox_on' => [
        'color' => '#6a3000',
        'background_color' => '#b85300'
    ],
    'checkbox_off' => [
        'background_color' => '#004040'
    ],
    'checkbox_general' => [
        'color' => '#004040',
        'background_color' => '#088888'
    ],
    'radio' => [
        'color' => '#ffffff',
        'background_color' => '#088888'
    ],
    'toggle_on' => [
        'background_color' => '#b80000'
    ],
    'toggle_general' => [
        'color' => '#004040',
        'background_color' => '#088888'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#e3e3e3'
    ],
    'toggle_handle_on' => [
        'background_color' => '#088888'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#b80000'
    ],
    'spinner_ios_text' => [
        'background_color' => '#b80000'
    ],
    'spinner_android_text' => [
        'background_color' => '#b80000'
    ]
];

$features = [
    'newswall' => [
        'name' => 'News',
        'icon' => '/newswall/newswall1.png'
    ],
    'folder' => [
        'name' => 'Products',
        'icon' => '/catalog/catalog8.png'
    ],
    'loyalty' => [
        'icon' => '/loyalty/loyalty1.png'
    ],
    'discount' => [
        'icon' => '/discount/discount1.png'
    ],
    'facebook' => [
        'icon' => '/social_facebook/facebook1.png'
    ],
    'places' => [
        'icon' => '/places/places1.png'
    ],
    'music_gallery' => [
        'icon' => '/musics/music1.png'
    ],
    'push_notification' => [
        'icon' => '/push_notifications/push1.png'
    ]
];

\Siberian\Template::installOrUpdate(
    'TemplateAccessories',
    'Accessories',
    'accessories',
    'layout_6',
    ['Fashion'],
    $ionicColors,
    $features
);