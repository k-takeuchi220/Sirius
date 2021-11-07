<?php

namespace App\Entities;

use App\Models\UsersModel;

class User
{
    protected $UsersModel;

    public function __construct(?UsersModel $model = null)
    {
        if(empty($model)){
            $model = new UsersModel();
        }
        $this->UsersModel = $model;
    }

    public function create(string $userId, string $name, string $email, string $passwd): void
    {
        $this->UsersModel->initialize($userId, $name, $email, $passwd);
    }

    public function save(): void
    {
        $this->UsersModel->save();
    }

    public function getName(): string
    {
        return $this->UsersModel->getName();
    }

    public function getEmail(): string
    {
        return $this->UsersModel->getEmail();
    }
}
