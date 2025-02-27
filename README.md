This highlights a Larastan bug.

running `vendor/bin/phpstan analyse` will yield a static method not found error, even though it _should_ be discoverable
based on binding the contract in `AppServiceProvider`.
