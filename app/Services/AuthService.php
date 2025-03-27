<?php

namespace App\Services;

use App\Interfaces\AuthRepositoryInterface;

class AuthService
{
    /**
     * Create a new class instance.
     */
    protected $authrepository;
    public function __construct(AuthRepositoryInterface $authrepository)
    {
      $this->authrepository = $authrepository;
    }
    public function userRegister(array $data){
        return $this->authrepository->registerUser($data);
    }
}
