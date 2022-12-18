<?php

class User
{
    public $first_name;

    public $last_name;

    /**
     * Get Full Name
     *
     * @return string The full name of the user,
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->last_name");
    }
}
