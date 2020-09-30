---
title: Build a standalone application
description: Build a standalone PHAR archive to ease the deployment or distribution of your project
extends: _layouts.documentation
section: content
---

# Build a standalone application

Your Laravel Zero project, by default, allows you to build a standalone PHAR archive to ease the deployment or distribution of your project.
```bash
php your-app-name app:build <your-build-name>
```

The build will provide a single phar archive, ready to use, containing all the code of your project and its dependencies. You will then be able to execute it directly:
```bash
./builds/<your-build-name>
```

or on Windows:
```bash
C:\application\path> php builds\<your-build-name>
```

We use `humbug/box` to provide fast application bundling. In order to configure your build, you should take a look at the file `box.json`.

Please check the box documentation to understand all options: [github.com/humbug/box/blob/master/doc/configuration.md](https://github.com/humbug/box/blob/master/doc/configuration.md).

## Non-interactive build

When you build you get asked about build version, in case you want to skip this step you can provide the build version as an option:
```bash
php your-app-name app:build --build-version=<your-build-version>
```

## Self update

Using the `app:install` Artisan command you can install the `self-update` component:
```bash
php <your-app-name> app:install self-update
```

This component will add an Artisan `self-update` command to every build application. This command
will try to download the latest version from GitHub, if available.

#### Custom update strategies

The self-updater supports custom "strategies" to configure how the application is updated. By default it uses the `GithubStrategy` which will try to download the PHAR binary from a `builds/` directory in the GitHub source repository.

Custom strategies must implement the following [`StrategyInterface` interface](https://github.com/laravel-zero/framework/blob/master/src/Components/Updater/Strategy/StrategyInterface.php).

By default, a few strategies are provided in Laravel Zero:

- Download the PHAR file from the `builds/` directory on GitHub:  
  `LaravelZero\Framework\Components\Updater\Strategy\GitHubStrategy`
- Download the PHAR file from GitHub releases assets:  
  `LaravelZero\Framework\Components\Updater\Strategy\GitHubReleasesStrategy`

To use a custom strategy, first publish the config using:

```bash
php <your-app-name> vendor:publish --provider "LaravelZero\Framework\Components\Updater\Provider"
```

Then update the `updater.strategy` value in the configuration file to use the required class name.

## Environment Variables

If the `dotenv` component is installed, you can place a `.env` file in the same
folder as the build application to make Laravel Zero load environment variables from
that same file.

## Database

To use SQLite in your standalone PHAR application, you need to tell Laravel Zero where to place the database in a production environment.

Similar to Laravel, this is configured in `config/database.php` under the `connections.sqlite.database` key. By default this is set to `database_path('database.sqlite')` which resolves to `<project>/database/database.sqlite`. Since we can't modify files within the project once the PHAR is built, we need to store this somewhere on the users computer. A good choice for this would be to create a "dot" folder inside your users home folder. For example:

```diff
// config/database.php
'connections' => [
  'sqlite' => [
      'driver' => 'sqlite',
      'url' => env('DATABASE_URL'),
-     'database' => database_path('database.sqlite'),
+     'database' => $_SERVER['HOME'] . '/.your-project-name/database.sqlite',
      'prefix' => '',
      'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
  ],
]
```

In this case it would tell Laravel to use the database at `/Users/<username>/.your-project-name/database.sqlite` (for MacOS).

It is important to note that this file will not exist upon installation of your app so you will either need to ensure it exists and is migrated before using the database or provide an `install` command which creates the database + migrates it.
