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
    public function sendMessage($email, $message): bool
    {
        if (empty($email)) {
            throw new Exception;
        }

        sleep(3);

        echo "send '$message' to '$email'";

        return true;
    }
}
