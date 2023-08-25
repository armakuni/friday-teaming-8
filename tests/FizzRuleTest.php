<?php

namespace Tests\Armakuni\FridayTeaming8;

use Armakuni\FridayTeaming8\FizzRule;
use PHPUnit\Framework\TestCase;

class FizzRuleTest extends TestCase
{
    public function testRuleAppliedForThree()
    {
        $rule = new FizzRule();

        $this->assertSame("fizz", $rule->apply(3));
        $this->assertSame("fizz", $rule->apply(6));
    }

    public function testRuleNotAppliedFor1()
    {
        $rule = new FizzRule();

        $this->assertSame("", $rule->apply(1));
        $this->assertSame("", $rule->apply(2));
    }

}