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
        'url' => 'docs/create-a-new-command',
        'children' => [
            'Create a new command' => 'docs/create-a-new-command',
            'Database' => 'docs/database',
            'Logging' => 'docs/logging',
            'Filesystem' => 'docs/filesystem',
            'Run tasks' => 'docs/run-tasks',
            'Create a logo' => 'docs/create-a-logo',
            'Build interactive menus' => 'docs/build-interactive-menus',
            'Send desktop notifications' => 'docs/send-desktop-notifications',
            'Web Browser Automation' => 'docs/web-browser-automation',
            'Environment Variables' => 'docs/environment-variables',
            'Build a standalone application' => 'docs/build-a-standalone-application',
            'Tinker REPL' => 'docs/tinker-repl',
        ],
    ],
    'Upgrade' => [
        'url' => 'docs/upgrade',
    ],
    'Contributing' => [
        'url' => 'docs/contributing',
    ],
];
