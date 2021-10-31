<?php
namespace App\Http\Controllers\Api\Sample;

use App\Consts\ExitCodeConst;
use App\EntitySet\UserEntitySet;
use App\Http\Controllers\Api\ControllerBase;

class Sample4Controller extends ControllerBase
{
    public function main()
    {
        $name = $this->request['name'];

        $user = UserEntitySet::getUserByName($name);
        
        $this->response['name'] = $user->getName();
        $this->response['email'] = $user->getEmail();
    }
}
