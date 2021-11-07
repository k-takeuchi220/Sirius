<?php
namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

class UsersModelBase extends Model
{
    protected $table = 'users';

    public function getId()
    {
        return $this->id;
    }

    public function setId($users)
    {
        $this->id = $users;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($users)
    {
        $this->name = $users;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($users)
    {
        $this->email = $users;
    }
    public function getEmailVerifiedAt()
    {
        return $this->email_verified_at;
    }

    public function setEmailVerifiedAt($users)
    {
        $this->email_verified_at = $users;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($users)
    {
        $this->password = $users;
    }
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($users)
    {
        $this->remember_token = $users;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($users)
    {
        $this->created_at = $users;
    }
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdatedAt($users)
    {
        $this->updated_at = $users;
    }
}
