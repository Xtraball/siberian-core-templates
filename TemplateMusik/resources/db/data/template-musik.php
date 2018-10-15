<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#d8005a'
    ],
    'background' => [
        'background_color' => '#d8005a',
        'background_opacity' => '0'
    ],
    'homepage' => [
        'color' => '#797979',
        'background_color' => '#d8005a',
        'background_opacity' => '100',
        'border_color' => '#d8005a',
        'image_color' => '#ffffff',
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#d8005a'
    ],
    'list_item' => [
        'color' => '#1f1a17',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#d8005a'
    ],
    'card_item' => [
        'color' => '#ffffff',
        'background_color' => '#d8005a'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#d8005a',
        'border_color' => '#d8005a'
    ],
    'checkbox_on' => [
        'color' => '#d8005a',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#d8005a',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#d8005a',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_general' => [
        'color' => '#d8005a',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#d8005a'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#d8005a',
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
    'booking' => ['icon' => '/booking/booking2-flat.png'],
    'places' => ['name' => 'Locations', 'icon' => '/places/places2-flat.png'],
    'calendar' => ['name' => 'Calendar', 'icon' => '/calendar/calendar2-flat.png'],
    'facebook' => ['icon' => '/social_facebook/facebook2-flat.png'],
    'push_notification' => ['icon' => '/push_notifications/push2-flat.png'],
];

\Siberian\Template::installOrUpdate(
    'TemplateMusik',
    'Musikschule',
    'musikschule',
    'layout_siberian_18',
    ['Local Business'],
    $ionicColors,
    $features
);