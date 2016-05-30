<?php

namespace App;

class Foo implements FooInterface
{
    public function get()
    {
        echo "foo get" . PHP_EOL;
    }
}
