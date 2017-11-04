<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/joyeria/user/themes/navascues/blueprints/modular/section.yaml',
    'modified' => 1509582534,
    'data' => [
        'title' => 'Sections',
        '@extends' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'name' => [
                                                    'default' => 'modular/sections',
                                                    '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'overrides' => [
                                    'fields' => [
                                        'header.template' => [
                                            'default' => 'modular/sections',
                                            '@data-options' => '\\Grav\\Common\\Page\\Pages::modularTypes'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'section' => [
                            'type' => 'tab',
                            'title' => 'Section',
                            'fields' => [
                                'header.section' => [
                                    'name' => 'section',
                                    'type' => 'list',
                                    'label' => 'section',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.myImage' => [
                                            'type' => 'file',
                                            'label' => 'First File',
                                            'destination' => 'self@',
                                            'limit' => 1,
                                            'filesize' => 1,
                                            'remove' => true,
                                            'accept' => [
                                                0 => '*'
                                            ]
                                        ],
                                        '.mySecondImage' => [
                                            'type' => 'file',
                                            'label' => 'Second File',
                                            'destination' => 'self@',
                                            'limit' => 1,
                                            'filesize' => 1,
                                            'accept' => [
                                                0 => '*'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];