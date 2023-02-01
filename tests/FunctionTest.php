<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    /**
     * Add Function Returns Correct Value
     */
    public function testAddReturnsCorrectValue()
    {
        require "functions.php";

        $this->assertEquals(8, add(4, 4));
        $this->assertEquals(2, add(1, 1));
    }

    public function testAddDoesNotReturnCorrectValue()
    {
        $this->assertNotEquals(5, add(2, 2));
    }
}
