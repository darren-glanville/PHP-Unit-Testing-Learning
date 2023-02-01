<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMockEmail()
    {
        $mock = $this->createMock(Mailer::class);

        $mock->method("sendMessage")
            ->willReturn(true);

        $result = $mock->sendMessage("hi@darren-glanville.dev", "I am a message");

        $this->assertTrue($result);
    }
}
