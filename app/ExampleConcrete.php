<?php

namespace App;

class ExampleConcrete implements ExampleInterface
{
    public function instanceMethodOne(): string
    {
        return "method_one";
    }

    public function instanceMethodTwo(): string
    {
        return "method_two";
    }
}
