<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'background' => [
        'background_color' => '#ffffff',
        'background_opacity' => '0'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#d84016',
        'border_color' => '#d84016',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#d84016'
    ],
    'list_item' => [
        'color' => '#ffffff',
        'background_color' => '#d84016'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#d84016'
    ],
    'card_item' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#d84016',
        'background_color' => '#ffffff',
        'border_color' => '#d84016'
    ],
    'checkbox_on' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_general' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#d84016'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#d84016',
        'background_color' => '#ffffff'
    ],
    'spinner_ios_text' => [
        'background_color' => '#d84016'
    ],
    'spinner_android_text' => [
        'background_color' => '#d84016'
    ]
];

$features = [
    'facebook' => [],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push2-flat.png'],
    'catalog' => [],
    'set_meal' => [],
    'places' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateFish',
    'Red Fish',
    'redfish',
    'layout_cinema',
    ['Local Business'],
    $ionicColors,
    $features
);
