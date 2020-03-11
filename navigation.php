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
    'Exception handler' => [
        'url' => 'docs/exception-handler',
    ],
    'Add-ons' => [
        'url' => 'docs/database',
        'children' => [
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
            'HTTP Client' => 'docs/http-client',
        ],
    ],
    'Upgrade' => [
        'url' => 'docs/upgrade',
    ],
    'Contributing' => [
        'url' => 'docs/contributing',
    ],
];
