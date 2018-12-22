---
title: Run tasks
description: Scheduler allows you to fluently and expressively define your command schedule
extends: _layouts.documentation
section: content
---

# Run tasks

Console applications are used most of the times for performing tasks and giving output
of the result of task is important to the end-user. With Laravel Zero, you can use
the `task` method to return a result from the task code:
```php
$this->task("Installing Laravel", function () {
    return true;
});

$this->task("Doing something else", function () {
    return false;
});
```

The code above will output the following result:
<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-console-task/master/docs/example.png" width="50%">
</p>

Get more details: [https://github.com/nunomaduro/laravel-console-task](https://github.com/nunomaduro/laravel-console-task).

