<?php
namespace App\Models;

use App\Models\Base\UsersModelBase;

class UsersModel extends UsersModelBase
{
    public function initialize(string $id, string $name, string $email, string $passwd): void
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $passwd;
    }
}
