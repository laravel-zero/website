# Upgrade Guide

- [Upgrading To 5.6 From 4.0](#upgrade-5.6.0)

<a name="upgrade-5.6"></a>
## Upgrading To 5.6 From 4.0

#### Estimated Upgrade Time: 5 - 15 Minutes

> We attempt to document every possible breaking change. Since some of these breaking changes are in obscure parts of the framework only a portion of these changes may actually affect your application.

### PHP

Laravel 5.6 requires PHP 7.1.3 or higher.

### Updating Dependencies

Update your `laravel-zero/framework` dependency to `5.6.*` in your `composer.json` file.

Of course, don't forget to examine any 3rd party packages consumed by your application and verify you are using the proper version for Laravel 5.6 support.

#### PHPUnit

You must update the `phpunit/phpunit` dependency of your application to `~7.0`.

### Boostrap

You must create the bootstrap/cache folder to hold application services cache. The content
of this new folder should be a single `.gitignore` with the following content:

```
*
!.gitignore
```

Please remove the files `bootstrap/autoload.php` and `bootstrap/init.php`. And create the file `bootstrap/app.php` with the
contens of the file: [https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/bootstrap/app.php](https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/bootstrap/app.php).

### Application entry point

The file that you use to interact with your application should contain now the following content: [https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/application](https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/application).

### Configs

#### The `commands.php` File

You should create a `config/commands.php` with the contents of [https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/config/commands.php](https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/config/commands.php). Please
customize the created file in order to determine the commands that should appear in your ListCommand.

#### The `app.php` File

- App config with-scheduler is no longer available. You should use `config/commands.php` for it.
- App config default-command is no longer available. You should use `config/commands.php` for it.
- App config commands-paths is no longer available. You should use `config/commands.php` for it.
- App config commands is no longer available. You should use `config/commands.php` for it.

The value version on config/app.php should be updated to `app('git.version')`.

#### The `database.php` File

If you have the database component installed, please take in consideration the following updates:

- Database config with-migrations is no longer available. You should use config/commands.php for it.
- Database config with-seeds is no longer available. You should use config/commands.php for it.

#### Tests

- The file `/tests/TestCase.php` should now contains the following contents: [https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/tests/TestCase.php](https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/tests/TestCase.php).
- The file `/tests/CreatesApplication.php` should now contains the following contents: [https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/tests/CreatesApplication.php](https://github.com/laravel-zero/laravel-zero/blob/v5.5.6/tests/CreatesApplication.php).

On every tests, you should replace `$this->app->call()` and `$this->app->output()` by the Artisan facade. Example: `Artisan::call` and `Artisan::output`.

The variable `$this->app` will now contain a base application class of Laravel, that is the container itself.
