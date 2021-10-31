<?php
namespace App\Http\Controllers\Api\Sample;

use App\Entities\User;
use App\Http\Controllers\Api\ControllerBase;

class Sample3Controller extends ControllerBase
{
    public function main()
    {
        $name = $this->request['name'];

        $user = new User();
        $user->create($name, 'aaa@aaa.com', 'pass');
        $user->save();
    }
}
