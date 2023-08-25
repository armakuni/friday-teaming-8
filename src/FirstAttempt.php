<?php

namespace Armakuni\FridayTeaming8;

class FirstAttempt {
    public function fizzBuzz(int $value) : string {
        if ($value % 3 === 0 && $value % 5 === 0) {
            return "fizzbuzz";
        }

        if ($value % 3 === 0) {
            return "fizz";
        }

        if ($value % 5 === 0) {
            return "buzz";
        }

        return (string) $value;
    }

}