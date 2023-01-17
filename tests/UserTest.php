<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User();
        $user->first_name = "Bob";
        $user->last_name = "Builder";

        $this->assertEquals("Bob Builder", $user->getFullName());
    }

    public function testReturnsEmptyString()
    {
        $user = new User();

        $this->assertEquals("", $user->getFullName());
    }

    public function testNotificationsSent()
    {
        $user = new User();

        $mock = $this->createMock(Mailer::class);

        $mock->expects($this->once())
            ->method("sendMessage")
            ->with($this->equalTo("bob@builders.com"), $this->equalTo("I am a test message to Bob the Builder."))
            ->willReturn(true);

        $user->setMailer($mock);

        $user->email = 'bob@builders.com';

        $this->assertTrue($user->notify("I am a test message to Bob the Builder."));
    }

    public function testWithNoEmail()
    {
        $user = new User();

        $mock_mailer = $this->getMockBuilder(Mailer::class)
            ->onlyMethods([])
            ->getMock();

        $user->setMailer($mock_mailer);

        $this->expectException(Exception::class);

        $user->notify("I am a test message to Bob the Builder.");
    }
}
