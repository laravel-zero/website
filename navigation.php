<?php

return [
    'Introduction' => [
        'url' => 'docs/introduction',
    ],
    'Installation' => [
        'url' => 'docs/installation',
    ],
    'Usage' => [
        'url' => 'docs/commands',
        'children' => [
            'Commands' => 'docs/commands',
            'Service Providers' => 'docs/service-providers',
            'Configuration' => 'docs/configuration',
            'Testing' => 'docs/testing',
        ],
    ],
    'Add-ons' => [
        'url' => 'docs/add-ons',
        'children' => [
            'Create a new command' => 'docs/create-a-new-command',
            'Filesystem' => 'docs/Filesystem',
            'Run tasks' => 'docs/run-tasks',
            'Build interactive menus' => 'docs/build-interactive-menus',
            'Send desktop notifications' => 'docs/send-desktop-notifications',
            'Web Browser Automation' => 'docs/web-browser-automation',
            'Environment Variables' => 'docs/environment-variables',
            'Build a standalone application' => 'docs/build-a-standalone-application',
            'Tinker REPL' => 'docs/tinker-repl',
            'Custom 404 Page' => 'docs/custom-404-page',
        ],
    ],
    'Upgrade' => [
        'url' => 'docs/upgrade',
    ],
    'Contributing' => [
        'url' => 'docs/contributing',
    ],
];
