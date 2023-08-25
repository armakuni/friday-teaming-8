<?php

namespace Armakuni\FridayTeaming8;

class FizzRule implements Rule
{
    public function apply(int $value) : string
    {
        if ($value % 3 !== 0) {
            return "";
        }
        return "fizz";
    }
}