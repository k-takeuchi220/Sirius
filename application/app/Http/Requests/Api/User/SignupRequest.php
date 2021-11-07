<?php
namespace App\Http\Requests\Api\User;

use App\Http\Requests\Api\RequestBase;

class SignupRequest extends RequestBase
{
    public function rules()
    {
        return [
            'userId' => 'required|string',
            'email' => 'required|email',
            'passwd' => 'required|string',
        ];
    }
}