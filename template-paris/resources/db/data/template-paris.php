<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#54627a',
        'background_color' => '#dcc3b2'
    ],
    'background' => [
        'background_color' => '#ededed'
    ],
    'homepage' => [
        'color' => '#54627a',
        'background_color' => '#dcc3b2',
        'background_opacity' => '80',
        'border_color' => '#dcc3b2',
        'image_color' => '#54627a'
    ],
    'list_item_divider' => [
        'color' => '#54627a',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#54627a',
        'background_color' => '#dcc3b2'
    ],
    'card_item_divider' => [
        'color' => '#54627a',
        'background_color' => '#dcc3b2'
    ],
    'card_item' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'buttons' => [
        'color' => '#dcc3b2',
        'background_color' => '#54627a',
        'border_color' => '#dcc3b2'
    ],
    'checkbox_on' => [
        'color' => '#54627a',
        'background_color' => '#dcc3b2'
    ],
    'checkbox_off' => [
        'background_color' => '#54627a'
    ],
    'checkbox_general' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'toggle_on' => [
        'background_color' => '#dcc3b2'
    ],
    'toggle_general' => [
        'color' => '#54627a',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#54627a'
    ],
    'toggle_handle_on' => [
        'background_color' => '#fcf3ed'
    ],
    'toggle_handle_off' => [
        'background_color' => '#54627a'
    ],
    'tooltip' => [
        'color' => '#ffffff',
        'background_color' => '#54627a'
    ],
    'spinner_ios_text' => [
        'background_color' => '#54627a'
    ],
    'spinner_android_text' => [
        'background_color' => '#54627a'
    ]
];

$features = [
    'custom_page' => ['name' => 'The City'],
    'video_gallery' => ['icon' => '/videos/video5.png'],
    'calendar' => [],
    'places' => [],
    'fanwall' => ['name' => 'Activity Wall', 'icon' => '/fanwall/fanwall2.png'],
    'push_notification' => ['name' => 'Messages', 'icon' => '/push_notifications/push3.png'],
    'image_gallery' => ['icon' => '/images/image5.png'],
    'radio' => [],
    'weblink_multi' => [],
    'folder' => ['icon' => '/folders/folder5.png']
];

\Siberian\Template::installOrUpdate(
    'TemplateParis',
    'Paris',
    'paris',
    'layout_2',
    ['City'],
    $ionicColors,
    $features
);