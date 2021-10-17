<?php
namespace App\Http\Controllers\Api\Sample;

use App\Http\Controllers\Api\ControllerBase;

class Sample1Controller extends ControllerBase
{
    public function main()
    {
        $this->response['msg'] = 'Hello world';
    }
}
