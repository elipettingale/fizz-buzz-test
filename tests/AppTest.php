<?php

use PHPUnit\Framework\TestCase;

final class AppTest extends TestCase
{

    public function test_basic_sequence() {
        $this->assertEquals(
            generate_fizz_buzz(5),
            "1, 2, Fizz, 4, Buzz, "
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

}
