<?php

namespace Tests\Armakuni\FridayTeaming8;

use Armakuni\FridayTeaming8\FirstAttempt;
use PHPUnit\Framework\TestCase;

class FirstAttemptTest extends TestCase {
    public function testSimple() {
        $instance = new FirstAttempt();
        $this->assertEquals($instance->doIt(), true);
    }
}