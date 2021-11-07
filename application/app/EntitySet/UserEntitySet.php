<?php

namespace App\EntitySet;

use App\Consts\ExitCodeConst;
use App\Entities\User;
use App\Exceptions\FinishProcess;
use App\Models\UsersModel;

class UserEntitySet
{
    public static function getUserByName(string $name): ?User
    {
        $UsersModel = UsersModel::where('name', $name)->first();
        if(empty($UsersModel)){
            throw new FinishProcess('User not found. name='.$name, ExitCodeConst::NOT_FOUND);
        }

        $user = new User($UsersModel);
        return $user;
    }
}
