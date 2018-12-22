---
title: Build a standalone application
description: Build a standalone PHAR archive to ease the deployment or distribution of your project
extends: _layouts.documentation
section: content
---

# Build a standalone application

Your Laravel Zero project, by default, allows you to build a standalone PHAR archive to ease the deployment or distribution of your project.
```bash
php your-app-name app:build <your-build-name>
```

The build will provide a single phar archive, ready to use, containing all the code of your project and its dependencies. You will then be able to execute it directly:
```bash
./builds/<your-build-name>
```

or on Windows:
```bash
C:\application\path> php builds\<your-build-name>
```

We use `humbug/box` to provide fast application bundling. In order to configure your build, you should take a look at the file `box.json`.

Please check the box documentation to understand all options: [github.com/humbug/box/blob/master/doc/configuration.md](https://github.com/humbug/box/blob/master/doc/configuration.md).
