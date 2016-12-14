<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/nineportfolio/grav-admin/user/themes/ix/blueprints.yaml',
    'modified' => 1480300798,
    'data' => [
        'name' => 'IX',
        'version' => '1.0.0',
        'description' => 'Conversion of static HTML5 into Grav theme.',
        'icon' => 'empire',
        'author' => [
            'name' => 'Taylor Fedt',
            'email' => 'taylor@ninedesign.co',
            'url' => 'http://wwww.ninedesign.co'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-antimatter',
        'demo' => 'http://demo.getgrav.org/blog-skeleton',
        'keywords' => 'IX Design, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-antimatter/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
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
