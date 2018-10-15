<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#5e7da2',
        'background_color' => '#f8f8f8'
    ],
    'background' => [
        'background_color' => '#bdcee2'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#bdcee2',
        'background_opacity' => '60',
        'border_color' => '#ffffff',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#5e7da2',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#e8e6f7'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#5e7da2'
    ],
    'card_item' => [
        'color' => '#444',
        'background_color' => '#e4ecf5'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#5e7da2',
        'border_color' => '#e0e0e0'
    ],
    'checkbox_on' => [
        'color' => '#5e7da2',
        'background_color' => '#bdcee2'
    ],
    'checkbox_off' => [
        'background_color' => '#5e7da2'
    ],
    'checkbox_general' => [
        'color' => '#5e7da2',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#5e7da2',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#5e7da2'
    ],
    'toggle_general' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#bdcee2'
    ],
    'toggle_handle_on' => [
        'background_color' => '#bdcee2'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#5e7da2'
    ],
    'spinner_ios_text' => [
        'background_color' => '#5e7da2'
    ],
    'spinner_android_text' => [
        'background_color' => '#5e7da2'
    ]
];

$features = [
    'custom_page' => ['name' => 'Information', 'icon' => '/custom_page/custom1.png'],
    'newswall' => ['name' => 'News', 'icon' => '/newswall/newswall1.png'],
    'calendar' => ['icon' => '/calendar/calendar1.png'],
    'places' => ['icon' => '/places/places1.png'],
    'video_gallery' => ['icon' => '/videos/video1.png'],
    'rss_feed' => ['icon' => '/rss_feed/rss1.png'],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push3.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateCorporate',
    'Corporate',
    'corporate',
    'layout_5',
    ['Events'],
    $ionicColors,
    $features
);

