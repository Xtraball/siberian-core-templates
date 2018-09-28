<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#0a0d14',
        'background_color' => '#73bfeb'
    ],
    'background' => [
        'background_color' => '#73bfeb'
    ],
    'homepage' => [
        'color' => '#73bfeb',
        'background_color' => '#ffffff',
        'background_opacity' => '80',
        'border_color' => '#ffffff',
        'image_color' => '#73bfeb'
    ],
    'list_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#73bfeb',
        'background_color' => '#ffffff',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#73bfeb'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#73bfeb',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#73bfeb',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#73bfeb'
    ],
    'toggle_general' => [
        'color' => '#73bfeb',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#2574a1'
    ],
    'toggle_handle_on' => [
        'background_color' => '#85d4ff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#404040'
    ],
    'spinner_ios_text' => [
        'background_color' => '#ffffff'
    ],
    'spinner_android_text' => [
        'background_color' => '#ffffff'
    ]
];

$features = [
    'custom_page' => ['name' => 'University', 'icon' => '/custom_page/custom1.png'],
    'newswall' => ['name' => 'News', 'icon' => '/newswall/newswall1.png'],
    'calendar' => ['name' => 'Events', 'icon' => '/calendar/calendar2.png'],
    'folder' => ['name' => 'Courses', 'icon' => '/folders/folder1.png'],
    'form' => ['name' => 'Form', 'icon' => '/form/form1.png'],
    'push_notification' => ['icon' => '/push_notifications/push3.png'],
    'rss_feed' => ['icon' => '/rss_feed/rss1.png'],
    'facebook' => ['icon' => '/social_facebook/facebook1.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateUniversity',
    'University',
    'university',
    'layout_7',
    ['Education'],
    $ionicColors,
    $features
);