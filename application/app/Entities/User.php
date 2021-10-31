<?php

namespace App\Entities;

use App\Models\UserModel;

class User
{
    protected $userModel;

    public function __construct(?UserModel $model = null)
    {
        if(empty($model)){
            $model = new UserModel();
        }
        $this->userModel = $model;
    }

    public function create(string $name, string $email, string $passwd): void
    {
        $this->userModel->initialize($name, $email, $passwd);
    }

    public function save(): void
    {
        $this->userModel->save();
    }

    public function getName(): string
    {
        return $this->userModel->getName();
    }

    public function getEmail(): string
    {
        return $this->userModel->getEmail();
    }
}
