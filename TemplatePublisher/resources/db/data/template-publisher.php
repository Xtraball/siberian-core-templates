<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#29344e',
        'background_color' => '#ddc57b'
    ],
    'background' => [
        'background_color' => '#ddc57b'
    ],
    'homepage' => [
        'color' => '#29344e',
        'background_color' => '#ddc57b',
        'border_color' => '#ddc57b',
        'image_color' => '#29344e'
    ],
    'list_item_divider' => [
        'color' => '#ddc57b',
        'background_color' => '#29344e'
    ],
    'list_item' => [
        'color' => '#29344e',
        'background_color' => '#ddc57b'
    ],
    'card_item_divider' => [
        'color' => '#ddc57b',
        'background_color' => '#29344e'
    ],
    'card_item' => [
        'color' => '#ddc57b',
        'background_color' => '#29344e'
    ],
    'buttons' => [
        'color' => '#ddc57b',
        'background_color' => '#29344e',
        'border_color' => '#627ab3'
    ],
    'checkbox_on' => [
        'color' => '#29344e',
        'background_color' => '#ddc57b'
    ],
    'checkbox_off' => [
        'background_color' => '#29344e'
    ],
    'checkbox_general' => [
        'color' => '#29344e',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#29344e',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#ddc57b'
    ],
    'toggle_general' => [
        'color' => '#29344e',
        'background_color' => '#627ab3'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#29344e'
    ],
    'toggle_handle_on' => [
        'background_color' => '#f0dea8'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#f0dea8',
        'background_color' => '#29344e'
    ],
    'spinner_ios_text' => [
        'background_color' => '#29344e'
    ],
    'spinner_android_text' => [
        'background_color' => '#29344e'
    ]
];

$features = [
    'newswall' => [],
    'image_gallery' => ['name' => 'Portfolio', 'icon' => '/images/image5.png'],
    'catalog' => ['icon' => '/app/local/modules/TemplatePublisher/resources/images/templates/publisher/icons/catalog.png'],
    'push_notification' => ['name' => 'Push'],
    'custom_page' => ['name' => 'Custom'],
    'rss_feed' => [],
    'facebook' => [],
    'form' => [],
    'contact' => []
];

\Siberian\Template::installOrUpdate(
    'TemplatePublisher',
    'Publisher',
    'publisher',
    'layout_1',
    ['Organizations'],
    $ionicColors,
    $features
);