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


## Note on PHAR build

When your App built into the PHAR standalone file, the underneath Laravel helper `storage_path()` used to determine where to store log files (if on a filesystem, see `/config/logging.php` in your project), points inside the PHAR package; which is by default read-only.

For such an occasion, we suggest to reconfigure the path in your `/app/Providers/AppServiceProvider::class` on the fly, like for example:

```php
/**
 * Bootstrap any application services.
 * @return void
 */
public function boot()
{
    # ensure you configure the right channel you use
    config(['logging.channels.single.path' => \Phar::running()
            ? dirname(\Phar::running(false)) . '/desired-path/your-app.log'
            : storage_path('logs/your-app.log')
        ]);
}
```
