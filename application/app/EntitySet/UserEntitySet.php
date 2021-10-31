<?php

namespace App\EntitySet;

use App\Consts\ExitCodeConst;
use App\Entities\User;
use App\Exceptions\FinishProcess;
use App\Models\UserModel;

class UserEntitySet
{
    public static function getUserByName(string $name): ?User
    {
        $userModel = UserModel::where('name', $name)->first();
        if(empty($userModel)){
            throw new FinishProcess('User not found. name='.$name, ExitCodeConst::NOT_FOUND);
        }

        $user = new User($userModel);
        return $user;
    }
}
