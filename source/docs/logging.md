---
title: Logging
description: Robust logging services
extends: _layouts.documentation
section: content
---

# Logging

Using the `app:install` Artisan command you can install the `log` component:
```bash
php <your-app-name> app:install log
```

This component brings the robust logging services of Laravel that allow you to log
messages to files, the system error log, and even to Slack to notify your entire team.

As usual, the usage is similar to Laravel:
```php
use Log;

Log::emergency($message);
Log::alert($message);
Log::critical($message);
Log::error($message);
Log::warning($message);
Log::notice($message);
Log::info($message);
Log::debug($message);
```

Get more details: [laravel.com/docs/logging](https://laravel.com/docs/logging).
