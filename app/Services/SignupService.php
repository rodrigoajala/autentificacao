<?php

namespace App\Services;

use App\Models\User;

class SignupService
{
    public function create(array $user)
    {
        return User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => $user['password']
        ]);
    }
}
