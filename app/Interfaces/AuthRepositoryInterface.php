<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    public function registerUser(array $data);
}
