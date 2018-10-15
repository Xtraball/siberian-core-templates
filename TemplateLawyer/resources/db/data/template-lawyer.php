<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'background' => [
        'background_color' => '#43352a'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#43352a',
        'border_color' => '#ffffff',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'buttons' => [
        'color' => '#43352a',
        'background_color' => '#ffffff',
        'border_color' => '#43352a'
    ],
    'checkbox_on' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'radio' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'toggle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_general' => [
        'color' => '#ffffff',
        'background_color' => '#43352a'
    ],
    'toggle_off' => [
        'background_color' => '#43352a',
        'border_color' => '#ffffff'
    ],
    'toggle_handle_on' => [
        'background_color' => '#8c7563'
    ],
    'toggle_handle_off' => [
        'background_color' => '#43352a'
    ],
    'tooltip' => [
        'color' => '#43352a',
        'background_color' => '#ffffff'
    ],
    'spinner_ios_text' => [
        'background_color' => '#ffffff'
    ],
    'spinner_android_text' => [
        'background_color' => '#ffffff'
    ]
];

$features = [
    'custom_page' => ['name' => 'John Lawyer'],
    'contact' => [],
    'catalog' => ['name' => 'Pricing', 'icon' => '/catalog/catalog7.png'],
    'places' => ['name' => 'Offices', 'icon' => '/places/places2.png'],
    'form' => ['name' => 'Appointment', 'icon' => '/form/form2.png'],
    'weblink_multi' => ['name' => 'Partners'],
    'rss_feed' => ['name' => 'Information', 'icon' => '/newswall/newswall2.png'],
    'padlock' => ['name' => 'Login']
];

\Siberian\Template::installOrUpdate(
    'TemplateLawyer',
    'Lawyer',
    'lawyer',
    'layout_9',
    ['Organizations'],
    $ionicColors,
    $features
);
