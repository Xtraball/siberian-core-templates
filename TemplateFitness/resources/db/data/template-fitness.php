<?php

// Ionic colors
$ionicColors = [
    'header' => [
        'color' => '#4eaee6',
        'background_color' => '#afe494'
    ],
    'background' => [
        'background_color' => '#ffffff'
    ],
    'homepage' => [
        'color' => '#afe494',
        'background_color' => '#4eaee6',
        'background_opacity' => '70',
        'border_color' => '#afe494',
        'image_color' => '#afe494'
    ],
    'list_item_divider' => [
        'color' => '#424242',
        'background_color' => '#f8f8f8'
    ],
    'list_item' => [
        'color' => '#424242',
        'background_color' => '#afe494'
    ],
    'card_item_divider' => [
        'color' => '#ffffff',
        'background_color' => '#4eaee6'
    ],
    'card_item' => [
        'color' => '#424242',
        'background_color' => '#afe494'
    ],
    'buttons' => [
        'color' => '#424242',
        'background_color' => '#4eaee6',
        'border_color' => '#424242'
    ],
    'checkbox_on' => [
        'color' => '#424242',
        'background_color' => '#4eaee6'
    ],
    'checkbox_off' => [
        'background_color' => '#ffffff'
    ],
    'checkbox_general' => [
        'color' => '#424242',
        'background_color' => '#ffffff'
    ],
    'radio' => [
        'color' => '#424242',
        'background_color' => '#4eaee6'
    ],
    'toggle_on' => [
        'background_color' => '#4eaee6'
    ],
    'toggle_general' => [
        'color' => '#424242',
        'background_color' => '#ffffff'
    ],
    'toggle_off' => [
        'background_color' => '#ffffff',
        'border_color' => '#4eaee6'
    ],
    'toggle_handle_on' => [
        'background_color' => '#ffffff'
    ],
    'toggle_handle_off' => [
        'background_color' => '#ffffff'
    ],
    'tooltip' => [
        'color' => '#424242',
        'background_color' => '#4eaee6'
    ],
    'spinner_ios_text' => [
        'background_color' => '#4eaee6'
    ],
    'spinner_android_text' => [
        'background_color' => '#4eaee6'
    ]
];

$features = [
    'newswall' => ['icon' => '/fanwall/fanwall2.png'],
    'loyalty' => ['icon' => '/loyalty/loyalty2.png'],
    'push_notification' => ['name' => 'Push Notifications', 'icon' => '/push_notifications/push5.png'],
    'discount' => ['name' => 'Coupons', 'icon' => '/discount/discount4.png'],
    'facebook' => [],
    'fanwall' => ['name' => 'Activity', 'icon' => '/fanwall/fanwall4.png'],
    'custom_page' => ['name' => 'About us'],
    'source_code' => ['name' => 'BMI', 'icon' => '/booking/booking4.png'],
    'image_gallery' => ['icon' => '/images/image4.png'],
    'video_gallery' => ['icon' => '/videos/video2.png'],
    'contact' => []
];

\Siberian\Template::installOrUpdate(
    'TemplateFitness',
    'Fitness',
    'fitness',
    'layout_6',
    ['Sports'],
    $ionicColors,
    $features
);
