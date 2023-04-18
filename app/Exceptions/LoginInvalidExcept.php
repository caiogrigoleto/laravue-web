<?php

namespace App\Exceptions;

use Exception;

class LoginInvalidExcept extends Exception
{
    protected $message = 'Erro na autenticação';
    public function render()
    {
        return response()->json([
            'error'   =>  class_basename($this),
            'message' => $this->getMessage(),
        ], 401);
    }
}
