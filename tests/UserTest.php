<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * @test
     */
    public function returns_full_name()
    {
        require "User.php";

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
}
