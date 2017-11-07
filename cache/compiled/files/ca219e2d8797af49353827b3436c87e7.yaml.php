<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/joyeria/user/themes/navascues/blueprints/modular/jewelry.yaml',
    'modified' => 1510088307,
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
                    'active' => 2,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.content.items' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ITEMS',
                                    'default' => '@self.modular',
                                    'options' => [
                                        '@self.modular' => 'Modular Children'
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER_BY',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'PLUGIN_ADMIN.FOLDER',
                                        'title' => 'PLUGIN_ADMIN.TITLE',
                                        'date' => 'PLUGIN_ADMIN.DATE',
                                        'default' => 'PLUGIN_ADMIN.DEFAULT'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_ADMIN.ORDER',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'PLUGIN_ADMIN.ASCENDING',
                                        'desc' => 'PLUGIN_ADMIN.DESCENDING'
                                    ]
                                ],
                                'header.process' => [
                                    'type' => 'ignore'
                                ],
                                'content' => [
                                    'type' => 'ignore'
                                ],
                                'header.media_orider' => [
                                    'type' => 'ignore'
                                ]
                            ]
                        ],
                        'jewelry' => [
                            'type' => 'tab',
                            'title' => 'Jewelry Section',
                            'fields' => [
                                'header.jewel' => [
                                    'name' => 'jewel',
                                    'type' => 'list',
                                    'style' => 'vertical',
                                    'label' => 'Jewel',
                                    'fields' => [
                                        '.jewelName' => [
                                            'type' => 'text',
                                            'label' => 'Jewel name',
                                            'help' => 'text'
                                        ],
                                        '.jewelImage' => [
                                            'type' => 'file',
                                            'label' => 'Upload a jewel image',
                                            'destination' => 'self@',
                                            'multiple' => true,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.jewelPrice' => [
                                            'type' => 'text',
                                            'label' => 'Jewel price',
                                            'help' => 'text'
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