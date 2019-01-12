---
title: Exception Handler
description: Managing which exceptions to report
extends: _layouts.documentation
section: content
---


# Introduction

When you start a new Laravel Zero project, error and exception handling is part of the core. 

The `Illuminate\Foundation\Exceptions\Handler` class is where all exceptions triggered by your application are logged and rendered back to the user. 

> If you would like to view the internals, this class is part of the [`laravel-zero/foundation`](https://github.com/laravel-zero/foundation) package.


# Custom Exception Handler

When working with Laravel Zero you might want to prevent some exceptions to be reported to the end user.  

As `Illuminate\Foundation\Exceptions\Handler` is part of the core you can't just modify it to fit your needs. Your modifications would be overwritten with every update of Laravel Zero.

Below we'll describe how you can create your own handler so you can add your custom logic.

#### Creating The Handler Class

Inside your `app` folder, create a new folder `Exceptions`. Inside that folder, create a file called `Handler.php`. This will be our new Handler in the next few minutes. 

Copy the content below and paste it in your newly created file. 
    
```php 
<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        // \Illuminate\Database\Eloquent\ModelNotFoundException::class,
    ];


    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

}
```
As you can see we are just extending the default handler here.

> The above content might feel familiar to those using Laravel.  
It's a trimmed down version of the [`App\Exceptions\Handler`](https://github.com/laravel/laravel/blob/master/app/Exceptions/Handler.php) of Laravel.

#### Replacing The Default Handler

In the file `bootstrap/app.php` look for the following code.

```php 
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Illuminate\Foundation\Exceptions\Handler::class
);
```

Replace the `Illuminate\Foundation\Exceptions\Handlers::class` with your newly created `App\Exceptions\Handler:class`.

```php
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
```

> **Congratulations!**  
You can now start handling exceptions in your new `Handler.php` file.

#### Ignoring Exceptions

The `$dontReport` property of the exception handler contains an array of exception types that will not be logged. For example, if you would not like to report the `RuntimeException`, you would add it to the `dontReport` array.

```php
    protected $dontReport = [
        \Symfony\Component\Console\Exception\RuntimeException::class,
    ];
```

This however results in `RuntimeException` not being reported at all. More fine grained control can be achieved by updating the `report` function.

The following would prevent the *Not enough arguments* exception to be reported, but any other `RuntimeException` would still be reported.

```php
public function report(Exception $exception)
{
    if ($exception instanceof RuntimeException) {
        if (Str::contains($exception->getMessage(), ['Not enough arguments'])) {
            return;
        }
    }

    parent::report($exception);
}
```

If you would like to disable the reporting only when running from the built phar file you could use the [`\Phar::running()`](http://php.net/manual/en/phar.running.php) function.

```php
if (\Phar::running()) {
    if ($exception instanceof RuntimeException) {
        if (Str::contains($exception->getMessage(), ['Not enough arguments'])) {
            return;
        }
    }
}
```