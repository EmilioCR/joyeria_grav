<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/joyeria/user/themes/navascues/blueprints/contactenos.yaml',
    'modified' => 1510005317,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'about' => [
                            'type' => 'tab',
                            'title' => 'About',
                            'fields' => [
                                'header.about' => [
                                    'name' => 'About',
                                    'type' => 'columns',
                                    'label' => 'About',
                                    'fields' => [
                                        'header.columnLeft' => [
                                            'type' => 'column',
                                            'label' => 'columnLeft',
                                            'fields' => [
                                                'header.atencionImage' => [
                                                    'type' => 'file',
                                                    'label' => 'Image',
                                                    'destination' => 'self@',
                                                    'limit' => 1,
                                                    'filesize' => 1,
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                'header.titleAtencion' => [
                                                    'type' => 'text',
                                                    'label' => 'title'
                                                ],
                                                'header.phone' => [
                                                    'type' => 'text',
                                                    'label' => 'phone'
                                                ]
                                            ]
                                        ],
                                        'header.columnRight' => [
                                            'type' => 'column',
                                            'label' => 'columnRight',
                                            'fields' => [
                                                'header.contactenosImage' => [
                                                    'type' => 'file',
                                                    'label' => 'Image',
                                                    'destination' => 'self@',
                                                    'limit' => 1,
                                                    'filesize' => 1,
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                'header.titleContactenos' => [
                                                    'type' => 'text',
                                                    'label' => 'title'
                                                ],
                                                'header.mail' => [
                                                    'type' => 'text',
                                                    'label' => 'mail'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true,
                                    'fields' => [
                                        'header.published' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                            'highlight' => 1,
                                            'size' => 'medium',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.DATE_HELP'
                                        ],
                                        'header.publish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_DATE_HELP'
                                        ],
                                        'header.unpublish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE_HELP'
                                        ],
                                        'header.metadata' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.METADATA',
                                            'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                                            'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                                            'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                                        ]
                                    ]
                                ],
                                'taxonomies' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.TAXONOMIES',
                                    'underline' => true,
                                    'fields' => [
                                        'header.taxonomy' => [
                                            'type' => 'taxonomy',
                                            'label' => 'PLUGIN_ADMIN.TAXONOMY',
                                            'multiple' => true,
                                            'validate' => [
                                                'type' => 'array'
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
