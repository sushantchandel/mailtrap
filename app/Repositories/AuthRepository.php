<?php

namespace App\Repositories;
use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;

class AuthRepository implements AuthRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }
    public function registerUser(array $data){
        return  User::create($data);
    }
}
