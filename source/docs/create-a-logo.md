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
    <img src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo.png" width="50%">
</p>

This command will install dependencies needed and publishes a config file under `config/logo.php`.

### Using a different font

Under the hood the `logo` component uses the [`laminas/laminas-text`](https://github.com/laminas/laminas-text) package which renders text using fonts called "figlets".

By default Laravel Zero uses the `big.flf` FIGlet file by Glenn Chappell. Additional FIGlet files can be downloaded from [figlet.org](http://www.figlet.org/fontdb.cgi) or created using FIGlet editing software.

Once a font has been downloaded, the `logo.font` value can be set in the config to provide the full path to the FIGlet file.

```diff
// config/logo.php
-  'font' => \LaravelZero\Framework\Components\Logo\FigletString::DEFAULT_FONT,
+  'font' => resources_path('fonts/doom.flf'),
```

For more details, check out the [Laminas docs](https://docs.laminas.dev/laminas-text/figlet) on FIGlets.
