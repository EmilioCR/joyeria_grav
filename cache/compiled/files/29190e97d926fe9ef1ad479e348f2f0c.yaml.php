<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/joyeria/user/themes/navascues/blueprints.yaml',
    'modified' => 1509380310,
    'data' => [
        'name' => 'Navascues',
        'version' => '0.1.0',
        'description' => 'Tema de Joyeria Navascues',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Emilio Calderon',
            'email' => 'emiliocf2096@gmail.com'
        ],
        'homepage' => 'https://github.com/emilio-calderon/grav-theme-navascues',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/emilio-calderon/grav-theme-navascues/issues',
        'readme' => 'https://github.com/emilio-calderon/grav-theme-navascues/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
