---
title: Usage
description: Usage
extends: _layouts.documentation
section: content
---

# Usage

To run your application, just execute in your application root folder:

```bash
php <your-app-name>
```

You can rename your application anytime by running the following command in your app directory:

```bash
php <your-app-name> app:rename <new-name>
```


### Tasks

<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-console-task/master/docs/example.png" width="50%">
</p>

```php
$this->task("Installing Laravel", function () {
    return true;
});

$this->task("Doing something else", function () {
    return false;
});

```

### Interactive Menus

<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-console-menu/master/docs/example.png" width="50%">
</p>

```php
$option = $this->menu('Pizza menu', [
    'Freshly baked muffins',
    'Freshly baked croissants',
    'Turnovers, crumb cake, cinnamon buns, scones',
])->open();

$this->info("You have chosen the option number #$option");
```

Here’s how you can change the appearance of the menu with a fluent API:

```php
$this->menu($title, $options)
    ->setForegroundColour('green')
    ->setBackgroundColour('black')
    ->setWidth(200)
    ->setPadding(10)
    ->setMargin(5)
    ->setExitButtonText("Abort")
    // remove exit button with
    // ->disableDefaultItems()
    ->setUnselectedMarker('❅')
    ->setSelectedMarker('✏')
    ->setTitleSeparator('*-')
    ->addLineBreak('<3', 2)
    ->addStaticItem('AREA 2')
    ->open();
```

### List of commands

The default command of your application contains a list of commands. That list of commands
can be configured using `config/commands.php`:

| Property  | Description
| ------------- | -------------
| default  | The default application command when no command name is provided.
| paths  | The "paths" that should be loaded by the console's kernel.
| add  | Here you may specify which commands classes you wish to include.
| hidden  | Adds the provided commands, but make them hidden.
| remove  | Removes the list of commands provided.

## App\ServiceProviders

Laravel Zero recommends the usage of [Laravel Service Providers](https://laravel.com/docs/5.7/providers) for defining concrete
implementations. Define them in `app\Providers\AppServiceProvider.php` or create new service providers.
The `config/app.php` *providers* array contains the registered service providers.
Below there is an example of a concrete implementation bound to a contract/interface.

```php
    public function register()
    {
        $this->app->singleton(Contract::class, function ($app) {
            return new Concrete(config('database'));
        });
    }

    app(Contract::class) // Returns a Concrete implementation.
```

## Config

The `config\app.php` file contains your application configuration. In this file, you can create new configuration settings, such as `foo => true`. You can then access the configuration using `config('app.foo')`.

All files in the `config` folder are automatically registered as configuration files.
You can also create specific configuration files, e.g: `app\bar.php` and access it with `config('bar')`.

Finally, before you distribute your application to the world, you should always set the application context to production by modifying `config/app.php`:

```php
    'production' => true,
```

## Tests

The `tests` folder contains your `phpunit` tests. By default, the Laravel Zero ships with an *Integration* suite that can be used as follows:

```php
use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInspiringCommand()
    {
        $this->artisan('inspiring')
             ->expectsOutput('Simplicity is the ultimate sophistication.')
             ->assertExitCode(0);
    }
}
```

Running your application *tests*:

```bash
./vendor/bin/phpunit
```

<a href="database"></a>
## Database

If you want to push your console app to the next level, Laravel Zero allows you to install a **Database** component out of the box! As you might have already guessed, it is Laravel's [Eloquent](https://laravel.com/docs/5.7/eloquent) component that works like a breeze in the Laravel Zero environment too.

```bash
php <your-app-name> app:install database
```

Usage:

```php
use DB;

DB::table('users')->insert(
    ['email' => 'enunomaduro@gmail.com']
);

$users = DB::table('users')->get();
```

Laravel [Database Migrations](https://laravel.com/docs/5.7/migrations) and [Database Seeding](https://laravel.com/docs/5.7/seeding) features are also included.

<a href="log"></a>
## Log

Laravel Zero allows you to install a **Log** component.

```bash
php <your-app-name> app:install log
```

Usage:

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

<a href="logo"></a>
## Logo

<p align="center">
    <img src="https://raw.githubusercontent.com/laravel-zero/website/gh-pages/img/logo_component.png" width="50%">
</p>


Laravel Zero allows you to install a **Logo** component.

```bash
php <your-app-name> app:install logo
```

This command will install dependencies needed and publishes a config file called `logo.php`. Your app name will now be displayed as an ASCII logo!

## Filesystem

If you want to move files in your system, or to different providers like AwsS3 and Dropbox, Laravel Zero ships with the [Filesystem](https://laravel.com/docs/5.7/filesystem) component by default.

Note: The root directory is `your-app-name/storage/app`.

```php
use Storage;

Storage::put("reminders.txt", "Task 1");
```

<a href="scheduler"></a>

<a href="dotenv"></a>
## Environment Configuration

You may want to install the [DotEnv PHP](https://github.com/vlucas/phpdotenv) component.
It is often helpful to have different configuration values based on the environment the application is running in.

```bash
php <your-app-name> app:install dotenv
```

The installation will create an empty `.env.example` on your project root. You should rename it manually to `.env`.

Usage:
Assuming that your `.env` contains:
```
SECRET_KEY=234567
```

You can access those variables using the `env()` helper:
```php
echo env('SECRET_KEY') // outputs 234567
```

