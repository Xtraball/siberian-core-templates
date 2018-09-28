<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#000000',
        'background_color' => '#fdcf00'
    ],
    'background' => [
        'background_color' => '#fdcf00'
    ],
    'homepage' => [
        'color' => '#000000',
        'background_color' => '#fdcf00',
        'background_opacity' => '80',
        'border_color' => '#000000',
        'image_color' => '#000000'
    ],
    'list_item_divider' => [
        'color' => '#da0307',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#da0307',
        'background_color' => '#ffffff'
    ],
    'card_item_divider' => [
        'color' => '#da0307',
        'background_color' => '#f8f8f8'
    ],
    'card_item' => [
        'color' => '#404040',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#da0307',
        'background_color' => '#ffffff',
        'border_color' => '#b2b2b2'
    ],
    'checkbox_on' => [
        'color' => '#da0307',
        'background_color' => '#fdcf00'
    ],
    'checkbox_off' => [
        'background_color' => '#fdcf00'
    ],
    'checkbox_general' => [
        'color' => '#da0307',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#da0307',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#fdcf00'
    ],
    'toggle_general' => [
        'color' => '#da0307',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#fcfcfc',
        'border_color' => '#fdcf00'
    ],
    'toggle_handle_on' => [
        'background_color' => '#f7e286'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#da0307'
    ],
    'spinner_ios_text' => [
        'background_color' => '#da0307'
    ],
    'spinner_android_text' => [
        'background_color' => '#da0307'
    ]
];

$features = [
    'custom_page' => ['name' => 'About'],
    'fanwall' => [],
    'calendar' => [],
    'rss_feed' => ['name' => 'News'],
    'push_notification' => ['name' => 'Notifications', 'icon' => '/push_notifications/push2.png'],
    'image_gallery' => ['name' => 'Galleries', 'icon' => '/images/image6.png'],
    'video_gallery' => ['icon' => '/videos/video2.png'],
    'facebook' => [],
    'music_gallery' => ['name' => 'Playlist'],
    'weblink_multi' => ['name' => 'Partners', 'icon' => '/weblink/link2.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateFestival',
    'Festival',
    'festival',
    'layout_7',
    ['Entertainment'],
    $ionicColors,
    $features
);
