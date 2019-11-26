<?php
namespace App\Functional\Accounts\Services;

trait Login
{
    use SendEmailOnLogin;

    public function Login()
    {
        $this->emailSend();
    }
}
