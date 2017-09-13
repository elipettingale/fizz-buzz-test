<?php

use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{

    public function test_basic_sequence() {
        $this->assertEquals(
            generate_fizz_buzz(15),
            "1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, "
        );
    }

    public function test_basic_validation() {
        $this->assertEquals(
            generate_fizz_buzz(0),
            "Invalid Input: Input must be an integer between 1 and 2000"
        );
        $this->assertEquals(
            generate_fizz_buzz(2001),
            "Invalid Input: Input must be an integer between 1 and 2000"
        );
    }

    public function test_custom_validation() {
        $this->assertEquals(
            generate_fizz_buzz($input = 1, $min_range = 2, $max_range = 2000),
            "Invalid Input: Input must be an integer between 2 and 2000"
        );
        $this->assertEquals(
            generate_fizz_buzz($input = 2000, $min_range = 1, $max_range = 1999),
            "Invalid Input: Input must be an integer between 1 and 1999"
        );
    }

    public function test_custom_sequence() {
        $this->assertEquals(
            generate_fizz_buzz($input = 15, $min_range = 1, $max_range = 2000, $generation_rules = array(
                3 => "Fizz",
                5 => "Buzz",
                10 => "Bang"
            )),
            "1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, BuzzBang, 11, Fizz, 13, 14, FizzBuzz, "
        );
    }

}
