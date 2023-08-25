<?php

namespace Tests\Armakuni\FridayTeaming8;

use Eris\Generators;
use PHPUnit\Framework\TestCase;

class SecondAttemptTest extends TestCase {
    use \Eris\TestTrait;

    public function testProperty() {
        $this->forAll(Generators::int())
            ->then(function($number) {
                $this->assertEquals($number + $number, 2 * $number);
            });
    }
}