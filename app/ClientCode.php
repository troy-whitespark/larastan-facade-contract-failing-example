<?php

namespace App;

class ClientCode
{

    public function showFailure(): string
    {
        $result = ExampleFacade::instanceMethodOne();

        return $result;
    }

}
