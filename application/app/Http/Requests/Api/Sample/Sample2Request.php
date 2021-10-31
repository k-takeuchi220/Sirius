<?php
namespace App\Http\Requests\Api\Sample;

use App\Http\Requests\Api\RequestBase;

class Sample2Request extends RequestBase
{
    public function rules()
    {
        return [
            'msg' => 'required|string',
            'name' => 'required|string',
        ];
    }

    public function validationData()
    {
        return array_merge($this->request->all(), [
            'name' => $this->name,
        ]);
    }
}