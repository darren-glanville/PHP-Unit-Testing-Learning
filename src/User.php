<?php

class User
{
    public $first_name;

    public $last_name;

    public $email;

    protected $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Get Full Name
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->last_name");
    }

    /**
     * Tell the user something by email.
     */
    public function notify($message)
    {
        return $this->mailer->sendMessage($this->email, $message);
    }
}
