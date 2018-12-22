---
title: Installation
description: Create a new Laravel Zero project
extends: _layouts.documentation
section: content
---

# Installation

> **Requires [PHP 7.1.3+](https://php.net/releases/)**

Laravel Zero utilizes [Composer](https://getcomposer.org) to manage its dependencies. So, before using Laravel Zero, make sure you have Composer installed on your machine.

#### Via Laravel Zero Installer

First, download the Laravel Zero installer using Composer:

```bash
composer global require "laravel-zero/installer"
```

Make sure to place composer's system-wide vendor bin directory in your `$PATH` so the laravel Zero executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

<div class="content-list" markdown="1">
- macOS: `$HOME/.composer/vendor/bin`
- GNU / Linux Distributions: `$HOME/.config/composer/vendor/bin`
</div>

Once installed, the `laravel-zero new` command will create a fresh Laravel Zero installation in the directory you specify. For instance, `laravel-zero new movie-cli` will create a directory named `movie-cli` containing a fresh Laravel Zero installation with all of Laravel Zero's dependencies already installed:

```bash
laravel-zero new movie-cli
```

#### Via Composer Create-Project

Alternatively, you may also install Laravel Zero by issuing the Composer `create-project` command in your terminal:

```bash
composer create-project --prefer-dist laravel-zero/laravel-zero movie-cli
```
