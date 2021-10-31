<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Model
{
    protected $table = 'users';

    public function initialize(string $name, string $email, string $passwd): void
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $passwd;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
