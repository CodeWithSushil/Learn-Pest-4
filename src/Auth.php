<?php

declare(strict_types=1);

namespace App;

final class Auth
{
    public static function login(string $username, string $password): bool
    {
        return $username === 'admin' && $password === 'secret';
    }
}
