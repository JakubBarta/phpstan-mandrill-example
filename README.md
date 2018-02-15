# phpstan-mandrill-example
Purpose of this example is to show how PHPStan cannot find Mandrill exception class.

# Setup
- clone this repo and `cd` into it
- run `composer install`

# Run 
- run `php vendor/bin/phpstan analyse -l 6 -c phpstan.neon app`

After running this command, following output is produced: 
```------ --------------------------------------------------
  Line   app/ExampleClass.php
 ------ --------------------------------------------------
  20     Caught class Mandrill_Unknown_Message not found.
 ------ --------------------------------------------------


 [ERROR] Found 1 error
```

The problem is in `ExampleClass`. `\Mandrill_Unknown_Message` class exists, in `vendor/mandrill/mandrill/src/Mandrill/Exceptions.php`, and should be autoloaded, but is not.
On the other hand, class `\Nette\DI\MissingServiceException` is autoloaded correctly.
