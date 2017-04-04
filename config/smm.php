<?php

return [
    '/service/' => [
        'block_name' => ['dom_services'],
        'group_name' => ['services'],
        'fields' => [
            'title',
            'description',
            'keywords',
            'og' => [
                'title',
                'description',
                'image'
            ]
        ]
    ],
    '/services' => [
        'block_name' => ['dom_services'],
        'fields' => [
            'title',
            'description',
            'keywords',
            'og' => [
                'title',
                'description',
                'image'
            ]
        ]
    ],

];
