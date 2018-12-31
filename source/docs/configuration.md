---
title: Configuration
description: The `config` folder
extends: _layouts.documentation
section: content
---

# Configuration

The `config` folder should contain your application config files. Files in this folder
are automatically registered as configuration files. As example, if you create an `app\bar.php`,
you can access it using `config('bar')`.

The configuration files `config/app.php` and `config/commands.php` are used internally by the
framework, and can not be removed.

The `config/app.php` contains information related to your application:

| Property  | Description
| ------------- | -------------
| name  | This value is the name of your application
| version  | This value determines the "version" your application is currently running in.
| production  | This value determines the "environment" your application is currently running in.
| providers  | The service providers listed here will be automatically loaded on your application.

The default command of your application contains a list of commands. That list of commands
can be configured using `config/commands.php`:

| Property  | Description
| ------------- | -------------
| default  | The default application command when no command name is provided.
| paths  | The "paths" that should be loaded by the console's kernel.
| add  | Here you may specify which commands classes you wish to include.
| hidden  | Adds the provided commands, but make them hidden.
| remove  | Removes the list of commands provided.
