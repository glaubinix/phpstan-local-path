# phpstan-local-path

To reproduce
* run `composer install` in the app1 folder
* run `vendor/bin/phpstan` in the app1 folder
* edit the method signature for `SharedClass::doSomething` to accept a string instead of an int
* rerun `vendor/bin/phpstan` in the app1 folder
* no error is shown
