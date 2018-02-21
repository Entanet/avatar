<?php

namespace Entanet\Avatar;

class Avatar
{
    /**
     * Get the HTML image code.
     * @param string $email The email
     * @return string The HTML code.
     */
    public function src($email)
    {
        $hash = $this->hashEmail($email);
        return sprintf('https://avatar.enta.net/avatar/%s', $hash);
    }

    /**
     * Hash the email
     * @param string Email The email
     * @return string The hashed email
     */
    private function hashEmail($email)
    {
        return md5($email);
    }
}
