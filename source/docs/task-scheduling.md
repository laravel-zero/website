---
title: Task Scheduling
description: Scheduler allows you to fluently and expressively define your command schedule
extends: _layouts.documentation
section: content
---

# Task Scheduling

Laravel Zero ships with the [Task Scheduling](https://laravel.com/docs/5.7/scheduling) system of
Laravel. To use the scheduler, you need to periodically execute your application, and for that you
need to add the following Cron entry to your server:
```
* * * * * php /path-to-your-project/your-app-name schedule:run >> /dev/null 2>&1
```

You may define all of your scheduled tasks in the `schedule` method of the Artisan command:
```php
    public function schedule(Schedule $schedule)
    {
        $schedule->command(static::class)->everyMinute();
    }
```

### Viewing scheduled tasks

The Schedule List component can be used to view a list of tasks that are scheduled in your application.

Using the `app:install` Artisan command you can install the `schedule-list` component:

```bash
php <your-app-name> app:install schedule-list
```

After installation, the `schedule:list` command will be available to use. The binary name will be set
by default in the `config/schedule-list.php` file, but you may need to update this to make sure the
command outputs correctly. Note that Unix systems wrap the command parameters in single quotes,
whereas Windows wraps them in double quotes so both will be needed in the configuration file.

> Behind the scenes, the `schedule-list` command uses the
[`hmazter/laravel-schedule-list`](https://github.com/hmazter/laravel-schedule-list)
package. You can find more details on how to use the command and configuration there.
