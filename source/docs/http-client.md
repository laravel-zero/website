---
title: HTTP Client
description: Laravel Zero includes a minimal HTTP Client component
extends: _layouts.documentation
section: content
---

# HTTP Client

Laravel includes an expressive API around the [Guzzle HTTP client](https://github.com/guzzle/guzzle).
This can easily be installed into Laravel Zero using the `http` component.

To install this component, run the following command:

```shell
php <your-app-name> app:install http
```

#### Usage:

The HTTP Client adds easy to use methods for standard HTTP requests.

```php
use Illuminate\Support\Facades\Http;

Http::get($url);
Http::post($url, $data);
```

Full details on using the HTTP Client is available on the [main Laravel documentation](https://laravel.com/docs/http-client).
