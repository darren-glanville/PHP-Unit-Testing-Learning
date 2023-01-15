<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function returns_full_name()
    {
        $user = new User();
        $user->first_name = "Bob";
        $user->last_name = "Builder";

        $this->assertEquals("Bob Builder", $user->getFullName());
    }

    /**
     * @test
     */
    public function returns_empty_string()
    {
        $user = new User();

        $this->assertEquals("", $user->getFullName());
    }

    public function testNotificationsSent()
    {
        $user = new User();

        $mock = $this->createMock(Mailer::class);

        $mock->method("sendMessage")
            ->willReturn(true);

        $user->setMailer($mock);

        $user->email = 'bob@builders.com';

        $this->assertTrue($user->notify("I am a test message to Bob the Builder."));
    }
}
