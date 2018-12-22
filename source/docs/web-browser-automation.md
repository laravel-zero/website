---
title: Web Browser Automation
description: Web Browser Automation with Laravel Dusk
extends: _layouts.documentation
section: content
---

# Web Browser Automation

Using the `app:install` Artisan command you can install the `console-dusk` component:
```bash
php <your-app-name> app:install console-dusk
```

The Console Dusk allows the usage of Laravel Dusk in Artisan commands. Horever, in Laravel Zero
you can use Laravel Dusk for web tasks that should be automated. Let's take a look at the usage:
```php
class VisitLaravelZeroCommand extends Command
{
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://laravel-zero.com')
                ->assertSee('Collision');
        });
    }
}
```

Output example:

<p align="center">
    <img src="https://github.com/nunomaduro/laravel-console-dusk/blob/master/docs/example.gif?raw=true">
</p>

Get more details: [https://github.com/nunomaduro/laravel-console-dusk](https://github.com/nunomaduro/laravel-console-dusk).
