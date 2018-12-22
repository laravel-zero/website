---
title: Filesystem
description: Scheduler allows you to fluently and expressively define your command schedule
extends: _layouts.documentation
section: content
---

## Filesystem

If you want to move files in your system, or to different providers like AwsS3 and Dropbox. By default,
Laravel Zero ships with the [Filesystem](https://laravel.com/docs/5.7/filesystem) component of Laravel.

Note: The root directory is `your-app-name/storage/app`.

```php
use Storage;

Storage::put("reminders.txt", "Task 1");
```
