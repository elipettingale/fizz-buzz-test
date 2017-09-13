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

}
