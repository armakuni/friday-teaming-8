<?php

namespace Tests\Armakuni\FridayTeaming8;

use Armakuni\FridayTeaming8\SecondAttempt;
use Eris\Generators;
use PHPUnit\Framework\TestCase;

class SecondAttemptTest extends TestCase {
    use \Eris\TestTrait;

    public function testNumbersDivisableByThreeContainFizz() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::int())
            ->then(function($number) use ($instance) {
                $this->assertStringContainsString("fizz", $instance->fizzBuzz($number*3));
            });
    }

    public function testBuzz() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::int())
            ->then(function($number) use ($instance) {
                $this->assertStringContainsString("buzz", $instance->fizzBuzz($number*5));
            });
    }

    public function testFizzBuzz() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::int())
            ->then(function($number) use ($instance) {
                $this->assertStringContainsString("fizzbuzz", $instance->fizzBuzz($number*15));
            });
    }

    public function testDefaultPath() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::suchThat(function ($value) {
            return $value % 3 !== 0 &&  $value % 5 !== 0;

        }, Generators::int()))
            ->then(function($number) use ($instance) {

                $this->assertStringContainsString("$number", $instance->fizzBuzz($number));
            });
    }

    public function testNumbersDivisableByThreeOrFiveDoNotContainNumber() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::suchThat(function ($value) {
            return $value % 3 === 0 ||  $value % 5 === 0;

        }, Generators::int()))
            ->then(function($number) use ($instance) {

                $this->assertStringNotContainsString("$number", $instance->fizzBuzz($number));
            });
    }

    public function testNumbersNotDivisableByThreeDoNotContainFizz() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::suchThat(function ($value) {
            return $value % 3 !== 0;

        }, Generators::int()))
            ->then(function($number) use ($instance) {

                $this->assertStringNotContainsString("fizz", $instance->fizzBuzz($number));
            });
    }

    public function testNumbersNotDivisableByFiveDoNotContainBuzz() {
        $instance = new SecondAttempt();
        $this->forAll(Generators::suchThat(function ($value) {
            return $value % 5 !== 0;

        }, Generators::int()))
            ->then(function($number) use ($instance) {
                $this->assertStringNotContainsString("buzz", $instance->fizzBuzz($number));
            });
    }
}