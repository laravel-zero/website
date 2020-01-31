---
title: Upgrade Guide
description: Laravel Zero Upgrade Guide
extends: _layouts.documentation
section: content
---

# Upgrade Guide

- [Upgrading To 7.0 From 6.x](#upgrade-7.0.0)
- [Upgrading To 6.0 From 5.8](#upgrade-6.0.0)
- [Upgrading To 5.8 From 5.7](#upgrade-5.8.0)
- [Upgrading To 5.7 From 5.6](#upgrade-5.7.0)
- [Upgrading To 5.6 From 4.0](#upgrade-5.6.0)

<a name="upgrade-7.x"></a>
## Upgrading To 7.0 From 6.x

#### Estimated Upgrade Time: 2 - 5 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `^7.0` in your `composer.json` file.

#### If you are using the Logo component

The Logo component now depends on the [Laminas Text](https://github.com/laminas/laminas-text) package for Figlet generation.

Replace your `zendframework/zend-text` dependency with `"laminas/laminas-text": "^2.7"` in your `composer.json`.

### Configuration changes

The `app.production` configuration value has been removed and replaced by an `app.env` value in order to match Laravel.

Replace `'production' => true,` with `'env' => 'development',` in your [`config/app.php`](https://github.com/laravel-zero/laravel-zero/blob/v7.0.0/config/app.php) file.

<a name="upgrade-6.0.0"></a>
## Upgrading To 6.0 From 5.8

#### Estimated Upgrade Time: 2 - 5 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `^6.0` in your `composer.json` file.

#### If you are using Laravel's String & Array Helper

All `str_` and `array_` helpers have been moved to the new `laravel/helpers` Composer package and removed from the framework. If desired, you may update all calls to these helpers to use the `Illuminate\Support\Str` and `Illuminate\Support\Arr` classes. Alternatively, you can add the new `laravel/helpers` package to your application to continue using these helpers:

```bash
composer require laravel/helpers
```

<a name="upgrade-5.8.0"></a>
## Upgrading To 5.8 From 5.7

#### Estimated Upgrade Time: 2 - 5 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `5.8.*` in your `composer.json` file.

#### If you are using the menu method

The `command::menu()` method got removed from the core of Laravel Zero to an optional component. Using the `app:install` Artisan command you can install the `menu` component again:
```bash
php <your-app-name> app:install menu
```

#### If you are using the dotenv addon

Update your `vlucas/phpdotenv` dependency to `^3.0` in your `composer.json` file.

<a name="upgrade-5.7.0"></a>
## Upgrading To 5.7 From 5.6

#### Estimated Upgrade Time: 2 - 5 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `5.7.*` in your `composer.json` file.

Of course, don't forget to examine any 3rd party packages consumed by your application and verify you are using the proper version for Laravel Zero 5.7 support.

#### If you are using testing

Add the `mockery/mockery` package with version ^1.0 to the require-dev section of your composer.json file.

Update the contents of the following files:

- tests/CreatesApplication.php:

```php
<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
```

- tests/TestCase.php:

```php
<?php

namespace Tests;

use LaravelZero\Framework\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
```

### If you are using the build feature

The internal behavior of build feature has changed. We are now using `humbug/box` to provide fast application bundling.

You should create a new file `box.json` on the root folder of your application with the following content:

```json
{
    "chmod": "0755",
    "directories": [
        "app",
        "bootstrap",
        "config",
        "vendor"
    ],
    "files": [
        "composer.json"
    ],
    "exclude-composer-files": false,
    "compression": "GZ",
    "compactors": [
        "Herrera\\Box\\Compactor\\Php",
        "Herrera\\Box\\Compactor\\Json"
    ]
}
```

The option app:build `with-dev` option no longer exists, and the config/app.php `structure` parameter also no longer exists. In order to configure your build, you should configure the `box.json` file. Check [github.com/humbug/box/blob/master/doc/configuration.md](https://github.com/humbug/box/blob/master/doc/configuration.md) for more details.

<a name="upgrade-5.6.0"></a>
## Upgrading To 5.6 From 4.0

#### Estimated Upgrade Time: 5 - 15 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### PHP

Laravel Zero 5.6 requires PHP 7.1.3 or higher.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `5.6.*` in your `composer.json` file.

Of course, don't forget to examine any 3rd party packages consumed by your application and verify you are using the proper version for Laravel 5.6 support.

#### PHPUnit

You must update the `phpunit/phpunit` dependency of your application to `~7.0`.

### Bootstrap

You must create the bootstrap/cache folder to hold application services cache. The content
of this new folder should be a single `.gitignore` with the following content:

```
*
!.gitignore
```

Please remove the files `bootstrap/autoload.php` and `bootstrap/init.php`. And create the file `bootstrap/app.php` with the
contents of the file: [https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/bootstrap/app.php](https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/bootstrap/app.php).

### Application entry point

The file that you use to interact with your application should contain now the following content: [https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/application](https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/application).

### Configs

#### The `commands.php` File

You should create a `config/commands.php` with the contents of [https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/config/commands.php](https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/config/commands.php). Please
customize the created file in order to determine the commands that should appear in your ListCommand.

#### The `app.php` File

- App config `with-scheduler` is no longer available. You should use `config/commands.php` for it.
- App config `default-command` is no longer available. You should use `config/commands.php` for it.
- App config `commands-paths` is no longer available. You should use `config/commands.php` for it.
- App config `commands` is no longer available. You should use `config/commands.php` for it.

The value version on `config/app.php` should be updated to `app('git.version')`.

#### The `database.php` File

If you have the database component installed, please take into consideration the following updates:

- Database config `with-migrations` is no longer available. You should use config/commands.php for it.
- Database config `with-seeds` is no longer available. You should use config/commands.php for it.

#### Tests

- The file `/tests/TestCase.php` should now contain the following contents: [https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/tests/TestCase.php](https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/tests/TestCase.php).
- The file `/tests/CreatesApplication.php` should now contain the following contents: [https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/tests/CreatesApplication.php](https://github.com/laravel-zero/laravel-zero/blob/v5.6.6/tests/CreatesApplication.php).

On every tests, you should replace `$this->app->call()` and `$this->app->output()` by the Artisan facade. Example: `Artisan::call` and `Artisan::output`.

The variable `$this->app` will now contain a base application class of Laravel, that is the container itself.
