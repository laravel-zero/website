---
title: Send desktop notifications
description: Send desktop notifications
extends: _layouts.documentation
section: content
---

# Send desktop notifications

Laravel Zero provides a `notify` method that gives the power of sending desktop notifications
from your Artisan command:
```php
$this->notify("Hello Web Artisan", "Love beautiful..", "icon.png");
```

The code above will generate the following notification in your desktop:

<img
    src="https://raw.githubusercontent.com/nunomaduro/laravel-desktop-notifier/stable/docs/icon.png"
    class="md:w-4/5 md:mx-auto"
>

Get more details: [https://github.com/nunomaduro/laravel-desktop-notifier](https://github.com/nunomaduro/laravel-desktop-notifier).

