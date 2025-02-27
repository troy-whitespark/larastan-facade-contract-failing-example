<?php

namespace Tests\Unit;

use App\ClientCode;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $value = (new ClientCode())->showFailure();
        $this->assertEquals("method_one", $value);
    }
}
