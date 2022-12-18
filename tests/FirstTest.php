<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    /**
     * Adding Two Plus Two Results In Four
     */
    public function testAddingTwoPlusTwoResultsInFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
