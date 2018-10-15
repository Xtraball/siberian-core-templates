<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#1f1a17'
    ],
    'background' => [
        'background_color' => '#1f1a17',
        'background_opacity' => 'O'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'border_color' => '#1f1a17'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#1f1a17'
    ],
    'list_item' => [
        'color' => '#1f1a17',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#ee4b63'
    ],
    'card_item' => [
        'color' => '#ffffff',
        'background_color' => '#ee4b63'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#ee4b63',
        'border_color' => '#ee4b63'
    ],
    'checkbox_on' => [
        'color' => '#ee4b63',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#ee4b63',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#1f1a17',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_general' => [
        'color' => '#1f1a17',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#1f1a17'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ee4b63',
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
    'custom_page' => [
        'name' => 'Overview',
        'icon' => '/../../app/local/modules/TemplateTechno/resources/images/templates/technoevents/content/overview.jpg',
        'colorized' => false,
    ],
    'calendar' => [
        'name' => 'Program',
        'icon' => '/../../app/local/modules/TemplateTechno/resources/images/templates/technoevents/content/program.jpg',
        'colorized' => false,
    ],
    'image_gallery' => [
        'name' => 'Sponsors',
        'icon' => '/../../app/local/modules/TemplateTechno/resources/images/templates/technoevents/content/sponsors.jpg',
        'colorized' => false,
    ],
    'form' => [
        'name' => 'Contact',
        'icon' => '/../../app/local/modules/TemplateTechno/resources/images/templates/technoevents/content/register.jpg',
        'colorized' => false,
    ]
];

\Siberian\Template::installOrUpdate(
    'TemplateTechno',
    'Technoevents',
    'technoevents',
    'layout_siberian_swipe',
    ['Entertainment'],
    $ionicColors,
    $features
);