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
        $usersModel = UsersModel::where('name', $name)->first();
        if(empty($usersModel)){
            throw new FinishProcess('User not found. name='.$name, ExitCodeConst::NOT_FOUND);
        }

        $user = new User($usersModel);
        return $user;
    }
}
