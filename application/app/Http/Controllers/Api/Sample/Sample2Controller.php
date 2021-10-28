<?php
namespace App\Http\Controllers\Api\Sample;

use App\Http\Controllers\Api\ControllerBase;

class Sample2Controller extends ControllerBase
{
    public function main()
    {
        $this->response['msg'] = $this->request['name'].'さん、'.$this->request['msg'];
    }
}
