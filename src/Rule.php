<?php

namespace Armakuni\FridayTeaming8;

interface Rule
{
    public function apply(int $value): string;
}