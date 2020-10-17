---
title: Service Providers
description: The `App\ServiceProviders` folder
extends: _layouts.documentation
section: content
---


# Service Providers

The `App\ServiceProviders` folder should contain Service Providers files. The usage of
[Laravel Service Providers](https://laravel.com/docs/providers) is the best way to specify
when a concrete implementation is bound to a contract/interface:
```php
public function register()
{
    $this->app->singleton(Contract::class, function ($app) {
        return new Concrete(config('database'));
    });
}

app(Contract::class) // Returns a Concrete implementation.
```

This is useful, because you may want to ask for the contract instead of the implementation:
```php
public function handle(ServiceContract $service)
{
    $service->execute('foo');
}
```
