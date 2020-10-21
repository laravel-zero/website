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

## Asserting that a command was called
Using the `assertCommandCalled` test helper method you can check if a specific method was called.
This is helpful if you need to check if calling _SomeFirstCommand_ also triggers _AnotherCommand_.

The inverse of this assertion is `assertCommandNotCalled`.

__Note__ that both assertions are "argument-sensitive".

```php
use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /**
     * An example for using assertCommand(Not)Called.
     *
     * @return void
     */
    public function testMigrationCommand()
    {
        $this->artisan('migrate', ['--seed' => true]);

        // Assert that a command was called
        $this->assertCommandCalled('migrate', ['--seed' => true]);
        $this->assertCommandCalled('db:seed');

        // Assert that a command was *NOT* called
        $this->assertCommandNotCalled('migrate', ['--seed' => false]);
    }
}
```
