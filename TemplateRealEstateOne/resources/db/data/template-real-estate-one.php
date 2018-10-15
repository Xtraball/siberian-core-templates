<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#e60041',
        'background_color' => '#ededed'
    ],
    'background' => [
        'background_color' => '#ededed'
    ],
    'homepage' => [
        'color' => '#e60041',
        'background_color' => '#ffffff',
        'background_opacity' => '60',
        'border_color' => '#e60041',
        'image_color' => '#e60041'
    ],
    'list_item_divider' => [
        'color' => '#ededed',
        'background_color' => '#e60041'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#e60041'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#e8e8e8'
    ],
    'buttons' => [
        'color' => '#ededed',
        'background_color' => '#e60041',
        'border_color' => '#404040'
    ],
    'checkbox_on' => [
        'color' => '#404040',
        'background_color' => '#e60041'
    ],
    'checkbox_off' => [
        'background_color' => '#404040'
    ],
    'checkbox_general' => [
        'color' => '#404040',
        'background_color' => '#fff'
    ],
    'radio' => [
        'color' => '#404040',
        'background_color' => '#fff'
    ],
    'toggle_on' => [
        'background_color' => '#e60041'
    ],
    'toggle_general' => [
        'color' => '#404040',
        'background_color' => '#e8e8e8'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#e6e6e6'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ededed'
    ],
    'toggle_handle_off' => [
        'background_color' => '#404040'
    ],
    'tooltip' => [
        'color' => '#ededed',
        'background_color' => '#e60041'
    ],
    'spinner_ios_text' => [
        'background_color' => '#e60041'
    ],
    'spinner_android_text' => [
        'background_color' => '#e60041'
    ]
];

$features = [
    'custom_page' => ['name' => 'About', 'icon' => '/app/local/modules/TemplateRealEstateOne/resources/images/templates/real_estate_one/icons/about.png'],
    'newswall' => ['name' => 'New Rentals', 'icon' => '/newswall/newswall2.png'],
    'push_notification' => ['name' => 'Push', 'icon' => '/push_notifications/push5.png'],
    'form' => ['name' => 'Your needs', 'icon' => '/form/form2.png'],
    'booking' => ['name' => 'Appointment'],
    'image_gallery' => ['name' => 'Properties', 'icon' => '/images/image3.png'],
    'contact' => [],
    'facebook' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateRealEstateOne',
    'Real Estate One',
    'real_estate_one',
    'layout_4',
    ['Real Estate'],
    $ionicColors,
    $features
);