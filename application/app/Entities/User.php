<?php

namespace App\Entities;

use App\Models\UsersModel;

class User
{
    protected $usersModel;

    public function __construct(?UsersModel $model = null)
    {
        if(empty($model)){
            $model = new UsersModel();
        }
        $this->usersModel = $model;
    }

    public function create(string $userId, string $name, string $email, string $passwd): void
    {
        $this->usersModel->initialize($userId, $name, $email, $passwd);
    }

    public function save(): void
    {
        $this->usersModel->save();
    }

    public function getName(): string
    {
        return $this->usersModel->getName();
    }

    public function getEmail(): string
    {
        return $this->usersModel->getEmail();
    }
}
