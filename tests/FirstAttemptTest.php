<?php

namespace Tests\Armakuni\FridayTeaming8;

use Armakuni\FridayTeaming8\FirstAttempt;
use PHPUnit\Framework\TestCase;

class FirstAttemptTest extends TestCase {
    public function testOneReturnsAsString() {
        $instance = new FirstAttempt();
        $this->assertSame("1", $instance->fizzBuzz(1));
    }

    public function testTwoReturnsAsString() {
        $instance = new FirstAttempt();
        $this->assertSame("2", $instance->fizzBuzz(2));
    }

    public function testFourReturnsAsString() {
        $instance = new FirstAttempt();
        $this->assertSame("4", $instance->fizzBuzz(4));
    }

    public function testThreeReturnsFizz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizz", $instance->fizzBuzz(3));
    }

    public function testSixReturnsFizz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizz", $instance->fizzBuzz(6));
    }

    public function testNineReturnsFizz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizz", $instance->fizzBuzz(9));
    }

    public function testFiveReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("buzz", $instance->fizzBuzz(5));
    }

    public function testTenReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("buzz", $instance->fizzBuzz(10));
    }

    public function testTwentyReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("buzz", $instance->fizzBuzz(20));
    }

    public function testFifteenReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizzbuzz", $instance->fizzBuzz(15));
    }

    public function testThirtyReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizzbuzz", $instance->fizzBuzz(30));
    }

    public function testFortyFiveReturnsBuzz() {
        $instance = new FirstAttempt();
        $this->assertSame("fizzbuzz", $instance->fizzBuzz(45));
    }
}