---
title: Build interactive menus
description: Build interactive menus
extends: _layouts.documentation
section: content
---

# Build interactive menus

Using the `app:install` Artisan command you can install the `menu` component:
```bash
php <your-app-name> app:install menu
```

Interactive menus in console applications are very powerful. They
provide a simple interface that requires little interaction. With Laravel
Zero, you can use the `menu` method to create beautiful menus:

Using menus in the console may sound silly, but is fantastic! Your users
don't need to type the number corresponding to their choice any more. They
can just use the arrows on their keyboard to make their selection!

#### Example

Create your first menu by copy pasting the code below in your commands
`handle` function.

```php
$option = $this->menu('Pizza menu', [
    'Freshly baked muffins',
    'Freshly baked croissants',
    'Turnovers, crumb cake, cinnamon buns, scones',
])->open();

$this->info("You have chosen the option number #$option");
```

When you now run your command your output should be similar to this
image:

<img
    src="https://raw.githubusercontent.com/nunomaduro/laravel-console-menu/master/docs/example.png"
    class="md:w-4/5 md:mx-auto"
>

<h4 class="mt-0">Changing the appearance</h4>

The appearance of the menu can be set with a fluent API. What if we like
a green font on a black background? The code below shows you how to do just that and some extras.

```php
$this->menu($title, $options)
    ->setForegroundColour('green')
    ->setBackgroundColour('black')
    ->setWidth(200)
    ->setPadding(10)
    ->setMargin(5)
    ->setExitButtonText("Abort")
    // remove exit button with
    // ->disableDefaultItems()
    ->setUnselectedMarker('❅')
    ->setSelectedMarker('✏')
    ->setTitleSeparator('*-')
    ->addLineBreak('<3', 2)
    ->addStaticItem('AREA 2')
    ->open();
```

> Behind the scenes, the `menu` method uses the
[`nunomaduro/laravel-console-menu`](https://github.com/nunomaduro/laravel-console-menu)
package. You can find more details on how to use the menu method there.
