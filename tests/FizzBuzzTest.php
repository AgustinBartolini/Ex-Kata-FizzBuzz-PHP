<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase {
    public function test_fizz_if_divisible_by_three(): void {
        $numb = 3;
        $fizzBuzz = new FizzBuzz;
        $result = $fizzBuzz->getFizzBuzz($numb);
        $this->assertEquals("Fizz", $result);
    }

    public function test_fizz_if_divisible_by_five(): void {
        $numb = 5;
        $fizzBuzz = new FizzBuzz;
        $result = $fizzBuzz->getFizzBuzz($numb);
        $this->assertEquals("Buzz", $result);
    }

    public function test_fizz_if_divisible_by_fifteen(): void {
        $numb = 15;
        $fizzBuzz = new FizzBuzz;
        $result = $fizzBuzz->getFizzBuzz($numb);
        $this->assertEquals("FizzBuzz", $result);
    }
}

