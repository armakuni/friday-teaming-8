<?php

namespace Armakuni\FridayTeaming8;

class ThirdAttempt
{
    private $rules;

    public function __construct(array $rules) {
        $this->rules = $rules;
    }
    public function fizzBuzz(int $value) : string {
        $result = "";
        foreach ($this->rules as $rule) {
           $result .= $rule->apply($value);
        }

        if (empty($result)) {
            $result = "$value";
        }

        return $result;
    }
}