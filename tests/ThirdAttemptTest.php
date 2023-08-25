<?php

namespace Tests\Armakuni\FridayTeaming8;

use Armakuni\FridayTeaming8\FizzRule;
use Armakuni\FridayTeaming8\ThirdAttempt;
use PHPUnit\Framework\TestCase;

class ThirdAttemptTest extends TestCase
{
    public function testOneIsReturnedAsString()
    {
        $instance = new ThirdAttempt([]);

        $this->assertSame("1", $instance->fizzBuzz(1));
    }

    public function testTwoIsReturnedAsString()
    {
        $instance = new ThirdAttempt([]);

        $this->assertSame("2", $instance->fizzBuzz(2));
    }

    public function testThreeIsReturnsFizz()
    {
        $instance = new ThirdAttempt([new FizzRule()]);

        $this->assertSame("fizz", $instance->fizzBuzz(3));
        $this->assertSame("fizz", $instance->fizzBuzz(6));
        $this->assertSame("fizz", $instance->fizzBuzz(9));
    }
}