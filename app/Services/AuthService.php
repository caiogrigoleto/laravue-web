<?php

namespace App\Services;

use App\Exceptions\LoginInvalidExcept;

class AuthService
{
  public function login(string $email, string $password)
  {
    $login = [
      'email' => $email,
      'password' => $password
    ];
    
    if(!$token = auth()->attempt($login)){
      throw new LoginInvalidExcept('Erro ao autenticar na API!');
    }
    return [
      'access_token' => $token,
      'token_type' => 'Bearer',
    ];
  }
}