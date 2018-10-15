<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#c86925',
        'background_color' => '#f1ddd4'
    ],
    'background' => [
        'background_color' => '#f1ddd4'
    ],
    'homepage' => [
        'color' => '#f1ddd4',
        'background_color' => '#c86925',
        'border_color' => '#c86925',
        'image_color' => '#f1ddd4'
    ],
    'list_item_divider' => [
        'color' => '#c86925',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#f1ddd4'
    ],
    'card_item_divider' => [
        'color' => '#f1ddd4',
        'background_color' => '#c86925'
    ],
    'card_item' => [
        'color' => '#444',
        'background_color' => '#f1ddd4'
    ],
    'buttons' => [
        'color' => '#f1ddd4',
        'background_color' => '#c86925',
        'border_color' => '#404040'
    ],
    'checkbox_on' => [
        'color' => '#c86925',
        'background_color' => '#f1ddd4'
    ],
    'checkbox_off' => [
        'background_color' => '#c86925'
    ],
    'checkbox_general' => [
        'color' => '#c86925',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#c86925',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#c86925'
    ],
    'toggle_general' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#fff',
        'border_color' => '#c86925'
    ],
    'toggle_handle_on' => [
        'background_color' => '#de8e54'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#404040',
        'background_color' => '#c86925'
    ],
    'spinner_ios_text' => [
        'background_color' => '#c86925'
    ],
    'spinner_android_text' => [
        'background_color' => '#c86925'
    ]
];

$features = [
    'custom_page' => [
        'name' => 'B&B',
        'icon' => '/custom_page/custom1.png'
    ],
    'booking' => [
        'icon' => '/booking/booking3.png'
    ],
    'image_gallery' => [
        'icon' => '/images/image2.png'
    ],
    'contact' => [
        'icon' => '/contact/contact1.png'
    ],
    'discount' => [
        'icon' => '/discount/discount1.png'
    ],
    'catalog' => [
        'name' => 'Bedrooms',
        'icon' => '/catalog/catalog7.png'
    ],
    'form' => [
        'name' => 'Feedback',
        'icon' => '/form/form1.png'
    ]
];

\Siberian\Template::installOrUpdate(
    'TemplateBb',
    'B&B',
    'b_b',
    'layout_1',
    ['Hotels'],
    $ionicColors,
    $features
);