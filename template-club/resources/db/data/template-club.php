<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#404040',
        'background_color' => '#8ea3aa'
    ],
    'background' => [
        'background_color' => '#bfcace'
    ],
    'homepage' => [
        'color' => '#ffffff',
        'background_color' => '#000000',
        'background_opacity' => '50',
        'border_color' => '#8ea3aa',
        'image_color' => '#ffffff'
    ],
    'list_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#404040',
        'background_color' => '#e8ebec'
    ],
    'card_item_divider' => [
        'color' => '#404040',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#e8ebec'
    ],
    'buttons' => [
        'color' => '#ffffff',
        'background_color' => '#65838f',
        'border_color' => '#e8e8e8'
    ],
    'checkbox_on' => [
        'color' => '#65838f',
        'background_color' => '#e8ebec'
    ],
    'checkbox_off' => [
        'background_color' => '#65838f'
    ],
    'checkbox_general' => [
        'color' => '#65838f',
        'background_color' => '#fff'
    ],
    'radio' => [
        'color' => '#65838f',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#65838f'
    ],
    'toggle_general' => [
        'color' => '#65838f',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#bfcace'
    ],
    'toggle_handle_on' => [
        'background_color' => '#bfcace'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#404040',
        'background_color' => '#8ea3aa'
    ],
    'spinner_ios_text' => [
        'background_color' => '#65838f'
    ],
    'spinner_android_text' => [
        'background_color' => '#65838f'
    ]
];

$features = [
    'custom_page' => ['name' => 'Info', 'icon' => '/custom_page/custom1.png'],
    'newswall' => ['name' => 'News', 'icon' => '/newswall/newswall1.png'],
    'calendar' => ['name' => 'Events', 'icon' => '/calendar/calendar2.png'],
    'catalog' => ['name' => 'Drinks', 'icon' => '/catalog/catalog7.png'],
    'booking' => ['icon' => '/booking/booking1.png'],
    'discount' => ['icon' => '/discount/discount2.png'],
    'image_gallery' => ['name' => 'Pictures', 'icon' => '/images/image1.png'],
    'video_gallery' => ['icon' => '/videos/video1.png'],
    'facebook' => ['icon' => '/social_facebook/facebook1.png'],
    'contact' => ['icon' => '/contact/contact1.png'],
    'push_notification' => ['icon' => '/push_notifications/push1.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateClub',
    'Club',
    'club',
    'layout_5',
    ['Local Business'],
    $ionicColors,
    $features
);