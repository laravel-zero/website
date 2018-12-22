---
title: Environment Variables
description: Dotenv component loads environment variables from a .env file
extends: _layouts.documentation
section: content
---

# Environment Variables

Using the `app:install` Artisan command you can install the `dotenv` component:
```bash
php <your-app-name> app:install dotenv
```

The `dotenv` component allows you to load environment variables from a `.env` file. And behind
the scenes, it's based on the [DotEnv PHP](https://github.com/vlucas/phpdotenv) package.

After installing the component, an empty `.env.example` will be create on the root of your
project, and you should rename it manually to `.env`.

Assuming that your `.env` contains:
```
SECRET_KEY=234567
```

You can access those variables using the `env()` helper:
```php
echo env('SECRET_KEY') // outputs 234567
```
