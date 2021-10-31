<?php
namespace App\Http\Requests\Api\Sample;

use App\Http\Requests\Api\RequestBase;

class Sample4Request extends RequestBase
{
    public function rules()
    {
        return [
            'name' => 'required|string',
        ];
    }
}