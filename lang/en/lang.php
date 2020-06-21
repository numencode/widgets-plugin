<?php

return [
    'plugin'      => [
        'name'        => 'Widgets',
        'description' => 'Numencode Widgets plugin for October CMS.',
    ],
    'permissions' => [
        'counters'   => 'Manage counters',
        'promotions' => 'Manage promotions',
        'highlights' => 'Manage highlights',
        'features'   => 'Manage features',
    ],
    'counters'    => [
        'name'           => 'Counters',
        'description'    => 'Create and manage counters.',
        'title'          => 'Counter title',
        'icon'           => 'Counter icon class',
        'icon_hint'      => 'CSS class name for the icon.',
        'value'          => 'Counter value',
        'first_counter'  => 'First counter',
        'second_counter' => 'Second counter',
        'third_counter'  => 'Third counter',
        'fourth_counter' => 'Fourth counter',
    ],
    'promotions'  => [
        'name'               => 'Promotions',
        'description'        => 'Create and manage various promotions for the website.',
        'layout_title'       => 'Layout',
        'layout_description' => 'Change layout for the promotions display',
        'group_title'        => 'Promotion',
        'group_description'  => 'Displayed group of promotions',
    ],
    'highlights'  => [
        'name'               => 'Highlights',
        'description'        => 'Create and manage various highlights for the website.',
        'layout_title'       => 'Layout',
        'layout_description' => 'Change layout for the highlights display',
        'group_title'        => 'Highlight',
        'group_description'  => 'Displayed group of highlights',
    ],
    'features'  => [
        'name'               => 'Features',
        'description'        => 'Create and manage various features for the website.',
        'layout_title'       => 'Layout',
        'layout_description' => 'Change layout for the features display',
        'group_title'        => 'Feature',
        'group_description'  => 'Displayed group of features',
    ],
];