<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#deb8af'
    ],
    'background' => [
        'background_color' => '#ffffff'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#ffffff',
        'background_opacity' => '0',
        'border_color' => '#ffffff',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#292929',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#deb8af'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#deb8af'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#deb8af',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#deb8af',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#404040',
        'background_color' => '#deb8af'
    ],
    'radio' => [
        'color' => '#deb8af',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#deb8af'
    ],
    'toggle_general' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#deb8af'
    ],
    'toggle_handle_on' => [
        'background_color' => '#f0e1dd'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#404040',
        'background_color' => '#deb8af'
    ],
    'spinner_ios_text' => [
        'background_color' => '#deb8af'
    ],
    'spinner_android_text' => [
        'background_color' => '#deb8af'
    ]
];

$features = [
    'custom_page' => ['name' => 'About us', 'icon' => '/custom_page/custom1.png'],
    'booking' => ['icon' => '/booking/booking10.png'],
    'discount' => ['icon' => '/discount/discount2.png'],
    'loyalty' => ['icon' => '/loyalty/loyalty4.png'],
    'places' => ['icon' => '/places/places2.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image6.png'],
    'form' => ['icon' => '/catalog/catalog6.png'],
    'contact' => ['icon' => '/contact/contact1.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateBeautyCenter',
    'Beauty Center',
    'beauty_center',
    'layout_5',
    ['Health & Beauty'],
    $ionicColors,
    $features
);