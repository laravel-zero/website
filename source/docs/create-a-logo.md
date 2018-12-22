---
title: Create a logo
description: Create a logo
extends: _layouts.documentation
section: content
---

# Create a logo

Using the `app:install` Artisan command you can install the `logo` component:
```bash
php <your-app-name> app:install logo
```

Just after installation, if you run `php <your-app-name>` your application will contain
a ASCII logo:
<p align="center">
    <img src="https://raw.githubusercontent.com/laravel-zero/website/gh-pages/img/logo_component.png" width="50%">
</p>
```

This command will install dependencies needed and publishes a config file under `config\logo.php`.
