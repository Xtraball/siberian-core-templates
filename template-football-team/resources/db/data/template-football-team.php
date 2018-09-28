<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#ffffff',
        'background_color' => '#7cad20'
    ],
    'background' => [
        'background_color' => '#7cad20'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#7cad20',
        'border_color' => '#ffffff',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#7cad20',
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
        'color' => '#7cad20',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#7cad20',
        'background_color' => '#ffffff',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#ffffff',
        'background_color' => '#7cad20'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#7cad20',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#7cad20',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#7cad20'
    ],
    'toggle_general' => [
        'color' => '#7cad20',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#7cad20'
    ],
    'toggle_handle_on' => [
        'background_color' => '#b5e84f'
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
    'custom_page' => ['name' => 'FC Football Club', 'icon' => '/custom_page/custom1.png'],
    'newswall' => ['name' => 'News', 'icon' => '/newswall/newswall1.png'],
    'calendar' => ['name' => 'Matches', 'icon' => '/calendar/calendar2.png'],
    'm_commerce' => ['name' => 'Goodies', 'icon' => '/catalog/catalog9.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image2.png'],
    'video_gallery' => ['icon' => '/videos/video1.png'],
    'booking' => ['icon' => '/booking/booking1.png'],
    'facebook' => ['icon' => '/social_facebook/facebook1.png'],
    'contact' => ['icon' => '/contact/contact1.png'],
    'push_notification' => ['icon' => '/push_notifications/push3.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateFootballTeam',
    'Soccer',
    'football_team',
    'layout_4',
    ['Sports'],
    $ionicColors,
    $features
);
