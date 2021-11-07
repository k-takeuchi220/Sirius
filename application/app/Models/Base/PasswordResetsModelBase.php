<?php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class PasswordResetsModelBase extends Model
{
    protected $table = 'password_resets';

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($passwordResets)
    {
        $this->email = $passwordResets;
    }
    public function getToken()
    {
        return $this->token;
    }

    public function setToken($passwordResets)
    {
        $this->token = $passwordResets;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($passwordResets)
    {
        $this->created_at = $passwordResets;
    }
}
