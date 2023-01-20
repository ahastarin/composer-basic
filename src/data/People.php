<?php

namespace phpjwt\data;

class People{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name)
    {
        return "Hello " . $name . ", My Name is " . $this->name;
    }
}