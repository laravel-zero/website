---
title: Testing
description: The `tests` folder
extends: _layouts.documentation
section: content
---

# Testing

The `tests` folder contains your `phpunit` tests. By default, the Laravel Zero
ships with an *Integration* suite that can be used as follows:
```php
use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInspiringCommand()
    {
        $this->artisan('inspiring')
             ->expectsOutput('Simplicity is the ultimate sophistication.')
             ->assertExitCode(0);
    }
}
```

As usual, you can always run your tests using the `phpunit` command:
```bash
./vendor/bin/phpunit
```
