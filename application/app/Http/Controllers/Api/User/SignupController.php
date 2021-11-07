<?php
namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\ControllerBase;
use App\Entities\User;

class SignupController extends ControllerBase
{
    public function main()
    {
        $userId = $this->request['userId'];
        $email = $this->request['email'];
        $passwd = $this->request['passwd'];

        // 登録の手間を省くため、初期名はuserIdにしておく
        $name = $userId;

        $user = new User();
        $user->create($userId, $name, $email, $passwd);
        $user->save();

        //TODO: メールアドレスの検証 
        // 形式チェックではなく、登録者本人であるか

        //TODO: userIdの検証
    }
}
