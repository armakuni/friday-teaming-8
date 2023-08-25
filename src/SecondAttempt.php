<?php

namespace Armakuni\FridayTeaming8;

class SecondAttempt
{
    public function fizzBuzz(int $value) : string
    {
        $result = "";

        if ($value % 3 == 0) {
            $result .= "fizz";
        }

        if ($value % 5 == 0) {
            $result .= "buzz";
        }

        if (empty($result)) {
            $result = "$value";
        }

        return $result;
    }
}