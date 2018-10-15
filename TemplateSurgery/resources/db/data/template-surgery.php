<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8'
    ],
    'background' => [
        'background_color' => '#f5f3f2'
    ],
    'homepage' => [
        'color' => '#30a6d8',
        'background_color' => '#f5f3f2',
        'border_color' => '#f5f3f2',
        'image_color' => '#30a6d8'
    ],
    'list_item_divider' => [
        'color' => '#545454',
        'background_color' => '#f5f3f2'
    ],
    'list_item' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8'
    ],
    'card_item_divider' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8'
    ],
    'card_item' => [
        'color' => '#30a6d8',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#30a6d8',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#30a6d8',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#30a6d8'
    ],
    'toggle_general' => [
        'color' => '#30a6d8',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#e6e6e6'
    ],
    'toggle_handle_on' => [
        'background_color' => '#66caf2'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#f5f3f2',
        'background_color' => '#30a6d8'
    ],
    'spinner_ios_text' => [
        'background_color' => '#30a6d8'
    ],
    'spinner_android_text' => [
        'background_color' => '#30a6d8'
    ]
];

$features = [
    'custom_page' => ['name' => 'About us'],
    'discount' => ['name' => 'Specials', 'icon' => '/discount/discount3.png'],
    'form' => ['name' => 'Requests', 'icon' => '/form/form2.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image7.png'],
    'padlock' => ['name' => 'Restricted'],
    'places' => ['name' => 'Locations'],
    'booking' => [],
    'contact' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateSurgery',
    'Surgery',
    'surgery',
    'layout_4',
    ['Health & Beauty'],
    $ionicColors,
    $features
);