<?php
return [
    'attributes' => [
        'class'=>'nav navbar-nav'
    ],
    'items' => [
        [
            'label' => 'Home',
            'url' => '/',
            'options' => [
                'class' => 'active',
            ],
            'attributes' => [
                'class' => '',
            ]
        ],
        [
            'label' => 'Profil <span class="caret"></span>',
            'url'   => '/profil',
            'options' => [
                'class'=>'dropdown'
            ],
            'attributes' => [
                'class'        =>'dropdown-toggle',
                'data-toggle'  =>'dropdown',
                'role'         =>'button',
                'aria-haspopup'=>"true",
                'aria-expanded'=>"false"
            ],
            'childs' => [
                'attributes' => [
                    'class'=>'dropdown-menu'
                ],
                'items' => [
                    [
                        'label' => 'Overview',
                        'url' => '/overview',
                    ],
                    [
                        'label' => 'About',
                        'url' => '/about-us',
                    ],
                ]
            ]
        ]
    ]
];