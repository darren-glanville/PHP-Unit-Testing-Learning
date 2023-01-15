<?php

class Mailer
{
    /**
     * Send a message
     *
     * @param string $email
     * @param string $message
     * @return bool
     */
    public function sendMessage(string $email, string $message): bool
    {
        sleep(3);

        echo "send '$message' to '$email'";

        return true;
    }
}
