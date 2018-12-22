---
title: Build interactive menus
description: Build interactive menus
extends: _layouts.documentation
section: content
---

# Build interactive menus

Interactive menus in console applications are very powerful - They
provide a simple interface that requires little interaction. With Laravel
Zero, you can use the `menu` to create beautiful menus:

Using menus in the console may sound silly, but is fantastic! The users
can use

are used most of the times for performing tasks and giving output
of the result of task is important to the end-user. With Laravel Zero, you can use
the `task` method to return a result from the task code:

```php
$option = $this->menu('Pizza menu', [
    'Freshly baked muffins',
    'Freshly baked croissants',
    'Turnovers, crumb cake, cinnamon buns, scones',
])->open();

$this->info("You have chosen the option number #$option");
```

The code above will output content similar to:
<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-console-menu/master/docs/example.png" width="50%">
</p>

Here’s how you can change the appearance of the menu with a fluent API:

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

Get more details: [https://github.com/nunomaduro/laravel-console-menu](https://github.com/nunomaduro/laravel-console-menu).
