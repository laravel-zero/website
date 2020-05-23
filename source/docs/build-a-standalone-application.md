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

To use SQLite in your standalone PHAR application, you need to set the following value in your `.env` file:
```bash
DB_DATABASE=/absolute/path/to/database.sqlite
```

This must be the absolute path to your SQLite database file.

By default the path points to `database_path('database.sqlite')`, which includes the PHAR executable as a folder in the path.
