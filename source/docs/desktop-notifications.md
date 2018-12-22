---
title: Create a new command
description: Create a new command
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
<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-desktop-notifier/stable/docs/icon.png" width="50%">
</p>
