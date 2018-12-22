---
title: Create a new command
description: Create a new command
extends: _layouts.documentation
section: content
---

# Create a new command

Laravel Zero provides you with an `app\Commands\InspiringCommand.php` command as
an example. Of course, you can always create a new command using the `make:command` Artisan command:
```bash
php <your-app-name> make:command <NewCommand>
```

The `make:command` Artisan command will create a new command class under the
directory `App\Commands`. Fell free to review the documentation of the Artisan
Console component:

- The [Defining Input Expectations](https://laravel.com/docs/5.7/artisan#defining-input-expectations) section can
help you understand how to gather input from the user through arguments or options:
```php
 protected $signature = 'user:create
                        {name : The name of the user (required)}
                        {--age= : The age of the user (optional)}'
```

- The [Command I/O](https://laravel.com/docs/5.7/artisan#command-io) can help you to understand how to capture those input expectations and
interact with the user using commands like `line`, `info`, `comment`, `question` and `error` methods.
