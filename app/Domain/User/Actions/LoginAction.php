<?php

namespace App\Domain\User\Actions;

use App\Domain\User\Models\User;

class LoginAction
{
    public static function handle($email): bool
    {
        return (User::whereEmail($email)->first()) ? true : false;
    }
}
