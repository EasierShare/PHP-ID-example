<?php

use App\Foo;
use App\FooInterface;

return [
    FooInterface::class => function () {
        return new Foo;
    }
];
